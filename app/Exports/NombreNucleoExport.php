<?php

namespace App\Exports;

use App\nombre_nucleo;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
  

class NombreNucleoExport implements FromCollection

{

    /**

    * @return \Illuminate\Support\Collection

    */

    public function collection()

    {

       // return nombre_nucleo::all();

        
        return DB::table('localizacions')
        
        ->select('nombre_nucleo','nombre_parroquia','nombre_municipio','desc_estado','nombre','direccion','nregistro','responsable','cedula_responsable')
		        
		->join('nombre_nucleos','localizacions.id_nucleo','nombre_nucleos.id')
			
        ->join('tbc_parroquias', 'nombre_nucleos.id_parroquia','tbc_parroquias.id_parroquia')
        
        ->join('tbc_municipios','tbc_parroquias.id_municipio','tbc_municipios.id_municipio')
        
		->join('tbc_estados', 'tbc_municipios.id_estado', 'tbc_estados.id_estado')
		
		->get();


    }

}
