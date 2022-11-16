[![Build Status](https://travis-ci.org/tousleshoraires/reinerouge-client-php.svg?branch=master)](https://travis-ci.org/tousleshoraires/reinerouge-client-php)

# PHP Client for ReineRouge User API

PHP Client to interact with the ReineRouge API for user addition.

## Requirements ##

* [PHP 7.0 or higher](https://www.php.net/supported-versions.php)
* ext-curl for PHP
* ext-json for PHP

We higly recommand using PHP7.4 or newer.

## Installation ##

```
composer require tousleshoraires/reinerouge-client-php
```

There is no configuration required for this version.

## Usage ##

```
// Include the autoload.php
require 'vendor/autoload.php';

use TLH\ReineRougeClient\Client;
use TLH\ReineRougeClient\Model\User;
use TLH\ReineRougeClient\Utils\Generator;

$user = new User();
$user->setOptInDate(new DateTime($optInDate));
$user->setOptInUrl($optInUrl);
$user->setUid($userUid);

$client = new Client('https://agency.tracking.domain/coreg_(abc)/', new Generator());
/** @var \TLH\ReineRougeClient\Model\Response $answer */
$answer = $client->send($user);

// Process the answer as you wish
// bool   $answer->isSuccessful();
// string $answer->getMessage();
```
