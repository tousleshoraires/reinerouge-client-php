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
        $this->setUpLegacy();
        $reference = 'https://example.com/registration';

        $this->user->setOptInUrl($reference);

        $this->assertEquals($reference, $this->user->getOptInUrl());
    }

    public function testGetTitle()
    {
        $this->setUpLegacy();
        $reference = 'Mr';

        $this->user->setTitle($reference);

        $this->assertEquals($reference, $this->user->getTitle());
    }

    public function testGetBirthDate()
    {
        $this->setUpLegacy();
        $reference = '2000-01-31';

        $this->user->setBirthDate($reference);

        $this->assertEquals($reference, $this->user->getBirthDate());
    }

    public function testGetFirstName()
    {
        $this->setUpLegacy();
        $reference = 'Pierre-André';

        $this->user->setFirstName($reference);

        $this->assertEquals($reference, $this->user->getFirstName());
    }

    public function testGetZipCode()
    {
        $this->setUpLegacy();
        $reference = '59800';

        $this->user->setZipCode($reference);

        $this->assertEquals($reference, $this->user->getZipCode());
    }

    public function testGetOptInDate()
    {
        $this->setUpLegacy();
        $reference = new \DateTime();

        $this->user->setOptInDate($reference);

        $this->assertEquals($reference, $this->user->getOptInDate());
    }

    public function testOptInDateFails()
    {
        $this->setUpLegacy();
        $this->expectException(\TypeError::class);

        $reference = 'abcdef';

        $this->user->setOptInDate($reference);
    }

    public function testGetEmail()
    {
        $this->setUpLegacy();
        $reference = 'email@domain.tld';

        $this->user->setEmail($reference);

        $this->assertEquals($reference, $this->user->getEmail());
    }

    public function testGetLastName()
    {
        $this->setUpLegacy();
        $reference = 'My Name';

        $this->user->setLastName($reference);

        $this->assertEquals($reference, $this->user->getLastName());
    }

    public function testGetPhone()
    {
        $this->setUpLegacy();
        $reference = '03 20 12 34 56';

        $this->user->setPhone($reference);

        $this->assertEquals($reference, $this->user->getPhone());
    }

    public function testGetUid()
    {
        $this->setUpLegacy();
        $reference = uniqid('', true);

        $this->user->setOptInUrl($reference);

        $this->assertEquals($reference, $this->user->getOptInUrl());
    }

    /**
     * Older PHP version did not allow :void as return type hint.
     * Hence using setUp() generates an error with some version of PHPUnit.
     *
     * @return void
     */
    public function setUpLegacy()
    {
        $this->user = new User();
    }
}
