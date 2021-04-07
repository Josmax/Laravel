@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <table class="table table-light">
          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Categoria</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>

            
               @foreach ($articulos as $articulo)
            <tr>
            
              <td> {{$articulo->id}} </td>
              <td> {{$articulo->nombre}} </td>
              <td> {{$articulo->descripcion}} </td>
              <td> {{$articulo->categoria}} </td>
              <td>
              
                <a href="{{ url('/articulo/'.$articulo->id.'/edit') }}" class="btn btn-primary" onclick="return confirm('¿Seguro?')"> Editar</a> 
              

                <form action="{{ url("articulo/{$articulo->id}") }}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE')}} <!--para transformarlo en DELETE-->
                  <input  class="bnt bnt-primary" type="submit" onclick="return confirm('¿Seguro?')" value="Borrar"> 
                   

                </form>
              
              </td>
            
            </tr>
            @endforeach  
          </tbody>
        </table>
        </div>
    </div>
</div>


@endsection