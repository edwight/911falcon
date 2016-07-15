<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public $timestamps = false;

   	public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function motivos(){
        return $this->belongsToMany('App\Models\Motivo','contacto_direccion_motivo');
    }
    public function direcciones(){
        return $this->belongsToMany('\App\Models\Direccion');
    }

}
