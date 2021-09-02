<?php

namespace App\Repositorio;
use App\Models\Productos;

class ProductosRepositorio extends Repositorio implements IProductosRepositorio
{
    public function __construct(Productos $model)
    {
        parent::__construct($model);
    }

    public function obtieneProductos()
    {

        return $this->todos();
    }
}

?>