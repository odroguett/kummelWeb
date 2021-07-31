<?php


namespace App\Http\Controllers;

use App\Negocio\Fabricas\Interfaces\IFabricaProductos;
use App\Negocio\Interfaces\IVentas;

class BuscarControllers extends Controller
{
  private $oFabricaProductos;
  

 public function __construct(IFabricaProductos  $_oFabricaProductos)
 {
  $this->oFabricaProductos = $_oFabricaProductos;
  
 }

    public function buscarProductos($sPatron)
    {
        

        return view('kummel.buscar');
               
    }
}
