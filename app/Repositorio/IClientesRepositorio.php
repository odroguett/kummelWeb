<?php 
namespace App\Repositorio;

interface IClientesRepositorio
{
    public function ObtieneClientesIDUsuario($idUsuario);
    public function BorrarCliente($idCliente);
}

?>