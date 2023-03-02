@extends('layouts.base')


@section('content')
    <div class="relative" id="slide_contenedor">

        @foreach ($banners as $banner)
            <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96">
                <img loading="lazy" src="{{ asset('storage').'/'.$banner->logo }}" alt="" class="w-full h-full">
            </picture>
        @endforeach

        <!--
        <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96">
            <img loading="lazy" src="assets/Programa1.png" alt="" class="w-full h-full">
        </picture>
        <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96 hidden ">
            <img loading="lazy" src="assets/Programa2.png" alt="" class="w-full h-full">
        </picture>
        <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96 hidden">
            <img loading="lazy" src="assets/Programa3.png" alt="" class="w-full h-full">
        </picture>
        <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96 hidden">
            <img loading="lazy" src="assets/Programa4.png" alt="" class="w-full h-full">
        </picture>
        <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96 hidden">
            <img loading="lazy" src="assets/Programa6.png" alt="" class="w-full h-full">
        </picture>
        <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96 hidden">
            <img loading="lazy" src="assets/Programa7.png" alt="" class="w-full h-full">
        </picture>-->

        <!-- tarde 
        <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96 hidden ">
            <img loading="lazy" src="assets/Programat1.png" alt="" class="w-full h-full">
        </picture>
        <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96 hidden">
            <img loading="lazy" src="assets/Programat2.png" alt="" class="w-full h-full">
        </picture>
        <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96 hidden">
            <img loading="lazy" src="assets/Programat3.png" alt="" class="w-full h-full">
        </picture>
        <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96 hidden">
            <img loading="lazy" src="assets/Programat4.png" alt="" class="w-full h-full">
        </picture>
        <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96 hidden">
            <img loading="lazy" src="assets/Programat5.png" alt="" class="w-full h-full">
        </picture>
        <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96 hidden">
            <img loading="lazy" src="assets/Programat6.png" alt="" class="w-full h-full">
        </picture>-->



        <span id="prev" class="absolute top-2/4 bg-gray-200/75 rounded-r-lg px-1 pt-1 cursor-pointer"><i
                class="fa-solid fa-arrow-left w-6 h-6"></i></span>
        <span id="next" class="absolute right-0 top-2/4 bg-gray-200/75 rounded-l-lg px-1 pt-1 cursor-pointer"><i
                class="fa-solid fa-arrow-right w-6 h-6"></i></span>
    </div>

    <div class="relative flex flex-row justify-center p-4 gap-2">

        @for ($i = 1; $i < sizeof($banners) + 1; $i++)
            <div id="dot" class="w-5 h-5 rounded-full bg-gray-300 bg-gray-800 cursor-pointer" onclick="currentSlide({{ $i }})"
            data-id="{{ $i }}"></div>
        @endfor

        <!--
        <div id="dot" class="w-5 h-5 rounded-full bg-gray-300 bg-gray-800 cursor-pointer" onclick="currentSlide(1)"
            data-id="1"></div>
        <div id="dot" class="w-5 h-5 rounded-full bg-gray-300 cursor-pointer" onclick="currentSlide(2)"
            data-id="2">
        </div>
        <div id="dot" class="w-5 h-5 rounded-full bg-gray-300 cursor-pointer" onclick="currentSlide(3)"
            data-id="3">
        </div>
        <div id="dot" class="w-5 h-5 rounded-full bg-gray-300 cursor-pointer" onclick="currentSlide(4)"
            data-id="4">
        </div>
        <div id="dot" class="w-5 h-5 rounded-full bg-gray-300 cursor-pointer" onclick="currentSlide(5)"
            data-id="5">
        </div>
        <div id="dot" class="w-5 h-5 rounded-full bg-gray-300 cursor-pointer" onclick="currentSlide(6)"
            data-id="6">
        </div>
        <div id="dot" class="w-5 h-5 rounded-full bg-gray-300 cursor-pointer" onclick="currentSlide(7)"
            data-id="7">
        </div>
        <div id="dot" class="w-5 h-5 rounded-full bg-gray-300 cursor-pointer" onclick="currentSlide(8)"
            data-id="8">
        </div>
        <div id="dot" class="w-5 h-5 rounded-full bg-gray-300 cursor-pointer" onclick="currentSlide(9)"
            data-id="9">
        </div>
        <div id="dot" class="w-5 h-5 rounded-full bg-gray-300 cursor-pointer" onclick="currentSlide(10)"
            data-id="10">
        </div>
        <div id="dot" class="w-5 h-5 rounded-full bg-gray-300 cursor-pointer" onclick="currentSlide(11)"
            data-id="11">
        </div>
        <div id="dot" class="w-5 h-5 rounded-full bg-gray-300 cursor-pointer" onclick="currentSlide(12)"
            data-id="12">
        </div>-->

    </div>

    <h1 class="text-3xl font-bold">Noticias</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-900 my-6">
    
        @foreach ($noticias as $item)
        <div class="bg-slate-100 border-2 w-full mx-auto rounded-t-xl overflow-hidden">
            <img loading="lazy" src="{{ asset('storage').'/'.$item->foto }}" alt="" class="w-full h-56">
            <div class="p-2">
                <p>
                <span class="text-red-600 font-bold">
                    @if ($item->categoria == 1)
                        Sociedad
                    @endif 
                    @if ($item->categoria == 2)
                        Desastres y accidentes
                    @endif
                    @if ($item->categoria == 3)
                        Seguridad
                    @endif
                    @if ($item->categoria == 4)
                        Deportes
                    @endif
                    @if ($item->categoria == 5)
                        Politica
                    @endif
                    @if ($item->categoria == 6)
                        Entrenamiento
                    @endif
                </span> | {{ substr($item->fecha_hora, 0, 10)  }}</p>
                <a href="{{ route('detallenoticia', $item->slug) }}" class="font-bold text-2xl">
                    {{ $item->titulo }}
                </a>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection
