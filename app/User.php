<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //fillable
    protected $fillable = ['id','name','email','password','type'];
}
