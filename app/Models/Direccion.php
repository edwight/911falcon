<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
	protected $table = 'direcciones';
	public $timestamps = false;

  	public function motivos(){
        return $this->belongsToMany('App\Models\Motivo');
    }
    public function direcciones(){
        return $this->belongsToMany('App\Models\Direccion'); 
    }
}
