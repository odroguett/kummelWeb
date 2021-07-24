<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDESPACHOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DESPACHO', function (Blueprint $table) {
            $table->integer('ID_DESPACHO');
            $table->string('NOMBRE', 45)->nullable();
            $table->string('APELLIDOS', 45)->nullable();
            $table->string('DIRECCION', 45)->nullable();
            $table->string('DEPARTAMENTO', 45)->nullable();
            $table->string('COMUNA', 45)->nullable();
            $table->string('CIUDAD', 45)->nullable();
            $table->string('REGION', 45)->nullable();
            $table->string('COMENTARIOS', 100)->nullable();
            $table->string('TELEFONO', 45)->nullable();
            $table->string('EMAIL', 45)->nullable();
            $table->integer('ID_CLIENTE');
            $table->integer('ID_TIPO_DESPACHO');
            $table->primary(['ID_DESPACHO', 'ID_CLIENTE', 'ID_TIPO_DESPACHO']);
            $table->foreign('ID_CLIENTE', 'fk_DESPACHO_CLIENTES1')->references('ID_CLIENTE')->on('CLIENTES');
            $table->foreign('ID_TIPO_DESPACHO', 'fk_DESPACHO_TIPO_DESPACHO1')->references('ID_TIPO_DESPACHO')->on('TIPO_DESPACHO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DESPACHO');
    }
}
