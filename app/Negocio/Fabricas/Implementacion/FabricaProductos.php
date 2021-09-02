<?php
namespace App\Negocio\Fabricas\Implementacion;
use App\Negocio\Fabricas\Interfaces\IFabricaProductos;
use App\Negocio\Implementacion\Productos;
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

public function ProductosBodega()
{
return new ProductosBodega();

}

public function Productos()
{
return new Productos($this->oCategorias,$this->oUnidadTrabajo, $this->oUnidades);

}

public function ProductosVenta()
{
    return new ProductosVenta($this->oCategorias,$this->oUnidadTrabajo, $this->oUnidades);
    
}

public function ProductosElaborados()
{
return new ProductosElaborados();

}

}

?>