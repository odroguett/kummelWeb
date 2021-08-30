<?php
namespace App\Http\Controllers;

use App\Negocio\Interfaces\IClientes;
use App\Negocio\Interfaces\IDespacho;
use App\OTD\DatosDespachoOtd;
use App\OTD\RespuestaOtd as OTDRespuestaOtd;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;


class AdministradorControllers extends Controller
{
  
  

 public function __construct()
 {
  
  
 }

 public function administrador()
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
   return view('kummel.administrador');

 }
 

}