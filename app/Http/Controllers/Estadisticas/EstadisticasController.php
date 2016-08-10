<?php

namespace App\Http\Controllers\Estadisticas;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Contacto;
use App\Models\Motivo;
use App\Models\Organismo;
use Carbon\Carbon;
use DateTime;
use App\Models\Llamada;
use App\Models\Caso;
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
    	//tadas
    	$organismos = Organismo::has('contactos')->get(); 
    	foreach ($organismos as $organismo) {
    		print "<ul> id".$organismo->id." nombre ".$organismo->siglas." </ul> <br>";
    			print ' <li> tiene '.$organismo->contactos->count().' casos ';
    			//foreach ($organismo->contactos as $organismosc) {
    			//	print ' <li> hay '.$organismosc->count().' casos de </li> ';
    			//}
    		  //return  'hay '.$organismo->contactos()->count().' casos de '.$motivo->motivo.' ';
    	}
    	
	}
	public function organismosHoy()
    {
    	//hoy
    	//$organismos = Organismo::all();
        $organismos = Organismo::has('contactos')->get(); 
        $org = $organismos->contactos->where('fecha_at','>=', Carbon::today())->get();
    	if($organismos){
    		foreach ($organismos as $organismo) {
    		print "<ul> id".$organismo->id." nombre ".$organismo->siglas." </ul> <br>";
 
    			print ' <li> tiene '.$organismo->contactos->count().' casos ';
    			//foreach ($organismo->contactos as $organismosc) {
    			//	print ' <li> hay '.$organismosc->count().' casos de </li> ';
    			//}
    		  //return  'hay '.$organismo->contactos()->count().' casos de '.$motivo->motivo.' ';
    		}
    	}
    	else{
    		print('no hay organismos');
    	}
    	
	}
    public function llamadasHoy()
    {
        return 'sfsf';    
    }
    public function casosHoy()
    {
        $efectivos  = $sinefecto = $repetida = 0;
        //hoy true
        //$llamadas = Llamada::where('updated_at','>=', Carbon::today())->get(); 
        $casos = Caso::where('created_at','>=', Carbon::today())->get(); 
        //return $llamadas->id;
        foreach ($casos as $caso) {
            print "<ul> id ".$caso->id." efectivos ".$caso->efectivos." quejas ".$caso->sinefecto." registradas ".$caso->repetida." usuarios ".$caso->user->name."</ul><br>";
                //foreach ($llamada->contactos as $organismosc) {
                //  print ' <li> hay '.$organismosc->count().' casos de </li> ';
                //}
              //return  'hay '.$llamada->falsas->count().'  ';
            $efectivos += $caso->efectivos;
            $sinefecto += $caso->sinefecto;
            $repetida += $caso->repetida;
        } 
        print 'total de llamadas'.$casos->count().' efectivas: '.$efectivos.' sin efecto '.$sinefecto.' repetidas '.$repetida.'<br>';
    }
    public function casosFecha()
    {
        $efectivos  = $sinefecto = $repetida = 0;
        $fecha = '';
        //hoy
        //$llamadas = Llamada::where('updated_at','>=', Carbon::today())->get(); 
        $casos = Caso::where('created_at','>=', $fecha)->get(); 
        //return $llamadas->id;
        foreach ($casos as $caso) {
            print "<ul> id ".$caso->id." efectivos ".$caso->efectivos." quejas ".$caso->sinefecto." registradas ".$caso->repetida." usuarios ".$caso->user->name."</ul><br>";
                //foreach ($llamada->contactos as $organismosc) {
                //  print ' <li> hay '.$organismosc->count().' casos de </li> ';
                //}
              //return  'hay '.$llamada->falsas->count().'  ';
            $efectivos += $caso->efectivos;
            $sinefecto += $caso->sinefecto;
            $repetida += $caso->repetida;
        } 
        print 'total de llamadas'.$casos->count().' efectivas: '.$efectivos.' sin efecto '.$sinefecto.' repetidas '.$repetida.'<br>';
    }
    public function llamadasycasos()
    {
        $efectivos  = $sinefecto = $repetida = 0;
        $fecha = '';
        //hoy
        //$llamadas = Llamada::where('updated_at','>=', Carbon::today())->get(); 
        $users = User::where('created_at','>=', Carbon::today())->get(); 
        //return $llamadas->id;
        foreach ($uses as $user->llamadas){
            
        } 
        print 'total de llamadas'.$casos->count().' efectivas: '.$efectivos.' sin efecto '.$sinefecto.' repetidas '.$repetida.'<br>';
    }
    public function municipiosMotivos()
    {
    
        //motivos por municipios
        //$llamadas = Llamada::where('updated_at','>=', Carbon::today())->get(); 
        $municipios = Contacto::where('municipio_id','1')->where('motivo_id','6')->get(); 
        $motivos = Motivo::find('6');
        //return $llamadas->id;
        print 'hay '.$municipios->count().' casos de '.$motivos->motivo.'<br>';
    }
}
