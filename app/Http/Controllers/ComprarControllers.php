<?php
namespace App\Http\Controllers;

use App\Negocio\Interfaces\IComprar;
use App\OTD\DatosPagoOtd;
use App\OTD\RespuestaOtd;
use Illuminate\Http\Request;

class ComprarControllers extends Controller
{
  private $oComprar;
  

 public function __construct(IComprar  $_oComprar)
 {
  $this->oComprar = $_oComprar;
  
 }

    public function comprarProductos(Request $request)
    {
        $datosCompraOtd= $this->oComprar->agregarDatoscompra( $request);
    
      return view('kummel.continuarPago',['datosCompraOtd' =>  $datosCompraOtd]);
               
    }

    
}
