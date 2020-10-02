<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asignar extends Model
{
    protected $fillable = [
            'id_parroquia',
            'id_nucleo',
            'nombre_nucleo',
            'codigo',
            'responsable',
            'id_tipo',
            'nombre',
        ];
}
