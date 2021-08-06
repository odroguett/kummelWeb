<?php 
namespace App\Repositorio;
interface IRawQueryRepositorio
{
 public function BuscarProductos($sPatron);

 public function revisaStock($sCodigoProducto);


}

?>