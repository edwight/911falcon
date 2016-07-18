<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
	public $timestamps = false;
	
    public function contactos()
    {
        return $this->hasMany('App\Models\Contacto');
    }
    public function estados()
    {
        return $this->belongsTo('App\Models\Estado');
    }
    public function parroquias()
    {
        return $this->hasMany('App\Models\Parroquias');
    }
}