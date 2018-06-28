<?php

namespace Src\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table ='users';

    protected $filliable = ['username','first_name', 'last_name'];

}