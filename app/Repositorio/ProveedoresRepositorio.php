<?php

namespace App\Repositorio;
use App\Models\Proveedores;

class ProveedoresRepositorio extends Repositorio implements IProveedoresRepositorio
{
    public function __construct(Proveedores $model)
    {
        parent::__construct($model);
    }
}

?>