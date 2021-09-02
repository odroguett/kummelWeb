<?php
namespace App\Repositorio;
use App\Models\CanalVenta;
use App\Models\Categorias;

use App\Models\Clientes;
use App\Models\Comentarios;
use App\Models\Contactos;
use App\Models\Despachos;
use App\Models\DetalleProductosVenta;
use App\Models\Parametros;
use App\Models\Productos;
use App\Models\ProductosVenta;
use App\Models\Proveedores;
use App\Models\TipoDespacho;
use App\Models\TipoPago;
use App\Models\Unidades;
use App\Models\Ventas;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;


class UnidadTrabajo implements IUnidadTrabajo
{

public function CategoriasRepositorio()
{
   $model = new Categorias();
  return new CategoriaRepositorio($model);
}

public function CanalVentaRepositorio()
{
   $model = new CanalVenta();
  return new CanalVentaRepositorio($model);
  
}


public function ClientesRepositorio()
{
   $model = new Clientes();
  return new ClientesRepositorio($model);
  
}

public function ComentariosRepositorio()
{
   $model = new Comentarios();
   return new ComentariosRepositorio($model);
  
}
public function ContactosRepositorio()
{
   $model = new Contactos();
   return new ContactosRepositorio($model);
  
}
public function DespachosRepositorio()
{
   $model = new Despachos();
   return new DespachosRepositorio($model);
  
}
public function DetalleProductosVentaRepositorio()
{
   $model = new DetalleProductosVenta();
   return new DetalleProductosVentaRepositorio($model);
  
}

public function ParametrosRepositorio()
{
   $model = new Parametros();
  return new ParametrosRepositorio($model);
  
}
public function ProductosRepositorio()
{
   $model = new Productos();
  return new ProductosRepositorio($model);
  
}

public function ProductosVentaRepositorio()
{
   $model = new ProductosVenta();
  return new ProductosVentaRepositorio($model);
  
}

public function ProveedoresRepositorio()
{
   $model = new Proveedores();
  return new ProveedoresRepositorio($model);
  
}
public function TipoDespachoRepositorio()
{
  $model = new TipoDespacho();
  return new TipoDespachoRepositorio($model);
  

}
public function TipoPagoRepositorio()
{
  $model = new TipoPago();
  return new TipoPagoRepositorio($model);
  
}
 
public function VentasRepositorio()
{
  $model = new Ventas();
  return new VentasRepositorio($model);
  
  
}

 
public function UnidadesRepositorio()
{
  $model = new Unidades();
  return new UnidadesRepositorio($model);
  
  
}

public function RawQueryRepositorio()
{
  return new RawQueryRepositorio();
  
  
}

}

?>