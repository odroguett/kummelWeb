<?php

namespace App\Repositorio;

use App\Models\Despachos;
use Illuminate\Support\Facades\DB;

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

    public function ObtieneCabeceraDespacho($idDespacho)
    {

     return DB::table('DESPACHOS')
            ->join('VENTAS','DESPACHOS.ID_DESPACHO','VENTAS.ID_DESPACHO')
            ->join('TIPO_PAGO','VENTAS.ID_TIPO_PAGO','TIPO_PAGO.ID_TIPO_PAGO')
            ->join('TIPO_DESPACHO','DESPACHOS.ID_TIPO_DESPACHO','TIPO_DESPACHO.ID_TIPO_DESPACHO')
            ->where('DESPACHOS.ID_DESPACHO','=',$idDespacho)
            ->select('DESPACHOS.*','VENTAS.*','TIPO_PAGO.DESCRIPCION AS DESCRIPCION_TIPO_PAGO',
                    'TIPO_DESPACHO.DESCRIPCION AS DESCRIPCION_TIPO_DESPACHO')
            ->get();

    }
   
}
  
   


?>