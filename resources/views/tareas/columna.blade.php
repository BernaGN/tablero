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
            <label for="backgroundColor">Color de fondo</label>
            <input type="text" name="backgroundColor" id="backgroundColor" class="form-control"
                placeholder="Ingrese el color de la columna" aria-describedby="helpId" required>
        </div>
        <div class="form-group">
            <label for="textColor">Color de texto</label>
            <input type="text" name="textColor" id="textColor" class="form-control"
                placeholder="Ingrese el color de textto de la columna" aria-describedby="helpId" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>
</form>
