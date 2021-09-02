<?php
namespace App\Http\Controllers;

use App\Negocio\Interfaces\IAdministrador;
use App\Negocio\Interfaces\ICategorias;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;


class CategoriasControllers extends Controller
{
  
    private $oCategorias;

  public function __construct(ICategorias $_oCategorias)
  {
    $oCategorias= $_oCategorias;

  }



 public function cargarCategorias(Request $request)
 {
     
    $categoria = collect(['categoria' => $request->input('categoria'),'descripcion' =>  $request->input('descripcion')]);

   return view('administrador.modificarCategorias',[ 'categoria'=> $categoria ]);

 }
 public function modificarCategoria(Request $request)
 {
     
    

 }
 

}