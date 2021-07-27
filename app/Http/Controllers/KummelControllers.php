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
     return view('kummel.home',['categorias' =>  $this->oFabricaProductos->ProductosVenta()->obtenerProductosDestacados()]);
    }
}
