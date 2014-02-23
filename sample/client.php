<?php

/*
 * This file is part of the Snide travis-client package.
 *
 * (c) Pascal DENIS <pascal.denis.75@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include_once('../vendor/autoload.php');

$repo = new \Snide\Travis\Model\Repository('pdenis/memetor');

$client = new \Snide\Travis\Client();
$client->fetchRepository($repo);

die(print_r($repo));