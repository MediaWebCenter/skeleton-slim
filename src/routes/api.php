<?php


$app->get('/v1/api',function() {
    
   
    $users= $this->db->table('users')->first();
   
 
    $users= \Src\Models\User::get();
  
    
    foreach($users as $user){
 
        echo $user->username, '<br />';
    }

});