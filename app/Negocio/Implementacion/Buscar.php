<?php

use App\Negocio\Interfaces\IBuscar;
use App\Repositorio\IUnidadTrabajo;

class Buscar implements IBuscar
{
  private $oUDT;

  public function __construct(IUnidadTrabajo $_oUDT  )
  {
      $this->oUDT =  $_oUDT;
  }
  
    public function BuscarProductos($sBuscar)
    {


    }
   

}


?>
