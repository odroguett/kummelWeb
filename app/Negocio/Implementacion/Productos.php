<?php 
namespace App\Negocio\Implementacion;

use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IProductos;
use App\Negocio\Interfaces\IUnidades;
use App\Repositorio\IUnidadTrabajo;

class Productos implements IProductos
{
    private $oCategorias;
    private $oUnidadTrabajo;
    private $oUnidades;
    
public function __construct(ICategorias $_oCategorias, IUnidadTrabajo $_oUnidadTrabajo, IUnidades $_oUnidades )
{
    $this->oCategorias=$_oCategorias;
    $this->oUnidadTrabajo=$_oUnidadTrabajo;
    $this->oUnidades=$_oUnidades;
}


    public function AgregarProducto()
    {

    }
    public function EliminarProducto()
    {


    }
    public function ActualizarProducto()
    {


    }
    public function CargarProducto()
    {

    }

}


?>