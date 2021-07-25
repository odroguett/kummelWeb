<?php

namespace App\Repositorio;
use App\Models\Clientes;

class ClientesRepositorio extends Repositorio implements IClientesRepositorio
{
    public function __construct(Clientes $model)
    {
        parent::__construct($model);
    }
}

?>