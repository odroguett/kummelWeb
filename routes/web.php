<?php

use App\Http\Controllers\BuscarControllers;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\KummelControllers;
use  App\Http\Controllers\ProductosVentaControllers;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('kummel', [KummelControllers::class,'home'])->name('kummel');; 

///Menu principal pagina////

Route::get('semillas', [ProductosVentaControllers::class,'cargaSemillas'])
        ->name('semillas');
Route::get('snackMix', [ProductosVentaControllers::class,'cargaSnackMix'])
        ->name('snackMix');
Route::get('frutosSecos', [ProductosVentaControllers::class,'cargaFrutosSecos'])
        ->name('frutosSecos');
Route::get('frutasDeshidratadas', [ProductosVentaControllers::class,'cargaFrutasDeshidratadas'])
        ->name('frutasDeshidratadas');
Route::get('chocolates', [ProductosVentaControllers::class,'cargaChocolates'])
        ->name('chocolates');
        Route::get('especiasCondimientos', [ProductosVentaControllers::class,'cargaEspeciasCondimientos'])
        ->name('especiasCondimientos');
///Fin////

///buscar////
Route::get('buscar/{sPatron}', [BuscarControllers::class,'buscarProductos'])->name('buscar'); 


