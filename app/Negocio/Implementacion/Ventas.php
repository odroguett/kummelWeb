<?php 
namespace App\Negocio\Implementacion;

use App\Mail\ComprobantePago;
use App\Models\DetalleProductosVenta;
use App\Negocio\Fabricas\Interfaces\IFabricaProductos;
use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IDespacho;
use App\Negocio\Interfaces\IUnidades;
use App\Negocio\Interfaces\IVentas;
use App\OTD\ComprobantePagoMailOtd;
use App\OTD\RespuestaOtd;
use App\Repositorio\IUnidadTrabajo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Ventas implements IVentas

{
    private $oCategorias;
    private $oUnidadTrabajo;
    private $oUnidades;
    private $oDespachos;
    private $oFabricaProductos;
    
    public function __construct(ICategorias $_oCategorias, IUnidadTrabajo $_oUnidadTrabajo, IUnidades $_oUnidades,IDespacho $_oDespachos, IFabricaProductos $_oFabricaProductos )
    {
        $this->oCategorias=$_oCategorias;
        $this->oUnidadTrabajo=$_oUnidadTrabajo;
        $this->oUnidades=$_oUnidades;
        $this->oDespachos=$_oDespachos;
        $this->oFabricaProductos =$_oFabricaProductos;
    }

    
    public function realizarPagoVenta(Request $request)
    {
        $oRespuesta = new RespuestaOtd();
        $oDetalleVentas = new DetalleProductosVenta();
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
            
        foreach($arrayPago as $value)
        {
            
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
             $comprobantePagoMail = new ComprobantePagoMailOtd;
             $comprobantePagoMail->asunto="hola";
            // dd("holaaa");
            Mail::to("odroguett@gmail.com")->send(new ComprobantePago($comprobantePagoMail));
        }
            
           
        }

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


/* 
function EnviarCorreoPago($idDespacho)
{
try{
    $oMail = new envioMail();
    $oCatalogo= new catalogoBD();
    $sNombre="";
    $sDestinarioEmail="";
    $sAsunto="";
    
    
    if($idDespacho !="")
{
    $Listafilas=$oCatalogo->obtieneDatosDespacho($idDespacho);
    foreach($Listafilas as $filas => $value)
{
   $sNombre = $value['NOMBRE'];
   $sDestinarioEmail = $value['EMAIL'];   


}
$oComprobantePago = new ComprobantePagoMail();
$comprobantePDF = $oComprobantePago->GeneraComprobantePago($idDespacho);
$sAsunto = " Su pedido con codigo " . $idDespacho . " recepcionado";
$sCuerpo = "Estimado: $sNombre \n";
$sCuerpo .=" Hemos recibido su pedido \n ";
$sCuerpo .=" Nos podremos en contacto con usted \n ";
$oMail->EnviarCorreo($sAsunto,$sCuerpo,$sDestinarioEmail,$comprobantePDF);
    return true;
}
}
catch(Exception $e)
  {
    return false;
  }


}
 */


}
?>
