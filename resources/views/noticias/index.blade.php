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
                <td>{{ $noticia->categoria}}</td>
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
@stop