<?php
namespace App\Negocio\Implementacion;

use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IProductosVenta;
use App\Negocio\Interfaces\IUnidades;
use App\Repositorio\IUnidadTrabajo;
use App\OTD\ObtenerProductosDestacadosOtd;
use Exception;


class ProductosVenta extends Productos implements IProductosVenta
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

   

    public function obtenerProductosDestacados()
    {
        try //Si es Excepcion, se utiliza este Try
        {
            return $this->oUnidadTrabajo->ProductosVentaRepositorio()->obtieneProductosDestacados();

        }
        catch(Exception $e)
        {
            // $oRespuesta->bEsValido = false;
            // $oRespuesta->sMensaje =" No es posible ingresar datos para despacho!!!";
            // $mensaje= array('bEsValido' =>$oRespuesta->bEsValido, 'respuesta' => $oRespuesta->sMensaje);
            //   echo json_encode($mensaje,JSON_FORCE_OBJECT);
            // $oLog->EscribeLog("ERROR",$e->getMessage(),$e->getCode(),$e->getLine());
            //  exit();

        }
    }


    public function obtienePrecioProductos($categorias)
    {
        try //Si es Excepcion, se utiliza este Try
        {
            return $this->oUnidadTrabajo->ProductosVentaRepositorio()->obtienePrecioProductos($categorias);

        }
        catch(Exception $e)
        {
            // $oRespuesta->bEsValido = false;
            // $oRespuesta->sMensaje =" No es posible ingresar datos para despacho!!!";
            // $mensaje= array('bEsValido' =>$oRespuesta->bEsValido, 'respuesta' => $oRespuesta->sMensaje);
            //   echo json_encode($mensaje,JSON_FORCE_OBJECT);
            // $oLog->EscribeLog("ERROR",$e->getMessage(),$e->getCode(),$e->getLine());
            //  exit();

        }
    }

    public function obtieneDisponibleProductos($sProducto)
    {
        try //Si es Excepcion, se utiliza este Try
        {
            return json_encode($this->oUnidadTrabajo->ProductosVentaRepositorio()->obtieneDisponibleProductos($sProducto),TRUE);

        }
        catch(Exception $e)
        {
            // $oRespuesta->bEsValido = false;
            // $oRespuesta->sMensaje =" No es posible ingresar datos para despacho!!!";
            // $mensaje= array('bEsValido' =>$oRespuesta->bEsValido, 'respuesta' => $oRespuesta->sMensaje);
            //   echo json_encode($mensaje,JSON_FORCE_OBJECT);
            // $oLog->EscribeLog("ERROR",$e->getMessage(),$e->getCode(),$e->getLine());
            //  exit();

        }
    }




    public function ingresarDescuento()
    {
    
    }

    public function RebajaStock($codigoProducto,$cantidad)
{
   
    $this->oUnidadTrabajo->ProductosVentaRepositorio()->RebajaStock($codigoProducto,$cantidad);
    
}

}

?>