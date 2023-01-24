<?php

require __DIR__."/vendor/autoload.php";
$router = require  __DIR__.'/router.php';

$object = $router->handler();

 (new SON\Resolver)->handler($object['class'],$object['action']);