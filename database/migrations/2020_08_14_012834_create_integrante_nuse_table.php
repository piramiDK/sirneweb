<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIntegranteNuseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('integrante_nuse', function(Blueprint $table)
		{
			//informacion general basica
			$table->integer('id_integrante', true);
			$table->string('nombres', 30);
			$table->string('apellidos', 30);
			$table->string('cedula');
			$table->string('tlf');
			$table->integer('id_parroquia');
			$table->string('correo', 30);

			//nivel academico
			$table->string('nivel_academico', 30);
			$table->boolean('estudias_p'); //pregunta estudias
			$table->string('estudias_des', 30); //que estudias
			$table->boolean('estudias_con'); // deseas continuar estudiando
			$table->string('estudias_condes', 30); //que deseas continuar estudiando
			$table->boolean('trabajas_p'); //pregunta trabajas

			//caracterizacion de partido

			$table->boolean('poseepatria'); //pregunta trabajas
			$table->string('codigo-patria',30);
			$table->string('serial-patria',30);
			$table->integer('id_nucleo');
			$table->boolean('poseepsuv'); //pregunta trabajas
			$table->integer('codigo-psuv');
			$table->integer('serial-psuv');

			//atencion de estado
			$table->boolean('inscritochamba'); //inscrito en chamba juvenil
			$table->boolean('cantihijos'); //cantidad de hijos
			$table->boolean('resivehogares'); //resive hogares de la patria

			//datos de vivienda
			$table->boolean('disnucleo'); //discapacidad en el nucleo familiar
			$table->boolean('resiveclap'); //resive el clap
			$table->boolean('poseecasa'); //posee casa propia
			$table->string('descrivivienda', 30);

			//datos electorales
			$table->boolean('inscritocne'); //inscrito en el cne
			$table->string('descrivotacion', 30); //centro de votacion

			//datos de la salud
			$table->string('descrisangre', 30); //describa tipo de sangre
			$table->string('patologiabase', 30); //describa patologia base
			$table->string('descrimedicina', 30); //describa medicinas

			//datos de talla
			$table->string('descricamisa', 30); //describa talla camisa
			$table->string('descripantalon', 30); //describa talla pantalon
			$table->string('descrizapato', 30); //describa talla zapatos
			$table->string('descrimilicia', 30); //describa talla comicion de la milicia

			//datos adicionales a ultimo momento
			$table->string('edad', 30);
			$table->string('fechan', 30);
			$table->string('responsabilidad', 30);
			$table->boolean('pmenor');
			$table->string('cedulare', 30);
			$table->string('nombrere', 30);
			$table->string('apellidore', 30);
			$table->string('edadre', 30);
			$table->string('telefonore', 30);
			//auditoria
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
		Schema::drop('integrante_nuse');
	}

}
