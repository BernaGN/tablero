@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <a class="btn btn-primary" role="button" data-toggle="modal" data-target="#agregarProyecto">Nuevo</a>
                @if ($proyectos->count())
                    <div class="card mt-2">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proyectos as $proyecto)
                                    <tr>
                                        <td scope="row">{{ $proyecto->id }}</td>
                                        <td>{{ $proyecto->nombre }}</td>
                                        <td>{{ $proyecto->descripcion }}</td>
                                        <td>

                                            <a class="btn btn-link" role="button"
                                                href="{{ route('tareas.show', $proyecto->id) }}">Ver</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning" role="button" data-toggle="modal"
                                                data-target="#editarProyecto" data-id="{{ $proyecto->id }}"
                                                data-nombre="{{ $proyecto->nombre }}"
                                                data-descripcion="{{ $proyecto->descripcion }}">Editar</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" role="button" data-toggle="modal"
                                                data-target="#eliminarProyecto" data-id="{{ $proyecto->id }}">Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h1>
                            <center>No hay registros</center>
                        </h1>
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection


@section('modal')
    <div class="modal" id="agregarProyecto" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @include('proyectos.store')
            </div>
        </div>
    </div>
    <div class="modal" id="editarProyecto" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @if ($proyectos->count())
                    @include('proyectos.update')
                @endif
            </div>
        </div>
    </div>
    <div class="modal" id="eliminarProyecto" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @if ($proyectos->count())
                    @include('proyectos.delete', ['proyectos' => $proyecto])
                @endif
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
    <script src="{{ asset('js/modal.js') }}"></script>
    <script>
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
@endsection


@section('toastr')
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
