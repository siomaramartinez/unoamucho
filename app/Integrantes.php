<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrantes extends Model
{
    public function Equipos(){
    return $this->belongsTo(Equipos::class);
    }
}
