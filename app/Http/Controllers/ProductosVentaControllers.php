<?php


namespace App\Http\Controllers;

use App\Negocio\Fabricas\Interfaces\IFabricaProductos;
use App\Negocio\Interfaces\IVentas;
use App\OTD\DetalleProductosVentaOtd;
use Illuminate\Http\Request;

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

    public function jugos()
    {
      return view('kummel.jugos',['precioProductos' =>  $this->oFabricaProductos->ProductosVenta()->obtienePrecioProductos('JU')]);
    }
    public function harinas()
    {
      return view('kummel.harinas',['precioProductos' =>  $this->oFabricaProductos->ProductosVenta()->obtienePrecioProductos('HA')]);
    }
    public function azucares()
    {
      return view('kummel.azucares',['precioProductos' =>  $this->oFabricaProductos->ProductosVenta()->obtienePrecioProductos('AZ')]);
    }

    public function confitados()
    {
      return view('kummel.confitados',['precioProductos' =>  $this->oFabricaProductos->ProductosVenta()->obtienePrecioProductos('CON')]);
    }
    public function sales()
    {
      return view('kummel.sales',['precioProductos' =>  $this->oFabricaProductos->ProductosVenta()->obtienePrecioProductos('SAL')]);
    }
    public function te()
    {
      return view('kummel.te',['precioProductos' =>  $this->oFabricaProductos->ProductosVenta()->obtienePrecioProductos('TE')]);
    }
    public function tostados()
    {
      return view('kummel.tostados',['precioProductos' =>  $this->oFabricaProductos->ProductosVenta()->obtienePrecioProductos('TO')]);
    }

    public function detalleProductosVenta(Request $request)
    {
   $detalleProductosVenta = new DetalleProductosVentaOtd;
   $detalleProductosVenta =  $this->oFabricaProductos->ProductosVenta()->DetalleProductosVenta($request);
   //dd($detalleProductosVenta);
   return view('kummel.detalleProducto',['detalleProductosVenta' => $detalleProductosVenta]);

   
   
    }
   
}
