<?php 


$resolver = new SON\Resolver;

$resolver['PDO'] = function ($r){
    return  new \PDO('mysql:host=localhost;dbname=son','root',NULL,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
};

return $resolver;