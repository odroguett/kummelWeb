<?php 
namespace App\Repositorio;

interface IDespachosRepositorio
{
public function ObtieneDatosDespacho($idDespacho);
public function ObtieneCabeceraDespacho($idDespacho);

 
}

?>