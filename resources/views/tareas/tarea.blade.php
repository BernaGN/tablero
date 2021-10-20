<div class="float-right">
    <i class="fas fa-calendar"></i> {{ $tarea->created_at }}
    <br>
    <i class="fas fa-comment-dots"></i> {{ $tarea->cometarios->count() }}
</div>
<br>
<br>
<b><big>{{ $tarea->titulo }}</big></b><br>
<div class="mt-2 mb-2">{{ $tarea->descripcion }}</div>
<a class="btn btn-warning" href="#" role="button" data-toggle="modal" data-target="#editarTarea"
    data-id="{{ $tarea->id }}" data-titulo="{{ $tarea->titulo }}" data-descripcion="{{ $tarea->descripcion }}"
    data-estatu="{{ $tarea->estatu_id }}">Editar</a>
<form action="{{ route('tareas.destroy', $tarea->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit"
        onclick="return confirm('Deseas eliminar esta tarea?');">Eliminar</button>
</form>
<hr />
