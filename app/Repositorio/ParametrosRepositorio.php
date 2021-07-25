<?php

namespace App\Repositorio;
use App\Models\Parametros;

class ParametrosRepositorio extends Repositorio implements IParametrosRepositorio
{
    public function __construct(Parametros $model)
    {
        parent::__construct($model);
    }
}

?>