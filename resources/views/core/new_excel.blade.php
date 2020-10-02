  <!-- favicon -->
  <link rel="shortcut icon" href="{{asset('/storage/logol.jpg')}}" style="width:600px;" />

@extends('layouts.app')

@section('content')
 
  <!-- aqui Inicia el Formulario-->


  <div class="container-fluid text-center ">   
            <!-- botones principales--> 
            <?php
           // include("principal.html");
            ?>
            <!-- botones principales--> 

            <div class="col-sm-10 text-left mx-auto"> 
                <br>
            <em><h1>Excel de Prueba del Núcleo de Recreación Comunitaria</h1></em>
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
    <div class="container">

<div class="card bg-light mt-3">

    <div class="card-header">

       

    </div>

    <div class="card-body">

        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <input type="file" name="file" class="form-control">

            <br>

            <button class="btn btn-success">Importar informacion del nucleo</button>

            <a class="btn btn-warning" href="{{ route('export') }}">Exportar informacion del nucleo</a>

        </form>

    </div>

</div>

</div>
                    </div>
            </div>
        </div>
        <!-- aqui Termina el formulario -->

        
        <br>
        <div class=" col-sm-10 box box-primary mx-auto ">
            <div class="box-body">
<!--datatable-->

                


            </div>
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