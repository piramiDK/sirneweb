<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Localizacion extends Model
{
    protected $fillable = [
    'id_localizacion',
    'nombre',
    'nregistro',
    'direccion',
    'comunidad',
    'responsable',
    'cedula_responsable',
    'id_nucleo',
    'id_tipo'
    ];
}