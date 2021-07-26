<?php 
use Illuminate\Support\Facades\DB;
class RawQueryRepositorio  implements IRawQueryRepositorio
{
public function obtieneProductosDestacados()
{
$productosDestacados = DB::table('PRODUCTOS_VENTA PV')
                           ->join('UNIDADES U','U.UNIDAD','=','VP.UNIDAD')
                           ->join ('CATEGORIAS C','C.ID_CATEGORIA','PD.ID_CATEGORIA')
                           ->where('VP.DESTACADO','=','-1')
                           ->select('U.*','PV.*','C.*');

}

}

?>