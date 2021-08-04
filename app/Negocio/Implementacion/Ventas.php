<?php 
namespace App\Negocio\Implementacion;

use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IDespacho;
use App\Negocio\Interfaces\IUnidades;
use App\Negocio\Interfaces\IVentas;
use App\OTD\RespuestaOtd;
use App\Repositorio\IUnidadTrabajo;
use Illuminate\Http\Request;

class Ventas implements IVentas

{
    private $oCategorias;
    private $oUnidadTrabajo;
    private $oUnidades;
    private $oDespachos;
    
    public function __construct(ICategorias $_oCategorias, IUnidadTrabajo $_oUnidadTrabajo, IUnidades $_oUnidades,IDespacho $_oDespachos )
    {
        $this->oCategorias=$_oCategorias;
        $this->oUnidadTrabajo=$_oUnidadTrabajo;
        $this->oUnidades=$_oUnidades;
        $this->oDespachos=$_oDespachos;
    }

    
    public function realizarPagoVenta(Request $request)
    {
        $oRespuesta = new RespuestaOtd();
        $oRespuesta->bEsValido=true;
        $oRespuesta->sMensaje="Pago ingresado correctamente, nos contactaremos para coordinar el despacho";
        $arrayPago = $request->input('arrayPago');
        $idDespacho = $request->input('idDespacho');
        $idTipoDespacho = $request->input('tipoDespacho');
        $totalProductosPago = $request->input('totalProductosPago');
        $totalPago = $request->input('totalPago');
        $idTipoPago =$request->input('tipoPago');

        $totalConDespacho =0;
        $sNombreProducto="";
        $fechaVenta ="";
        
        if($this->ValidaPago($arrayPago,$sNombreProducto))
        {
            
            $parametros = $this->oUnidadTrabajo->ParametrosRepositorio()->obtieneParametros();
           
            $costoEnvio =   $parametros->COSTO_ENVIO;
            $topeCostoEnvio =   $parametros->TOPE_COSTO_ENVIO;
            if($totalPago < $topeCostoEnvio)
            {
                $totalConDespacho = $totalPago + $costoEnvio;
            
            }
            else
            {
                $totalConDespacho = $totalPago; 
            
            }
            $fechaVenta = date('Y-m-d');
            $idDetalle= $this->oUnidadTrabajo->VentasRepositorio()->InsertarCabeceraPago($idDespacho,$totalProductosPago,$idTipoPago,$totalConDespacho, $fechaVenta);
            $totalConDespacho =0;
            $this->oDespachos->ActualizaTipoDespacho( $idDespacho,$idTipoDespacho);
            
            
           
        }

    }

    public function obtieneTopVentas()
    {

    return  $this->oUnidadTrabajo->VentasRepositorio()->obtieneTopVentas();
    }

    public function finalizarPago()
    {

  //  return  $this->oUnidadTrabajo->VentasRepositorio()->obtieneTopVentas();
    }


   private function ValidaPago($arrayPago,$sNombreProducto)
{
        $bOK = true;

foreach($arrayPago as  $value)
{ 
   
    $codigoProducto=  $value['CodigoProducto'];
    
    $datosVentaProducto=  $this->oUnidadTrabajo->VentasRepositorio()->obtieneDatosVentaProducto($codigoProducto);
    
    foreach($datosVentaProducto as  $valueProducto)
    {
        
        $stock = $valueProducto->STOCK;
        $sNombreProducto = $valueProducto->DESCRIPCION . ' ' . $valueProducto->TAMANO . $valueProducto->CODIGO_UNIDAD;


        if($stock ==0)
        {

            $bOK =false;
        }
    }
    
}

return $bOK ;
}

}
?>
