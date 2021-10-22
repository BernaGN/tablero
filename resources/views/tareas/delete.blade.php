<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">Borrar</div>
            <form action="{{ route('tareas.destroy', $tarea->id) }}" method="post">
                <div class="modal-body">
                    ¿Estas seguro de eliminar este registro?
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="tarea_id" id="tarea_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>
