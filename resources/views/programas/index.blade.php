@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programas</h1>
@stop

@section('content')
    <p>Bienvenido al apartado de programas</p>
    <a href="{{ route('programas.create') }}" class="btn btn-primary">Nuevo</a>
    @if (session('status'))
        <div class="alert alert-success"><strong>{{ session('status') }}</strong></div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
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
                            <td>
                                @if ($programa->categoria == 1)
                                    Religiosos
                                @endif
                                @if ($programa->categoria == 2)
                                    Noticieros
                                @endif
                                @if ($programa->categoria == 3)
                                    Analisis
                                @endif
                                @if ($programa->categoria == 4)
                                    Familiares
                                @endif
                                @if ($programa->categoria == 5)
                                    Entrenamiento
                                @endif
                            </td>
                            <td>{{ $programa->hora_inicio }}</td>
                            <td>{{ $programa->hora_fin }}</td>
                            <td class="d-flex "><a href="{{ route('programas.edit', $programa)}}" class="btn btn-primary mr-1">Editar</a>
                            
                            <form action="{{ route('programas.destroy', $programa) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar" class="btn btn-danger">
                            </form></td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card footer">
            {{ $programas->links() }}
        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop