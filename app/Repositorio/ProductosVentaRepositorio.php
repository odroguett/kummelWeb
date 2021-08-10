<?php

namespace App\Repositorio;
use App\Models\ProductosVenta;
use Illuminate\Support\Facades\DB;

class ProductosVentaRepositorio extends Repositorio implements IProductosVentaRepositorio
{
    public function __construct(ProductosVenta $model)
    {
        parent::__construct($model);
    }

    public function obtieneProductosDestacados()
{

    return  DB::table('PRODUCTOS_VENTA')
            ->join('UNIDADES','PRODUCTOS_VENTA.ID_UNIDAD','=','UNIDADES.ID_UNIDAD')
            ->join ('CATEGORIAS','PRODUCTOS_VENTA.ID_CATEGORIA','CATEGORIAS.ID_CATEGORIA')
            ->where('PRODUCTOS_VENTA.DESTACADO','=','-1')
            ->select('UNIDADES.*','PRODUCTOS_VENTA.*','CATEGORIAS.DESCRIPCION AS DESCRIPCION_CATEGORIA')
            ->get();
                    
}

public function obtienePrecioProductos($sCategoria)
{
    
    return  DB::table('PRODUCTOS_VENTA')
    ->join('UNIDADES','PRODUCTOS_VENTA.ID_UNIDAD','=','UNIDADES.ID_UNIDAD')
    ->join ('CATEGORIAS','PRODUCTOS_VENTA.ID_CATEGORIA','CATEGORIAS.ID_CATEGORIA')
    ->where('CATEGORIAS.ID_CATEGORIA','=',$sCategoria)
    ->select('UNIDADES.*','PRODUCTOS_VENTA.*','CATEGORIAS.DESCRIPCION AS DESCRIPCION_CATEGORIA')
    ->orderBy('PRODUCTOS_VENTA.ID_PRODUCTO')
    ->get();

}


public function obtieneDisponibleProductos($sProducto)
{
    
    return  DB::table('PRODUCTOS_VENTA')
    ->join('UNIDADES','PRODUCTOS_VENTA.ID_UNIDAD','=','UNIDADES.ID_UNIDAD')
    ->where('PRODUCTOS_VENTA.ID_PRODUCTO','=',$sProducto)
    ->select('UNIDADES.*','PRODUCTOS_VENTA.*')
    ->get();

}

public function obtieneProductosRelacionados($sProducto)
{
    
    return  DB::table('PRODUCTOS_VENTA')
    ->join('UNIDADES','PRODUCTOS_VENTA.ID_UNIDAD','=','UNIDADES.ID_UNIDAD')
    ->join ('CATEGORIAS','PRODUCTOS_VENTA.ID_CATEGORIA','CATEGORIAS.ID_CATEGORIA')
    ->where('PRODUCTOS_VENTA.STOCK','>',0)
    ->where('PRODUCTOS_VENTA.RELACIONADO','=',$sProducto)
    ->select('UNIDADES.*','PRODUCTOS_VENTA.*','CATEGORIAS.*')
    ->orderBy('PRODUCTOS_VENTA.ID_PRODUCTO')
    ->get();

}

public function RebajaStock($codigoProducto,$cantidad)
{
    
    $productosVenta = $this->buscar($codigoProducto);
    $productosVenta->STOCK = $productosVenta->STOCK - $cantidad;
    $this->InsertarIndividual($productosVenta);
    
}

}

?>