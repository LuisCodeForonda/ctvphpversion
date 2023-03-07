@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programacion</h1>
@stop

@section('content')
    <p>Crear un nuevo registro</p>
    <a href="{{ route('programacion.index') }}" class="btn btn-secondary">Regresar</a>

    <form action="{{ route('programacion.store') }}" method="post">
        @csrf
        @include('programacion.form')
        <input type="submit" value="Guardar" class="btn btn-primary">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop