@extends('adminlte::page')

@section('title', 'Ingredientes')

@section('content_header')
<h1>Ingredientes</h1>
@stop

@section('content')
 
<x-adminlte-card title="Listado" theme="default" icon="fas fa-sm fa-list">
    <div class="table-responsive">
        <table class="table table-bordered  datatable table-sm" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @if (count($ingredients)>0)
                    @foreach ($ingredients as $ingredient)
                    <tr>
                        <td>{{ $ingredient->id }}</td>
                        <td>{{ $ingredient->name }}</td>
                        <td>{{ $ingredient->quantity }}</td>
                    </tr>
                    @endforeach
                @else
                <tr>
                    <td colspan="3" class="text-center"><h4>No se encontraron registros</h4></td>
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
 
 