<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCONTACTOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CONTACTOS', function (Blueprint $table) {
            $table->integer('ID_CONTACTO')->primary();
            $table->string('EMAIL', 45)->nullable();
            $table->string('NOMBRE', 45)->nullable();
            $table->string('COMENTARIO', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CONTACTOS');
    }
}
