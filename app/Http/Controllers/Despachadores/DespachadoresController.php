<?php

namespace App\Http\Controllers\Despachadores;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Models\User;
use App\Models\Caso;
use App\Models\Direccion;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DespachadoresController extends Controller
{
    public function index()
    {
    	$contacto = Contacto::all();
        /*
        foreach ($contacto as $contactos) {
            print($contactos->id);
            print($contactos->organismo->siglas);
        }
        */
        return view('despachadores.index',compact('contacto'));
    }
    public function show($id)
    {
        $contacto = Contacto::find($id);
        $user = Auth::id();
        $casos = Caso::where('user_id',$user)->orderBy('id','desc')->first();
        return view('despachadores.Advanced',compact('contacto','user','casos'));
    }
    public function store(Request $request)
    {
        
        //$user = $request->input('user_id');//required
        $user = Auth::id();
        $users = User::find($user);
        //$date = Carbon::now(); //2015-01-01 00:00:00

        $direccionh = $request->input('direccionh');//required
        $observacion = $request->input('observacion');//required
        $contactoh = $request->input('contactoh');//required
        $status = $request->input('status');//required
       // return $statush;  //defaut  0


        //$fecha = Carbon::now()->toDateTimeString();
        $fecha = Carbon::today();
        $submit = $request->input('submit');//required
        //$llamadas = Llamada::where('created_at', $fecha)->first();
        //$llamadas = Llamada::whereDay('created_at', '=', date('d'));
        $casos = Caso::where('user_id','=',$user)->whereDate('created_at', '=', Carbon::today()->toDateString())->first();
        //dd($llamadas);
        //return $llamadas->id;
        if ($casos) {
            //$llamada = Llamada::find();
            switch ($submit) {
                case 'efectivo':
                    Caso::where("user_id", $user)->increment("efectivos");
                    $users->casos()->save($casos);
                    break;
                case 'sinefecto':
                    Caso::where("user_id", $user)->increment("sinefecto");
                    $users->casos()->save($casos);
                    break;
                case 'noatendido':
                    //$llamadas->increment('quejas');
                    Caso::where("user_id", $user)->increment("noatendido");
                    $users->casos()->save($casos);
                    break;
                case 'repetido':                        
                    Caso::where("user_id", $user)->increment("repetido");
                    $users->casos()->save($casos);
                    break;
                case 'apoyo':                        
                    Caso::where("user_id", $user)->increment("apoyo");
                    $users->casos()->save($casos);
                    break;
                default:
                    # code...
                    break;
            }
        }
        else{

            $caso = new Caso;
            //Llamada::create(['registradas' => 0,'falsas' => 0,'quejas' => 0]);
            switch ($submit) {
                case 'efectivo':
                   // $suma += 1
                    $caso->efectivos = 1;
                    $users->casos()->save($caso);
                    break;
                case 'sinefecto':
                    $llamada->sinefecto = 1;
                    $users->casos()->save($caso);
                    return redirect('admin/despacho');
                    break;
                case 'noatendido':
                    $caso->noatendido = 1;
                    $users->casos()->save($caso);
                    break;
                case 'repetido':                      
                    $caso->repetido = 1;
                    $users->casos()->save($caso);
                    break;
                case 'apoyo':                      
                    $caso->apoyo = 1;
                    $users->casos()->save($caso);
                    break;

                default:
                    # code...
                    break;
            }
            
            // return 'false '.$llamadas->created_at;
        }

        //return $contactoh;

        if($status)
        {
           return $status;
        }
        else{
            $contactos = Contacto::find($contactoh);
            $contactos->status ='1';
            $contactos->save();

            //$contatos->where('user'observacion = $observacion;

            $users = User::find($user);
            //$users->contactos()->save($contacto);
            $users->contactos()->attach($contactos);

            //$users = User::find($user);
            //$users->contactos()->attach($contacto);
            //$estado = Estado::find($estado);
            

            $direccion = Direccion::find($direccionh);
            $direccion->observacion = $observacion;
            //$direccion->preferencia = $p_referencia;
            $direccion->save();
            //$direccion->contactos()->save($contacto);
            
            //$organismo = Organismo::find($organismo);
            //$organismo->contactos()->attach($contacto);
            

            return redirect('admin/despacho');
        }
    
    }
    public function update(Request $request)
    {

        $direccion = Direccion::find($direccionh);
        $direccion->observacion = $observacion;
        $direccion->save();
            
    }
}
