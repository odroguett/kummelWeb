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
use RawQueryRepositorio;

class UnidadTrabajo implements IUnidadTrabajo
{

public function CategoriasRepositorio()
{
   $model = new Categorias();
  $oRespuesta = new CategoriaRepositorio($model);
  return $oRespuesta;
}

public function CanalVentaRepositorio()
{
   $model = new CanalVenta();
  $oRespuesta = new CanalVentaRepositorio($model);
  return $oRespuesta;
}


public function ClientesRepositorio()
{
   $model = new Clientes();
  $oRespuesta = new ClientesRepositorio($model);
  return $oRespuesta;
}

public function ComentariosRepositorio()
{
   $model = new Comentarios();
  $oRespuesta = new ComentariosRepositorio($model);
  return $oRespuesta;
}
public function ContactosRepositorio()
{
   $model = new Contactos();
  $oRespuesta = new ContactosRepositorio($model);
  return $oRespuesta;
}
public function DespachosRepositorio()
{
   $model = new Despachos();
  $oRespuesta = new DespachosRepositorio($model);
  return $oRespuesta;
}
public function DetalleProductosVentaRepositorio()
{
   $model = new DetalleProductosVenta();
  $oRespuesta = new DetalleProductosVentaRepositorio($model);
  return $oRespuesta;
}

public function ParametrosRepositorio()
{
   $model = new Parametros();
  $oRespuesta = new ParametrosRepositorio($model);
  return $oRespuesta;
}
public function ProductosRepositorio()
{
   $model = new Productos();
  $oRespuesta = new ProductosRepositorio($model);
  return $oRespuesta;
}

public function ProductosVentaRepositorio()
{
   $model = new ProductosVenta();
  $oRespuesta = new ProductosVentaRepositorio($model);
  return $oRespuesta;
}

public function ProveedoresRepositorio()
{
   $model = new Proveedores();
  $oRespuesta = new ProveedoresRepositorio($model);
  return $oRespuesta;
}
public function TipoDespachoRepositorio()
{
  $model = new TipoDespacho();
  $oRespuesta = new TipoDespachoRepositorio($model);
  return $oRespuesta;

}
public function TipoPagoRepositorio()
{
  $model = new TipoPago();
  $oRespuesta = new TipoPagoRepositorio($model);
  return $oRespuesta;  
}
 
public function VentasRepositorio()
{
  $model = new TipoPago();
  $oRespuesta = new TipoPagoRepositorio($model);
  return $oRespuesta;  
  
}

public function RawQueryRepositorio()
{
  $oRespuesta = new RawQueryRepositorio();
  return $oRespuesta;  
  
}

}

?>