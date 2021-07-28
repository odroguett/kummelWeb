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
        ->join('PRODUCTOS_VENTA','VENTAS.ID_PRODUCTO','=','PRODUCTOS_VENTA.ID_PRODUCTO')
        ->join ('CATEGORIAS','PRODUCTOS_VENTA.ID_CATEGORIA','CATEGORIAS.ID_CATEGORIA')
        ->where('PRODUCTOS_VENTA.DESTACADO','=','-1')
        ->select('UNIDADES.*','PRODUCTOS_VENTA.*','CATEGORIAS.*')
        ->get();
    }
}

?>