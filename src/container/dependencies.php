<?php

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

$container = $app->getContainer();
  
    //usar capsule donde queramos, fuera y llamarlo con: use ($capsule)
    $capsule= new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();

/********************* Dependencias inyectadas al container **************************/

//Conexion DB eloquent
$container['db'] = function($c) use ($capsule){
    return $capsule;
};
//Guzzle HTTP client
$container['httpClient'] = function() {
    $guzzle = new Client;
    return $guzzle;
};