<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\integrante_nuse;
//use App\integrante_nuses;
use DataTables;

class IntegranteController extends Controller
{

    public function index(Request $request)
    {

        //$data = integrante_nus::latest()->get();
          //  return response()->json($data); 
          
    }
   



    public function store(Request $request)
    {   
        //integrante_nuse::where('id_nucleo', '=', $id)->get(); //codigo para la validacion
        $countvariable = integrante_nuse::where('id_nucleo', '=', $request->get('id_nucleo'))->count();
        $countvariable++;


   if($countvariable==10){ 
        $countvariable--;

       return redirect('/nucleo')->with('success', 'no puedes registrar mas! cantidad de integrantes actuales: '.$countvariable.'!');}else{

        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'cedula'=>'required',
        //    'codigo-patria'=>'required',
        //    'serial-patria'=>'required',
            'tlf'=>'required',
            'correo'=>'required'
        ]);


            $integrante_nu = new integrante_nuse([
                'nombres' => $request->get('nombres'),
                'apellidos' => $request->get('apellidos'),
                'cedula' => $request->get('cedula'),
                'codigo-patria' => $request->get('codigo-patria'),
                'serial-patria' => $request->get('serial-patria'),
                'id_parroquia' => $request->get('id_parroquia'),
                'tlf' => $request->get('tlf'),
                'correo' => $request->get('correo'),

                //nivel academico
                'nivel_academico' => $request->get('nivel_academico'),
                'estudias_p' => $request->get('estudias_p'), //pregunta estudias
                'estudias_des' => $request->get('estudias_des'), //que estudias
                'estudias_con' => $request->get('estudias_con'), // deseas continuar estudiando
                'estudias_condes' => $request->get('estudias_condes'), //que deseas continuar estudiando
                'trabajas_p' => $request->get('trabajas_p'), //pregunta trabajas

                //caracterizacion de partido

                'poseepatria' => $request->get('poseepatria'), //pregunta trabajas
                'id_nucleo' => $request->get('id_nucleo'),
                'poseepsuv' => $request->get('poseepsuv'), //pregunta trabajas
                'codigo-psuv' => $request->get('codigo-psuv'),
                'serial-psuv' => $request->get('serial-psuv'),

                //atencion de estado
                'inscritochamba' => $request->get('inscritochamba'), //inscrito en chamba juvenil
                'cantihijos' => $request->get('cantihijos'), //cantidad de hijos
                'resivehogares' => $request->get('resivehogares'), //resive hogares de la patria

                //datos de vivienda
                'disnucleo' => $request->get('disnucleo'), //discapacidad en el nucleo familiar
                'resiveclap' => $request->get('resiveclap'), //resive el clap
                'poseecasa' => $request->get('poseecasa'), //posee casa propia
                'descrivivienda' => $request->get('descrivivienda'),

                //datos electorales
                'inscritocne' => $request->get('inscritocne'), //inscrito en el cne
                'descrivotacion' => $request->get('descrivotacion'), //centro de votacion

                //datos de la salud
                'descrisangre' => $request->get('descrisangre'), //describa tipo de sangre
                'patologiabase' => $request->get('patologiabase'), //describa patologia base
                'descrimedicina' => $request->get('descrimedicina'), //describa medicinas

                //datos de talla
                'descricamisa' => $request->get('descricamisa'), //describa talla camisa
                'descripantalon' => $request->get('descripantalon'), //describa talla pantalon
                'descrizapato' => $request->get('descrizapato'), //describa talla zapatos
                'descrimilicia' => $request->get('descrimilicia'), //describa talla comicion de la milicia

                //datos adicionales a ultimo momento
                'edad' => $request->get('edad'),
                'fechan' => $request->get('fechan'),
                'responsabilidad' => $request->get('responsabilidad'),
                'pmenor' => $request->get('pmenor'),
                'cedulare' => $request->get('cedulare'),
                'nombrere' => $request->get('nombrere'),
                'apellidore' => $request->get('apellidore'),
                'edadre' => $request->get('edadre'),
                'telefonore' => $request->get('telefonore')


            ]);
            $integrante_nu->save();
           // return redirect('/integrante')->with('success', 'integrante guardado! cantidad actual de integrantes: '.$countvariable.'!');
           return redirect('/nucleo')->with('success', 'integrante guardado! cantidad actual de integrantes: '.$countvariable.'!');
        };
    }
}
