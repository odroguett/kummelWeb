<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVENTAPRODUCTOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VENTA_PRODUCTOS', function (Blueprint $table) {
            $table->string('CODIGO_PRECIO_PRODUCTO', 10);
            $table->decimal('PRECIO_VENTA', 10, 0)->nullable();
            $table->decimal('PORCENTAJE_DESCUENTO', 10, 0)->nullable();
            $table->decimal('STOCK', 10, 0)->nullable();
            $table->integer('DESTACADO')->nullable();
            $table->string('ID_PRODUCTO', 5);
            $table->integer('ID_UNIDAD');
            $table->string('IMAGEN', 45)->nullable();
            $table->primary(['CODIGO_PRECIO_PRODUCTO', 'ID_PRODUCTO', 'ID_UNIDAD'],'venta_productos_pk');
            $table->foreign('ID_PRODUCTO', 'fk_PRECIO_PRODUCTO_PRODUCTOS1')->references('ID_PRODUCTO')->on('PRODUCTOS');
            $table->foreign('ID_UNIDAD', 'fk_VENTA_PRODUCTOS_UNIDADES1')->references('ID_UNIDAD')->on('UNIDADES');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('VENTA_PRODUCTOS');
    }
}
