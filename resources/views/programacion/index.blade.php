@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programacion</h1>
@stop

@section('content')
    <p>Bienvenido al apartado de programación</p>
    <a href="{{ route('programacion.create') }}">Nuevo</a>
    <p>{{ session('status') }}</p>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Hora</th>
                <th>Dia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programacions as $programacion)
            <tr>
                <td>{{ $programacion->nombre }}</td>
                <td>{{ $programacion->hora }}</td>
                <td>
                    @if ($programacion->dia == 0)
                    Lunes a Viernes
                    @endif
                    @if ($programacion->dia == 1)
                    Sabados
                    @endif
                    @if ($programacion->dia == 2)
                    Domingos
                    @endif
                </td>
                <td style="display: flex">
                    <a href="{{ route('programacion.edit', $programacion) }}">Editar</a>| 
                    <form action="{{ route('programacion.destroy', $programacion) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $programacions->links() }}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop