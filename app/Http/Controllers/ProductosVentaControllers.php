<?php


namespace App\Http\Controllers;

use App\Negocio\Fabricas\Interfaces\IFabricaProductos;
use App\Negocio\Interfaces\IVentas;

class ProductosVentaControllers extends Controller
{
  private $oFabricaProductos;
  private $oVentas;

 public function __construct(IFabricaProductos  $_oFabricaProductos,IVentas $_oVentas)
 {
  $this->oFabricaProductos = $_oFabricaProductos;
  $this->oVentas =$_oVentas;
 }

    public function cargaSemillas()
    {
      return view('kummel.semillas',['precioProductos' =>  $this->oFabricaProductos->ProductosVenta()->obtienePrecioProductos('SEM')]);

     
    }
    public function cargaSnackMix()
    {
      return view('kummel.snackMix',['precioProductos' =>  $this->oFabricaProductos->ProductosVenta()->obtienePrecioProductos('SM')]);

     
    }
}
