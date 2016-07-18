<?php

namespace App\Http\Controllers\Operadores;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Contacto;
use App\Models\User;
use App\Models\Estado;
use App\Models\Organismo;
use App\Models\Motivo;
use App\Models\Municipio;
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
        //$contactos = Contacto::all();
       //return view('operadores.index', compact('user'));
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

        $user = User::findOrFail(1);
        $municipio = Municipio::all();
        $organismo = Organismo::all();
        return view('operadores.create', compact('user','municipio','organismo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return $request->all();
        $this->validate($request, [
            'telefono' => 'required|max:25',
            'nombre' => 'required',
            'cedula' => 'required',
            'motivos' => 'required',
            'direccion' => 'required',
            ]);

       //return $request->all();

        $phone = $request->input('telefono');//required
        $nombre = $request->input('nombre');
        $cedula = $request->input('cedula');
        $apellido = $request->input('apellido');

        $user = $request->input('user_id');//required
        $motivos = $request->input('motivos');//required
        $municipio = $request->input('municipio');
        $parroquia =  $request->input('parroquia');
        $ubicacion = $request->input('direccion');//required
        $p_referencia = $request->input('p_referencia');
        $descripcion = $request->input('descripcion');
        $organismo = $request->input('organismo');//required

        $date = Carbon::now(); //2015-01-01 00:00:00
        $duracion = $request->input('duraccion');

        $contacto = New contacto;
        $contacto->nombre = $nombre;
        $contacto->apellido = $apellido;
        $contacto->cedula = $cedula;
        $contacto->telefono = $phone;
        $contacto->status = 'false';
        $contacto->type = '171';
        $contacto->fecha_at = $date;
        //$contacto->direccion = $direccion;

        $contacto->save();
        
        $users = User::find($user);
		$users->contactos()->save($contacto);

        //$estado = Estado::find($estado);

        
        $municipios = Municipio::find($municipio);
        $municipios->contactos()->save($contacto);

        $direccion = New Direccion;
        $direccion->ubicacion = $ubicacion;
        $direccion->preferencia = $p_referencia;
        $direccion->save();
        $direccion->contactos()->save($contacto);
        
        $organismo = Organismo::find($organismo);
        $organismo->contactos()->save($contactos);

        


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

        return redirect('recepcion/create');
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
