<?php


$dotenv = new Dotenv\Dotenv(BASE_PATH);
$dotenv->load();

$app= new \Slim\App([
    
    "settings" => [
        
        'displayErrorDetails'=>getenv('APP_DEBUG') === 'TRUE',

        'db'=>[

            'driver'=> getenv('DRIVER'),
            'host'=>getenv('HOST'),
            'database'=>getenv('DATABASE'),
            'username'=>getenv('USERNAME'),
            'password'=>getenv('PASSWORD')

        ]
    ]
    
    
    ]);
