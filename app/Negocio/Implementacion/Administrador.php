<?php
namespace App\Negocio\Implementacion;

use App\Negocio\Fabricas\Interfaces\IFabricaProductos;
use App\Negocio\Interfaces\IAdministrador;
use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IProductos;
use App\Negocio\Interfaces\IUnidades;
use App\OTD\AdministradorOtd;
use App\Repositorio\IUnidadTrabajo;

class Administrador implements IAdministrador
{
  private $oUDT;
  private $oCategorias;
  private $oUnidades;
  private $oFabricaProductos;

  public function __construct(IUnidadTrabajo $_oUDT ,ICategorias $_oCategorias,IUnidades $_oUnidades, IFabricaProductos $_oFabricaProductos)
  {
      $this->oUDT =  $_oUDT;
      $this->oCategorias =  $_oCategorias;
      $this->oUnidades =  $_oUnidades;
      $this->oFabricaProductos =  $_oFabricaProductos;

  }
  
  public function CargarDatos()
  {
    $administradorOtd = new AdministradorOtd();
    $administradorOtd->categorias = $this->oCategorias->ObtenerCategorias();
    $administradorOtd->unidades = $this->oUnidades->ObtenerUnidades();
    $administradorOtd->productos=  $this->oFabricaProductos->Productos()->CargarProducto();
    $administradorOtd->productosVenta =$this->oFabricaProductos->ProductosVenta()->obtenerProductosVenta();
   
    return $administradorOtd;

  }

}

?>