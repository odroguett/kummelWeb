<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCOMENTARIOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('COMENTARIOS', function (Blueprint $table) {
            $table->integer('ID_COMENTARIOS');
            $table->string('COMENTARIO', 100)->nullable();
            $table->decimal('NOTA', 10, 0)->nullable();
            $table->integer('ID_CLIENTE');
            $table->primary(['ID_COMENTARIOS', 'ID_CLIENTE']);
            $table->foreign('ID_CLIENTE', 'fk_COMENTARIOS_CLIENTES1')->references('ID_CLIENTE')->on('CLIENTES');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('COMENTARIOS');
    }
}
