<?php

namespace App\Repositorio;
use App\Models\CanalVenta;

class CanalVentaRepositorio extends Repositorio implements ICanalVentaRepositorio
{
    public function __construct(CanalVenta $model)
    {
        parent::__construct($model);
    }
}

?>