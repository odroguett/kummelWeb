<?php

namespace App\Repositorio;

use App\Models\TipoDespacho;

class TipoDespachoRepositorio extends Repositorio implements ITipoDespachoRepositorio
{
    public function __construct(TipoDespacho $model)
    {
        parent::__construct($model);
    }
}

?>