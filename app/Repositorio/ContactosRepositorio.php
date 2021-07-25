<?php

namespace App\Repositorio;

use App\Models\Contactos;

class ContactosRepositorio extends Repositorio implements IContactosRepositorio
{
    public function __construct(Contactos $model)
    {
        parent::__construct($model);
    }
}

?>