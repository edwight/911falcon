<?php

namespace App\Http\Controllers\Estadisticas;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Contacto;
use Carbon\Carbon;
use DateTime;
class EstadisticasController extends Controller
{
	public function fecha()
    {

    //$contactos = Contacto::where('fecha_at','2015-08-12')->get(); 
    //$contactos = Contacto::where('fecha_at', '>', Carbon::now())->get();
    //$contactos = Contacto::whereBetween('fecha_at', array(new DateTime('2016-02-22'), new DateTime('2015-09-12')))->get();
    	
    //$contactos = Contacto::where('cedula', '4556129365')->get();
    $contactos = Contacto::where('fecha_at','<','2015-10-04')->get();
	//$contactos = Contacto::orderBy('id', 'desc')->get();
	    foreach($contactos as $contacto){
	    	print('<br>'.$contacto->id.' | '.$contacto->fecha_at);
	    }

	}
	public function user()
    {

    //$contactos = Contacto::where('fecha_at','2015')->where('fecha_at', '2016')->get(); 
    //$contactos = Contacto::where('fecha_at', '>', Carbon::now())->get();
    $conctatos = Contacto::whereBetween('fecha_at', array(new DateTime('2016-02-22'), new DateTime('2015-09-12')));

	//$contactos = Contacto::all();
	    foreach($conctatos as $contacto){
	    	print('<br>'.$contacto->id);
	    }

	}

}
