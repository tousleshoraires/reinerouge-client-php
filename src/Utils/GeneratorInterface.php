<?php

namespace TLH\ReineRougeClient\Utils;

use TLH\ReineRougeClient\Model\UserInterface;

interface GeneratorInterface
{
    public function prepareData(UserInterface $user);
}
