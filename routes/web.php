<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Conexion hacia los php que se quiere mostrar dentro de la pagina web
use App\Http\Controllers\ComputadorController;

Route::resource('computador', ComputadorController::class);
Route::get('computador/buscar', [ComputadorController::class, 'buscar'])->name('computador.buscar');
Route::post('computador/buscar', [ComputadorController::class, 'buscarID']);
Route::post('computador/actualizar', [ComputadorController::class, 'actualizar'])->name('computador.actualizar');



