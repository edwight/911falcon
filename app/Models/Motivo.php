<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{
	protected $table = 'motivos';
	public $timestamps = false;

	public function __toString()
    {
        return $this->value;
    }
    
    public function toString()
    {
        return $this->value;
    }

    public function contactos(){
   		return $this->belongsToMany('App\Models\Contacto','contacto_direccion_motivo'); 
   	}
 
   	public function direcciones(){
    	return $this->belongsToMany('App\Models\Direccion');
    	}

}
