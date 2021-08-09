<?php

namespace App\Repositorio;
use App\Models\DetalleProductosVenta;
use Illuminate\Support\Facades\DB;

class DetalleProductosVentaRepositorio extends Repositorio implements IDetalleProductosVentaRepositorio
{
    public function __construct(DetalleProductosVenta $model)
    {
        parent::__construct($model);
    }

    public function obtieneDetalleVentaProductos($idDespacho)
    {
        return DB::table('VENTAS')
        ->join('DETALLE_PRODUCTOS_VENTA','VENTAS.ID_DETALLE','DETALLE_PRODUCTOS_VENTA.ID_DETALLE')
        ->join('PRODUCTOS_VENTA','DETALLE_PRODUCTOS_VENTA.ID_PRODUCTO','PRODUCTOS_VENTA.ID_PRODUCTO')
        ->join('UNIDADES','PRODUCTOS_VENTA.ID_UNIDAD','UNIDADES.ID_UNIDAD')
        ->where('VENTAS.ID_DESPACHO','=',$idDespacho)
        ->select('VENTAS.*','PRODUCTOS_VENTA.*','DETALLE_PRODUCTOS_VENTA.VENTA',
                 'DETALLE_PRODUCTOS_VENTA.CANTIDAD','UNIDADES.DESCRIPCION_UNIDAD','UNIDADES.TAMANO')
        ->get();

    }

}

?>