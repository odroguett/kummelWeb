<?php


namespace App\Http\Controllers;

use App\Repositorio\IUnidadTrabajo;

class KummelControllers extends Controller
{
  private $oUnidadTrabajo;
 public function __construct(IUnidadTrabajo  $_oUnidadTrabajo)
 {
  $this->oUnidadTrabajo = $_oUnidadTrabajo;
 }

    public function home()
    {

    $categorias= $this->oUnidadTrabajo->CategoriasRepositorio();

     return view('kummel.home',['categorias' => $categorias->todos()]);

        

      // echo('Hola');
        
    }
}
