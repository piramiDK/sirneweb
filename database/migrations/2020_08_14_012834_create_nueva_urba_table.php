<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNuevaUrbaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nueva_urba', function(Blueprint $table)
		{
			$table->integer('id_urb', true);
			$table->string('nombre_urb', 30);
			$table->integer('otros');
			$table->integer('cant-rv');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nueva_urba');
	}

}
