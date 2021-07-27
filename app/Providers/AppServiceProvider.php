<?php

namespace App\Providers;

use App\Negocio\Fabricas\Implementacion\FabricaProductos;
use App\Negocio\Fabricas\Interfaces\IFabricaProductos;
use App\Negocio\Implementacion\Categorias;
use App\Negocio\Implementacion\ProductosVenta;
use App\Negocio\Implementacion\Unidades;
use App\Negocio\Interfaces\ICategorias;
use App\Negocio\Interfaces\IProductosVenta;
use App\Negocio\Interfaces\IUnidades;
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
