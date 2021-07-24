<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Parametros', function (Blueprint $table) {
            $table->decimal('COSTO_ENVIO', 10, 0)->nullable();
            $table->decimal('AVISO_STOCK', 10, 0)->nullable();
            $table->decimal('TOPE_COSTO_ENVIO', 10, 0)->nullable();
            $table->string('NOMBRE_LOG', 45)->nullable();
            $table->string('SMTP', 45)->nullable();
            $table->string('USUARIO_CORREO', 45)->nullable();
            $table->string('CONTRASENA_CORREO', 45)->nullable();
            $table->string('PUERTO_CORREO', 45)->nullable();
            $table->string('TELEFONO', 15)->nullable();
            $table->string('BANCO', 45)->nullable();
            $table->string('RUT', 10)->nullable();
            $table->string('NOMBRE_DEPOSITO', 50)->nullable();
            $table->string('CORREO_DEPOSITO', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Parametros');
    }
}
