<?php


namespace App\Http\Controllers;

use App\Negocio\Fabricas\Interfaces\IFabricaProductos;
use App\Negocio\Interfaces\IVentas;

class KummelControllers extends Controller
{
  private $oFabricaProductos;
  private $oVentas;

 public function __construct(IFabricaProductos  $_oFabricaProductos,IVentas $_oVentas)
 {
  $this->oFabricaProductos = $_oFabricaProductos;
  $this->oVentas =$_oVentas;
 }

    public function home()
    {

 //dd($this->oFabricaProductos->ProductosVenta()->obtenerProductosDestacados());

     return view('kummel.home',['productosDestacados' =>  $this->oFabricaProductos->ProductosVenta()->obtenerProductosDestacados()],
               ['topVentas' =>  $this->oVentas->obtieneTopVentas()]);
    }
}
