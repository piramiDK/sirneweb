<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNombreNucleoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nombre_nucleo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_parroquia');
			$table->string('nombre_nucleo', 30);
			$table->string('codigo', 30);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nombre_nucleo');
	}

}
