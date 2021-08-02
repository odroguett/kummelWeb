<?php

use App\Http\Controllers\BuscarControllers;
use App\Http\Controllers\ComprarControllers;
use App\Http\Controllers\DespachoControllers;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\KummelControllers;
use  App\Http\Controllers\ProductosVentaControllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|

*/

//Paginas principales
Route::get('kummel', [KummelControllers::class,'home'])->name('kummel');; 
Route::get('contacto', [KummelControllers::class,'CargaVistaContacto'])->name('contacto');; 


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

///buscador////
Route::get('buscar/{sPatron}', [BuscarControllers::class,'buscarProductos'])
        ->name('buscar'); 

///Comprar///
Route::post('comprarProductos', [ComprarControllers::class,'comprarProductos'])->name('comprarProductos');

//Despacho//
Route::get('obtieneDatosDespacho/{idDespacho}', [DespachoControllers::class,'obtieneDatosDespacho'])->name('obtieneDespacho');
