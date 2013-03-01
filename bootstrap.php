<?php

require 'vendor/autoload.php';

global $app, $assets;
$app = new \Slim\Slim();

$assets = new Xiphe\SlimAssets($app);
$assets->basePath = __DIR__;