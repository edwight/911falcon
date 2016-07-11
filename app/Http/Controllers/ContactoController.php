<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Contacto;
use App\Http\Controllers\Controller;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = Contacto::all();
        return view('admin.contacto.index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$user = User::find(1);
        //$categorylist = Category::all();
        return view('admin.contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request->all();
        $phone = $request->input('phone');//required
        $name = $request->input('name');
        $user = $request->input('user');//required
        $motivos = $request->input('motivos');//required
        $municipio = $request->input('municipio');
        $parroquia =  $request->input('parroquia');
        $direccion = $request->input('direccion');//required
        $p_referencia = $request->input('p_referencia');
        $descripcion = $request->input('descripcion');
        $organismo = $request->input('organismo');//required

        $descripcion = $request->input('nombrec');//required
        $descripcion = $request->input('phonec');//required

        return 'telefono: '.$phone. ' nombre:'.$name.' usuario: '.$user.' municipio: '.$municipio.' parroquia: '.$parroquia.' direccion: '.$descripcion;
        $contacto = New contacto;
        $contacto->name = $name;
        $contacto->phone = $phone;
        $contacto->direccion = $direccion;
        $contacto->save();

        return redirect('contacto/create');
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
