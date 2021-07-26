<?php
namespace App\Negocio\Fabricas\Implementacion;
use App\Negocio\Fabricas\Interfaces\IFabricaProductos;
use App\Negocio\Implementacion\ProductosVenta;
use App\Negocio\Implementacion\ProductosBodega;
use App\Negocio\Implementacion\ProductosElaborados;
use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IUnidades;
use App\Repositorio\IUnidadTrabajo;


class FabricaProductos implements IFabricaProductos
{
    private $oCategorias;
    private $oUnidadTrabajo;
    private $oUnidades;
    
public function __construct(ICategorias $_oCategorias, IUnidadTrabajo $_oUnidadTrabajo, IUnidades $_oUnidades )
{
    $this->oCategorias=$_oCategorias;
    $this->oUnidadTrabajo=$_oUnidadTrabajo;
    $this->oUnidades=$_oUnidades;
}

public function ConstruirProductosBodega()
{
$oProductosBodega = new ProductosBodega();
return  $oProductosBodega();
}

public function ConstruirProductosVenta()
{
    $oProductos = new ProductosVenta($this->oCategorias,$this->oUnidadTrabajo, $this->oUnidades);
    return  $oProductos(); 
}

public function ConstruirProductosElaborados()
{
    $oProductos = new ProductosElaborados();
    return  $oProductos(); 
}

}

?>