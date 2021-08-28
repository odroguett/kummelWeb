<?php 
namespace App\Negocio\Implementacion;

use App\Models\Clientes;
use App\Models\Despachos;
use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IClientes;
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
    private $oClientes;
    
public function __construct(ICategorias $_oCategorias, IUnidadTrabajo $_oUnidadTrabajo, IUnidades $_oUnidades, IClientes $_oClientes )
{
    $this->oCategorias=$_oCategorias;
    $this->oUnidadTrabajo=$_oUnidadTrabajo;
    $this->oUnidades=$_oUnidades;
    $this->oClientes=$_oClientes;
}

public function InsertaActualizaDespacho(Request $request)
{
$oDespacho = new Despachos;

$modificar = $request->input('modificar');
$oRespuesta = new RespuestaOtd();
$oRespuesta->sMensaje ="Datos para despacho ingresados correctamente";

///Incorporamos la direccion del cliente
if($request->input('grabaDireccion') ==-1)
{
    $this->oClientes->agregaClientes($request);
}

if($modificar=="M")
{
    $idDespacho =$request->input('idDespacho');
    $oDespacho =$this->oUnidadTrabajo->DespachosRepositorio()->buscar($idDespacho);
    
}
else
{
    $idDespacho= $this->oUnidadTrabajo->DespachosRepositorio()->cantidad();
    if($idDespacho==0)
    {
        $idDespacho=1;
    
    }
    else
    {
        $idDespacho= $idDespacho + 1;
    }
    $oDespacho->ID_CLIENTE='1';
    $oDespacho->ID_TIPO_DESPACHO=1;
}

$oDespacho->ID_DESPACHO = trim($idDespacho);
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

public function ObtieneDatosDespachoId($idDespacho)
{
   
    $oDatosDespacho = new DatosDespachoOtd;
    $oClientes = new Clientes();
    $existeDireccion = false;
    $oRetorno = $this->oUnidadTrabajo->DespachosRepositorio()->ObtieneDatosDespacho($idDespacho);
    if(isset($oRetorno))
    {
    $oDatosDespacho->sNombre =  $oRetorno->NOMBRE;
    $oDatosDespacho->sApellido =  $oRetorno->APELLIDOS;
    
    $oDatosDespacho->sDireccion =  $oRetorno->DIRECCION;
    $oDatosDespacho->sComuna =  $oRetorno->COMUNA;
    $oDatosDespacho->sCiudad = $oRetorno->CIUDAD;
    $oDatosDespacho->sRegion = $oRetorno->REGION;
    $oDatosDespacho->sTelefono = $oRetorno->TELEFONO;
    $oDatosDespacho->sEmail = $oRetorno->EMAIL;
    $oDatosDespacho->sDepartamento = $oRetorno->DEPARTAMENTO;

    }
    else
    {
    $oDatosDespacho->sNombre = "";
    $oDatosDespacho->sApellido =  "";
    $oDatosDespacho->sDireccion =  "";
    $oDatosDespacho->sComuna =  "";
    $oDatosDespacho->sCiudad =  "";
    $oDatosDespacho->sRegion = "";
    $oDatosDespacho->sTelefono = "";
    $oDatosDespacho->sEmail = "";
    $oDatosDespacho->sDepartamento = "";
  
    }
  
    return $oDatosDespacho;

}


public function ObtieneDatosDespacho( Request $request)
{
   
    $oDatosDespacho = new DatosDespachoOtd;
    $oClientes = new Clientes();
  
    $idDespacho = $request->input('idDespacho');
    $idUsuario = $request->input('idUsuario');
    $existeDireccion = false;
    //Buscamos la direccion del usuario.
 
  if($idUsuario > 0 && trim($idDespacho) ==0)
    {
        $oRetorno =  $this->oClientes->obtieneDireccionCliente($idUsuario);
       
        if(isset($oRetorno))
        {
           
            foreach($oRetorno  as $value)
            {
                $oDatosDespacho->sNombre =   $value->NOMBRE;
                $oDatosDespacho->sApellido =   $value->APELLIDOS;
                $oDatosDespacho->sDireccion =   $value->DIRECCION;
                $oDatosDespacho->sComuna =   $value->COMUNA;
                $oDatosDespacho->sCiudad =  $value->CIUDAD;
                $oDatosDespacho->sRegion =  $value->REGION;
                $oDatosDespacho->sTelefono =  $value->TELEFONO;
                $oDatosDespacho->sEmail =  $value->EMAIL;
                $oDatosDespacho->sDepartamento =  $value->DEPARTAMENTO;
                return $oDatosDespacho;
            }
            

        }
        
     
    } 
   
    $oRetorno = $this->oUnidadTrabajo->DespachosRepositorio()->ObtieneDatosDespacho($idDespacho);
  
    if(isset($oRetorno))
    {
    $oDatosDespacho->sNombre =  $oRetorno->NOMBRE;
    $oDatosDespacho->sApellido =  $oRetorno->APELLIDOS;
    
    $oDatosDespacho->sDireccion =  $oRetorno->DIRECCION;
    $oDatosDespacho->sComuna =  $oRetorno->COMUNA;
    $oDatosDespacho->sCiudad = $oRetorno->CIUDAD;
    $oDatosDespacho->sRegion = $oRetorno->REGION;
    $oDatosDespacho->sTelefono = $oRetorno->TELEFONO;
    $oDatosDespacho->sEmail = $oRetorno->EMAIL;
    $oDatosDespacho->sDepartamento = $oRetorno->DEPARTAMENTO;

    }
    else
    {
    $oDatosDespacho->sNombre = "";
    $oDatosDespacho->sApellido =  "";
    $oDatosDespacho->sDireccion =  "";
    $oDatosDespacho->sComuna =  "";
    $oDatosDespacho->sCiudad =  "";
    $oDatosDespacho->sRegion = "";
    $oDatosDespacho->sTelefono = "";
    $oDatosDespacho->sEmail = "";
    $oDatosDespacho->sDepartamento = "";
  
    }
  
    return $oDatosDespacho;

}

public function EliminarDatosDespacho(Request $request)
{
    $idDespacho =$request->input('idDespacho');
    $oRespuesta = new RespuestaOtd();
    $oRespuesta->sMensaje ="Datos Eliminados correctamente";
    $oRespuesta->bEsValido=true;    
    $this->oUnidadTrabajo->DespachosRepositorio()->eliminar($idDespacho);
    return $oRespuesta;

}

public function ActualizaTipoDespacho($idDespacho,$tipoDespacho)
{
    $oDespacho = new Despachos();
    $oDespacho =$this->oUnidadTrabajo->DespachosRepositorio()->buscar($idDespacho);

    $oDespacho->ID_TIPO_DESPACHO =$tipoDespacho;
    $this->oUnidadTrabajo->DespachosRepositorio()->InsertarIndividual($oDespacho);
   
    return true;

}

public function ObtieneCabeceraDespacho($idDespacho)
{
    
    $oDespacho =  $this->oUnidadTrabajo->DespachosRepositorio()->ObtieneCabeceraDespacho($idDespacho);


}


}

?>