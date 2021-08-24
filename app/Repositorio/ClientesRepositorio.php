<?php

namespace App\Repositorio;
use App\Models\Clientes;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

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

    public function BorrarCliente($idCliente)
    {
        DB::table('CLIENTES')->where('ID_CLIENTE', '=', $idCliente)->delete();

    }
}

?>