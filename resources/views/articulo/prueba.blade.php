@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
        <div class="card-header">{{ __('Articulo:') }}</div>
                <div class="card-body">
            <form action="{{ url('articulo')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion" id="descrpcion">
                </div>
                <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

                <h5>Categoria:</h5>
                <select name="categoria">

                @foreach ($categorias as $categoria)
                <tr>
                     <option> <?php echo $categoria['nombre']  ?> </option>
                      
               @endforeach
            </select>
        
            <br>
            <br>
                <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
                    <button type="submit" class="btn btn-success">Guardar</button>
            </form>

            <form action="{{ url('categoria/create')}}" method="get">
                <button type="submit" class="btn btn-primary">Crear categoria</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection