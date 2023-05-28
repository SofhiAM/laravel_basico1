<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorLista extends Controller
{
    public function inicio(){
        return view ('inicio');
    }
    
    public function mostrarLista(){
        return view ('listap');
    }
}
