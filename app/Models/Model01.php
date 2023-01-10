<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Model01 extends Model
{
    protected $table ='model';
   
    public function relUser(){
       return $this->hasOne('App\User', 'id', 'id_user');
 }
}