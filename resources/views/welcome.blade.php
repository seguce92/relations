<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3>LISTA DE TICKETS</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>description</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{ $row->description }}</td>
                            <td>
                                <a data-href="{{ route('ticket.edit', $row->id) }}" data-target="#edit" class="btn btn-xs btn-warning edit">Editar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $data->links() !!}
                <div class="modal" id="edit">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3 class="modal-title text-uppercase text-center text-bold">Editar Ticket</h3>
                            </div>
                            <div class="modal-body">
                                <div class="form-control">
                                    <b>Nombre Categoria: </b><small class="modal-body-category"></small>
                                </div>
                            </div>
                            <div class="modal-footer bg-primary">
                                <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script>
            $(document).on('click', '.edit', function(e){
            var url = $(this).attr('data-href');
            $.get(url, function (data) {
                $('.modal-body-category').html(data.category.name);
                $("#edit").modal('show');
            })
        });
        </script>
    </body>
</html>
