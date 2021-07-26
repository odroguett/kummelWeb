<?php 

namespace App\Repositorio;

interface IRepositorio
{
    public function todos();

    public function crear(array  $data);

    public function actualizar(array $data, $id);

    public function eliminar($id);

    public function buscar($id);

        

}
?>