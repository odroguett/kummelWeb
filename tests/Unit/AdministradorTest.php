<?php

namespace Tests\Unit;

use App\Negocio\Implementacion\Administrador;
use App\Negocio\Interfaces\ICategorias;
use App\Repositorio\IUnidadTrabajo;
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
  
    public function __construct(IUnidadTrabajo $_oUDT ,ICategorias $_oCategorias )
    {
        $this->oUDT =  $_oUDT;
        $this->oCategorias =  $_oCategorias;
  
    }

    public function test_categorias()
    {
        $oAdministrador = new Administrador($this->oUDT,   $this->oCategorias);
        $this->assertIsObject($oAdministrador);
    }
}
