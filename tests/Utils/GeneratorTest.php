<?php

namespace TLH\ReineRougeClient\Tests\Utils;

use PHPUnit\Framework\TestCase;
use TLH\ReineRougeClient\Model\User;
use TLH\ReineRougeClient\Utils\Generator;

class GeneratorTest extends TestCase
{
    public function testPrepareData()
    {
        $user = new User();
        $user
            ->setFirstName('Marc-André')
            ->setLastName('My Name')
            ->setEmail('email@domain.tld')
            ->setOptInDate(new \DateTime());

        $generator = new Generator();
        $built = $generator->prepareData($user);

        if (\method_exists($this, 'assertIsArray')) {
            $this->assertIsArray($built);
        } else {
            $this->assertInternalType('array', $built);
        }
        $this->assertEquals($built['firstname'], $user->getFirstName());
        $this->assertEquals($built['lastname'], $user->getLastName());
        if (\method_exists($this, 'assertIsString')) {
            $this->assertIsString($built);
        } else {
            $this->assertInternalType('string', $built['timestamp']);
        }
        $this->assertEquals($built['timestamp'], $user->getOptInDate()->format(Generator::OPTIN_DATE_FORMAT));
        $this->assertArrayNotHasKey('email', $built);
        $this->assertArrayHasKey('ip', $built);
        $this->assertArrayHasKey('urlcollection', $built);
    }

    public function testPrepareCompleteData()
    {
        $user = new User();
        $user
            ->setFirstName('Marc')
            ->setLastName('My Name')
            ->setEmail('email@domain.tld')
            ->setPhone('03 20 12 34 56')
            ->setZipCode('59800')
            ->setTitle('Mrs')
            ->setOptInDate(new \DateTime())
            ->setCustom1('custom 1')
            ->setCustom2(uniqid('', true));

        $generator = new Generator();
        $built = $generator->prepareData($user);

        /*
         * Old PHPUnit
         */
        if (\method_exists($this, 'assertIsArray')) {
            $this->assertIsArray($built);
        } else {
            $this->assertInternalType('array', $built);
        }
        $this->assertEquals($built['firstname'], $user->getFirstName());
        $this->assertEquals($built['lastname'], $user->getLastName());
        $this->assertEquals($built['phone'], $user->getPhone());
        $this->assertEquals($built['zipcode'], $user->getZipCode());
        $this->assertEquals($built['title'], $user->getTitle());
        $this->assertEquals($built['custom1'], $user->getCustom1());
        $this->assertEquals($built['custom2'], $user->getCustom2());
        if (\method_exists($this, 'assertIsString')) {
            $this->assertIsString($built);
        } else {
            $this->assertInternalType('string', $built['timestamp']);
        }
        $this->assertEquals($built['timestamp'], $user->getOptInDate()->format(Generator::OPTIN_DATE_FORMAT));
        $this->assertArrayNotHasKey('email', $built);
        $this->assertArrayHasKey('ip', $built);
        $this->assertArrayHasKey('urlcollection', $built);
    }

    public function testFailsAsNoOptInDate()
    {
        if (class_exists(\Error::class)) {
            $this->expectException(\Error::class);
        } elseif (class_exists(\Exception::class)) {
            $this->expectException(\Error::class);
        }

        $user = new User();
        $user
            ->setFirstName('Marc-André')
            ->setLastName('My Name')
            ->setEmail('email@domain.tld');

        $generator = new Generator();
        $generator->prepareData($user);
    }
}
