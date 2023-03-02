@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Noticias</h1>
@stop

@section('content')
    <p>Bienvenido al apartado de noticias</p>
    <a href="{{ route('noticias.create') }}">Nuevo</a>

    <table>
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
                <td>{{ $noticia->categoria}}
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
                <td><a href="{{ route('noticias.edit', $noticia) }}">Editar</a>|
                <form action="{{ route('noticias.destroy', $noticia) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar">
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $noticias->links() }}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
@stop