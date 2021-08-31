<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCLIENTESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CLIENTES', function (Blueprint $table) {
            $table->integer('ID_CLIENTE')->primary();
            $table->string('NOMBRES', 45)->nullable();
            $table->string('APELLIDOS', 45)->nullable();
            $table->string('EMAIL', 45)->nullable();
            $table->string('TELEFONO', 45)->nullable();
            $table->string('DIRECCION', 45)->nullable();
            $table->string('COMUNA', 45)->nullable();
            $table->string('CIUDAD', 45)->nullable();
            $table->string('DEPARTAMENTO', 45)->nullable();
            $table->string('ID_USUARIO', 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CLIENTES');
    }
}
