<?php

namespace App;
use App\Test;
use App\Procedure;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //fillable
    protected $fillable =['id', 'user_id', 'procedure_id', 'date'];

    public function user(){
      return $this->belongsTo('\App\User','user_id');
    }
    public function procedure(){
      return $this->belongsTo('\App\Procedure','procedure_id');
    }
}
