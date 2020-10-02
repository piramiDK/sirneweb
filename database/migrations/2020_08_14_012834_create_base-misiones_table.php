<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBaseMisionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('base-misiones', function(Blueprint $table)
		{
			$table->integer('id_base-misiones', true);
			$table->integer('id_comunas');
			$table->string('nombre-basemisiones', 30);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('base-misiones');
	}

}
