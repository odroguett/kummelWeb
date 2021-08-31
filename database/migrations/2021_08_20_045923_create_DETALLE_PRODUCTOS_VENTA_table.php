<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDETALLEPRODUCTOSVENTATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DETALLE_PRODUCTOS_VENTA', function (Blueprint $table) {
            $table->integer('ID_DETALLE');
            $table->decimal('CANTIDAD', 10, 0)->nullable();
            $table->decimal('VENTA', 10, 0)->nullable();
            $table->string('ID_PRODUCTO', 10);
            $table->primary(['ID_DETALLE', 'ID_PRODUCTO']);
            $table->foreign('ID_DETALLE', 'fk_DETALLE_VENTAS_CARRITO1')->references('ID_DETALLE')->on('VENTAS');
            $table->foreign('ID_PRODUCTO', 'fk_DETALLE_VENTAS_VENTA_PRODUCTOS1')->references('ID_PRODUCTO')->on('PRODUCTOS_VENTA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DETALLE_PRODUCTOS_VENTA');
    }
}
