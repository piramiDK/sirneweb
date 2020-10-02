<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbcParroquiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbc_parroquia', function(Blueprint $table)
		{
			$table->smallInteger('id_parroquia')->primary();
			$table->string('nombre_parroquia', 100);
			$table->smallInteger('id_municipio');
			$table->string('referencia', 6)->nullable();
			$table->integer('prioridad')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbc_parroquia');
	}

}
