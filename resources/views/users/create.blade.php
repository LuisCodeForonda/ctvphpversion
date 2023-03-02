@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuario</h1>
@stop

@section('content')
    <p>Crear un nuevo usuario</p>
    <a href="{{ route('users.index') }}">Regresar</a>
    <p>{{ session('status') }}</p>

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div>

        </div>
        <label for="name">Nombre completo </label>
        <input type="text" name="name" id="" value="{{ old('name')}}">
        @error('name')
            {{ $message }}
        @enderror
        <br>

        <label for="email">Correo</label>
        <input type="email" name="email" id="" value="{{ old('email')}}">
        @error('email')
            {{ $message }}
        @enderror
        <br>

        <label for="password">Password </label>
        <input type="password" name="password" id="">
        <br>

        <label for="password_confirmation">Password Confimation</label>
        <input type="password" name="password_confirmation" id="">
        <br>

        <input type="submit" value="Guardar">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop