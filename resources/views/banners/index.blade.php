@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Banners</h1>
@stop

@section('content')
    <p>Bienvenido al apartado de banners</p>
    <a href="{{ route('banners.create') }}">Nuevo</a>
    <p>{{ session('status') }}</p>

    <table>
        <thead>
            <tr>
                <th>Logo</th>
                <th>Nombre</th>
                <th>hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <td>
                    <img src="{{ asset('storage').'/'.$banner->logo }}" alt="" width="100px" height="100px">
                    </td>
                    <td>{{ $banner->nombre }}</td>
                    <td>{{ $banner->hora }}</td>
                    <td><a href="{{ route('banners.edit', $banner)}}">Editar</a> | 
                    
                    <form action="{{ route('banners.destroy', $banner) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar">
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