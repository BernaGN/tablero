<div class="float-right">
    <i class="fas fa-calendar"></i> {{ $tarea->created_at }}
    <br>
    <i class="fas fa-comment-dots"></i> {{ $tarea->comentarios->count() }}
</div>
<br>
<br>
<b><big>{{ $tarea->titulo }}</big></b><br>
<div class="mt-2 mb-2">{{ $tarea->descripcion }}</div>
<form action="{{ route('tareas.destroy', $tarea->id) }}" method="post">
    @csrf
    @method('DELETE')
    <a class="btn btn-link float-right mb-3" data-toggle="modal" id="comentario" data-target="#agregarComentario"
        data-id="{{ $tarea->id }}"><i class="fas fa-plus"></i> Comentario</a>
    <a class="btn btn-warning" href="#" role="button" data-toggle="modal" data-target="#editarTarea"
        data-id="{{ $tarea->id }}" data-titulo="{{ $tarea->titulo }}"
        data-descripcion="{{ $tarea->descripcion }}" data-estatu="{{ $tarea->estatu_id }}">
        <i class="fas fa-pencil-alt"></i> Editar</a>

    <button class="btn btn-danger" type="submit" onclick="return confirm('Deseas eliminar esta tarea?');"><i
            class="fas fa-trash-alt"></i> Eliminar</button>
</form>
@foreach ($tarea->comentarios as $comentario)
    <p>{{ $comentario->comentario }}</p>
@endforeach
<hr />
