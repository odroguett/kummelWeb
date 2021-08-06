<?php

namespace App\Repositorio;
use App\Models\Comentarios;

class ComentariosRepositorio extends Repositorio implements IComentariosRepositorio
{
    public function __construct(Comentarios $model)
    {
        parent::__construct($model);
    }
}

?>