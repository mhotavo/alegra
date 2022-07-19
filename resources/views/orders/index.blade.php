@extends('adminlte::page')

@section('title', 'Ordenes')

@section('content_header')
<h1>Historial de Ordenes</h1>
@stop

@section('content')
 
<x-adminlte-card title="Listado" theme="default" icon="fas fa-sm fa-list">
    <div class="table-responsive">
        <table class="table table-bordered  datatable table-sm" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Plato</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @if (count($orders)>0)
                    @foreach ($orders as $order)
                    <tr>
                        <td> {{ $order->id }}</td>
                        <td > {{ $order->dish->name }}</td>
                        <td class="badge badge-{{ $order->color }}"> {{ $order->state }}</td>
                        <td> {{ $order->created_at }}</td>
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
 
 