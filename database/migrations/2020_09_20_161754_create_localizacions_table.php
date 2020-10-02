<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localizacions', function (Blueprint $table) {
            $table->id();
            $table->integer('id_localizacion')->nullable();
            $table->string('nombre')->nullable();
            $table->string('nregistro')->nullable();
            $table->string('direccion')->nullable();
            $table->string('comunidad')->nullable();
            $table->string('responsable')->nullable();
            $table->string('cedula_responsable')->nullable();
            $table->integer('id_nucleo')->nullable();
            $table->integer('id_tipo')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localizacions');
    }
}
