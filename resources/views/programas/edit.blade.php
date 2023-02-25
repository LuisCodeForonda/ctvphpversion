@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programacion</h1>
@stop

@section('content')
    <p>Editar el registro</p>
    <a href="{{ route('programas.index') }}">Regresar</a>

    <form action="{{ route('programas.update', $programa) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        @include('programas.form')
        <input type="submit" value="Actualizar">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop