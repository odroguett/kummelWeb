<?php 
namespace App\Negocio\Implementacion;

use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IUnidades;
use App\Negocio\Interfaces\IVentas;
use App\Repositorio\IUnidadTrabajo;

class Ventas implements IVentas

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

    
    public function realizarPagoVenta()
    {


    }

    public function obtieneTopVentas()
    {

    return  $this->oUnidadTrabajo->VentasRepositorio()->obtieneTopVentas();
    }


}
?>
