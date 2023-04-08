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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
            
                            <div class="container-sm">
                                <h1>Laravel 9 AJAX CRUD Operation Example - Techsolutionstuff</h1>
                                <a class="btn btn-info" href="javascript:void(0)" id="createNewPost"> Agregar Cliente</a>
                                <table class="table table-bordered data-table">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>telefono</th>
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
                                                        <label for="name" class="col-sm-2 control-label">Nombre</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" required>
                                                        </div>
                                                    </div>
                                    
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Description</label>
                                                        <div class="col-sm-12">
                                                            <textarea id="about" name="about" required placeholder="Enter Description" class="form-control"></textarea>
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
                                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footers.auth></x-footers.auth>
</div>
</main>
<x-plugins></x-plugins>

</x-layout>
<script type="text/javascript">
  $(function () {
     
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('clientes.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'about', name: 'about'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#createNewPost').click(function () {
        $('#savedata').val("create-post");
        $('#id').val('');
        $('#postForm').trigger("reset");
        $('#modelHeading').html("Agregando un Cliente");
        $('#ajaxModelexa').modal('show');
    });
    $('body').on('click', '.editPost', function () {
      var id = $(this).data('id');
      $.get("{{ route('clientes.index') }}" +'/' + id +'/edit', function (data) {
          $('#modelHeading').html("Edit Post");
          $('#savedata').val("edit-user");
          $('#ajaxModelexa').modal('show');
          $('#id').val(data.id);
          $('#name').val(data.name);
          $('#about').val(data.about);
      })
   });
   $('#savedata').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
    
        $.ajax({
          data: $('#postForm').serialize(),
          url: "{{ route('clientes.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#postForm').trigger("reset");
              $('#ajaxModelexa').modal('hide');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              $('#savedata').html('Save Changes');
          }
      });
    });
    
    $('body').on('click', '.deletePost', function () {
     
        var id = $(this).data("id");
        confirm("Are You sure want to delete this Post!");
      
        $.ajax({
            type: "DELETE",
            url: "{{ route('clientes.store') }}"+'/'+id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
    
});

</script>