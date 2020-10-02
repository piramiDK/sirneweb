<?php

namespace App\Imports;

use App\nombre_nucleo;

use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;

    

class NombreNucleoImport implements ToModel, WithHeadingRow

{

    /**

    * @param array $row

    *

    * @return \Illuminate\Database\Eloquent\Model|null

    */

    public function model(array $row)

    {

        return new nombre_nucleo([

            'Id'     => $row['id_parroquia'],

            'Nombre del Nucleo'    => $row['nombre_nucleo'], 

            'Codigo' => $row['codigo'],

        ]);

    }
}

