<?php

namespace TLH\ReineRougeClient\Tests\Mock;

use TLH\ReineRougeClient\Model\UserInterface;
use TLH\ReineRougeClient\Utils\GeneratorInterface;

class NullGenerator implements GeneratorInterface
{
    public function prepareData(UserInterface $user)
    {
        return [];
    }
}
