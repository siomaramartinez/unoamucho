@extends('plantilla')
@section('PEquipos')

<br><br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>LOGO</th>
                <th>EQUIPO</th>
                <th>DT</th>
                <th>PAGO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($equipo as $equipoint)
            <tr>
                <td class="table-info">{{$loop->iteration}}</td>
                <td class="table-info">
                    <img src="{{asset('storage').'/'.$equipoint->Logo}}" alt="" width="200">
                </td>
                <td class="table-info">{{$equipoint->Nombre_Equipo}}</td>
                <td class="table-info">{{$equipoint->Nombre_de_DT}}</td>
                <td class="table-info">{{$equipoint->PAGO}}</td>
                <td class="table-info">
                    <form action="{{route('Equipos.edit' , $equipoint->id)}}">

                        <button type="submit" class="btn btn-warning">Editar</button>
                    </form>
                     <br>
                    <form method="post" action="{{route('Equipos.destroy',$equipoint->id) }}">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger"  onclick="return confirm('Borrar?');">Borrar</button>
                        

                    </form>
                    <br>
                    <form action="{{route('Equipos.show',$equipoint->id)}}">
                    <button type="submit" class="btn btn-info">Datos</button>
                    </form>
                  <!-- <a href="{{route('Equipos.show',$equipoint->id)}}" name='show'>DATOS<a> -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{route('Equipos.create') }}">
                
    <button type="submit" class="btn btn-success">Crear</button>

   
@endsection