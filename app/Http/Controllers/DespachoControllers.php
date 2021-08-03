<?php
namespace App\Http\Controllers;


use App\Negocio\Interfaces\IDespacho;
use App\OTD\DatosDespachoOtd;
use App\OTD\RespuestaOtd as OTDRespuestaOtd;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;


class DespachoControllers extends Controller
{
  private $oDespacho;
  

 public function __construct(IDespacho  $_Despacho)
 {
  $this->oDespacho = $_Despacho;
  
 }

 public function agregaMedioEntrega(Request $request)
 {


  $oRespuesta = new OTDRespuestaOtd();
  $oRespuesta = $this->oDespacho->InsertaActualizaDespacho($request);
  return response()->json($oRespuesta);

 }

    public function obtieneDatosDespacho($idDespacho)
    {
        
     $oDatosDespacho = new DatosDespachoOtd();
     $oDatosDespacho =$this->oDespacho->ObtieneDatosDespacho($idDespacho);
      return view('kummel.incorporaDireccion',['oDatosDespacho' => $oDatosDespacho] );
               
    }
}
