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
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>

            
               @foreach ($categorias as $categoria)
            <tr>
            
              <td> {{$categoria->id}} </td>
              <td> {{$categoria->nombre}} </td>
              <td> {{$categoria->descripcion}} </td>
              <td>
              
              

              <a href="{{ url('/categoria/'.$categoria->id.'/edit') }}" class="btn btn-primary" onclick="return confirm('¿Seguro?')"> Editar</a> 

              <form action="{{ url("categoria/{$categoria->id}") }}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE')}} <!--para transformarlo en DELETE-->
                  <input  class="bnt bnt-danger" type="submit" onclick="return confirm('¿Seguro?')" value="Borrar"> 
                   

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