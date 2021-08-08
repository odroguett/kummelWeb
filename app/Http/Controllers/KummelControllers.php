<?php


namespace App\Http\Controllers;

use App\Mail\comprobanteKummel;
use App\Mail\ComprobantePago;
use App\Negocio\Fabricas\Interfaces\IFabricaProductos;
use App\Negocio\Interfaces\IGeneraPDF;
use App\Negocio\Interfaces\IVentas;
use App\OTD\ComprobantePagoMailOtd;
use Illuminate\Support\Facades\Mail;

class KummelControllers extends Controller
{
  private $oFabricaProductos;
  private $oVentas;
  private $oGeneraPDF; 

 public function __construct(IFabricaProductos  $_oFabricaProductos,IVentas $_oVentas, IGeneraPDF $_oGeneraPDF )
 {
  $this->oFabricaProductos = $_oFabricaProductos;
  $this->oVentas =$_oVentas;
  $this->oGeneraPDF = $_oGeneraPDF;
 }

    public function home()
    {
     return view('kummel.home',['productosDestacados' =>  $this->oFabricaProductos->ProductosVenta()->obtenerProductosDestacados()],
               ['topVentas' =>  $this->oVentas->obtieneTopVentas()]);
    }

    public function CargaVistaContacto()
    {
     return view('kummel.contacto');
    }

    public function comprobante()
    {
        $comprobantePagoMail = new ComprobantePagoMailOtd;
       $comprobantePagoMail->asunto="hola";
       //dd('hola');
       Mail::to("odroguett@gmail.com")->send(new comprobanteKummel($comprobantePagoMail,$this->oGeneraPDF));
       
    }
}
