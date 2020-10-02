<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNombreCasaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nombre_casa', function(Blueprint $table)
		{
			$table->integer('id_nomcasa', true);
			$table->integer('nombre-casa');
			$table->string('sector', 60);
			$table->integer('id_casa');
			$table->integer('id_comunas');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nombre_casa');
	}

}
