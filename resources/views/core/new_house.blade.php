@extends('layouts.app')

@section('content')
  
  <!-- aqui Inicia el Formulario-->


  <div class="container-fluid text-center ">   
            <!-- botones principales--> 
            <?php
           // include("principal.html");
            ?>
            <!-- botones principales--> 

           
                
                @switch(request()->comunidad)
                    @case(1)
                            <div class="col-sm-10 text-left mx-auto"> 
                        <br>
                    <em><h1>Asignar casa al nucleo: {{ $indexcasa->nombre_nucleo }}</h1></em>
                        <hr>
                    @break

                    @case(2)
                            <div class="col-sm-10 text-left mx-auto"> 
                        <br>
                    <em><h1>Asignar comuna al nucleo: {{ $indexcasa->nombre_nucleo }}</h1></em>
                        <hr>
                    @break

                    @case(3)
                            <div class="col-sm-10 text-left mx-auto"> 
                        <br>
                    <em><h1>Asignar base de misiones al nucleo: {{ $indexcasa->nombre_nucleo }}</h1></em>
                        <hr>
                    @break

                        @case(4)
                        <div class="col-sm-10 text-left mx-auto"> 
                            <br>
                        <em><h1>Asignar comunidad al nucleo: {{ $indexcasa->nombre_nucleo }}</h1></em>
                            <hr>
                    @break

                        @case(5)
                                    <div class="col-sm-10 text-left mx-auto"> 
                            <br>
                        <em><h1>Asignar calle al nucleo: {{ $indexcasa->nombre_nucleo }}</h1></em>
                            <hr>
                    @break
                @endswitch





                @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('nucleo.asignars') }}" enctype="multipart/form-data">
          @csrf
                    <div class="form-row was-validated">

                    @switch(request()->comunidad)

                        @case(1)
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Codigo casa</label>
                                <input type="text" class="form-control" name="nucleo" id="NR"  placeholder="Describa el Nombre del Núcleo" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                            </div>
                            <!--div class="form-group col-md-6">
                                <button type="submit" class="btn btn-secondary" id="btnbuscar"><ion-icon name="duplicate-outline"></ion-icon>
                                   buscar</button>
                            </div-->


                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre de Casa de Alimentaciòn</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Describa el Nombre de la Casa de Alimentacion" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                            </div>
                           
                            
                                <!--label for="inputEmail4">Sector</label-->
                                <input type="hidden" class="form-control" id="Sector" name="id_nucleo" value="{{ $indexcasa->id}}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--doble input-->
                                <input type="hidden" class="form-control" id="id_tipo" name="id_tipo" value="{{ request()->comunidad}}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--triple input-->
                                <input type="hidden" class="form-control" id="Sector" name="id_comuna" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--cuadra input-->
                                <input type="hidden" class="form-control" id="id_parroquia" name="id_parroquia"  value="{{ $indexcasa->id_parroquia }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--penta input-->
                                <input type="hidden" class="form-control" id="nombre_nucleo" name="nombre_nucleo"  value="{{ $indexcasa->nombre_nucleo }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--exterminion input-->
                                <input type="hidden" class="form-control" id="codigo" name="codigo"  value="{{ $indexcasa->codigo }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <div class="valid-feedback">Valid.</div>
                                <!--div class="invalid-feedback">Ingrese los datos porfavor.</div-->    
                           
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Comunas</label>
                                <input type="text" class="form-control" id="Sector" placeholder="Describa el Sector de la Casa de Alimentacion" required>                           
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Ingrese los datos porfavor.</div>
                            </div>

                        @break

                        @case(2)
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">codigo comuna</label>
                                <input type="text" class="form-control" name="nucleo" id="NR"  placeholder="Describa el Nombre del Núcleo" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                            </div>
                            <!--div class="form-group col-md-6">
                                <button type="submit" class="btn btn-secondary" id="btnbuscar"><ion-icon name="duplicate-outline"></ion-icon>
                                   buscar</button>
                            </div-->


                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre de comuna</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Describa el Nombre de la Casa de Alimentacion" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                            </div>
                           
                            
                                <!--label for="inputEmail4">Sector</label-->
                                <input type="hidden" class="form-control" id="Sector" name="id_nucleo" value="{{ $indexcasa->id}}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--doble input-->
                                <input type="hidden" class="form-control" id="id_tipo" name="id_tipo" value="{{ request()->comunidad}}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--triple input-->
                                <input type="hidden" class="form-control" id="Sector" name="id_comuna" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--cuadra input-->
                                <input type="hidden" class="form-control" id="id_parroquia" name="id_parroquia"  value="{{ $indexcasa->id_parroquia }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--penta input-->
                                <input type="hidden" class="form-control" id="nombre_nucleo" name="nombre_nucleo"  value="{{ $indexcasa->nombre_nucleo }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--exterminion input-->
                                <input type="hidden" class="form-control" id="codigo" name="codigo"  value="{{ $indexcasa->codigo }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <div class="valid-feedback">Valid.</div>
                                <!--div class="invalid-feedback">Ingrese los datos porfavor.</div-->    
                           
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Comunas</label>
                                <input type="text" class="form-control" id="Sector" placeholder="Describa el Sector de la Casa de Alimentacion" required>                           
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Ingrese los datos porfavor.</div>
                            </div>

                        @break

                        @case(3)
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">codigo base de misiones</label>
                                <input type="text" class="form-control" name="nucleo" id="NR"  placeholder="Describa el Nombre del Núcleo" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                            </div>
                            <!--div class="form-group col-md-6">
                                <button type="submit" class="btn btn-secondary" id="btnbuscar"><ion-icon name="duplicate-outline"></ion-icon>
                                   buscar</button>
                            </div-->


                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre de base de misiones</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Describa el Nombre de la Casa de Alimentacion" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                            </div>
                           
                            
                                <!--label for="inputEmail4">Sector</label-->
                                <input type="hidden" class="form-control" id="Sector" name="id_nucleo" value="{{ $indexcasa->id}}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--doble input-->
                                <input type="hidden" class="form-control" id="id_tipo" name="id_tipo" value="{{ request()->comunidad}}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--triple input-->
                                <input type="hidden" class="form-control" id="Sector" name="id_comuna" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--cuadra input-->
                                <input type="hidden" class="form-control" id="id_parroquia" name="id_parroquia"  value="{{ $indexcasa->id_parroquia }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--penta input-->
                                <input type="hidden" class="form-control" id="nombre_nucleo" name="nombre_nucleo"  value="{{ $indexcasa->nombre_nucleo }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--exterminion input-->
                                <input type="hidden" class="form-control" id="codigo" name="codigo"  value="{{ $indexcasa->codigo }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <div class="valid-feedback">Valid.</div>
                                <!--div class="invalid-feedback">Ingrese los datos porfavor.</div-->    
                           
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Comunas</label>
                                <input type="text" class="form-control" id="Sector" placeholder="Describa el Sector de la Casa de Alimentacion" required>                           
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Ingrese los datos porfavor.</div>
                            </div>

                        @break

                        @case(4)
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">codigo comuna</label>
                                <input type="text" class="form-control" name="nucleo" id="NR"  placeholder="Describa el Nombre del Núcleo" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                            </div>
                            <!--div class="form-group col-md-6">
                                <button type="submit" class="btn btn-secondary" id="btnbuscar"><ion-icon name="duplicate-outline"></ion-icon>
                                   buscar</button>
                            </div-->


                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre de comuna</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Describa el Nombre de la Casa de Alimentacion" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                            </div>
                           
                            
                                <!--label for="inputEmail4">Sector</label-->
                                <input type="hidden" class="form-control" id="Sector" name="id_nucleo" value="{{ $indexcasa->id}}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--doble input-->
                                <input type="hidden" class="form-control" id="id_tipo" name="id_tipo" value="{{ request()->comunidad}}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--triple input-->
                                <input type="hidden" class="form-control" id="Sector" name="id_comuna" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--cuadra input-->
                                <input type="hidden" class="form-control" id="id_parroquia" name="id_parroquia"  value="{{ $indexcasa->id_parroquia }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--penta input-->
                                <input type="hidden" class="form-control" id="nombre_nucleo" name="nombre_nucleo"  value="{{ $indexcasa->nombre_nucleo }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--exterminion input-->
                                <input type="hidden" class="form-control" id="codigo" name="codigo"  value="{{ $indexcasa->codigo }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <div class="valid-feedback">Valid.</div>
                                <!--div class="invalid-feedback">Ingrese los datos porfavor.</div-->    
                           
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Comunas</label>
                                <input type="text" class="form-control" id="Sector" placeholder="Describa el Sector de la Casa de Alimentacion" required>                           
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Ingrese los datos porfavor.</div>
                            </div>

                        @break

                        @case(5)
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">codigo calle</label>
                                <input type="text" class="form-control" name="nucleo" id="NR"  placeholder="Describa el Nombre del Núcleo" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                            </div>
                            <!--div class="form-group col-md-6">
                                <button type="submit" class="btn btn-secondary" id="btnbuscar"><ion-icon name="duplicate-outline"></ion-icon>
                                   buscar</button>
                            </div-->


                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre de la calle</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Describa el Nombre de la Casa de Alimentacion" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                            </div>
                           
                            
                                <!--label for="inputEmail4">Sector</label-->
                                <input type="hidden" class="form-control" id="Sector" name="id_nucleo" value="{{ $indexcasa->id}}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--doble input-->
                                <input type="hidden" class="form-control" id="id_tipo" name="id_tipo" value="{{ request()->comunidad}}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--triple input-->
                                <input type="hidden" class="form-control" id="Sector" name="id_comuna" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--cuadra input-->
                                <input type="hidden" class="form-control" id="id_parroquia" name="id_parroquia"  value="{{ $indexcasa->id_parroquia }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--penta input-->
                                <input type="hidden" class="form-control" id="nombre_nucleo" name="nombre_nucleo"  value="{{ $indexcasa->nombre_nucleo }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <!--exterminion input-->
                                <input type="hidden" class="form-control" id="codigo" name="codigo"  value="{{ $indexcasa->codigo }}" placeholder="Describa el Sector de la Casa de Alimentacion" required>
                                <div class="valid-feedback">Valid.</div>
                                <!--div class="invalid-feedback">Ingrese los datos porfavor.</div-->    
                           
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Comunas</label>
                                <input type="text" class="form-control" id="Sector" placeholder="Describa el Sector de la Casa de Alimentacion" required>                           
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Ingrese los datos porfavor.</div>
                            </div>

                        @break
                    @endswitch


                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre del Responsable</label>
                                <input type="text" class="form-control" id="responsable" name="responsable" placeholder="Describa el Nombre del responsable" required>                           
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Ingrese los datos porfavor.</div>
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
        <div class="box box-primary col-sm-10 mx-auto">
            <div class="box-body ">
<!--datatable-->

                <table class="table table-bordered data-table table-light table-hover" id="laravel-datatable-crud">
                    <thead>
                        <tr>
                        <td>Id</td>
                        <!--td>Estado</td>
                        <td>Municipio</td-->
                        <td>Parroquia</td>
                        <td>Nombre de Nucleo</td>
                        <td>Codigo</td>
                        
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
                            $('#btnbuscar').on('click', function(){
                                var codigo_casa = $(this).val();
                               // if ($.trim(estado_id !='')){
                                    $.get('/municipio', {estado_id: estado_id}, function (municipio){
                                        $('#Municipio').empty();
                                        $('#Parroquia').empty();
                                        $('#Municipio').append("<option value=''>Selecciona un municipio</option>");
                                        $.each(municipio, function(index, value){
                                            $('#Municipio').append("<option value='"+index+"'>'"+value+"'</option>")

                                        });
                                    });
                              //  }
                            });


                            
                       




                        });

                        /*
                        $(document).ready(function(){
                            $('#Estado').on('change', function(){
                                var estado_id = $(this).val();
                                if ($.trim(estado_id !='')){
                                    $.get('/municipio', {estado_id: estado_id}, function (municipio){
                                        $('#Municipio').empty();
                                        $('#Parroquia').empty();
                                        $('#Municipio').append("<option value=''>Selecciona un municipio</option>");
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
                                        $('#Parroquia').append("<option value=''>Selecciona un parroquia</option>");
                                        $.each(parroquia, function(index, value){
                                            $('#Parroquia').append("<option value='"+index+"'>'"+value+"'</option>")

                                        });
                                    });
                                }
                            });




                        });
                        */



//datatable
                        $(function () {

                            var table = $('.data-table').DataTable({

                                processing: true,

                                serverSide: true,

                                ajax: "{{ route('nucleo.indexasignarcom') }}",
                               
                                columns: [

                                    {data: 'id', name: 'id'},

                                    {data: 'id_parroquia', name: 'id_parroquia'},

                                    {data: 'nombre_nucleo', name: 'nombre_nucleo'},

                                    {data: 'codigo', name: 'codigo'},

                                  //  {data: 'action', name: 'action', orderable: false, searchable: false},

                                ]
                                
                            });
                           


                        });

                        

                        </script>
                        @endsection