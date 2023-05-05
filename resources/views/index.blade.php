@extends('layouts.base')


@section('content')
    <div class="relative" id="slide_contenedor">

        @foreach ($banners as $banner)
            <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96 fade">
                <img loading="lazy" src="{{ Storage::url($banner->logo) }}" alt="" class="w-full h-full">
            </picture>
        @endforeach

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

    </div>

    @if (count($noticias) > 0)
        <h1 class="text-3xl font-bold">Noticias</h1>
    @endif
    

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
                </span> | <span class="fecha_noticia">{{ $item->fecha }}</span></p>
                <a href="{{ route('detallenoticia', $item->slug) }}" class="font-bold text-2xl">
                    {{ $item->titulo }}
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <script type="text/javascript">
        // var element = document.getElementById('mySlides');
        // Hammer(element).on("panleft", function(event){
        //     alert("deslizo a la izquierda");
        // });
        // Hammer(element).on("panright", function(event){
        //     alert("deslizo a la derecha");
        // });
    </script>
@endsection
