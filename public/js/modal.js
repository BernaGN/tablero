$('#editarTarea').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var titulo = button.data('titulo')
    var descripcion = button.data('descripcion')
    var estado = button.data('estado')
    var modal = $(this)
    modal.find('.modal-body #tarea_id').val(id)
    modal.find('.modal-body #title').val(titulo)
    modal.find('.modal-body #descripcion').val(descripcion)
    modal.find('.modal-body #estado_id').val(estado)
})

$('#deleteTarea').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var modal = $(this)
    modal.find('.modal-body #tarea_id').val(id)
})

$('#agregarComentario').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var modal = $(this)
    modal.find('.modal-body #tarea_id').val(id)
})


$('#editarProyecto').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var nombre = button.data('nombre')
    var descripcion = button.data('descripcion')
    var modal = $(this)
    modal.find('.modal-body #proyecto_id').val(id)
    modal.find('.modal-body #nombre').val(nombre)
    modal.find('.modal-body #descripcion').val(descripcion)
})

$('#eliminarProyecto').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var modal = $(this)
    modal.find('.modal-body #tarea_id').val(id)
})
