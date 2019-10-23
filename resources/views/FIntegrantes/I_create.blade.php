@extends('admin.layout2')
@section('content2')
<form action="{{ route('Integrantes.store')}}" method="post" enctype="multipart/form-data" , files='true' value>
{{csrf_field()}}
        @csrf
 <input type="text" name="nombre" id="Nintegrante" placeholder="Nombre" class="form-control mb4" >
 <br>
 <input type="text" name="posicion" id="posicion" placeholder="Posicion" class="form-control mb4" >
 <br>
 <input type="text" name="apellidos" id="apellidos" placeholder="apellido" class="form-control mb4" >
 <br>
 <input type="text" name="edad" id="edad" placeholder="edad" class="form-control mb4" >
 <br>
 <input type="text" name="Equipos_id" id="equipo" placeholder="EQUIPO" class="form-control mb4" >
 <br>
 <input type="file" name="foto" id="fot" placeholder="foto">
        <button type="submit" class="btn btn-info">Insertar</button>


</form>
@endsection