<?php
namespace App\Http\Controllers;


use App\Negocio\Interfaces\IDespacho;
use App\OTD\DatosDespachoOtd;
use Illuminate\Http\Request;

class DespachoControllers extends Controller
{
  private $oDespacho;
  

 public function __construct(IDespacho  $_Despacho)
 {
  $this->oDespacho = $_Despacho;
  
 }

    public function obtieneDatosDespacho($idDespacho)
    {
        
     $oDatosDespacho = new DatosDespachoOtd();
     $oDatosDespacho =$this->oDespacho->ObtieneDatosDespacho($idDespacho);
      return view('kummel.incorporaDireccion',['oDatosDespacho' => $oDatosDespacho] );
               
    }
}
