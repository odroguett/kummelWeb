<?php 
namespace App\Repositorio;

interface IVentasRepositorio
{
public function obtieneTopVentas();
public function obtieneDatosVentaProducto($sCodigoProducto);
function InsertarCabeceraPago($idDespacho,$totalProductosPago,$idTipoPago,$totalPago,$fechaVenta);
    
}

?>