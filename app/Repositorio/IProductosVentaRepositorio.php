<?php 
namespace App\Repositorio;

interface IProductosVentaRepositorio
{
    public function obtieneProductosDestacados();
    public function obtienePrecioProductos($sCategoria);
    public function obtieneDisponibleProductos($sProducto);
    public function obtieneProductosRelacionados($sProducto);
    public function RebajaStock($codigoProducto,$cantidad);
    
}

?>