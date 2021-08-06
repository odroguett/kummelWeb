<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePRODUCTOSVENTATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRODUCTOS_VENTA', function (Blueprint $table) {
            $table->string('ID_PRODUCTO', 10)->primary();
            $table->string('DESCRIPCION', 45)->nullable();
            $table->decimal('PRECIO_VENTA', 10, 0)->nullable();
            $table->decimal('PORCENTAJE_DESCUENTO', 10, 0)->nullable();
            $table->decimal('STOCK', 10, 0)->nullable();
            $table->integer('DESTACADO')->nullable();
            $table->integer('ID_UNIDAD');
            $table->string('IMAGEN', 45)->nullable();
            $table->string('ID_CATEGORIA', 5);
            $table->string('RELACIONADO', 10)->nullable();
            $table->foreign('ID_CATEGORIA', 'fk_PRODUCTOS_VENTA_CATEGORIAS1')->references('ID_CATEGORIA')->on('CATEGORIAS');
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
        Schema::dropIfExists('PRODUCTOS_VENTA');
    }
}
