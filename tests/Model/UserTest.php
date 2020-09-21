<?php

namespace TLH\ReineRougeClient\Tests\Model;

use PHPUnit\Framework\TestCase;
use TLH\ReineRougeClient\Model\User;

class UserTest extends TestCase
{
    /**
     * @var User
     */
    private $user;

    public function testGetOptInUrl()
    {
        $reference = 'https://example.com/registration';

        $this->user->setOptInUrl($reference);

        $this->assertEquals($reference, $this->user->getOptInUrl());
    }

    public function testGetTitle()
    {
        $reference = 'Mr';

        $this->user->setTitle($reference);

        $this->assertEquals($reference, $this->user->getTitle());
    }

    public function testGetBirthDate()
    {
        $reference = '2000-01-31';

        $this->user->setBirthDate($reference);

        $this->assertEquals($reference, $this->user->getBirthDate());
    }

    public function testGetFirstName()
    {
        $reference = 'Pierre-André';

        $this->user->setFirstName($reference);

        $this->assertEquals($reference, $this->user->getFirstName());
    }

    public function testGetZipCode()
    {
        $reference = '59800';

        $this->user->setZipCode($reference);

        $this->assertEquals($reference, $this->user->getZipCode());
    }

    public function testGetOptInDate()
    {
        $reference = new \DateTime();

        $this->user->setOptInDate($reference);

        $this->assertEquals($reference, $this->user->getOptInDate());
    }

    public function testOptInDateFails()
    {
        $this->expectException(\Exception::class);

        $reference = 'abcdef';

        $this->user->setOptInDate($reference);
    }

    public function testGetEmail()
    {
        $reference = 'email@domain.tld';

        $this->user->setEmail($reference);

        $this->assertEquals($reference, $this->user->getEmail());
    }

    public function testGetLastName()
    {
        $reference = 'My Name';

        $this->user->setLastName($reference);

        $this->assertEquals($reference, $this->user->getLastName());
    }

    public function testGetPhone()
    {
        $reference = '03 20 12 34 56';

        $this->user->setPhone($reference);

        $this->assertEquals($reference, $this->user->getPhone());
    }

    public function testGetUid()
    {
        $reference = uniqid('', true);

        $this->user->setOptInUrl($reference);

        $this->assertEquals($reference, $this->user->getOptInUrl());
    }

    public function setUp()
    {
        $this->user = new User();
    }
}
