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
    	$Contacto = Contacto::all(); 
    	
        return view('despachadores.index');
    }
    public function create()
    {
       return view('despachadores.create');
    }
}
