<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbc_municipio extends Model
{
    protected $fillable = [
        'nombre_municipio',
        'id_estado',
        'id_municipio'     
    ];
}
