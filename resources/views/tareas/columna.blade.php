<form action="{{ route('estatus.store') }}" method="POST">
    <div class="modal-header">
        <h5 class="modal-title">Agregar Columna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese el nombre de la columna"
                aria-describedby="helpId" required>
        </div>
        <div class="form-group">
            <label for="backgroundColor_id">Color de fondo</label>
            <select name="backgroundColor_id" id="backgroundColor_id" class="form-control" required>
                <option value=""></option>
                @foreach ($colores as $color)
                    <option value="{{ $color->id }}" class="bg-{{ $color->nombre }}">{{ $color->nombre }}</option>
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
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>
</form>
