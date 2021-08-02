<?php
namespace App\Negocio\Implementacion;
use App\Negocio\Interfaces\IComprar;
use App\OTD\ComprarOtd;
use App\Repositorio\IUnidadTrabajo;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class Comprar implements IComprar
{
  private $oUDT;

  public function __construct(IUnidadTrabajo $_oUDT  )
  {
      $this->oUDT =  $_oUDT;
  }
  
    public function agregarDatosCompra(Request $request)
    {
      
    
      $arrayCarrito= collect($request->input('arrayCarrito'));
      
      $collStock=collect(['codigoProducto','stock']);
      
      $datosCompraOtd = new ComprarOtd();
      foreach($arrayCarrito  as  $value)
        { 
          if(isset($value))
          {
            $stock= $this->oUDT->RawQueryRepositorio()->revisaStock(trim($value['CodigoProducto']));
            $collStock = $collStock->combine([$value['CodigoProducto'], $stock]);
            $datosCompraOtd->arrayCarrito=$value;
          }   
        }
        $datosCompraOtd->arrayStock =$collStock;
        $datosCompraOtd->arrayCarrito=collect($arrayCarrito);
        $datosCompraOtd->direccion=$request->input('direccion');
        $datosCompraOtd->comuna=$request->input('comuna');
        $datosCompraOtd->ciudad=$request->input('ciudad');
        $datosCompraOtd->region=$request->input('region');  
        $datosCompraOtd->departamento=$request->input('departamento');
        $datosCompraOtd->idDespacho=$request->input('idDespacho');
       
        return  $datosCompraOtd;
        
       

    }
    
}

?>