<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
   public $timestamps = false;
   
   public function contactos()
    {
        return $this->hasMany('App\Models\Contacto');
    }
}
