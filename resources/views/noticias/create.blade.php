@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Noticias</h1>
@stop

@section('content')
    <p>Bienvenido al apartado de noticias</p>
    <a href="{{ route('programas.create') }}">Nuevo</a>
    <p>{{ session('status') }}</p>
    
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @include('noticias.form')
        <input type="submit" value="Guardar">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop