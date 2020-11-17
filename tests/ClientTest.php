<?php

namespace TLH\ReineRougeClient\Tests;

use TLH\ReineRougeClient\Client;
use PHPUnit\Framework\TestCase;
use TLH\ReineRougeClient\Tests\Mock\NullGenerator;
use TLH\ReineRougeClient\Utils\Generator;

class ClientTest extends TestCase
{
    /**
     * @test
     * @group Client
     */
    public function injectGenerator()
    {
        $client = new Client('https://example.com/coreg_(abc)', new Generator());
        self::assertInstanceOf(Client::class, $client);
    }

    /**
     * @test
     * @group Client
     */
    public function acceptInterface()
    {
        $client = new Client('https://example.com/coreg_(abc)', new NullGenerator());
        self::assertInstanceOf(Client::class, $client);
    }
}
