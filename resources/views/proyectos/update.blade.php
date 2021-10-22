<form action="{{ route('proyectos.update', $proyectos->first()) }}" method="POST">
    <div class="modal-header">
        <h5 class="modal-title">Agregar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre"
                aria-describedby="helpId" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea type="text" name="descripcion" id="descripcion" class="form-control"
                placeholder="Ingrese el descripcion de la tarea" aria-describedby="helpId" required></textarea>
        </div>
        <input type="hidden" name="proyecto_id" id="proyecto_id">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>
</form>
