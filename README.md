scrutinizer-client
==================

PHP Client for Travis API

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