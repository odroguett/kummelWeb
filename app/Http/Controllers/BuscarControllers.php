<?php


namespace App\Http\Controllers;
use App\Negocio\Interfaces\IBuscar;


class BuscarControllers extends Controller
{
  private $oBuscar;
  

 public function __construct(IBuscar  $_oBuscar)
 {
  $this->oBuscar = $_oBuscar;
  
 }

    public function buscarProductos($sPatron)
    {
      
        return view('kummel.buscar',['buscarProductos' =>  $this->oBuscar->buscarProductos($sPatron)]);
               
    }
}
