<?php 
namespace App\Repositorio;
use Illuminate\Support\Facades\DB;
class RawQueryRepositorio  implements IRawQueryRepositorio
{
public function obtieneProductosDestacados()
{

    return  DB::table('PRODUCTOS_VENTA')
            ->join('UNIDADES','PRODUCTOS_VENTA.ID_UNIDAD','=','UNIDADES.ID_UNIDAD')
            ->join ('CATEGORIAS','PRODUCTOS_VENTA.ID_CATEGORIA','CATEGORIAS.ID_CATEGORIA')
            ->where('PRODUCTOS_VENTA.DESTACADO','=','-1')
            ->select('UNIDADES.*','PRODUCTOS_VENTA.*','CATEGORIAS.*')
            ->get();
                          


}

}

?>