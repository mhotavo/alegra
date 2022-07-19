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
                <label for="identification_num" class="col-sm-5 col-form-label">Ingrese Nro. de Platos</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control form-control-sm" id="number">
                </div>
            </div>
        </div>
        <div class="col-4">
            <a title="{{ __('general.search') }}" id="search_btn" class="btn btn-sm btn-success mb-3 ml-1"><i class="fa fa-lg fa-fw fa-play"></i> </a>
        </div>
    </div>
</x-adminlte-card>


@stop

@section('css')

@stop

@section('js')
 
 