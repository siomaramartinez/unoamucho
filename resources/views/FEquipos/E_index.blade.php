@extends('admin.layout')
@section('content')
<h1> EQUIPOS</h1>
<br><br>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">Tabla</form></form></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 600px;">
                <table class="table table-sm table-dark table-striped table-hover">
                  <thead  >
                    <tr class="bg-info">
                      <th><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">#</form></form></th>
                      <th><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">LOGO</form></form></th>
                      <th><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">EQUIPO</form></form></th>
                      <th><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">DT</form></form></th>
                      <th><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">PAGO</form></form></th>
                      <th><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">DATOS</form></form></th>
                      <th><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">EDITAR</form></form></th>
                      <th><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">BORRAR</form></form></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($equipo as $equipoint)
                    <tr>
                      <td><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">{{$loop->iteration}}</form></form></td>
                      <td><form style="vertical-align: inherit;"><form style="vertical-align: inherit;"> <img src="{{asset('storage').'/'.$equipoint->Logo}}" alt="" width="150"></form></form></td>
                      <td><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">{{$equipoint->Nombre_Equipo}}</form></form></td>
                      <td><span class="tag tag-success"><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">{{$equipoint->Nombre_de_DT}}</form></form></span></td>
                      <td><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">{{$equipoint->PAGO}}</form></form></td>
                      <td><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">
                      </form>
                        <form action="{{route('Equipos.show',$equipoint->id)}}">
                         <button type="submit" class="btn btn-info">Datos</button>
                          </form>
                       </form></form>
                       </td>
                       <td><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">
                       </form>
                        <form action="{{route('Equipos.edit' , $equipoint->id)}}">
                         <button type="submit" class="btn btn-info">Editar</button>
                          </form>
                       </form></form>
                       </td>
                       <td><form style="vertical-align: inherit;"><form style="vertical-align: inherit;">
                       </form>
                       <form method="post" action="{{route('Equipos.destroy',$equipoint->id) }}">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit"  class="btn btn-danger"  onclick="return confirm('Borrar?');">Borrar</button>
                    </form>
                    </form></form>
                       </td>

                    </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection