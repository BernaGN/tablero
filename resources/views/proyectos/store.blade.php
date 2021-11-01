<form action="{{ route('proyectos.store') }}" method="POST">
    <div class="modal-header">
        <h5 class="modal-title">Agregar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre"
                aria-describedby="helpId" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea type="text" name="descripcion" id="descripcion" class="form-control"
                placeholder="Ingrese el descripcion de la tarea" aria-describedby="helpId" required></textarea>
        </div>
        <div class="form-group">
            <label for="configuracion_id">Configuracion</label>
            <select name="configuracion_id" id="configuracion_id" class="form-control" aria-describedby="helpId"
                onchange="config()" required>
                <option value=""></option>
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div id="mensaje" style="display: none;">
            <div class="form-group">
                <label for="nameConfiguracion">Nombre de Configuracion</label>
                <input type="text" name="nameConfiguracion" id="nameConfiguracion" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Campo 1</label>
                <input type="text" name="name[]" id="name" class="form-control">
                <div class="form-group">
                    <label for="backgroundColor_id">Color de fondo</label>
                    <select name="backgroundColor_id" id="backgroundColor_id" class="form-control" required>
                        <option value=""></option>
                        @foreach ($colores as $color)
                            <option value="{{ $color->id }}" class="bg-{{ $color->nombre }}">{{ $color->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="textColor_id">Color de texto</label>
                    <select name="textColor_id" id="textColor_id" class="form-control" required>
                        <option value=""></option>
                        @foreach ($colores as $color)
                            <option value="{{ $color->id }}" class="bg-{{ $color->nombre }}">{{ $color->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <label for="name">Campo 1</label>
                <input type="text" name="name[]" id="name" class="form-control">
                <div class="form-group">
                    <label for="backgroundColor_id">Color de fondo</label>
                    <select name="backgroundColor_id" id="backgroundColor_id" class="form-control" required>
                        <option value=""></option>
                        @foreach ($colores as $color)
                            <option value="{{ $color->id }}" class="bg-{{ $color->nombre }}">
                                {{ $color->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="textColor_id">Color de texto</label>
                    <select name="textColor_id" id="textColor_id" class="form-control" required>
                        <option value=""></option>
                        @foreach ($colores as $color)
                            <option value="{{ $color->id }}" class="bg-{{ $color->nombre }}">
                                {{ $color->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <label for="name">Campo 1</label>
                <input type="text" name="name[]" id="name" class="form-control">
                <div class="form-group">
                    <label for="backgroundColor_id">Color de fondo</label>
                    <select name="backgroundColor_id" id="backgroundColor_id" class="form-control" required>
                        <option value=""></option>
                        @foreach ($colores as $color)
                            <option value="{{ $color->id }}" class="bg-{{ $color->nombre }}">
                                {{ $color->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="textColor_id">Color de texto</label>
                    <select name="textColor_id" id="textColor_id" class="form-control" required>
                        <option value=""></option>
                        @foreach ($colores as $color)
                            <option value="{{ $color->id }}" class="bg-{{ $color->nombre }}">
                                {{ $color->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <script>
            function config() {
                var elementos = document.getElementById('configuracion_id').value == '4';
                var mensaje = document.getElementById('mensaje');
                mensaje.style.display = elementos ? 'block' : 'none';
            }
        </script>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>
</form>
