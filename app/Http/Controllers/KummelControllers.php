<?php


namespace App\Http\Controllers;

use App\Negocio\Interfaces\IProductosVenta;


class KummelControllers extends Controller
{
  private $oProductosVenta;
 public function __construct(IProductosVenta  $_oProductosVenta)
 {
  $this->oProductosVenta = $_oProductosVenta;
 }

    public function home()
    {

    $categorias= $this->oProductosVenta->obtenerProductosDestacados();

     return view('kummel.home',['categorias' =>  $categorias]);

     
        
    }
}
