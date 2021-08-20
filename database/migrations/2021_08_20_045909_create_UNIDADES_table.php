<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUNIDADESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UNIDADES', function (Blueprint $table) {
            $table->integer('ID_UNIDAD')->primary();
            $table->string('CODIGO_UNIDAD', 5)->nullable();
            $table->decimal('TAMANO', 10, 0)->nullable();
            $table->string('DESCRIPCION_UNIDAD', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UNIDADES');
    }
}
