<?php

namespace App\Providers;

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
