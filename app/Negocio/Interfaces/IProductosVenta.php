<?php
namespace App\Negocio\Interfaces;

interface IProductosVenta extends IProductos
{

    public function obtenerProductosDestacados();
    public function ingresarDescuento();
    public function AgregarProducto();
    public function EliminarProducto();
    public function ActualizarProducto();
    public function CargarProducto();
    public function obtieneDisponibleProductos($sProducto);
    
}
?>