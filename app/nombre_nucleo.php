<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nombre_nucleo extends Model
{
    protected $fillable = [
        
        'id_parroquia',
        'nombre_nucleo',
        'codigo'
           
    ];
    //protected $primaryKey = "id_nucleo";
}
