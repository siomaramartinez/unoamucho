@extends('plantilla')
@section('PEquipos')

<br><br>
<p>
Logo:  <img src="{{asset('storage').'/'.$Equipo->Logo}}" alt="" width="200">
<br>
Equipo: {{$Equipo->Nombre_Equipo}}
<br>
DT: {{$Equipo->Nombre_de_DT}}
<br>
PAGO REALIZADO P= SI N=no: {{$Equipo->PAGO}}
<br>
</p>
<form action="{{url('Equipos')}}">
       <button type="submit" class="btn btn-info">REGRESAR</button>
 </form>
@endsection