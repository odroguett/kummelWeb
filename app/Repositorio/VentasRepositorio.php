<?php

namespace App\Repositorio;

use App\Models\Ventas;
use Illuminate\Support\Facades\DB;

class VentasRepositorio extends Repositorio implements IVentasRepositorio
{
    public function __construct(Ventas $model)
    {
        parent::__construct($model);
    }

    public function  obtieneTopVentas()
    {

        return  DB::table('VENTAS')
        ->groupBy('PRODUCTOS_VENTA.PRECIO_VENTA','DETALLE_PRODUCTOS_VENTA.ID_PRODUCTO','PRODUCTOS_VENTA.STOCK',
                'PRODUCTOS_VENTA.IMAGEN','PRODUCTOS_VENTA.DESCRIPCION','UNIDADES.CODIGO_UNIDAD',
                 'UNIDADES.TAMANO','UNIDADES.DESCRIPCION_UNIDAD')
        ->offset(0)
        ->limit(12)
        ->join('DETALLE_PRODUCTOS_VENTA','VENTAS.ID_DETALLE','=','DETALLE_PRODUCTOS_VENTA.ID_DETALLE')
        ->join ('PRODUCTOS_VENTA','PRODUCTOS_VENTA.ID_PRODUCTO','DETALLE_PRODUCTOS_VENTA.ID_PRODUCTO')
        ->join ('UNIDADES','PRODUCTOS_VENTA.ID_UNIDAD','UNIDADES.ID_UNIDAD')
        ->select('PRODUCTOS_VENTA.PRECIO_VENTA','DETALLE_PRODUCTOS_VENTA.ID_PRODUCTO','PRODUCTOS_VENTA.STOCK',
                'PRODUCTOS_VENTA.IMAGEN','PRODUCTOS_VENTA.DESCRIPCION','UNIDADES.CODIGO_UNIDAD',
                'UNIDADES.TAMANO','UNIDADES.DESCRIPCION_UNIDAD',DB::raw('SUM(DETALLE_PRODUCTOS_VENTA.CANTIDAD) AS CANTIDAD'))
                ->get();
               
        
        
        
     
    }
}

?>