<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDETALLEVENTASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DETALLE_VENTAS', function (Blueprint $table) {
            $table->integer('ID_DETALLE');
            $table->decimal('CANTIDAD', 10, 0)->nullable();
            $table->decimal('VENTA', 10, 0)->nullable();
            $table->string('CODIGO_PRECIO_PRODUCTO', 10);
            $table->primary(['ID_DETALLE', 'CODIGO_PRECIO_PRODUCTO']);
            $table->foreign('ID_DETALLE', 'fk_DETALLE_VENTAS_CARRITO1')->references('ID_DETALLE')->on('CARRITO');
            $table->foreign('CODIGO_PRECIO_PRODUCTO', 'fk_DETALLE_VENTAS_VENTA_PRODUCTOS1')->references('CODIGO_PRECIO_PRODUCTO')->on('VENTA_PRODUCTOS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DETALLE_VENTAS');
    }
}
