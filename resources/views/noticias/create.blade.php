@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Noticias</h1>
@stop

@section('content')
    <p>Bienvenido al apartado de noticias</p>
    <a href="{{ route('noticias.index') }}">Regresar</a>
    <p>{{ session('status') }}</p>
    
    <form action="{{ route('noticias.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('noticias.form')
        <input type="submit" value="Guardar">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
   
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@stop