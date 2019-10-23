<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntegrantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrantes', function (Blueprint $table) {
            $table->Increments('id_codigo_Integrate');
            $table->char('posicion',50);
            $table->string('nombre');
            $table->string('apellidos');
            $table->integer('edad');
            $table->unsignedInteger('Equipos_id');
            $table->string('foto');
        
            $table->foreign('Equipos_id')
            ->references('id')
            ->on('Equipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('integrantes');
    }
}
