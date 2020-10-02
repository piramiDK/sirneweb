<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class integrante_nuse extends Model
{
    protected $fillable = [
        //datos 
            'id_integrante',
			'nombres',
			'apellidos',
			'cedula',
			'tlf',
			'id_parroquia',
			'correo',

			//nivel academico
			'nivel_academico',
			'estudias_p', //pregunta estudias
			'estudias_des', //que estudias
			'estudias_con', // deseas continuar estudiando
			'estudias_condes', //que deseas continuar estudiando
			'trabajas_p', //pregunta trabajas

			//caracterizacion de partido

			'poseepatria', //pregunta trabajas
			'codigo-patria',
			'serial-patria',
			'id_nucleo',
			'poseepsuv', //pregunta trabajas
			'codigo-psuv',
			'serial-psuv',

			//atencion de estado
			'inscritochamba', //inscrito en chamba juvenil
			'cantihijos', //cantidad de hijos
			'resivehogares', //resive hogares de la patria

			//datos de vivienda
			'disnucleo', //discapacidad en el nucleo familiar
			'resiveclap', //resive el clap
			'poseecasa', //posee casa propia
			'descrivivienda',

			//datos electorales
			'inscritocne', //inscrito en el cne
			'descrivotacion', //centro de votacion

			//datos de la salud
			'descrisangre', //describa tipo de sangre
			'patologiabase', //describa patologia base
			'descrimedicina', //describa medicinas

			//datos de talla
			'descricamisa', //describa talla camisa
			'descripantalon', //describa talla pantalon
			'descrizapato', //describa talla zapatos
			'descrimilicia', //describa talla comicion de la milicia

			//datos adicionales a ultimo momento
			'edad',
			'fechan',
			'responsabilidad',
			'pmenor',
			'cedulare',
			'nombrere',
			'apellidore',
			'edadre',
			'telefonore'
			

    ];
}
