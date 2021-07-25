<?php

namespace App\Repositorio;

use App\Models\Ventas;

class VentasRepositorio extends Repositorio implements IVentasRepositorio
{
    public function __construct(Ventas $model)
    {
        parent::__construct($model);
    }
}

?>