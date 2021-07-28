<?php 
namespace App\Negocio\Interfaces;

use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

interface IDespacho
{
public function InsertarDespacho(Request $oDespacho);

}

?>