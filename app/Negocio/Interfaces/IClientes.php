<?php
namespace App\Negocio\Interfaces;
use Illuminate\Http\Request;

interface IClientes
{
    
    public function agregaClientes(Request $request);
}
?>