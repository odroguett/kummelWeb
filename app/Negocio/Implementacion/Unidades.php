<?php
namespace App\Negocio\Implementacion;

use App\Negocio\Interfaces\IUnidades;
use App\Repositorio\IUnidadTrabajo;

class Unidades implements IUnidades
{
    private $oUDT;
    public function __construct(IUnidadTrabajo $_oUDT  )
    {
        $this->oUDT =  $_oUDT;
    }

    public function AgregarUnidades()
    {


    }
    public function EliminarUnidades()
    {

        
    }
    public function ActualizarUnidades()
    {

        
    }
    public function ObtenerUnidades()
    {
        return $this->oUDT->UnidadesRepositorio()->obtieneUnidades();
        
    }

}

?>