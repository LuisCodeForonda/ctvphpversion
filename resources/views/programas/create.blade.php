@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programas</h1>
@stop

@section('content')
    <p>Crear un nuevo registro</p>
    <a href="{{ route('programas.index') }}" class="btn btn-secondary">Regresar</a>

    <form action="{{ route('programas.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('programas.form')
        <input type="submit" value="Guardar" class="btn btn-primary">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop