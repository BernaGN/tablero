@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-group">
            <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#agregarTarea"><i
                    class="fas fa-plus"></i> Agregar Tarea
            </button>
            <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#agregarColumna"><i
                    class="fas fa-plus"></i> Agregar Columna
            </button>
            <div class="row col-12">
                @foreach ($estatus as $estatu)
                    <div class="card col-md">
                        <div class="card-header mt-2 {{ $estatu->backgroundColor }}">
                            <h5 class="card-title {{ $estatu->textColor }}">{{ $estatu->name }}</h5>
                        </div>
                        <div class="card-body">
                            @each('tareas.tarea', $tareas->where('estatu_id', $estatu->id), 'tarea')
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="modal" id="agregarTarea" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @include('tareas.store')
            </div>
        </div>
    </div>

    <div class="modal" id="editarTarea" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @if ($tareas->count())
                    @include('tareas.update')
                @endif
            </div>
        </div>
    </div>

    <div class="modal" id="agregarColumna" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @include('tareas.columna')
            </div>
        </div>
    </div>
@endsection
