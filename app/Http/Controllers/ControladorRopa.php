<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorRopa extends Controller
{
    public function mostrarZapatos(){
        return view ('zapato');
    }

    public function mostrarRCaballero(){
        return view ('ropahombre');
    }

    public function mostrarRDama(){
        return view ('ropadama');
    }
}
