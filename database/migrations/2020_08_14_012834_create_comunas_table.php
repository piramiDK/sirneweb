<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComunasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comunas', function(Blueprint $table)
		{
			$table->integer('id_comunas', true);
			$table->integer('id_urb');
			$table->string('nom-comuna', 30);
			$table->string('base_mision', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comunas');
	}

}
