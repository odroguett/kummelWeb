<?php
namespace App\Repositorio;

use App\Models\Categorias;
use Prophecy\Call\Call;

class UnidadTrabajo implements IUnidadTrabajo
{

public $oCategoriaRepositorio;

public function CategoriasRepositorio()
{
   $model = new Categorias();
  $oCategoriaRepositorio = new CategoriaRepositorio($model);
  return $oCategoriaRepositorio;
}

}

?>