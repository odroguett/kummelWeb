<?php 
namespace App\Repositorio;

use App\Models\DetalleProductosVenta;

interface IVentasRepositorio
{
public function obtieneTopVentas();
public function obtieneDatosVentaProducto($sCodigoProducto);
public function InsertarCabeceraPago($idDespacho,$totalProductosPago,$idTipoPago,$totalPago,$fechaVenta);
public function InsertarDetallePago(DetalleProductosVenta $detalleProductoVentas);
    
}

?>