<?php 
namespace App\Negocio\Implementacion;

use App\Models\Clientes as ModelsClientes;
use App\Negocio\Interfaces\IClientes;
use App\OTD\RespuestaOtd;
use App\Repositorio\IUnidadTrabajo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Lexer\TokenEmulator\NullsafeTokenEmulator;

class Clientes implements IClientes
{
    private $oUnidadTrabajo;
    public function __construct( IUnidadTrabajo $_oUnidadTrabajo )
    {
        $this->oUnidadTrabajo=$_oUnidadTrabajo;
    }

    public function agregaClientes(Request $request)
    {
        
        $idCliente =null;
        $oClientes =  $this->oUnidadTrabajo->ClientesRepositorio()->ObtieneClientesIDUsuario($request->input('idUsuario'));
      
        
        if(isset($oClientes) && $oClientes->count() > 0)
        {
         
            
            foreach($oClientes as $val)
            {

                $idCliente = $val->ID_CLIENTE;
                $oClientes = null;
            }
            
          
        }
        else
        {
            
            $idCliente =DB::table('CLIENTES')->count() + 1;

        }
        $oClientes = new ModelsClientes();
        $oClientes->ID_CLIENTE =  $idCliente;
        $oClientes->NOMBRE = $request->input('nombre');
        $oClientes->APELLIDOS = $request->input('apellido');
        $oClientes->EMAIL = $request->input('email');
        $oClientes->TELEFONO = $request->input('telefono');
        $oClientes->DIRECCION = $request->input('direccion');
        $oClientes->COMUNA = $request->input('comuna');
        $oClientes->CIUDAD = $request->input('ciudad');
        $oClientes->REGION = $request->input('region');
        $oClientes->DEPARTAMENTO = $request->input('departamento');
        $oClientes->ID_USUARIO = $request->input('idUsuario');
        
        
        
        $this->oUnidadTrabajo->ClientesRepositorio()->BorrarCliente($idCliente);
        $this->oUnidadTrabajo->ClientesRepositorio()->InsertarIndividual($oClientes);
     

    }

    public function obtieneDireccionCliente( $idUsuario)
    {   
       
     return  $this->oUnidadTrabajo->ClientesRepositorio()->ObtieneClientesIDUsuario($idUsuario);
     

    }
    

}
?>