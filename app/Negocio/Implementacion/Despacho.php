<?php 
namespace App\Negocio\Implementacion;

use App\Models\Despachos;
use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IDespacho;
use App\Negocio\Interfaces\IUnidades;
use App\OTD\DatosDespachoOtd;
use App\OTD\RespuestaOtd;
use App\Repositorio\IUnidadTrabajo;
use Illuminate\Http\Request;


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
public function InsertaActualizaDespacho(Request $request)
{


    /*  if($request->input('modificar') =='M')
    {

        return $this->ActualizaDespacho($request);
    }
    else */
    //{   
        return $this->InsertarDespacho($request);

    //}
}

private function InsertarDespacho(Request $request)
{
$oDespacho = new Despachos;
$idDespacho =$request->input('idDespacho');
$oRespuesta = new RespuestaOtd();
$oRespuesta->sMensaje ="Datos para despacho ingresados correctamente";
$idDespacho= $this->oUnidadTrabajo->DespachosRepositorio()->cantidad();
if($idDespacho==0)
{
    $idDespacho=1;

}
else
{
    $idDespacho= $idDespacho + 1;
}



$oDespacho->ID_DESPACHO = $idDespacho;
$oDespacho->NOMBRE= $request->input('nombre');
$oDespacho->APELLIDOS=$request->input('apellido');
$oDespacho->DIRECCION=$request->input('direccion');
$oDespacho->DEPARTAMENTO=$request->input('departamento');
$oDespacho->COMUNA=$request->input('comuna');
$oDespacho->CIUDAD=$request->input('ciudad');
$oDespacho->REGION=$request->input('region');
$oDespacho->COMENTARIOS="";
$oDespacho->TELEFONO=$request->input('telefono');
$oDespacho->EMAIL=$request->input('email');
$oDespacho->ID_CLIENTE='1';
$oDespacho->ID_TIPO_DESPACHO=1;

$this->oUnidadTrabajo->DespachosRepositorio()->InsertarIndividual($oDespacho);
$oRespuesta ->bEsValido =true;
$oRespuesta ->idDespacho = $idDespacho;
$oRespuesta ->sDireccion =$request->direccion;
$oRespuesta ->sDepartamento =$request->departamento;
$oRespuesta ->sComuna =$request->comuna;
$oRespuesta ->sCiudad =$request->ciudad;
$oRespuesta ->sRegion =$request->region;
$oRespuesta ->sTelefono =$request->telefono;
$oRespuesta ->sEmail =$request->email;


return $oRespuesta;

}

private function ActualizaDespacho()
{



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