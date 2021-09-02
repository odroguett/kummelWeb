<?php
namespace App\Negocio\Interfaces;

use Illuminate\Http\Request;

interface IProductosVenta extends IProductos
{

    public function  obtenerProductosVenta();
    public function obtenerProductosDestacados();
    public function ingresarDescuento();
    public function AgregarProducto();
    public function EliminarProducto();
    public function ActualizarProducto();
    public function CargarProducto();
    public function obtieneDisponibleProductos($sProducto);
    public function RebajaStock($codigoProducto,$cantidad);
    public function DetalleProductosVenta(Request $request);
    
}
?>