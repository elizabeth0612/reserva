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
            <h1>Lista de Reservas Realizadas</h1>
            <a class="btn btn-info" href="javascript:void(0)" id="createNewPost"> Agregar Reservas</a>
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Precio</th>
                        <th>Huespedes</th>
                        <th>Cantidad Dias</th>
                        <th>Fecha Entrada</th>
                        <th>Fecha Salida</th>
                        <th>Fecha Registro</th>
                        <th>Pago Costo</th>
                        <th>Cliente</th>
                        <th>Cupon </th>
                        <th>Propiedad  </th>
                        <th>Tipo de pago</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

        <div class="modal fade" id="ajaxModelexa" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modelHeading"></h4>
                    </div>
                    <div class="modal-body">
                        <form id="postForm" name="postForm" class="form-horizontal">

                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">precio</label>
                                <div class="col-sm-12">
                                    <input type="double" class="form-control" id="precio" name="precio"
                                        placeholder="Enter Name" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Huespedes</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="huespedes" name="huespedes"
                                        placeholder="Enter Name" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">cantidad_dias</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="cantidad_dias" name="cantidad_dias"
                                        placeholder="Enter Name" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">fecha_entrada</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" id="fecha_entrada" name="fecha_entrada"
                                        placeholder="Enter Name" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">fecha_salida</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" id="fecha_salida" name="fecha_salida"
                                        placeholder="Enter Name" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">fecha_registro</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" id="fecha_registro" name="fecha_registro"
                                        placeholder="Enter Name" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">pago_costo</label>
                                <div class="col-sm-12">
                                    <input type="double" class="form-control" id="pago_costo" name="pago_costo"
                                        placeholder="Enter Name" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">user_id</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" id="user_id" name="user_id"
                                        placeholder="Enter Name" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">coupon_id</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" id="coupon_id" name="coupon_id"
                                        placeholder="Enter Name" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">propertie_id</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" id="propertie_id" name="propertie_id"
                                        placeholder="Enter Name" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">type_payment_id</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" id="type_payment_id" name="type_payment_id"
                                        placeholder="Enter Name" value="" required>
                                </div>
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
        ajax: "{{ route('realizadas') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'precio', name: 'precio'},
            {data: 'huespedes', name: 'huespedes'},
            {data: 'cantidad_dias', name: 'cantidad_dias'},
            {data: 'fecha_entrada', name: 'fecha_entrada'},
            {data: 'fecha_salida', name: 'fecha_salida'},
            {data: 'fecha_registro', name: 'fecha_registro'},
            {data: 'pago_costo', name: 'pago_costo'},
            {data: 'user_id', name: 'user_id'},
            {data: 'coupon_id', name: 'coupon_id'},
            {data: 'propertie_id', name: 'propertie_id'},
            {data: 'type_payment_id', name: 'type_payment_id'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

        $('#createNewPost').click(function() {
            $('#savedata').val("create-post");
            $('#id').val('');
            $('#postForm').trigger("reset");
            $('#modelHeading').html("Agregando un Cliente");
            $('#ajaxModelexa').modal('show');
        });
        $('body').on('click', '.editPost', function() {
            var id = $(this).data('id');
            $.get("{{ route('booking.index') }}" + '/' + id + '/edit', function(data) {
                $('#modelHeading').html("Edit Post");
                $('#savedata').val("edit-user");
                $('#ajaxModelexa').modal('show');
                $('#id').val(data.id);
                $('#precio').val(data.precio);
                $('#huespedes').val(data.huespedes);
                $('#cantidad_dias').val(data.cantidad_dias);
                $('#fecha_entrada').val(data.fecha_entrada);
                $('#fecha_salida').val(data.fecha_salida);
                $('#pago_costo').val(data.pago_costo);
                $('#user_id').val(data.user_id);
                $('#coupon_id').val(data.coupon_id);
                $('#propertie_id').val(data.propertie_id);
                $('#type_payment_id').val(data.type_payment_id);
            })
        });
        $('#savedata').click(function(e) {
            e.preventDefault();
            $(this).html('Sending..');

            $.ajax({
                data: $('#postForm').serialize(),
                url: "{{ route('booking.store') }}",
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
                url: "{{ route('booking.store') }}" + '/' + id,
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
