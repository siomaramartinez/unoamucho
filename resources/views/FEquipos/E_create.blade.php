@extends('admin.layout2')
@section('content2')
@if(isset($Equipo))
<form action="{{ route('Equipos.update', $Equipo->id) }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    @else
    <form action="{{ route('Equipos.store')}}" method="post" enctype="multipart/form-data" , files='true' value>
        {{csrf_field()}}
        @endif
        @csrf
        <br><br>
        <div class="input-group mb-4 col-6">
            <div class="input-group-prepend conl-4">
                <span class="input-group-text" id="basic-addon1">NOMBRE DE EQUIPO</span>
            </div>
            <input type="text" name="Nombre_Equipo" id="Nequipo" placeholder="Nombre de equipo" class="form-control mb4" value="{{$Equipo->Nombre_Equipo ?? ''}} {{old('Nombre_Equipo')}}">
        </div>

        <div class="input-group mb-4 col-8">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">NOMBRE DE DT</span>
            </div>
            <input type="text" name="Nombre_de_DT" id="NDT" placeholder="Nombre de director tecnico" class="form-control mb2" value="{{$Equipo->Nombre_de_DT ?? ''}} {{old('Nombre_de_DT')}}">
        </div>
        @if(isset($Equipo))
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">PAGO REALIZADO</span>
            </div>
            <select class="custom-select col-2" id="inputGroupSelect01" name="PAGO" value="{{$Equipo->PAGO ?? ''}} " >
                <option selected >{{$Equipo->PAGO ?? ''}}</option>
                <option value="P">PAGO REALIZADO</option>
                <option value="N">PAGO NO REALIZADO</option>
            </select>
        </div>

        @else
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">PAGO REALIZADO</span>
            </div>
            <select class="custom-select col-2" id="inputGroupSelect01" name="PAGO">
                <option selected>Choose...</option>
                <option value="P">PAGO REALIZADO</option>
                <option value="N">PAGO NO REALIZADO</option>
            </select>
        </div>
        @endif
         <br>
        @if(isset($Equipo))
        <img src="{{asset('storage').'/'.$Equipo->Logo}} {{old('Logo')}}" alt="" width="200">
        <br><br>
        <input type="file" name="Logo" id="fot" placeholder="LOGO">
        @else
        <input type="file" name="Logo" id="fot" placeholder="LOGO">
         <br>
        @endif

        <!--<a href="{{url('Equipos')}}">Regresar</a>-->

        @if(isset($Equipo))
        <button class="btn btn-primary btn-block">EDITAR</button>

        @else
        <br>
        <button class="btn btn-primary btn-block col-3" type="submit ">INSERT</button>
        <br>
        @endif
    </form>
    <form action="{{url('Equipos')}}">
        <button type="submit" class="btn btn-info">REGRESAR</button>
    </form>


    @endsection