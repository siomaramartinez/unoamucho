@extends('plantilla')
@section('PEquipos')

@if(isset($Equipo))
<form action="{{ route('Equipos.update', $Equipo->id) }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
@else
<form action="{{ route('Equipos.store')}}" method="post" enctype="multipart/form-data", files='true' value>
{{csrf_field()}}
@endif
@csrf
<br><br>
<div class="input-group mb-4">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">NOMBRE DE EQUIPO</span>
</div>
<input type="text" name="Nombre_Equipo" id="Nequipo" placeholder="Nombre de equipo" class="form-control mb4" value="{{$Equipo->Nombre_Equipo ?? ''}}">
</div>

<div class="input-group mb-4">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">NOMBRE DE DT</span>
</div>
<input type="text" name="Nombre_de_DT" id="NDT" placeholder="Nombre de director tecnico" class="form-control mb2" value="{{$Equipo->Nombre_de_DT ?? ''}}">
</div>

<div class="input-group mb-4">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">PAGO REALIZADO</span>
</div>
 <input type="text" name="PAGO" id="Pago" placeholder="P pagado / N no pagado" class="form-control mb2" value="{{$Equipo->PAGO ?? ''}}">
</div>
 
 @if(isset($Equipo))
 <img src="{{asset('storage').'/'.$Equipo->Logo}}" alt="" width="200">
 <br><br>
 <input type="file" name="Logo" id="fot" placeholder="LOGO"  >
 @else
 <input type="file" name="Logo" id="fot" placeholder="LOGO" >
 
 @endif
 <br><br>
 <!--<a href="{{url('Equipos')}}">Regresar</a>-->

 @if(isset($Equipo))
 <button class="btn btn-primary btn-block">EDITAR</button>

 @else
<button class="btn btn-primary btn-block" type="submit ">INSERT</button>
@endif
</form>
<form action="{{url('Equipos')}}">
       <button type="submit" class="btn btn-info">REGRESAR</button>
 </form>
@endsection