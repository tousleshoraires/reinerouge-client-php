<?php
/**
 * @package TLH\ReineRougeClient\Tests\Mock
 * User: jdevergnies
 * Date: 17/11/2020
 * Time: 17:54
 */

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
