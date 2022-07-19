@extends('adminlte::page')

@section('title', 'Menú')

@section('content_header')
<h1>Menú</h1>
@stop

@section('content')
 
<x-adminlte-card title="Listado" theme="default" icon="fas fa-sm fa-list">
    <div class="table-responsive">
        <table class="table table-bordered  datatable table-sm" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Ingredientes</th>
                </tr>
            </thead>
            <tbody>
                @if (count($dishes)>0)
                    @foreach ($dishes as $dish)
                    <tr>
                        <td>{{ $dish->id }}</td>
                        <td>{{ $dish->name }}</td>
                        <td>
                            <ul>
                                @foreach ($dish->ingredients as $ingredient)
                                    <li>{{ $ingredient->name }}</li>
                                @endforeach
                            </ul>
                        </td>
          
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
 
 