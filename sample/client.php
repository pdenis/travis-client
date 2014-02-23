<?php

include_once('../vendor/autoload.php');

$repo = new \Snide\Travis\Model\Repository('pdenis/memetor');

$client = new \Snide\Travis\Client();
$client->fetchRepository($repo);

die(print_r($repo));