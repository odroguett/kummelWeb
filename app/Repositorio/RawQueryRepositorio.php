<?php
namespace App\Repositorio;

use Illuminate\Support\Facades\DB;
class RawQueryRepositorio  implements IRawQueryRepositorio
{
public function BuscarProductos($sPatron)
{


    return  DB::table('PRODUCTOS_VENTA')
    ->join ('UNIDADES','PRODUCTOS_VENTA.ID_UNIDAD','UNIDADES.ID_UNIDAD')
    ->select('PRODUCTOS_VENTA.*','UNIDADES.*')
    ->Where('PRODUCTOS_VENTA.DESCRIPCION','like','%' . $sPatron . '%' )
    ->orWhere('UNIDADES.TAMANO','like','%' . $sPatron . '%' )
    ->orWhere('UNIDADES.CODIGO_UNIDAD','like','%' . $sPatron . '%' )
    ->get();


}
public function revisaStock($sCodigoProducto)
{
    return  DB::table('PRODUCTOS_VENTA')
    ->Where('PRODUCTOS_VENTA.ID_PRODUCTO','=',$sCodigoProducto )
    ->value('STOCK');


}

}

?>
