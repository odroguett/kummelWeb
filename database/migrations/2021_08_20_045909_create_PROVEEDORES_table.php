<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePROVEEDORESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PROVEEDORES', function (Blueprint $table) {
            $table->integer('ID_PROVEEDOR')->primary();
            $table->string('DESCRIPCION', 45)->nullable();
            $table->string('TELEFONO_MOVIL', 20)->nullable();
            $table->string('EMAIL', 45)->nullable();
            $table->string('CONTACTO', 45)->nullable();
            $table->string('DIRECCION', 45)->nullable();
            $table->string('COMUNA', 10)->nullable();
            $table->string('CIUDAD', 10)->nullable();
            $table->string('REGION', 10)->nullable();
            $table->string('PROVEEDOREScol', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PROVEEDORES');
    }
}
