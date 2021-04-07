@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Articulo:') }}</div>

                <div class="card-body">
                <form action="{{ url("articulo/{$articulo->id}") }}" method="post">
                        @csrf
                        {{ method_field('PATCH')}}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" value="{{ $articulo->nombre}}" type="text" class="form-control" name="nombre" required autocomplete="nombre" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Descripcion</label>

                            <div class="col-md-6">
                                <input id="descripcion" value="{{ $articulo->descripcion}}" type="text" class="form-control" name="descripcion" required autocomplete="descripcion" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Categoria</label>

                            <div class="col-md-6">
                            <select name="categoria">

                        @foreach ($categorias as $categoria)
                        <tr>
                            <option> <?php echo $categoria['nombre']  ?> </option>
      
                        @endforeach
                            </select>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <button type="submit"  class="btn btn-primary" onclick="return confirm('¿Seguro que quieres modificar el artículo?')">Editar</button>
                            </div>
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
