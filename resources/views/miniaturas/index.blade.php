@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Miniaturas</h1>
@stop

@section('content')
    <p>Bienvenido al apartado de miniaturas</p>
    <a href="{{ route('miniaturas.create') }}" class="btn btn-primary">Nuevo</a>
    @if (session('status'))
        <div class="alert alert-success"><strong>{{ session('status') }}</strong></div>
    @endif

    <table class="table table-striped">
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
                        <img src="{{ asset('storage') . '/' . $miniatura->foto }}" alt="" width="100px" height="100px">
                    </td>
                    <td>{{ $miniatura->nombre }}</td>
                    <td class="d-flex"><a href="{{ route('miniaturas.edit', $miniatura) }}"
                            class="btn btn-primary mr-1">Editar</a>

                        <form action="{{ route('miniaturas.destroy', $miniatura) }}" method="post">
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
    <div>
        {{ $miniaturas->links() }}
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
