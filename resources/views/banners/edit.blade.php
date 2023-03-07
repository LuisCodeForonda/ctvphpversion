@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programacion</h1>
@stop

@section('content')
    <p>Editar el registro</p>
    <a href="{{ route('banners.index') }}" class="btn btn-secondary">Regresar</a>

    <form action="{{ route('banners.update', $banner) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        @include('banners.form')
        <input type="submit" value="Actualizar" class="btn btn-primary">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop