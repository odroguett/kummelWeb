<?php

namespace App\Repositorio;

use App\Models\DetalleProductosVenta;
use App\Models\Ventas;
use Illuminate\Support\Facades\DB;

class VentasRepositorio extends Repositorio implements IVentasRepositorio
{
    public function __construct(Ventas $model)
    {
        parent::__construct($model);
    }


    public function InsertarDetallePago(DetalleProductosVenta $detalleProductoVentas)
    {
        
    $this->InsertarIndividual($detalleProductoVentas);
     
    }


    public function  obtieneTopVentas()
    {

        return  DB::table('VENTAS')
        ->groupBy('PRODUCTOS_VENTA.PRECIO_VENTA','DETALLE_PRODUCTOS_VENTA.ID_PRODUCTO','PRODUCTOS_VENTA.STOCK',
                'PRODUCTOS_VENTA.IMAGEN1','PRODUCTOS_VENTA.IMAGEN2','PRODUCTOS_VENTA.IMAGEN3','PRODUCTOS_VENTA.DESCRIPCION','UNIDADES.CODIGO_UNIDAD',
                 'UNIDADES.TAMANO','UNIDADES.DESCRIPCION_UNIDAD')
        ->offset(0)
        ->limit(12)
        ->join('DETALLE_PRODUCTOS_VENTA','VENTAS.ID_DETALLE','=','DETALLE_PRODUCTOS_VENTA.ID_DETALLE')
        ->join ('PRODUCTOS_VENTA','PRODUCTOS_VENTA.ID_PRODUCTO','DETALLE_PRODUCTOS_VENTA.ID_PRODUCTO')
        ->join ('UNIDADES','PRODUCTOS_VENTA.ID_UNIDAD','UNIDADES.ID_UNIDAD')
        ->select('PRODUCTOS_VENTA.PRECIO_VENTA','DETALLE_PRODUCTOS_VENTA.ID_PRODUCTO','PRODUCTOS_VENTA.STOCK',
                'PRODUCTOS_VENTA.IMAGEN1','PRODUCTOS_VENTA.IMAGEN2','PRODUCTOS_VENTA.IMAGEN3','PRODUCTOS_VENTA.DESCRIPCION','UNIDADES.CODIGO_UNIDAD',
                'UNIDADES.TAMANO','UNIDADES.DESCRIPCION_UNIDAD',DB::raw('SUM(DETALLE_PRODUCTOS_VENTA.CANTIDAD) AS CANTIDAD'))
                ->get();
               
        
        
        
     
    }

    public function obtieneDatosVentaProducto($sCodigoProducto)
    {

        return  DB::table('PRODUCTOS_VENTA')
        ->join('UNIDADES','PRODUCTOS_VENTA.ID_UNIDAD','=','UNIDADES.ID_UNIDAD')
        ->where('PRODUCTOS_VENTA.ID_PRODUCTO','=',$sCodigoProducto)
        ->select('UNIDADES.*','PRODUCTOS_VENTA.*')
        ->get();
                
    }

   public function InsertarCabeceraPago($idDespacho,$totalProductosPago,$idTipoPago,$totalPago,$fechaVenta)
    {
       
      $dmIdDetalle=DB::table('VENTAS')->count();
      $oVentas = new Ventas();
      if($dmIdDetalle ==0)
        {

            $dmIdDetalle = 1;
        }
        else
        {
            $dmIdDetalle = $dmIdDetalle  + 1;
        }
        $oVentas->ID_DETALLE=$dmIdDetalle;
        $oVentas->TOTAL_PRODUCTOS=$totalProductosPago;
        $oVentas->TOTAL_VENTA=$totalPago;
        $oVentas->ID_TIPO_PAGO=$idTipoPago;
        $oVentas->ID_DESPACHO=$idDespacho;
        $oVentas->FECHA_VENTA=$fechaVenta;
        $oVentas->ID_CANAL=1; 
        $oVentas->save();
         
         return $dmIdDetalle;
        
    }
    
 
}

?>