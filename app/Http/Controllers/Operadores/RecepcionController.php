<?php

namespace App\Http\Controllers\Operadores;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Contacto;
use App\Models\User;
use App\Models\Motivo;
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
        return view('operadores.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'telefono' => 'required|max:25',
            'nombre' => 'required',
            'cedula' => 'required',
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
        $duracion = $request->input('diraccion');

        return $duraccion;

        $contacto = New contacto;
        $contacto->nombre = $nombre;
        $contacto->apellido = $apellido;
        $contacto->cedula = $cedula;
        $contacto->phone = $phone;
        //$contacto->direccion = $direccion;
        $contacto->save();
        
        $users = User::find($user);
		$users->contactos()->save($contacto);
        
/*
        $direccion = New Direccion;
        $direccion->ubicacion = $ubicacion;
        $direccion->preferencia = $p_referencia;
        $direccion->save();
*/
        //return $motivos.' '.$descripcion;
       /*
       
       

*/     $contacto = Contacto::find(1);
       $motivo=['1','2','5'];
            if (isset($motivo)) 
            {
                foreach ($motivo as $tagId) 
                {
                    $motivo = Motivo::find($tagId);
                    $contacto->motivos()->attach($motivo);
                }
            }

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
