<?php

namespace TLH\ReineRougeClient\Model;

interface ResponseInterface
{
    public function isSuccessful();
    public function getMessage();
}
