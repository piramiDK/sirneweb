<?php

   

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;

use App\Exports\NombreNucleoExport;

use App\Imports\NombreNucleoImport;

use Maatwebsite\Excel\Facades\Excel;

  

class ExcelController extends Controller

{

    /**

    * @return \Illuminate\Support\Collection

    */

    public function importExportView()

    {

       return view('core.new_excel');

    }

   

    /**

    * @return \Illuminate\Support\Collection

    */

    public function export() 

    {

        return Excel::download(new NombreNucleoExport, 'users.xlsx');

    }

   

    /**

    * @return \Illuminate\Support\Collection

    */

    public function import() 

    {

        Excel::import(new NombreNucleoImport,request()->file('file'));

           

        return back();

    }

}