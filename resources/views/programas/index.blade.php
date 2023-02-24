@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programas</h1>
@stop

@section('content')
    <p>Bienvenido al apartado de programas</p>
    <a href="{{ route('programas.create') }}">Nuevo</a>
    <p>{{ session('status') }}</p>
    <table>
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nombre</th>
                <th>hora_incio</th>
                <th>hora_fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programas as $programa)
                <tr>
                    <td>
                    <img src="{{ asset('storage').'/'.$programa->foto }}" alt="" width="100px" height="100px">
                    </td>
                    <td>{{ $programa->nombre }}</td>
                    <td>{{ $programa->hora_inicio }}</td>
                    <td>{{ $programa->hora_fin }}</td>
                    <td><a href="{{ route('programas.edit', $programa)}}">Editar</a> | 
                    
                    <form action="{{ route('programas.destroy', $programa) }}" method="post">
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