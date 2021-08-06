<?php

namespace App\Repositorio;
use App\Models\DetalleProductosVenta;

class DetalleProductosVentaRepositorio extends Repositorio implements IDetalleProductosVentaRepositorio
{
    public function __construct(DetalleProductosVenta $model)
    {
        parent::__construct($model);
    }
}

?>