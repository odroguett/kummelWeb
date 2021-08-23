<?php
namespace App\Http\Controllers;

use App\Negocio\Interfaces\IClientes;
use App\Negocio\Interfaces\IDespacho;
use App\OTD\DatosDespachoOtd;
use App\OTD\RespuestaOtd as OTDRespuestaOtd;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;


class ClientesControllers extends Controller
{
  private $oClientes;
  

 public function __construct(IClientes  $_clientes)
 {
  $this->oClientes = $_clientes;
  
 }

 public function agregaDatosClientes(Request $request)
 {
     
 /*    $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'direccion' => 'required',
        'ciudad' => 'required',
        'comuna' => 'required',
        'region' => 'required',
        'email' => 'required|string|email|max:255|unique:users',

      
    ]);  */ 
   // dd('hola');
    $this->oClientes->agregaClientes($request);
        return redirect('/kummel#');

 }


}
