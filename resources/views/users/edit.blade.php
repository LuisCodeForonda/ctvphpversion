@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Asignar un Rol</h1>
@stop

@section('content')
    <p>Editar el usuario</p>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Regresar</a>
    @if (session('info'))
        <div class="alert alert-success"><strong>{{ session('info') }}</strong></div>
    @endif
    <div class="card-body">
        <p class="h5">Usuario</p>
        <p class="form-control">{{ $user->name }}</p>

        <h2 class="h5">Listado de roles</h2>
        {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'patch']) !!}
            @foreach ($roles as $rol)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $rol->id, null, ['class' => 'mr-1']) !!}
                        {{ $rol->name }}
                    </label>
                </div>
            @endforeach
            {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
    </div>
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop