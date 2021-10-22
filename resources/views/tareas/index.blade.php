@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection


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
                        <div class="card-header mt-2 bg-{{ $estatu->backgroundColor->nombre }}">
                            <h5 class="card-title text-center text-{{ $estatu->textColor->nombre }}">{{ $estatu->name }}
                            </h5>
                        </div>
                        <div class="card-body">
                            @each('tareas.show', $tareas->where('estatu_id', $estatu->id), 'tarea')
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
                @include('layouts.columna')
            </div>
        </div>
    </div>

    <div class="modal" id="agregarComentario" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @include('layouts.comentario')
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script>
        $('#editarTarea').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var titulo = button.data('titulo')
            var descripcion = button.data('descripcion')
            var estatu = button.data('estatu')
            var modal = $(this)
            modal.find('.modal-body #tarea_id').val(id)
            modal.find('.modal-body #titulo').val(titulo)
            modal.find('.modal-body #descripcion').val(descripcion)
            modal.find('.modal-body #estatu_id').val(estatu)
        })
        $('#confirm-delete').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #tarea_id').val(id)
        })
        $('#agregarComentario').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #tarea_id').val(id)
        })
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    @if (session('agregado') && session('tipo'))
        <script>
            toastr.success('{{ session('tipo') }} {{ session('agregado') }} correctamente')
        </script>
    @elseif (session('modificado') && session('tipo'))
        <script>
            toastr.warning('{{ session('tipo') }} {{ session('modificado') }} correctamente')
        </script>
    @elseif (session('eliminado') && session('tipo'))
        <script>
            toastr.error('{{ session('tipo') }} {{ session('eliminado') }} correctamente')
        </script>
    @endif
@endsection
