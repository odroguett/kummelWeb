<?php
namespace App\Negocio\Implementacion;

use App\Mail\comprobanteKummel;
use App\Mail\ComprobantePago;
use App\Models\DetalleProductosVenta;
use App\Negocio\Fabricas\Interfaces\IFabricaProductos;
use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IDespacho;
use App\Negocio\Interfaces\IFlowApi;
use App\Negocio\Interfaces\IGeneraPDF;
use App\Negocio\Interfaces\IUnidades;
use App\Negocio\Interfaces\IVentas;
use App\Negocio\Utiles\ConfigPagoFlow;
use App\OTD\ComprobantePagoMailOtd;
use App\OTD\DatosDespachoOtd;
use App\OTD\RespuestaOtd;
use App\Repositorio\IUnidadTrabajo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Ventas implements IVentas

{
    private $oCategorias;
    private $oUnidadTrabajo;
    private $oUnidades;
    private $oDespachos;
    private $oFabricaProductos;
    private $oGeneraPDF;
    private $oFlowApI;

    public function __construct(ICategorias $_oCategorias, IUnidadTrabajo $_oUnidadTrabajo, IUnidades $_oUnidades,
                                 IDespacho $_oDespachos, IFabricaProductos $_oFabricaProductos,
                                 IGeneraPDF $_oGeneraPDF, IFlowApi $_oFlowApi  )
    {
        $this->oCategorias=$_oCategorias;
        $this->oUnidadTrabajo=$_oUnidadTrabajo;
        $this->oUnidades=$_oUnidades;
        $this->oDespachos=$_oDespachos;
        $this->oFabricaProductos =$_oFabricaProductos;
        $this->oGeneraPDF =$_oGeneraPDF;
        $this->oFlowApI =$_oFlowApi;
    }


    public function realizarPagoVenta(Request $request)
    {
        $oRespuesta = new RespuestaOtd();


        $arrayPago = $request->input('arrayPago');
        $idDespacho = $request->input('idDespacho');
        $idTipoDespacho = $request->input('tipoDespacho');
        $totalProductosPago = $request->input('totalProductosPago');
        $totalPago = $request->input('totalPago');
        $idTipoPago =$request->input('tipoPago');
        $totalConDespacho =0;
        $sNombreProducto="";
        $fechaVenta ="";
        $oRespuesta->bEsValido=true;
        $oRespuesta->sMensaje='Generación de comprobante exitosa.';

        if($this->ValidaPago($arrayPago,$sNombreProducto))
        {

            $oRespuesta->bEsValido=true;
            $oRespuesta->sMensaje="Pago ingresado correctamente, nos contactaremos para coordinar el despacho";

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

        foreach($arrayPago as $value)
        {
            $oDetalleVentas = new DetalleProductosVenta();

            $cantidadProducto=  $value['Cantidad'];
            $codigoProducto=  $value['CodigoProducto'];
            $datosVentaProducto=  $this->oUnidadTrabajo->VentasRepositorio()->obtieneDatosVentaProducto($codigoProducto);

            foreach($datosVentaProducto as $valueProducto)
            {
                $precioVenta= $valueProducto->PRECIO_VENTA;

            }

            $this->oFabricaProductos->ProductosVenta()->RebajaStock($codigoProducto,$cantidadProducto);
            $oDetalleVentas->ID_DETALLE=$idDetalle;
            $oDetalleVentas->CANTIDAD=$cantidadProducto;
            $oDetalleVentas->VENTA= $precioVenta;
            $oDetalleVentas->ID_PRODUCTO= $codigoProducto;


            $this->oUnidadTrabajo->VentasRepositorio()->InsertarDetallePago( $oDetalleVentas);




        }


        if( $this->EnviarCorreoPago($idDespacho))
        {


        }



    }
    else
    {

        $oRespuesta->bEsValido=false;
        $oRespuesta->sMensaje="Pago Erroneo, por favor intente nuevamente.";
    }

    return $oRespuesta;

    }

    public function obtieneTopVentas()
    {

    return  $this->oUnidadTrabajo->VentasRepositorio()->obtieneTopVentas();
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



private function EnviarCorreoPago($idDespacho)
{
try{
    $oDatosDespacho = new DatosDespachoOtd;
    $comprobantePagoMail = new ComprobantePagoMailOtd;


    if($idDespacho !="")
{


    $oDatosDespacho =  $this->oDespachos->ObtieneDatosDespachoId($idDespacho);

    $comprobantePagoMail->idDespacho =$idDespacho;
    $comprobantePagoMail->sNombre = $oDatosDespacho->sNombre;

    $comprobantePagoMail->sComprobante = $this->oGeneraPDF->GenerarComprobantePagoPDF($idDespacho);
    Mail::to($oDatosDespacho->sEmail)->send(new comprobanteKummel($comprobantePagoMail));

    return true;
}
}
catch(Exception $e)
  {
    return false;
  }


}


public function pagoFlow(Request $request)
{
    $totalPago =0;
    $arrayPago = $request->input('arrayPago');
    $totalPago = $request->input('totalPago');
    $sNombreProducto="";

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

        $oDatosDespacho = new DatosDespachoOtd;
        $totalPago= $request->input('totalPago');
        $respuestaOtd = new RespuestaOtd;
        $respuestaOtd->bEsValido  = true;
        $oDatosDespacho =  $this->oDespachos->ObtieneDatosDespachoId($request->input('idDespacho'));

        //Prepara el arreglo de datos

        $params = array(
                "commerceOrder" => rand(1100,2000),
                "subject" => "Pago Kummel",
                "currency" => "CLP",
                "amount" =>  $totalConDespacho,
                "email" =>  $oDatosDespacho->sEmail,
                "paymentMethod" => 9,
                "urlConfirmation" => ConfigPagoFlow::get("BASEURL") . "confirmacion",
                "urlReturn" => ConfigPagoFlow::get("BASEURL") ."confirmacion"
                //, "optional" => $optional
            );
            //Define el metodo a usar
            $serviceName = "payment/create";

          try {


                // Instancia la clase FlowApi
                // Ejecuta el servicio

                $response = $this->oFlowApI->send($serviceName, $params,"POST");
                //Prepara url para redireccionar el browser del pagador
                $redirect = $response["url"] . "?token=" . $response["token"];

                header("location:$redirect");
                }

                catch (Exception $e) {
                    echo $e->getCode() . " - " . $e->getMessage();
                    $respuestaOtd->bEsValido  = false;
                    $respuestaOtd->sMensaje = $e->getCode() . " - " . $e->getMessage();
                    return  $respuestaOtd;
            }

              $respuestaOtd->url  = $redirect;
              return $respuestaOtd; // redirect($redirect);

    }

}

   public function confirmacion(Request $request)
   {
       return 'Exito';

   }

}
?>
