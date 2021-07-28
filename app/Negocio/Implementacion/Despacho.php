<?php 
namespace App\Negocio\Implementacion;

use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IDespacho;
use App\Negocio\Interfaces\IUnidades;
use App\Repositorio\IUnidadTrabajo;
use Illuminate\Http\Request;

class Despachos implements IDespacho
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
public function InsertarDespacho(Request $oDespacho)
{

    $this->oUnidadTrabajo->DespachosRepositorio()->insertar($oDespacho);
    

}



}

?>