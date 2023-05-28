<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorLista extends Controller
{
    public function mostrarLista(){
        return view ('listap');
    }
}
