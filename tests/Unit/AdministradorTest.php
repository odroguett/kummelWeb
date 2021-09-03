<?php

namespace Tests\Unit;

use App\Negocio\Fabricas\Implementacion\FabricaProductos;
use App\Negocio\Implementacion\Administrador;
use App\Negocio\Implementacion\Categorias;
use App\Negocio\Implementacion\Unidades;
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
        $this->oCategorias = new Categorias(new UnidadTrabajo);
        $this->oUnidades = new Unidades(new UnidadTrabajo);
        $this->oFabricaProductos = new FabricaProductos(new Categorias( new UnidadTrabajo),new UnidadTrabajo,new Unidades( new UnidadTrabajo));
        $oAdministrador = new Administrador(new IUnidadTrabajo(),new Categorias( new UnidadTrabajo),new Unidades( new UnidadTrabajo),new FabricaProductos(new Categorias( new UnidadTrabajo),new UnidadTrabajo,new Unidades( new UnidadTrabajo)));
        $this->assertIsObject($this->oCategorias);
    }
}
