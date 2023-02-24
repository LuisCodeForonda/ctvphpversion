@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Miniaturas</h1>
@stop

@section('content')
    <p>Bienvenido al apartado de miniaturas</p>
    <a href="{{ route('miniaturas.create') }}">Nuevo</a>
    <p>{{ session('status') }}</p>

    <table>
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($miniaturas as $miniatura)
                <tr>
                    <td>
                    <img src="{{ asset('storage').'/'.$miniatura->foto }}" alt="" width="100px" height="100px">
                    </td>
                    <td>{{ $miniatura->foto }}</td>
                    <td>{{ $miniatura->nombre }}</td>
                    <td><a href="{{ route('miniaturas.edit', $miniatura)}}">Editar</a> | 
                    
                    <form action="{{ route('miniaturas.destroy', $miniatura) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar">
                    </form></td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop