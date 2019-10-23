<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function Integrantes (){
        
        return $this->hasMany('App\Integrantes');
    }
}
