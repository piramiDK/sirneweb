@extends('layouts.app')

@section('content')

<div class="container-fluid text-center ">   
            <!-- botones principales--> 
            <?php
            //include("principal.html");
            ?>
            <!-- botones principales--> 

            <div class="col-sm-10 text-left  mx-auto"> 
                <br>
           <em> <h1>Clasificacion de Localizaciòn del Núcleo</h1></em>
                <hr>

                @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
      @endif 
      <a href="{{ url('/nucleo/localizacion/'.request()->id.'/1') }}" class="edit btn btn-primary btn-sm">Consejo comunales</a>
      <a href="{{ url('/nucleo/localizacion/'.request()->id.'/2') }}" class="edit btn btn-primary btn-sm">Comuna</a>
      <a href="{{ url('/nucleo/localizacion/'.request()->id.'/3') }}" class="edit btn btn-primary btn-sm">Base de misiones</a>
      <a href="{{ url('/nucleo/localizacion/'.request()->id.'/4') }}" class="edit btn btn-primary btn-sm">Comunidad</a>
      <a href="{{ url('/nucleo/localizacion/'.request()->id.'/5') }}" class="edit btn btn-primary btn-sm">Calle</a>
      
                   </div>
           </div>
       </div>

       <!-- aqui Termina el formulario -->
        </div>
       <hr>
        <!--diomerly datatable-->

        <div class="row mx-auto">
<div class="col-sm-10 mx-auto" >
  
   
  <!--table class="table table-striped"-->
  
<div>
</div>


<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

                        
                        @endsection

                        @section('script')
             
                      
                        @endsection