<?php

namespace App\Http\Controllers\Despachadores;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
    public function create()
    {
       return view('despachadores.create');
    }
}
