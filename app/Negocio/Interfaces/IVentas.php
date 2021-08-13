<?php 
namespace App\Negocio\Interfaces;

use Illuminate\Http\Request;

interface IVentas
{

public function realizarPagoVenta(Request $request);
public function obtieneTopVentas();
function pagoFlow(Request $request);
function confirmacion(Request $request);



}
?>
