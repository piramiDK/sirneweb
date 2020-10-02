<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbcMunicipioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbc_municipio', function(Blueprint $table)
		{
			$table->smallInteger('id_municipio')->primary();
			$table->string('nombre_municipio', 100);
			$table->smallInteger('id_estado');
			$table->string('referencia', 4)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbc_municipio');
	}

}
