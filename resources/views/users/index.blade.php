@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuario</h1>
@stop

@section('content')
    <p>Bienvenido al apartado de usuario</p>

    @if (session('status'))
        <div class="alert alert-success"><strong>{{ session('status') }}</strong></div>
    @endif

    <div class="card">
        <div class="card-body">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Nuevo</a>
            <table class="table table-striped">
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
                            <td width="10px" class="d-flex">
                                <a href="{{ route('users.edit', $user) }}" class="btn btn-primary mr-1">Editar</a>
                                <form action="{{ route('users.destroy', $user) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar"
                                        class="btn btn-danger">
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $users->links() }}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
