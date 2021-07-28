<?php

namespace App\Repositorio;
use App\Models\Categorias;

class CategoriaRepositorio extends Repositorio implements ICategoriaRepositorio
{
    public function __construct(Categorias $model)
    {
        parent::__construct($model);
    }

     public function obtieneCategorias()
     {
        return $this->todos();

     }

}

?>