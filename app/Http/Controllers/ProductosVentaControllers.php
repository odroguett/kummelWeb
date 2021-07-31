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
    public function cargaFrutosSecos()
    {
      return view('kummel.frutosSecos',['precioProductos' =>  $this->oFabricaProductos->ProductosVenta()->obtienePrecioProductos('FS')]);

     
    }

    public function cargaFrutasDeshidratadas()
    {
      return view('kummel.frutasDeshidratadas',['precioProductos' =>  $this->oFabricaProductos->ProductosVenta()->obtienePrecioProductos('FD')]);
    }

    public function cargaChocolates()
    {
      return view('kummel.chocolates',['precioProductos' =>  $this->oFabricaProductos->ProductosVenta()->obtienePrecioProductos('CHO')]);
    }

    public function CargaEspeciasCondimientos()
    {
      return view('kummel.especiasCondimientos',['precioProductos' =>  $this->oFabricaProductos->ProductosVenta()->obtienePrecioProductos('EC')]);
    }


}
