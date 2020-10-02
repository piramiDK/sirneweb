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
           <em> <h1>Nuevo Integrante del Núcleo de Recreación Comunitaria</h1></em>
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
                <form method="post" action="{{ route('integrante.store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form-row was-validated">
                    <div class="form-group col-md-6">
                                <label for="inputEmail4">Estado</label>
                                <select id="Estado" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
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
                                    <option selected disabled>Seleccione una Opcion</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Parroquia</label>
                                <select id="Parroquia" name="id_parroquia" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                  
                           
                         <div class="form-group col-md-6">
                               <label for="inputEmail4">Cedula </label>
                               <input type="text" name="cedula" class="form-control" id="Cedula" maxlength="9"  placeholder="Nro de Cedula" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>

                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Nombre Completo</label>
                               <input type="text" name="nombres" class="form-control" id="Nombre" placeholder="Nombre Completo" maxlength="30" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Apellido Completo</label>
                               <input type="text" name="apellidos" class="form-control" id="Apellido" placeholder="Apellido Completo" maxlength="30" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <!--adicional-->
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Edad</label>
                               <input type="text" name="edad" class="form-control" id="edad" placeholder="ingrese la edad" maxlength="30" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Fecha de Nacimiento</label>
                               <input type="date" name="fechan" class="form-control" id="fechan"  required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Responsabilidad en el nucleo </label>
                               <input type="number" name="responsabilidad" class="form-control" id="fechan"  required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <!--fin adicional-->
                          
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Tlf </label>
                               <input type="text" name="tlf" class="form-control" id="Tlf" placeholder="Describa Telefono" maxlength="11" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>

                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Correo Electronico</label>
                               <input type="email" name="correo" class="form-control" id="Correo" placeholder="Describa Correo" maxlength="30" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>

                           <!--mas adicional 2-->
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Eres menor de edad? </label>
                               <input type="text" name="pmenor" class="form-control" id="pmenor"  required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Cedula del representante</label>
                               <input type="text" name="cedulare" class="form-control" id="cedulare">
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Nombre del representante </label>
                               <input type="text" name="nombrere" class="form-control" id="nombrere">
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Apellido del representante </label>
                               <input type="text" name="apellidore" class="form-control" id="apellidore">
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Edad del representante </label>
                               <input type="text" name="edadre" class="form-control" id="edadre">
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Telenofo del representante </label>
                               <input type="text" name="telefonore" class="form-control" id="telefonore">
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <!--fin adicional 2-->
                           </div>
                           

                           <hr> 


                          
                           <br>
                            <em> <h1>Nivel Acadimico</h1></em>
                                    <br> <div class="form-row was-validated">
                           
                  
                           
                       

                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Nivel Academico</label>
                               <input type="text" name="nivel_academico" class="form-control" id="Academico" placeholder="Ingrese el Nivel Academico" maxlength="30" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Estudias Actualmente?</label>
                               <select id="Municipio" name="estudias_p" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Que Estudias? </label>
                               <input type="text" name="estudias_des" class="form-control" id="Estudias1" placeholder="Describa que estudias" maxlength="10" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Desea Continuar Estudios?  </label>
                               <select id="Municipio" name="estudias_con" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Que deseas Estudiar?  </label>
                               <input type="text" name="estudias_condes" class="form-control" id="Estudios3" placeholder="Describa" maxlength="30" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>

                           <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Trabajas Actualmente?</label>
                               <select id="Municipio" name="trabajas_p" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                            </div>
                            <hr> 


                          
                           <br>
           <em> <h1>Caracterizacion de partido</h1></em>
                <br> <div class="form-row was-validated">
                <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Posee Carnet de la Patria?</label>
                               <select id="Municipio" name="poseepatria" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>

                            <input type="hidden" name="id_nucleo" class="form-control" id="id_nucleo"  value="{{request()->id}}" required>

                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Codigo de la Patria </label>
                               <input type="text" name="codigo-patria" class="form-control" maxlength="10" id="Codigo" placeholder="Describa Codigo" maxlength="30" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           
                              
                          
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Serial de la Patria </label>
                               <input type="text" name="serial-patria" class="form-control" maxlength="10" id="Serial" placeholder="Describa Serial" maxlength="30" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Posee Carnet del PSUV?</label>
                               <select id="Municipio" name="poseepsuv" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Código Carnet de PSUV </label>
                               <input type="text" name="codigo-psuv" class="form-control" id="PSUV1" maxlength="10" placeholder="Describa" maxlength="30" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Serial Carnet Del PSUV </label>
                               <input type="text" name="serial-psuv" class="form-control" id="PSUV2" maxlength="10" placeholder="Describa" maxlength="30" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                          
                            </div>
                            <hr> 


                          
                           <br>
           <em> <h1>Atencion de Estado</h1></em>
                <br> <div class="form-row was-validated">
                <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Inscrito en Plan Chamba Juvenil?</label>
                               <select id="Municipio" name="inscritochamba" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Tiene Hijos? </label>
                               <select id="Municipio" name="cantihijos" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Recibe Hogares de la Patria?</label>
                               <select id="Municipio" name="resivehogares" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                          
                          
                            </div>
                            <hr> 


                          
                           <br>
           <em> <h1>Datos de Vivienda</h1></em>
                <br> <div class="form-row was-validated">
                <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Discapacidad en el núcleo familiar?</label>
                               <select id="Municipio" name="disnucleo" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Recibe CLAP? </label>
                               <select id="Municipio" name="resiveclap" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Posee casa propia?</label>
                               <select id="Municipio" name="poseecasa" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">¿Condicion de la vivienda?</label>
                               <input type="text" name="descrivivienda" class="form-control" id="vivienda" placeholder="Describa Condicion de la vivienda " maxlength="30" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                          
                          
                            </div>

                            <hr> 


                                                    
                          <br>
                          <em> <h1>Datos Electorales</h1></em>
                          <br> <div class="form-row was-validated">
                          <div class="form-group col-md-6">
                              <label for="inputEmail4">¿Inscrito en el CNE?</label>
                              <select id="Municipio" name="inscritocne" class="form-control" required>
                                    <option selected disabled>Seleccione una Opcion</option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Seleccione los datos porfavor.</div>
                            </div>
                          <div class="form-group col-md-6">
                              <label for="inputEmail4">Centro de Votación </label>
                              <input type="text" name="descrivotacion" class="form-control" id="Votacion" placeholder="Describa EL Centro de Votación donde pertenece" maxlength="30" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                          </div>
                         


                          </div>
                          <hr>
                          <br>
                          <em> <h1>Datos de Salud</h1></em>
                          <br> <div class="form-row was-validated">
                          <div class="form-group col-md-6">
                              <label for="inputEmail4">Tipo de Sangre</label>
                              <input type="text" name="descrisangre" class="form-control" id="Sangre" placeholder="Describa Tipo de Sangre " maxlength="30" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                          </div>
                          <div class="form-group col-md-6">
                              <label for="inputEmail4">Patologia de Base </label>
                              <input type="text" name="patologiabase" class="form-control" id="Patologia" placeholder="Describa Patologia" maxlength="30" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                          </div>
                          <div class="form-group col-md-6">
                              <label for="inputEmail4">Medicinas Indispensables </label>
                              <input type="text" name="descrimedicina" class="form-control" id="Medicinas" placeholder="Describa Medicinas" maxlength="30" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                         


                          </div>
                          </div>
                          <hr>
                          <br>
                          <em> <h1>Datos de Talla</h1></em>
                          <br> <div class="form-row was-validated">
                          <div class="form-group col-md-6">
                              <label for="inputEmail4">Talla de Camisa</label>
                              <input type="text" name="descricamisa" class="form-control" id="Camisa" placeholder="Describa Talla" maxlength="30" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                          </div>
                          <div class="form-group col-md-6">
                              <label for="inputEmail4">Talla de Pantalon </label>
                              <input type="text" name="descripantalon" class="form-control" id="Pantalon" placeholder="Describa Talla" maxlength="30" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                          </div>
                          <div class="form-group col-md-6">
                              <label for="inputEmail4">Talla de Zapatos </label>
                              <input type="text" name="descrizapato" class="form-control" id="Zapatos" placeholder="Describa Talla " maxlength="30" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                         


                          </div>
                          <div class="form-group col-md-6">
                              <label for="inputEmail4">Comisión de la Milicia </label>
                              <input type="text" name="descrimilicia" class="form-control" id="Milicia" placeholder="Describa Talla " maxlength="30" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                          </div>
                           
                           


                           <div class="form-group col-md-8">
                               <button type="submit" class="btn btn-secondary"><ion-icon name="duplicate-outline"></ion-icon>
                                   Registrar</button>
                           </div>
                       </form> 
                   </div>
           </div>
       </div>

       <!-- aqui Termina el formulario -->
    </div>
       <hr>
        <!--diomerly datatable-->

    <div class="row mx-auto">
        <div class="col-sm-10 mx-auto" >
  
    <div>
    <!--a style="margin: 19px;" class="btn btn-primary">Agregar Nueva</a-->
    <!--a style="margin: 19px;" href="/" class="btn btn-primary">Agregar Nueva</a-->
    </div>    
  <!--table class="table table-striped"-->
  <table class="table table-bordered data-table table-light table-hover" id="laravel-datatable-crud">
    <thead>
        <tr>
          <td>Id</td>
          <td>Cedula</td>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Codigo de la Patria</td>
          <td>Serial de la Patria</td>
          <td>Telefono</td>
          <td>Correo</td>
          <td width="100px">Acciones</td>
        </tr>
    </thead>
    <tbody>
      
    </tbody>
  </table>
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
    <script type="text/javascript">

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
                        




    

        $(function () {
           var idget = "request()->id";
            var table = $('.data-table').DataTable({

                processing: true,

                serverSide: true,

               // ajax: "{{ route('integrante.index') }}",
                ajax: "{{ url('nucleo/asignarintegrante/'.request()->id) }}",

                columns: [

                    {data: 'id_integrante', name: 'id_integrante'},

                    {data: 'nombres', name: 'nombres'},

                    {data: 'apellidos', name: 'apellidos'},

                    {data: 'cedula', name: 'cedula'},

                    {data: 'codigo-patria', name: 'codigo-patria'},

                    {data: 'serial-patria', name: 'serial-patria'},

                    {data: 'tlf', name: 'tlf'},

                    {data: 'correo', name: 'correo'},

                    {data: 'action', name: 'action', orderable: false, searchable: false},

                ]
            });
        });

/*
$('body').on('click', '.deleteTodo', function () {

var todo_id = $(this).data("id");
if(confirm("Are You sure want to delete !"))
{
 $.ajax({
     type: "post",
     url: "{{ url('contacts/destroy') }}"+'/'+todo_id,
     data: {
      "_token": "{{ csrf_token() }}"
      },
     success: function (data) {
     var oTable = $('#laravel-datatable-crud').dataTable(); 
     oTable.fnDraw(false);
    
     },
     error: function (data) {
         console.log('Error:', data);
     }
 });
 windows.localtion.reload();
}
});   
*/
    </script>
                      
                        @endsection