@extends('layouts.base')


@section('content')

    <div class="text-gray-900">

        <h1 class="text-3xl font-bold mb-2">{{ $noticia->titulo }}</h1>
        <p class="font-semibold mb-2 text-gray-700">Publicado el: {{ $noticia->titulo }}</p>
        <img loading="lazy" src="{{ asset('storage').'/'.$noticia->foto }}" alt="" class="w-full h-72">
        <div class="noticiaestilos my-6 px-2">
            {{ $noticia->cuerpo|safe }}
        </div>
    
        <h2 class="font-bold text-2xl p-2">Últimas noticias</h2>
        <ul class="p-2">
           
        </ul>
    
    </div>

@endsection