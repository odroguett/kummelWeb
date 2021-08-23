<?php

namespace App\Repositorio;
use App\Models\Clientes;
use Illuminate\Support\Facades\DB;

class ClientesRepositorio extends Repositorio implements IClientesRepositorio
{
    public function __construct(Clientes $model)
    {
        parent::__construct($model);
    }

    public function ObtieneClientesIDUsuario($idUsuario)
    {

     return DB::table('CLIENTES')
            
            ->where('CLIENTES.ID_USUARIO','=',$idUsuario)
            ->select('CLIENTES.*')
            ->get();

    }
}

?>