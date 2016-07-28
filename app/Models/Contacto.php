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
    public function motivo(){
        return $this->belongsTo('App\Models\Motivo');
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
