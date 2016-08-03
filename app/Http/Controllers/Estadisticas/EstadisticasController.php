<?php

namespace App\Http\Controllers\Estadisticas;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Contacto;
use App\Models\Motivo;
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
	public function motivos()
    {

    //$contactos = Contacto::where('fecha_at','2015')->where('fecha_at', '2016')->get(); 
    //$contactos = Contacto::where('fecha_at', '>', Carbon::now())->get();
    //$conctatos = Contacto::all();
    //$motivos = Motivo::find(15);
    $motivo = Motivo::find(1);
    return  'hay '.$motivo->contactos()->count().' casos de '.$motivo->motivo.' ';
	//$contactos = Contacto::all();
	    foreach($motivos->contactos() as $contacto){
	    	print('<br>'.$contacto->id);
	    }

	}
	public function municipios()
    {

   	$contactos = Contacto::where('municipio_id','5')->where('motivo_id', '15')->get(); 

   	foreach($contactos as $contacto){
	    	print('<br>'.' hay '.$contacto->count().' casos de '.$contacto->motivo->motivo.' en '.$contacto->municipio->municipio.' ');
	    }
	} 

	public function organismos()
    {

   	//$contactos = Contacto::where('organismos','5')->where('', '15')->get(); 
    	
	}

}
