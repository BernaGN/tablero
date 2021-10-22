<form action="{{ route('tareas.store') }}" method="POST">
    <div class="modal-header">
        <h5 class="modal-title">Agregar Tarea</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        @csrf
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Ingrese el titulo de la tarea"
                aria-describedby="helpId" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea type="text" name="descripcion" id="descripcion" class="form-control"
                placeholder="Ingrese el descripcion de la tarea" aria-describedby="helpId" required></textarea>
        </div>
        <div class="form-group">
            <label for="estatu_id">Estatus</label>
            <select name="estatu_id" id="estatu_id" class="form-control" required>
                <option value=""></option>
                @foreach ($estatus as $estatu)
                    <option value="{{ $estatu->id }}">{{ $estatu->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="start">Inico</label>
            <input type="datetime-local" id="start" name="start">
        </div>
        <div class="form-group">
            <label for="end">Fin</label>
            <input type="datetime-local" id="end" name="end">
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>
</form>
