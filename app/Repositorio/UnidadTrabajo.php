<?php
namespace App\Repositorio;

use App\Models\Categorias;
use App\Models\TipoPago;
use Prophecy\Call\Call;

class UnidadTrabajo implements IUnidadTrabajo
{

public $oCategoriaRepositorio;
public $oTipoPagoRepositorio;

public function CategoriasRepositorio()
{
   $model = new Categorias();
  $oCategoriaRepositorio = new CategoriaRepositorio($model);
  return $oCategoriaRepositorio;
}



public function TipoPagoRepositorio()
{
   $model = new TipoPago();
  $oCategoriaRepositorio = new TipoPagoRepositorio($model);
  return $oCategoriaRepositorio;
}

}

?>