<?php

namespace App\Http\Controllers\Operadores;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class RecepcionController extends Controller
{
     public function recepcion()
    {
        return view('operadores.recepcion');
    }
}
