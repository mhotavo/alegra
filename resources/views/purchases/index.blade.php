@extends('adminlte::page')

@section('title', 'Compras')

@section('content_header')
<h1>Historial de Compras</h1>
@stop

@section('content')
 
<x-adminlte-card title="Listado" theme="default" icon="fas fa-sm fa-list">
    <div class="table-responsive">
        <table class="table table-bordered  datatable table-sm" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ingrediente</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @if (count($purchases)>0)
                    @foreach ($purchases as $purchase)
                    <tr>
                        <td>{{ $purchase->id }}</td>
                        <td>{{ $purchase->ingredient->name }}</td>
                        <td>{{ $purchase->quantity }}</td>
                        <td>{{ $purchase->created_at }}</td>
                    </tr>
                    @endforeach
                @else
                <tr>
                    <td colspan="3" class="text-center"><p>No se encontraron registros</p></td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</x-adminlte-card>

@stop

@section('css')

@stop

@section('js')
 
 