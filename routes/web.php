<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuscarControllers;
use App\Http\Controllers\ClientesControllers;
use App\Http\Controllers\ComprarControllers;
use App\Http\Controllers\DespachoControllers;
use  App\Http\Controllers\KummelControllers;
use App\Http\Controllers\PagoFlowControllers;
use  App\Http\Controllers\ProductosVentaControllers;
use App\Http\Controllers\VentasControllers;

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

require __DIR__.'/auth.php';
//Paginas principales
Route::get('kummel', [KummelControllers::class,'home'])->name('kummel');
Route::get('contacto', [KummelControllers::class,'CargaVistaContacto'])->name('contacto');
Route::get('recetas', [KummelControllers::class,'recetas'])->name('recetas');
Route::get('condiciones', [KummelControllers::class,'condiciones'])->name('condiciones');
Route::get('preguntasFrecuentes', [KummelControllers::class,'preguntasFrecuentes'])->name('preguntasFrecuentes');
Route::get('dashboard', [KummelControllers::class,'dashboard'])->name('dashboard') ->middleware('auth');




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
        //Detalle Productos//
Route::post('detalleProductosVenta', [ProductosVentaControllers::class,'detalleProductosVenta'])->name('detalleProductosVenta');
///Fin////

///buscador////
Route::get('buscar/{sPatron}', [BuscarControllers::class,'buscarProductos'])
        ->name('buscar'); 

///Comprar
Route::post('comprarProductos', [ComprarControllers::class,'comprarProductos'])->name('comprarProductos');

//Venta
Route::post('pagoProductos', [VentasControllers::class,'pagoProductos'])->name('pagoProductos');
Route::post('finalizarPago', [VentasControllers::class,'finalizarPago'])->name('finalizarPago');
Route::post('pagoFlow', [VentasControllers::class,'pagoFlow'])->name('pagoFlow');
Route::post('confirmacion', [VentasControllers::class,'confirmacion'])->name('confirmacion');
Route::get('confirmacion', [VentasControllers::class,'confirmacion'])->name('confirmacion');
Route::post('confirmaPago', [VentasControllers::class,'confirmaPago'])->name('confirmaPago');

//Despacho//
//Route::get('obtieneDatosDespacho/{idDespacho}', [DespachoControllers::class,'obtieneDatosDespacho'])->name('obtieneDespacho');
Route::post('obtieneDatosDespacho', [DespachoControllers::class,'obtieneDatosDespacho'])->name('obtieneDespacho');
Route::post('agregaDatosDespacho', [DespachoControllers::class,'agregaDatosDespacho'])->name('agregaDatosDespacho');
Route::post('eliminarDatosDespacho', [DespachoControllers::class,'eliminarDatosDespacho'])->name('eliminarDatosDespacho');

//Clientes//
Route::post('agregaDatosClientes', [ClientesControllers::class,'agregaDatosClientes'])->name('agregaDatosClientes');
Route::get('mantencion/{idUsuario}', [ClientesControllers::class,'mantencion'])->name('mantencion') ->middleware('auth');
