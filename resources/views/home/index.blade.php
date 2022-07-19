@extends('adminlte::page')

@section('title', 'Menú')

@section('content_header')
<h1>Menú</h1>
@stop

@section('content')

<x-adminlte-card title="Realizar Pedido" theme="info" icon="fas fa-sm fa-search">
    <div class="row">
        <div class="col-6">
            <div class="form-group row">
                <label for="identification_num" class="col-sm-5 col-form-label">Ingrese Nro. de Ordenes</label>
                <div class="col-sm-7">
                    <input type="number" value="1" class="form-control form-control-sm" id="num" name="num">
                </div>
            </div>
        </div>
        <div class="col-4">
            <a title="Pedir" id="send_btn" class="btn btn-success">Pedir <i class="fa fa-fw fa-play"></i> </a>
        </div>
    </div>
</x-adminlte-card>


@stop

@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>
    $(document).ready(function() {
    

        $("#send_btn").on('click', function(e) {
            e.preventDefault();
            var number = $("#num").val();
            $.ajax({
                url: "{!!URL::route('order.create')!!}",
                type: 'GET',
                data: {
                    'number': number
                },
                dataType: 'json',
                success: function(data) {
                    var txt = '<b>Nro. Platos:</b> ' + data.number + '<br> <b>Platos:</b> ' + data.response.toString()
                    Swal.fire(
                        'Orden Generada',
                        txt,
                        'success'
                    ).then(function() {
                        window.location = "/orders";
                    });
                },
                error: function(request, error) {
                    console.log("Request: " + JSON.stringify(request));
                }
            });
        });


    });
</script>
@section('js')