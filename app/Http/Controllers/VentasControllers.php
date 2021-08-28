<?php
namespace App\Http\Controllers;

use App\Negocio\Implementacion\ConfigPagoFlow;
use App\Negocio\Interfaces\IComprar;
use App\Negocio\Interfaces\IVentas;
use App\OTD\DatosPagoOtd;
use App\OTD\RespuestaOtd;
use Exception;
use Illuminate\Http\Request;

class VentasControllers extends Controller
{
  private $oVentas;
  

 public function __construct(IVentas  $_oVentas)
 {
  $this->oVentas = $_oVentas;
  
 }

    public function pagoProductos(Request $request)
    {
              
      $datosPagoOtd = new DatosPagoOtd();
      $datosPagoOtd->arrayPago = $request->input('arrayPago');
      $datosPagoOtd->idDespacho = $request->input('idDespacho');
      $datosPagoOtd->idTipoDespacho = $request->input('tipoDespacho');
      $datosPagoOtd->totalProductosPago = $request->input('totalProductosPago');
      $datosPagoOtd->totalPago =$request->input('totalPago');
  
      return view('kummel.datosPago',['datosPagoOtd' =>  $datosPagoOtd]);
               
    }

     public function finalizarPago(Request $request)
    {

      

     $oRespuesta = new RespuestaOtd();
    
    $oRespuesta = $this->oVentas->realizarPagoVenta($request);
    return response()->json($oRespuesta);

    } 

    
 public function pagoFlow(Request $request)
 {
   

    
    $oRespuesta = $this->oVentas->pagoFlow($request);
    return response()->json($oRespuesta);
  
 }

    public function confirmacion(Request $request)
    {
      return view('kummel.confirmacionFlow');
    }

    public function confirmaPago(Request $request)
    {
      
      $oRespuesta = $this->oVentas->realizarPagoVenta($request);
      return response()->json($oRespuesta);
    }

}