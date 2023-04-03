@extends('layouts.base')

@section('subtitulo', '- noticias')

@section('content')
    <div class="text-gray-900">

        <h1 class="text-3xl font-bold mb-2">{{ $noticia->titulo }}</h1>
        <p class="font-semibold mb-2 text-gray-700">Publicado el: {{ $noticia->fecha }}</p>
        <img loading="lazy" src="{{ asset('storage') . '/' . $noticia->foto }}" alt="" class="w-full h-72">
        <div class="noticiaestilos my-6 px-2">
            {!! $noticia->cuerpo !!}
        </div>

        <h2 class="font-bold text-2xl p-2">Últimas noticias</h2>
        <ul class="p-2">
            @foreach ($titulares as $titular)
                <li class="text-2xl font-semibold p-2 my-2 border-l-2 border-red-700 hover:text-red-700">
                    <a href="{{ route('detallenoticia', $titular->slug) }}" class="">{{ $titular->titulo }}</a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
