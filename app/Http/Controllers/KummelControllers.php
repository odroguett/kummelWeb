<?php


namespace App\Http\Controllers;

use App\Negocio\Fabricas\Interfaces\IFabricaProductos;



class KummelControllers extends Controller
{
  private $oFabricaProductos;

 public function __construct(IFabricaProductos  $_oFabricaProductos)
 {
  $this->oFabricaProductos = $_oFabricaProductos;
 }

    public function home()
    {

 //dd($this->oFabricaProductos->ProductosVenta()->obtenerProductosDestacados());

     return view('kummel.home',['productosDestacados' =>  $this->oFabricaProductos->ProductosVenta()->obtenerProductosDestacados()]);
    }
}
