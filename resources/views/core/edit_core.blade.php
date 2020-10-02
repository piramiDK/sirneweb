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
            <em><h1>Editar el Núcleo de Recreación Comunitaria </h1></em>
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
      <form method="post" action="{{ route('nucleo.update', $nombre_nucleo->id) }}" enctype="multipart/form-data">
          @csrf
                    <div class="form-row was-validated">

                    <input type="hidden" class="form-control" name="id1" id="id1" value="{{ request()->id }}" placeholder="Describa el Nombre del Núcleo" required>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Estado</label>
                                <select id="Estado" class="form-control" required>
                                <option selected disabled>Seleccione un Estado</option>
                                    @foreach ($tbc_estado ?? '' as $estado)
                                    <option value="{{ $estado->id_estado }}">{{ $estado->desc_estado }}</option>
                                    @endforeach                                    
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Municipio</label>
                                <select id="Municipio" class="form-control" required>
                                <option selected disabled>Seleccione un Municipio</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Parroquia</label>
                                <select name="parroquia" id="Parroquia" class="form-control" required>
                                <option selected disabled>Seleccione una Parroquia</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre de Núcleo de Recreación</label>
                                <input type="text" class="form-control" name="nucleo" id="NR" value="{{ $nombre_nucleo->nombre_nucleo }}" placeholder="Describa el Nombre del Núcleo" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                            </div>
                    
                    
                           
                            
                               
                            <div class="form-group col-md-8">
                                <button type="submit" class="btn btn-secondary"><ion-icon name="duplicate-outline"></ion-icon>
                                    Agregar</button>
                            </div>
                        </form> 
                    </div>
            </div>
        </div>
        <!-- aqui Termina el formulario -->

        
        <br>
        <div class=" col-sm-10 box box-primary mx-auto ">
            <div class="box-body">
<!--datatable-->

                <table class="table table-bordered data-table table-light table-hover " id="laravel-datatable-crud">
                    <thead>
                        <tr>
                        <td>Nro.</td>
                        <!--td>Estado</td>
                        <td>Municipio</td-->
                        <td>Parroquia</td>
                        <td>Nombre de Nucleo</td>
                        <td>Codigo</td>
                        <td>Configuracion del Nucleo</td>
                        
                        </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>


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
                        <script>
                        $(document).ready(function(){
                            $('#Estado').on('change', function(){
                                var estado_id = $(this).val();
                                if ($.trim(estado_id !='')){
                                    $.get('/municipio', {estado_id: estado_id}, function (municipio){
                                        $('#Municipio').empty();
                                        $('#Parroquia').empty();
                                        $('#Municipio').append("<option value=''>Seleccione un Municipio</option>");
                                        $('#Parroquia').append("<option value=''>Seleccione una Parroquia</option>");
                                        $.each(municipio, function(index, value){
                                            $('#Municipio').append("<option value='"+index+"'>'"+value+"'</option>")

                                        });
                                    });
                                }
                            });


                            
                        $('#Municipio').on('change', function(){
                                var municipio_id = $(this).val();
                                console.log(municipio_id);
                                if ($.trim(municipio_id !='')){
                                    $.get('/parroquia', {municipio_id: municipio_id}, function (parroquia){
                                        $('#Parroquia').empty();
                                        $('#Parroquia').append("<option value=''>Selecciona una Parroquia</option>");
                                        $.each(parroquia, function(index, value){
                                            $('#Parroquia').append("<option value='"+index+"'>'"+value+"'</option>")

                                        });
                                    });
                                }
                            });




                        });
                        



//datatable
                        $(function () {

                            var table = $('.data-table').DataTable({

                                processing: true,

                                serverSide: true,

                                ajax: "{{ route('nucleo.index') }}",
                               
                                columns: [

                                    {data: 'id', name: 'id'},

                                    {data: 'id_parroquia', name: 'id_parroquia'},

                                    {data: 'nombre_nucleo', name: 'nombre_nucleo'},

                                    {data: 'codigo', name: 'codigo'},

                                    {data: 'action', name: 'action', orderable: false, searchable: false},

                                ]
                                
                            });
                           


                        });

                        

                        </script>
                        @endsection