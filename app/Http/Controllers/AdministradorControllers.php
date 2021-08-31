<?php
namespace App\Http\Controllers;

use App\Negocio\Interfaces\IAdministrador;
use App\Negocio\Interfaces\IClientes;
use App\Negocio\Interfaces\IDespacho;
use App\OTD\DatosDespachoOtd;
use App\OTD\RespuestaOtd as OTDRespuestaOtd;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;


class AdministradorControllers extends Controller
{
  private $oAdministrador;
  public function __construct(IAdministrador $_oAdministrador)
  {
      $this->oAdministrador = $_oAdministrador;

  }



 public function administrador()
 {
     

   return view('administrador.administrador',['cargarDatos' => $this->oAdministrador->CargarDatos()]);

 }
 

}