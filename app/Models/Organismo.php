<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organismo extends Model
{
    public $timestamps = false;

    public function motivos()
    {
        return $this->hasMany('App\Models\Motivo');
    }
    public function contactos()
    {
        //return $this->hasMany('App\Models\Contacto');
        return $this->belongsToMany('App\Models\Contacto');
    }
}
