<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignars', function (Blueprint $table) {
            $table->id();
            $table->integer('id_parroquia');
            $table->integer('id_nucleo');
            $table->string('codigo', 30);
            $table->integer('id_tipo');
            $table->string('nombre', 30);
			$table->string('nombre_nucleo', 30);
			$table->string('responsable', 30);
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
        Schema::dropIfExists('asignars');
    }
}
