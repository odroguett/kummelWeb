<?php 
namespace App\Negocio\Implementacion;

use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IDespacho;
use App\Negocio\Interfaces\IUnidades;
use App\OTD\DatosDespachoOtd;
use App\Repositorio\IUnidadTrabajo;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class Despacho implements IDespacho
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

public function ObtieneDatosDespacho($idDespacho)
{
   // dd('Hola');
    $oDatosDespacho = new DatosDespachoOtd;
    $oRetorno = $this->oUnidadTrabajo->DespachosRepositorio()->ObtieneDatosDespacho($idDespacho);
    if(isset($oRetorno))
    {
foreach($oRetorno as $retorno)
{
    $oDatosDespacho->sNombre =  $retorno->NOMBRE;
    $oDatosDespacho->sApellido =  $retorno->APELLIDOS;
    $oDatosDespacho->sDireccion =  $retorno->DIRECCION;
    $oDatosDespacho->sComuna =  $retorno->COMUNA;
    $oDatosDespacho->sCiudad =  $retorno->CIUDAD;
    $oDatosDespacho->sRegion = $retorno->REGION;
    $oDatosDespacho->sTelefono = $retorno->TELEFONO;
    $oDatosDespacho->sEmail = $retorno->EMAIL;
}

    }
    else
    {
    $oDatosDespacho->sNombre =  "";
    $oDatosDespacho->sApellido =  "";
    $oDatosDespacho->sDireccion =  "";
    $oDatosDespacho->sComuna =  "";
    $oDatosDespacho->sCiudad =  "";
    $oDatosDespacho->sRegion = "";
    $oDatosDespacho->sTelefono = "";
    $oDatosDespacho->sEmail = "";
    return $oDatosDespacho;
    }
   

}



}

?>