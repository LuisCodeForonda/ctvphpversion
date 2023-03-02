@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuario</h1>
@stop

@section('content')
    <p>Bienvenido al apartado de usuario</p>
    <a href="{{ route('users.create') }}">Nuevo</a>
    <p>{{ session('status') }}</p>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="">Editar</a> | 
                    
                    <form action="{{ route('users.destroy', $user) }}" method="post">
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