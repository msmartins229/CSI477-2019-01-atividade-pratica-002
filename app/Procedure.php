<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Procedure extends Model
{
    //fillable
    protected $fillable = ['id','name','price','user_id'];

    public function user(){
      return $this->belongsTo('\App\User');
    }
}
