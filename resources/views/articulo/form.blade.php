                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nombre" required autocomplete="nombre" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Descripcion</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control" name="descripcion" required autocomplete="descripcion" autofocus>
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
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        
                        
                    </form>

                    <form action="{{ url('categoria/create')}}" method="get">
                <button type="submit" class="btn btn-primary">Crear categoria</button>