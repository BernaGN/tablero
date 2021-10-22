<div class="modal-header">Borrar</div>
<form action="{{ route('proyectos.destroy', $proyectos->id) }}" method="post">
    <div class="modal-body">
        ¿Estas seguro de eliminar este registro?
        @csrf
        @method('DELETE')
        <input type="hidden" name="proyecto_id">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger danger">Eliminar</button>
    </div>
</form>
