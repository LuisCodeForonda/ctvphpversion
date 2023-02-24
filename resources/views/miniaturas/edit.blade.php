@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Miniaturas</h1>
@stop

@section('content')
    <p>Editar el registro</p>
    <a href="{{ route('miniaturas.index') }}">Regresar</a>

    <form action="{{ route('miniaturas.update', $miniatura) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        @include('miniaturas.form')
        <input type="submit" value="Actualizar">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop