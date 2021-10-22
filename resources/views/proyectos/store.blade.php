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
                required>
                <option value=""></option>
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
            </select>
        </div>
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>
</form>
