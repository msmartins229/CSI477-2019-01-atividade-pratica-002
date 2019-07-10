<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User extends Model
{
    //fillable
    protected $fillable = ['id','name','email','password','type'];
}
