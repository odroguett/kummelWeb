<?php 
namespace App\Negocio\Interfaces;

use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

interface IDespacho
{
public function InsertaActualizaDespacho(Request $oDespacho);
public function ObtieneDatosDespacho(Request $request);

}

?>