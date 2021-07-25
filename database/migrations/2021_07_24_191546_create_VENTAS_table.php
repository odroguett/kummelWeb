<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVENTASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VENTAS', function (Blueprint $table) {
            $table->integer('ID_DETALLE');
            $table->decimal('TOTAL_PRODUCTOS', 10, 0)->nullable();
            $table->decimal('TOTAL_VENTA', 10, 0)->nullable();
            $table->string('ID_TIPO_PAGO', 5);
            $table->integer('ID_DESPACHO');
            $table->dateTime('FECHA_VENTA')->nullable();
            $table->integer('ID_CANAL');
            $table->primary(['ID_DETALLE', 'ID_TIPO_PAGO', 'ID_DESPACHO']);
            $table->foreign('ID_DESPACHO', 'fk_CARRITO_DESPACHO1')->references('ID_DESPACHO')->on('DESPACHOS');
            $table->foreign('ID_TIPO_PAGO', 'fk_CARRITO_TIPO_PAGO1')->references('ID_TIPO_PAGO')->on('TIPO_PAGO');
            $table->foreign('ID_CANAL', 'fk_VENTAS_CANAL_VENTA1')->references('ID_CANAL_VENTA')->on('CANAL_VENTA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('VENTAS');
    }
}
