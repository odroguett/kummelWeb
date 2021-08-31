<?php
namespace App\Negocio\Implementacion;

use App\Negocio\Interfaces\IAdministrador;
use App\Negocio\Interfaces\ICategorias;
use App\OTD\AdministradorOtd;
use App\Repositorio\IUnidadTrabajo;

class Administrador implements IAdministrador
{
  private $oUDT;
  private $oCategorias;

  public function __construct(IUnidadTrabajo $_oUDT ,ICategorias $_oCategorias )
  {
      $this->oUDT =  $_oUDT;
      $this->oCategorias =  $_oCategorias;

  }
  
  public function CargarDatos()
  {
    $administradorOtd = new AdministradorOtd();
    $administradorOtd->categorias = $this->oCategorias->ObtenerCategorias();
    return $administradorOtd;

  }

}

?>