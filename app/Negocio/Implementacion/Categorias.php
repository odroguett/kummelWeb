<?php
namespace App\Negocio\Implementacion;
use App\Negocio\Interfaces\ICategorias;
use App\Repositorio\IUnidadTrabajo;

class Categorias implements ICategorias
{
  private $oUDT;

  public function __construct(IUnidadTrabajo $_oUDT  )
  {
      $this->oUDT =  $_oUDT;
  }
  
    public function AgregarCategoria()
    {


    }
    public function EliminarCategoria()
    {

        
    }
    public function ActualizarCategoria()
    {

        
    }
    public function ObtenerCategorias()
    {
      return $this->oUDT->CategoriasRepositorio()->obtieneCategorias();
        
    }

}

?>