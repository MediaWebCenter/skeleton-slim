<?php



$container = $app->getContainer();
  
    //usar capsule donde queramos, fuera y llamarlo con: use ($capsule)
    $capsule= new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();


$container['db'] = function($c) use ($capsule){
  
    return $capsule;

};