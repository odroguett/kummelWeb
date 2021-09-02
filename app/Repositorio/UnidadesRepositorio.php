<?php

namespace App\Repositorio;
use App\Models\CanalVenta;
use App\Models\Unidades;

class UnidadesRepositorio extends Repositorio implements IUnidadRepositorio
{
    public function __construct(Unidades $model)
    {
        parent::__construct($model);
    }

    public function obtieneUnidades()
    {

        return $this->todos();
    }
}

?>