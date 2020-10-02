<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbc_estado;
use App\tbc_municipio;
use App\tbc_parroquia;
use App\nombre_nucleo;
use App\integrante_nuse;
use App\Localizacion;
use App\asignar;
use DataTables;
use Illuminate\Support\Facades\DB;

class CoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tbc_estado = tbc_estado::orderBy('id_estado')->get();

          if ($request->ajax()) {

            $data = nombre_nucleo::latest()->get();
            //error_log($data[1]['id']);
            return Datatables::of($data)

                    ->addIndexColumn()

                    ->addColumn('action', function($row){
                        
                            //$editUrl = url('nucleo/asignarcasa/'.$row->id);
                            $edit = url('nucleo/edit/'.$row->id);
                            $integrantetUrl = url('nucleo/asignarintegrante/'.$row->id);
                            $deleteUrl = url('contacts/destroy/'.$row->id);
                           // $localizacion = url('nucleo/localizacion/'.$row->id);
                           $localizacion = url('nucleo/localizaciones/'.$row->id.'/option');
                           $asignucleo = url('nucleo/asignarcasa/'.$row->id.'/option');

                            $btn = '<a href="'.$edit.'" class="edit btn btn-primary btn-sm">editar nucleo</a>';
                            $btn .= '<a href="'.$asignucleo.'" class="edit btn btn-primary btn-sm">asignar al nucleo</a>';
                            $btn .= '<a href="'.$integrantetUrl.'" class="edit btn btn-primary btn-sm">integrantes del nucleo</a>';
                            $btn .= '<a href="'.$localizacion.'" class="edit btn btn-primary btn-sm">localizacion del nucleo</a>';

                           // $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteTodo">Delete</a>';                           
                            return $btn;

                    })

                    ->rawColumns(['action'])

                    ->make(true);
                    

        }
       // return view('welcome2',compact('contact2'));
       // return view('core.new_core',compact('tbc_estado'));
        return view('core.new_core',compact('tbc_estado'));
    }


  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function municipio(Request $request)
    {
        if ($request->ajax()){
        $tbc_municipio = tbc_municipio::where('id_estado', $request->estado_id)->get();
            foreach ($tbc_municipio as $municipio){
                $municipioArray[$municipio->id_municipio] = $municipio->nombre_municipio;
                
            }
            return response()->json($municipioArray); 
        }
        
       // return view('welcome2',compact('contact2'));
        //return view('core.new_core',compact('tbc_estado'));
    }

    public function parroquia(Request $request)
    {
        if ($request->ajax()){
        $tbc_parroquia = tbc_parroquia::where('id_municipio', $request->municipio_id)->get();
            foreach ($tbc_parroquia as $parroquia){
                $parroquiaArray[$parroquia->id_parroquia] = $parroquia->nombre_parroquia;

            }
            return response()->json($parroquiaArray); 
        }
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function indexcasa(Request $request, $id)
    {
        $indexcasa = nombre_nucleo::find($id);
        //$indexcasa = nombre_nucleo::where("id_nucleo","=",$id);
        return view('core.new_house', compact('indexcasa'));     
    }





    public function indexintegrante(Request $request, $id)
    {
     
        $tbc_estado = tbc_estado::orderBy('id_estado')->get();
        if ($request->ajax()) {
//funcional
           // $data = integrante_nuse::latest()->get();
//fin funcional
            
         //   DB::enableQueryLog();
            $data= integrante_nuse::where('id_nucleo', '=', $id)->get(); 
          //  dd(DB::getQueryLog());

            return Datatables::of($data)

                    ->addIndexColumn()

                    ->addColumn('action', function($row){
                        
                            $editUrl = url('contacts/edit/'.$row->id);
                            $deleteUrl = url('contacts/destroy/'.$row->id);

                            $btn = '<a href="'.$editUrl.'" class="edit btn btn-primary btn-sm">edit</a>';

                            $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteTodo">Delete</a>';                            return $btn;

                    })

                    ->rawColumns(['action'])

                    ->make(true);
                    

        }
        return view('core.new_integrante',compact('tbc_estado'));
        
       

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        
        

        $j="12345";
            $integrante_nu = new nombre_nucleo([
                'id_parroquia' => $request->get('parroquia'),
                'nombre_nucleo' => $request->get('nucleo'),
                'codigo' => $j      
            ]);
            $integrante_nu->save();
               
            $insertedId = $integrante_nu->id;
            $parroquiacodex = $integrante_nu->id_parroquia;
                $year= date("Y");
                $codexf=$year.'-'.$parroquiacodex.'-'.$insertedId;
            $codex = nombre_nucleo::find($insertedId);
            $codex->codigo = $codexf;
            $codex->save();

/*
            $integrante_nu2 = $integrante_nu->id_nucleo; //obtengo el id y lo guardo en una variable

            $ceros=$integrante_nu->codigo;
            $codigoF=$ceros.$integrante_nu2; //concateno para agregar los ceros al id, creando asi el codigo
          


            $validatedData = $request->validate([
                'codigo' => $codigoF
            ]);


            
            nombre_nucleo::where('id_nucleo', $integrante_nu2)->update($validatedData);*/


            return redirect('/nucleo')->with('success', 'Nucleo guardado!');
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function asignars(Request $request)
    {
        $request->validate([
            // 'parroquia'=>'required',
            // 'nucleo'=>'required'
         ]);
 
        
             $asignar = new asignar([
                 'id_parroquia' => $request->get('id_parroquia'),
                 'id_nucleo' => $request->get('id_nucleo'), //id codigo
                 'id_tipo' => $request->get('id_tipo'), //id_tipo
                 'nombre' => $request->get('nombre'), //nombre
                 'nombre_nucleo' => $request->get('nombre_nucleo'), //nombre casa 
                 'responsable' => $request->get('responsable'), //comunas
                 'codigo' => $request->get('codigo') //codigo codigo
                 
             ]);
             $asignar->save();
                
             return redirect('/nucleo')->with('success', 'Contact saved!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function option(Request $request, $id)
    {
        
        
        return view('core.new_house_option');     
    }





    public function indexasignarcom(Request $request)
    {
        $tbc_estado = tbc_estado::orderBy('id_estado')->get();

          if ($request->ajax()) {

            $data = asignar::latest()->get();
            //error_log($data[1]['id']);
            return Datatables::of($data)

                    ->addIndexColumn()

                    ->addColumn('action', function($row){
                        
                            //$editUrl = url('nucleo/asignarcasa/'.$row->id);
                            $integrantetUrl = url('nucleo/asignarintegrante/'.$row->id);
                            $deleteUrl = url('contacts/destroy/'.$row->id);
                           // $localizacion = url('nucleo/localizacion/'.$row->id);
                           $localizacion = url('nucleo/localizaciones/'.$row->id.'/option');
                           $editUrl = url('nucleo/asignarcasa/'.$row->id.'/option');

                           // $btn = '<a href="'.$editUrl.'" class="edit btn btn-primary btn-sm">asignar al nucleo</a>';
                           // $btn .= '<a href="'.$integrantetUrl.'" class="edit btn btn-primary btn-sm">integrantes del nucleo</a>';
                           // $btn .= '<a href="'.$localizacion.'" class="edit btn btn-primary btn-sm">localizacion del nucleo</a>';

                           // $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteTodo">Delete</a>';                           
                          //  return $btn;

                    })

                    ->rawColumns(['action'])

                    ->make(true);
                    

        }
       // return view('welcome2',compact('contact2'));
       // return view('core.new_core',compact('tbc_estado'));
        return view('core.new_core',compact('tbc_estado'));
    }




    public function indexlocalizacion(Request $request)
    {
        $tbc_estado = tbc_estado::orderBy('id_estado')->get();

          if ($request->ajax()) {

            $data = Localizacion::latest()->get();
            //error_log($data[1]['id']);
            return Datatables::of($data)

                    ->addIndexColumn()

                    ->addColumn('action', function($row){
                        
                            //$editUrl = url('nucleo/asignarcasa/'.$row->id);
                            $integrantetUrl = url('nucleo/asignarintegrante/'.$row->id);
                            $deleteUrl = url('contacts/destroy/'.$row->id);
                           // $localizacion = url('nucleo/localizacion/'.$row->id);
                           $localizacion = url('nucleo/localizaciones/'.$row->id.'/option');
                           $editUrl = url('nucleo/asignarcasa/'.$row->id.'/option');

                           // $btn = '<a href="'.$editUrl.'" class="edit btn btn-primary btn-sm">asignar al nucleo</a>';
                           // $btn .= '<a href="'.$integrantetUrl.'" class="edit btn btn-primary btn-sm">integrantes del nucleo</a>';
                           // $btn .= '<a href="'.$localizacion.'" class="edit btn btn-primary btn-sm">localizacion del nucleo</a>';

                           // $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteTodo">Delete</a>';                           
                          //  return $btn;

                    })

                    ->rawColumns(['action'])

                    ->make(true);
                    

        }
       // return view('welcome2',compact('contact2'));
       // return view('core.new_core',compact('tbc_estado'));
        return view('core.new_core',compact('tbc_estado'));
    }


    public function editcore($id)
    {   
        $tbc_estado = tbc_estado::orderBy('id_estado')->get();
        $nombre_nucleo = nombre_nucleo::find($id);
        return view('core.edit_core', compact('nombre_nucleo'), compact('tbc_estado'));        
    }
    
    public function updatecore(Request $request)
    {
        
   

    $nombre_nucleo = nombre_nucleo::find($request->get('id1'));
    $nombre_nucleo->id_parroquia =  $request->get('parroquia');
    $nombre_nucleo->nombre_nucleo = $request->get('nucleo');
    //$nombre_nucleo->codigo = $request->get('codigo');
    $nombre_nucleo->save();

    return redirect('/nucleo')->with('success', 'Nucleo actualizado!');
}





    
}



