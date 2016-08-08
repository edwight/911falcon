<?php

namespace App\Http\Controllers\Operadores;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Models\Contacto;
use App\Models\User;
use App\Models\Estado;
use App\Models\Organismo;
use App\Models\Motivo;
use App\Models\Municipio;
use App\Models\Llamada;
use App\Models\Parroquia;
use App\Models\Direccion;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class RecepcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $contactos = Contacto::all();
        //$user = User::all(); 
        return view('operadores.index', compact('contactos','user'));
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$user = User::find(1);
        //return $user->id;
        //$categorylist = Category::all();
        //return view('admin.contacto.create', compact('user'));

        $municipios = Municipio::all();
        $parroquias = Parroquia::all();
        $organismos = Organismo::all();
        $motivos = Motivo::all();
        $estados = Estado::all();

        $user = Auth::id();
        $llamadas = Llamada::where('user_id',$user)->orderBy('id','desc')->first();
      
        return view('operadores.Advanced', compact('user','municipios','organismos','motivos','estados','parroquias','llamadas'));
        //return view('operadores.create', compact('user','municipio','organismo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::id();
        $users = User::find($user);
        //$fecha = Carbon::now()->toDateTimeString();
        $fecha = Carbon::today();
        $submit = $request->input('submit');//required
        //$llamadas = Llamada::where('created_at', $fecha)->first();
        //$llamadas = Llamada::whereDay('created_at', '=', date('d'));
        $llamadas = Llamada::where('user_id','=',$user)->whereDate('created_at', '=', Carbon::today()->toDateString())->first();
        //dd($llamadas);
        //return $llamadas->id;
        if ($llamadas) {
            //$llamada = Llamada::find();
            switch ($submit) {
                case 'registrada':
                    //$llamadas->increment('registradas');
                    //$llamadas->registradas = +1;
                    Llamada::where("user_id", $user)->increment("registradas");
                    //$llamada->registradas = 1;
                    $users->llamadas()->save($llamadas);
                    break;
                case 'falsas':
                    //$llamadas->increment('falsas');
                    Llamada::where("user_id", $user)->increment("falsas");
                    $users->llamadas()->save($llamadas);
                    break;
                case 'quejas':
                    //$llamadas->increment('quejas');
                    Llamada::where("user_id", $user)->increment("quejas");
                    $users->llamadas()->save($llamadas);
                    break;
                case 'informativas':                        
                    Llamada::where("user_id", $user)->increment("informativas");
                    $users->llamadas()->save($llamadas);
                    break;

                default:
                    # code...
                    break;
            }
        }
        else{

            $llamada = new Llamada;
            //Llamada::create(['registradas' => 0,'falsas' => 0,'quejas' => 0]);
            switch ($submit) {
                case 'registrada':
                   // $suma += 1
                    $llamada->registradas = 1;
                    $users->llamadas()->save($llamada);
                    break;
                case 'falsas':
                    $llamada->falsas = 1;
                    $users->llamadas()->save($llamada);
                    return redirect('admin/recepcion/create');
                    break;
                case 'quejas':
                    $llamada->quejas = 1;
                    $users->llamadas()->save($llamada);
                    break;
                case 'informativas':                      
                    $llamada->informativas = 1;
                    $users->llamadas()->save($llamada);
                    break;

                default:
                    # code...
                    break;
            }
            
            // return 'false '.$llamadas->created_at;
        }
        
        $this->validate($request, [
            'telefono' => 'required|max:25|unique:contactos',
            'nombre' => 'required',
            'email' => 'required|unique:contactos',
            'motivos' => 'required',
            'direccion' => 'required',
            ]);
        
       //return $request->all();

        $phone = $request->input('telefono');//required
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $apellido = $request->input('apellido');

        //$user = $request->input('user_id');//required
        $user = Auth::id();
        $motivo = $request->input('motivos');//required
        $municipio = $request->input('municipio');
        $parroquia =  $request->input('parroquia');
        $ubicacion = $request->input('direccion');//required
        $p_referencia = $request->input('p_referencia');
        $descripcion = $request->input('descripcion');
        $organismo = $request->input('organismo');//required
        $estado = $request->input('estado');//required

        $date = Carbon::now(); //2015-01-01 00:00:00
        $duracion = $request->input('duraccion');

        $contacto = New Contacto;
        $contacto->nombre = $nombre;
        $contacto->apellido = $apellido;
        $contacto->email = $email;
        $contacto->telefono = $phone;
        $contacto->status = 'false';
        $contacto->type = '171';
        $contacto->fecha_at = $date;
        //$contacto->direccion = $direccion;

        $contacto->save();
        
        //$users = User::find($user);
		//$users->contactos()->save($contacto);

        $users = User::find($user);
        $users->contactos()->attach($contacto);
        //$estado = Estado::find($estado);
        
        
        $estados = Estado::find($estado);
        $estados->contactos()->save($contacto);

        $municipios = Municipio::find($municipio);
        $municipios->contactos()->save($contacto);

        $parroquias = Parroquia::find($parroquia);
        $parroquias->contactos()->save($contacto);

        $motivos = Motivo::find($motivo);
        $motivos->contactos()->save($contacto);

        $direccion = New Direccion;
        $direccion->ubicacion = $ubicacion;
        $direccion->preferencia = $p_referencia;
        $direccion->save();

        $direccion->contactos()->save($contacto);
        
        $organismo = Organismo::find($organismo);
        $organismo->contactos()->attach($contacto);
 


/*
        $llamadas = New Llamada;
        $llamadas->descripcion = $descripcion;
        $llamadas->quejas = '25';
        $llamadas->falsas = '25';
        $llamadas->registradas = '25';
        $llamadas->contactos()->save($contacto)
        
/*
        $direccion = New Direccion;
        $direccion->ubicacion = $ubicacion;
        $direccion->preferencia = $p_referencia;
        $direccion->save();
*/
        //return $motivos.' '.$descripcion;
       /*
       
       

*/     
        //$motivo = New Motivo;
        //$motivo->motivo = '$motivos';
        //$motivo->descripcion = '$descripcion';
        //$motivo->save();

        //$contacto->motivos()->attach($motivos);
        //$direccion->motivos->attach($direccion);
        //$contacto->direcciones()->save($direcciones);

        return redirect('admin/recepcion/create');
         /*
        $rules = [
            'phone' => 'required|numeric',
            'name' => 'required|string',
            'direccion' => 'required',
            'descripcion' => 'required',  
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails())
        {
            // It failed
            Redirect::back()->withErrors($validator->messages())->withInput();
        }
        else{
            return 'correcto';
        }
       
        $validator = Validator::make($request->all(), [
            'phone' => 'required|numeric',
            'name' => 'required|string',
            'direccion' => 'required',
            'descripcion' => 'required',     
        ]);
        if ($validator->fails()) {
            return redirect('contacto/create')
                ->withErrors($validator)
                ->withInput();
        }
        else{
            return 'correcto';
        }
    */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacto = Contacto::find($id);
        return view('admin.contacto.show', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
