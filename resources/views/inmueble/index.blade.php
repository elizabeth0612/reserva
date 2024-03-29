<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="user-management"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="User Management"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

        <div class="container-sm">
            <h1>Lista de Inmuebles</h1>
            <a class="btn btn-info" href="javascript:void(0)" id="createNewPost"> Agregar</a>
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Imagenes</th>
                        <th>Precio_Noche</th>
                        <th>Informacion</th>
                        <th>Reglas_Propiedad</th>
                        <th>Seguridad_Propiedad</th>
                        <th>Politicas_Cancelacion </th>
                        <th>Distrito</th>
                        <th width="280px">Opciones</th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="modal fade" id="ajaxModelexa" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modelHeading"></h4>
                        <button type="button" class="btn-close-black" data-bs-dismiss="modal"
                            aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <form id="postForm" name="postForm" class="form-horizontal">

                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Nombre</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                         value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Descripcion</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="descripcion" name="descripcion"
                                        value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Imagenes</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="imagenes" name="imagenes"
                                         value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Precio_Noche</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="precio_noche" name="precio_noche"
                                         value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Informacion</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="informacion" name="informacion"
                                         value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Reglas_Propiedad</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="reglas_propiedad"
                                        name="reglas_propiedad" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Seguridad_Propiedad</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="seguridad_propiedad"
                                        name="seguridad_propiedad"  value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Politicas_Cancelacion</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="politicas_cancelacion"
                                        name="politicas_cancelacion"  value=""
                                        required>
                                </div>
                            </div>
                            <div class="form-group ms-3">
                                <label for="name" class="col-sm-12control-label">Provincia</label>
                                        <select class="form-select" id="provincia" aria-label="Default select example">
                                            <option selected>Escoger</option>
                                            @foreach ($provincias as $provincia)

                                                <option value="{{$provincia->id}}">{{$provincia->nombre}}</option>

                                            @endforeach
                                        </select>
                            </div>


                            <div class="form-group ms-3">
                            <label for="name" class="col-sm-12control-label">Distrito</label>
                                    <select class="form-select"  aria-label="Default select example" name="district_id" id="district_id">

                                    </select>
                            </div>

                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" id="savedata" value="create">Guardar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
<script type="text/javascript">
    $(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando Pagina _START_ con _TOTAL_ Registros",
                "infoEmpty": "Sin resultados encontrados en la cantidad",
                "infoFiltered": " total de _MAX_ registros",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Registros",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
                }
            },
            ajax: "{{ route('inmueble.index') }}",
            columns: [
                {data: 'DT_RowIndex',name: 'DT_RowIndex'},
                {data: 'nombre',name: 'nombre'},
                {data: 'descripcion',name: 'descripcion'},
                {data: 'imagenes',name: 'imagenes'},
                {data: 'precio_noche',name: 'precio_noche'},
                {data: 'informacion',name: 'informacion'},
                {data: 'reglas_propiedad',name: 'reglas_propiedad'},
                {data: 'seguridad_propiedad',name: 'seguridad_propiedad'},
                {data: 'politicas_cancelacion',name: 'politicas_cancelacion'},
                {data: 'district.nombre',name: 'district.nombre'},
                {data: 'action',name: 'action',orderable: false,searchable: false},
            ]
        });

        $('#createNewPost').click(function() {
            $('#savedata').val("create-post");
            $('#id').val('');
            $('#postForm').trigger("reset");
            $('#modelHeading').html("Agregando un Inmueble");
            $('#ajaxModelexa').modal('show');
        });
        $('body').on('click', '.editPost', function() {
            var id = $(this).data('id');
            $.get("{{ route('inmueble.index') }}" + '/' + id + '/edit', function(data) {
                $('#modelHeading').html("Edit Post");
                $('#savedata').val("edit-user");
                $('#ajaxModelexa').modal('show');
                $('#id').val(data.id);
                $('#nombre').val(data.nombre);
                $('#descripcion').val(data.descripcion);
                $('#imagenes').val(data.imagenes);
                $('#precio_noche').val(data.precio_noche);
                $('#informacion').val(data.informacion);
                $('#reglas_propiedad').val(data.reglas_propiedad);
                $('#seguridad_propiedad').val(data.seguridad_propiedad);
                $('#politicas_cancelacion').val(data.politicas_cancelacion);
                $('#district_id').val(data.district.nombre);
            })
        });
        $('#provincia').change(function() {

            console.log($(this).val());
            var id = $(this).val();

            $("#district_id").empty();

            $.get("distrito/"+id , function(data) {
                console.log(data);

                $.each(data, function(i, item) {
                    console.log(item);
                    $('<option value="'+item.id+'">'+item.nombre+'</option>').appendTo("#district_id");
                });



            });
        });
        $('#savedata').click(function(e) {
            e.preventDefault();
            $(this).html('Sending..');

            $.ajax({
                data: $('#postForm').serialize(),
                url: "{{ route('inmueble.store') }}",
                type: "POST",
                dataType: 'json',
                success: function(data) {

                    $('#postForm').trigger("reset");
                    $('#ajaxModelexa').modal('hide');
                    table.draw();

                },
                error: function(data) {
                    console.log('Error:', data);
                    $('#savedata').html('Save Changes');
                }
            });
        });

        $('body').on('click', '.deletePost', function() {

            var id = $(this).data("id");
            confirm("Are You sure want to delete this Post!");

            $.ajax({
                type: "DELETE",
                url: "{{ route('inmueble.store') }}" + '/' + id,
                success: function(data) {
                    table.draw();
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
    });
</script>
