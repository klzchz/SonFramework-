<?php

use App\Models\User;
use SON\Model;

require __DIR__."/vendor/autoload.php";
$router = require  __DIR__.'/router.php';



$object = $router->handler();


$controller = new $object['class'](new SON\Model);



 $action =$object['action'];

 echo $controller->$action();