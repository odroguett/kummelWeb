<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePRODUCTOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRODUCTOS', function (Blueprint $table) {
            $table->string('ID_PRODUCTO', 5);
            $table->string('DESCRIPCION', 45)->nullable();
            $table->string('IMAGEN', 45)->nullable();
            $table->string('ID_CATEGORIA', 5);
            $table->primary(['ID_PRODUCTO', 'ID_CATEGORIA']);
            $table->foreign('ID_CATEGORIA', 'fk_PRODUCTOS_CATEGORIAS1')->references('ID_CATEGORIA')->on('CATEGORIAS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PRODUCTOS');
    }
}
