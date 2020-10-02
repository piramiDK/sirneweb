<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbc_parroquia extends Model
{
    protected $fillable = [
        'nombre_parroquia',
        'id_municipio',
        'id_parroquia'      
    ];
}
