<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCompra extends Controller
{
    public function irCompra(){
        return view ('comprar');
    }

    public function datos(){
        return view ('editardatos');
    }

    public function clientes(){
        return view ('addclientes');
    }
}
