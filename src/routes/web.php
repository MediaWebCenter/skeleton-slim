<?php

Use Src\Models\User;


$app->get('/',function() {
    
   
   $users= $this->db->table('users')->first();
  

   $users= \Src\Models\User::get();
 
   
   foreach($users as $user){

       echo $user->username, '<br />';
   }

});



$app->get('/guzzle',function() use($container) {
    
    $client = $container['httpClient'];
    $res = $client->request('GET', 'http://opendata.euskadi.eus/contenidos/ds_recursos_turisticos/restaurantes_asador_sidrerias/opendata/restaurantes.json');
    $deco= $res->getBody();
    echo $deco;
 
 });
