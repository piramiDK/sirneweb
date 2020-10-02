<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\integrante_nuse;
//use App\integrante_nuses;
use DataTables;
use App\Localizacion;


class LocalizacionController extends Controller
{
    public function localizacion(Request $request, $id, $localizacion)
    {
        
        
        return view('core.new_localizacion');     
    }

    public function store(Request $request)
    {

       
        
        $request->validate([
            'nombre'=>'required',
            'nregistro'=>'required'
        ]);

        
            $localizacion = new Localizacion([
            

                'id_localizacion' => $request->get('id_localizacion'),
                'nombre' => $request->get('nombre'),
                'nregistro' => $request->get('nregistro'),
                'direccion' => $request->get('direccion'),
                'comunidad' => $request->get('comunidad'),
                'responsable' => $request->get('responsable'),
                'cedula_responsable' => $request->get('cedula_responsable'),
                'id_nucleo' => $request->get('id_nucleo'),
                'id_tipo' => $request->get('id_tipo')

            ]);
            $localizacion->save();
               
           

            return redirect('/nucleo')->with('success', 'Contact saved!');
        
    }
    public function option(Request $request, $id)
    {
        
        
        return view('core.new_localizacion_option');     
    }

    
}
