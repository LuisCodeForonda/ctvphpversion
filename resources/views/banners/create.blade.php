@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Banners</h1>
@stop

@section('content')
    <p>Crear un nuevo registro</p>
    <a href="{{ route('banners.index') }}">Regresar</a>

    <form action="{{ route('banners.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('banners.form')
        <input type="submit" value="Guardar">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop