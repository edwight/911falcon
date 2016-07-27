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
    public function direccion(){
        return $this->belongsTo('App\Models\Direccion');
    }
    public function organismo(){
        return $this->belongsTo('App\Models\Organismo');
    }
     public function municipio(){
        return $this->belongsTo('App\Models\Municipio');
    }
    public function estado(){
        return $this->belongsTo('App\Models\Estado');
    }
}
