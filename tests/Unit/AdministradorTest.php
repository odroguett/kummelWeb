<?php

namespace Tests\Unit;

use App\Negocio\Implementacion\Administrador;
use App\Negocio\Implementacion\Categorias;
use App\Negocio\Interfaces\ICategorias;
use App\Repositorio\IUnidadTrabajo;
use App\Repositorio\UnidadTrabajo;
use PHPUnit\Framework\TestCase;

class AdministradorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    private $oUDT;
    private $oCategorias;
  
    public function __construct( )
    {
       
  
    }

    public function test_categorias()
    {
        $this->oUDT =  new IUnidadTrabajo();
        $this->oCategorias = new Categorias($this->oUDT);
        $oAdministrador = new Administrador($this->oUDT,   $this->oCategorias);
        $this->assertIsObject($oAdministrador);
    }
}
