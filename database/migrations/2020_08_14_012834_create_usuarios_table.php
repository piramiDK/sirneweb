<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->integer('id_user', true);
			$table->string('username', 50);
			$table->string('name_user', 50);
			$table->string('password', 50);
			$table->string('email', 50)->nullable();
			$table->string('telefono', 13)->nullable();
			$table->string('foto', 100)->nullable();
			$table->enum('permisos_acceso', array('Super Admin','Integrante'))->index('level');
			$table->enum('status', array('activo','bloqueado'))->default('activo');
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
		Schema::drop('usuarios');
	}

}
