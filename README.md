scrutinizer-client
==================

PHP Client for Travis API

[![Build Status](https://travis-ci.org/pdenis/travis-client.png)](https://travis-ci.org/pdenis/travis-client)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/pdenis/travis-client/badges/quality-score.png?s=951d12fd632e8e8f96280cd2fc2c54a6a5b5de13)](https://scrutinizer-ci.com/g/pdenis/travis-client/)
[![Code Coverage](https://scrutinizer-ci.com/g/pdenis/travis-client/badges/coverage.png?s=d31b8500d1dafb4be39595928d9346cb112c0480)](https://scrutinizer-ci.com/g/pdenis/travis-client/)

## Installation

### Installation by Composer

If you use composer, add travis-client library as a dependency to the composer.json of your application

```php
    "require": {
        ...
        "snide/php-travis-client": "dev-master"
        ...
    },

```

## Usage

### Getting Repository info :

```php
<?php

include_once('../vendor/autoload.php');

use Snide\Travis\Client;
use Snide\Travis\Model\Repository;

$client = new Client();
$project = new Repository('pdenis/memetor');
$project = $client->fetchRepository($repository); // Fetch repository & builds
$project = $client->fetchProject($repository, false); // Fetch repository without builds

```
