<?php

namespace App\Repositorio;
use App\Models\Productos;
use App\Models\ProductosVenta;

class ProductosVentaRepositorio extends Repositorio implements IProductosVentaRepositorio
{
    public function __construct(ProductosVenta $model)
    {
        parent::__construct($model);
    }
}

?>