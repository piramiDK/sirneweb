<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCasaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_casa', function(Blueprint $table)
		{
			$table->smallInteger('id')->primary();
			$table->string('codigo_casa', 8)->unique('id_unique');
			$table->smallInteger('id_parroquia')->index('idx_etsmunpar');
			$table->string('telefono_asignado', 100)->nullable();
			$table->boolean('aplico_cian')->nullable();
			$table->smallInteger('id_status');
			$table->integer('id_tipo')->nullable();
			$table->integer('cantidad')->default(0);
			$table->integer('id_tipo_casa_alimentacion')->nullable()->default(1);
			$table->integer('id_nucleo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_casa');
	}

}
