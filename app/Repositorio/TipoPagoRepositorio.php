<?php

namespace App\Repositorio;

use App\Models\TipoPago;

class TipoPagoRepositorio extends Repositorio implements ITipoPagoRepositorio
{
    public function __construct(TipoPago $model)
    {
        parent::__construct($model);
    }
}

?>