<?php

namespace App\Negocio\Implementacion;

use App\Negocio\Interfaces\IBuscar;
use App\Repositorio\IUnidadTrabajo;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class Buscar implements IBuscar
{
  private $oUDT;

  public function __construct(IUnidadTrabajo $_oUDT  )
  {
      $this->oUDT =  $_oUDT;
  }
  
    public function buscarProductos($sPatron)
    {

        
   return($this->oUDT->RawQueryRepositorio()->BuscarProductos($sPatron));
        
    }
   

}


?>
