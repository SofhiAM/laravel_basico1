<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorLista;
use App\Http\Controllers\ControladorRopa;
use App\Http\Controllers\ControladorCompra;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('listap');
// });
    // Controlador 1
    Route::get('/', [ControladorLista::class, 'inicio']);
    Route::get('/lista', [ControladorLista::class, 'mostrarLista']);

    // Controlador 2
    Route::get('/zapatos', [ControladorRopa::class, 'mostrarZapatos']);
    Route::get('/caballero', [ControladorRopa::class, 'mostrarRCaballero']);
    Route::get('/dama', [ControladorRopa::class, 'mostrarRDama']);

    // Controlador 3
    Route::get('/comprar', [ControladorCompra::class, 'irCompra']);
    Route::get('/añadir', [ControladorCompra::class, 'clientes']);