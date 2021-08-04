<?php

namespace App\Repositorio;

use App\Models\Despachos;

class DespachosRepositorio extends Repositorio implements IDespachosRepositorio
{
    public function __construct(Despachos $model)
    {
        parent::__construct($model);
    }

    public function ObtieneDatosDespacho($idDespacho)
    {
    
    return $this->buscar($idDespacho);

    }
   
}
  
   


?>