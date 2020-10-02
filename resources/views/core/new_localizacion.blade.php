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
                <form method="post" action="{{ route('localizacion.store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form-row was-validated">
                   


                            <input type="hidden" name="id_nucleo" class="form-control" id="id_nucleo"  value="{{request()->id}}" required>
                            <input type="hidden" name="id_tipo" class="form-control" id="id_comunidad"  value="{{request()->comunidad}}" required>
                            <input type="hidden" name="id_localizacion" class="form-control" id="id_comunidad"  value="{{request()->comunidad}}" required>


                  
                        

                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Nombre</label>
                               <input type="text" name="nombre" class="form-control" id="Nombre" placeholder="Nombre Completo" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>   

                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Nro de Registro </label>
                               <input type="number" name="nregistro" class="form-control" id="Tlf" placeholder="Ingrese el Nro de Registro" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Direccion</label>
                               <input type="text" name="direccion" class="form-control" id="Apellido" placeholder="Apellido Completo" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                                <label for="inputEmail4"> Comunidad</label>
                                <input type="text" id="comunidad" name="comunidad" class="form-control" required>   
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback"> Ingrese los datos porfavor.</div>
                            </div>

                        
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Responsable</label>
                               <input type="text" name="responsable" class="form-control" id="Apellido" placeholder="Apellido Completo" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Cedula de Responsable</label>
                               <input type="number" name="cedula_responsable" class="form-control" id="Apellido" placeholder="Apellido Completo" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Ingrese los datos porfavor.</div>    
                           </div>
                          
                           
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
          <td>Nombre</td>
          <td>numero de Identificacion</td>
          <td>responsable</td>
          <td>cedula_responsable</td>
         
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

$(function () {

  var table = $('.data-table').DataTable({

      processing: true,

      serverSide: true,

      ajax: "{{ route('nucleo.indexlocalizacion') }}",

      columns: [

          {data: 'id', name: 'id'},

          {data: 'nombre', name: 'nombre'},

          {data: 'nregistro', name: 'nregistro'},

          {data: 'responsable', name: 'responsable'},

          {data: 'cedula_responsable', name: 'cedula_responsable'},


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