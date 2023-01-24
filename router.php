<?php

use App\Controllers\UsersController;


$router = new SON\Router([]);

$router['/create'] = [
    'class'=>UsersController::class,
    'action'=>'create',
];


$router['/'] = [
    'class'=>UsersController::class,
    'action'=>'index',
];



return $router;