<form action="{{ route('comentarios.store') }}" method="POST">
    <div class="modal-header">
        <h5 class="modal-title">Agregar Comentario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        @csrf
        <input type="hidden" name="tarea_id" id="tarea_id">
        <div class="form-group">
            <label for="comentario">Comentario</label>
            <textarea type="text" name="comentario" id="comentario" class="form-control"
                placeholder="Ingrese el comentario de la tarea" aria-describedby="helpId" required></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>
</form>
