<?php


namespace App\Http\Controllers;


use App\Negocio\Fabricas\Interfaces\IFabricaProductos;
use App\Negocio\Implementacion\ConfigPagoFlow;
use App\Negocio\Interfaces\IFlowApi;
use App\Negocio\Interfaces\IGeneraPDF;
use App\Negocio\Interfaces\IVentas;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Process\ExecutableFinder;

class KummelControllers extends Controller
{
  private $oFabricaProductos;
  private $oVentas;
  

  

 public function __construct(IFabricaProductos  $_oFabricaProductos,IVentas $_oVentas, IGeneraPDF $_oGeneraPDF, IFlowApi $_oFlowApi )
 {
  $this->oFabricaProductos = $_oFabricaProductos;
  $this->oVentas =$_oVentas;
  $this->oGeneraPDF = $_oGeneraPDF;
  
 }

    public function home()
    {
     return view('kummel.home',['productosDestacados' =>  $this->oFabricaProductos->ProductosVenta()->obtenerProductosDestacados()],
               ['topVentas' =>  $this->oVentas->obtieneTopVentas()]);
    }

    public function CargaVistaContacto()
    {
     return view('kummel.contacto');
    }

    public function recetas()
    {
     return view('kummel.recetas');
    }
    public function condiciones()
    {
     return view('kummel.condiciones');
    }

    public function preguntasFrecuentes()
    {
     return view('kummel.preguntasFrecuentes');
    }
    public function dashboard()
    {
     return view('/dashboard');
    }

    
  
}
