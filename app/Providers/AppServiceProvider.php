<?php

namespace App\Providers;

use App\Negocio\Fabricas\Implementacion\FabricaProductos;
use App\Negocio\Fabricas\Interfaces\IFabricaProductos;
use App\Negocio\Implementacion\Buscar;
use App\Negocio\Implementacion\Categorias;
use App\Negocio\Implementacion\Comprar;
use App\Negocio\Implementacion\Unidades;
use App\Negocio\Implementacion\Ventas;
use App\Negocio\Interfaces\IBuscar;
use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IComprar;
use App\Negocio\Interfaces\IUnidades;
use App\Negocio\Interfaces\IVentas;
use Illuminate\Support\ServiceProvider;
use App\Repositorio\UnidadTrabajo;
use App\Repositorio\Repositorio;
use App\Repositorio\IUnidadTrabajo;
use App\Repositorio\IRepositorio;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IRepositorio::class, Repositorio::class);
        $this->app->bind(IUnidadTrabajo::class, UnidadTrabajo ::class);
        $this->app->bind(IUnidades::class, Unidades ::class);
        $this->app->bind(ICategorias::class, Categorias ::class);
        $this->app->bind(IFabricaProductos::class, FabricaProductos ::class);
        $this->app->bind(IVentas::class, Ventas ::class);
        $this->app->bind(IBuscar::class, Buscar ::class);
        $this->app->bind(IComprar::class, Comprar ::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
