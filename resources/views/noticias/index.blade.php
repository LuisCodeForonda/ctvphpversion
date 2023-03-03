@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Noticias</h1>
@stop

@section('content')
    <p>Bienvenido al apartado de noticias</p>
    <a href="{{ route('noticias.create') }}" class="btn btn-primary">Nuevo</a>
    @if (session('status'))
        <div class="alert alert-success"><strong>{{ session('status') }}</strong></div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Titulo</th>
                        <th>Categoria</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($noticias as $noticia)
                    <tr>
                        <td>
                        <img src="{{ asset('storage').'/'.$noticia->foto }}" alt="" width="100" height="100">
                        </td>
                        <td>{{ $noticia->titulo}}</td>
                        <td>
                            @if ($noticia->categoria == 1)
                                Sociedad
                            @endif
                            @if ($noticia->categoria == 2)
                                Desastres y accidentes
                            @endif
                            @if ($noticia->categoria == 3)
                                Seguridad
                            @endif
                            @if ($noticia->categoria == 4)
                                Deportes
                            @endif
                            @if ($noticia->categoria == 5)
                                Politica
                            @endif
                            @if ($noticia->categoria == 6)
                                Entrenamiento
                            @endif
                        </td>
                        <td class="d-flex"><a href="{{ route('noticias.edit', $noticia) }}" class="btn btn-primary mr-1">Editar</a>
                        <form action="{{ route('noticias.destroy', $noticia) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar" class="btn btn-danger">
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $noticias->links() }}
        </div>
    </div>
    
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
@stop