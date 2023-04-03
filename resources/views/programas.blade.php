@extends('layouts.base')

@section('subtitulo', '- programas')

@section('content')

    
<div class="tab">
    <h2 class="text-2xl font-bold p-4">Programas</h2>
  
    <ul class="flex flex-row flex-wrap gap-1 text-lg">
      <li id="tab"
        class="grow text-center cursor-pointer bg-gray-200 text-gray-900 p-2 font-medium hover:bg-red-700 hover:text-gray-200 bg-red-700 text-gray-200">
        Religiosos
      </li>
      <li id="tab"
        class="grow text-center cursor-pointer bg-gray-200 text-gray-900 p-2 font-medium hover:bg-red-700 hover:text-gray-200">
        Noticieros</li>
      <li id="tab"
        class="grow text-center cursor-pointer bg-gray-200 text-gray-900 p-2 font-medium hover:bg-red-700 hover:text-gray-200">
        Análisis</li>
      <li id="tab"
        class="grow text-center cursor-pointer bg-gray-200 text-gray-900 p-2 font-medium hover:bg-red-700 hover:text-gray-200">
        Familiares</li>
      <li id="tab"
        class="grow text-center cursor-pointer bg-gray-200 text-gray-900 p-2 font-medium hover:bg-red-700 hover:text-gray-200">
        Entretenimiento
      </li>
    </ul>
  
    <div class="tab-container text-lg ">
      <div id="tab-content" class="block p-6">
  
        <div class="grid gap-6 grid grid-cols-1 md:grid-cols-2">
  
          @foreach ($religiosos as $item)
          <div class="shadow-xl rounded-xl overflow-hidden w-full max-w-sm mx-auto border-2 border-gray-400">
            <img src="{{ asset('storage').'/'.$item->foto }}" alt="" class="w-full h-48 object-fill">
            <div class="p-4 text-center text-gray-900">
              <h3 class="text-2xl font-bold">{{ $item->nombre }}</h3>
              <p class="text-lg font-semibold py-2">{{ substr($item->hora_inicio, 0, 5) }} - {{  substr($item->hora_fin, 0, 5) }}</p>
              <p class="leading-7">
                {{ $item->descripcion }}
              </p>
          
              <div class="flex flex-row justify-center gap-8 text-2xl mt-2">
                <a href="{{ $item->facebook }}" class="hover:text-red-700 {{ $item->facebook == "" ? 'hidden':'' }}"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{ $item->twitter }}" class="hover:text-red-700 {{ $item->twitter == "" ? 'hidden':'' }}"><i class="fa-brands fa-twitter"></i></a>
                <a href="{{ $item->instagram }}" class="hover:text-red-700 {{ $item->instagram == "" ? 'hidden':'' }}"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ $item->tiktok }}" class="hover:text-red-700 {{ $item->tiktok == "" ? 'hidden':'' }}"><i class="fa-brands fa-tiktok"></i></a>
                <a href="{{ $item->youtube }}" class="hover:text-red-700 {{ $item->youtube == "" ? 'hidden':'' }}"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>
          </div>
          @endforeach
          {{-- {% for indice in religiosos %}
  
            <div class="shadow-xl rounded-xl overflow-hidden w-full max-w-sm mx-auto border-2 border-gray-400">
              <img src="{{ indice.imagen.url }}" alt="" class="w-full h-48 object-fill">
              <div class="p-4 text-center text-gray-900">
                <h3 class="text-2xl font-bold">{{ indice.nombre }}</h3>
                <p class="text-lg font-semibold py-2">{{ indice.hora_inicio }} - {{ indice.hora_fin }}</p>
                <p class="leading-7">
                  {{ indice.descripcion }}
                </p>
                <div class="flex flex-row justify-center gap-8 text-2xl mt-2">
                  <a href="{{ indice.link_facebook }}" class="hover:text-red-700 {% if indice.link_facebook == '' %} hidden {% endif %}"><i class="fa-brands fa-facebook"></i></a>
                  <a href="{{ indice.link_twitter }}" class="hover:text-red-700 {% if indice.link_twitter == '' %} hidden {% endif %}"><i class="fa-brands fa-twitter"></i></a>
                  <a href="{{ indice.link_instagram }}" class="hover:text-red-700 {% if indice.link_instagram == '' %} hidden {% endif %}"><i class="fa-brands fa-instagram"></i></a>
                  <a href="{{ indice.link_tiktok }}" class="hover:text-red-700 {% if indice.link_tiktok == '' %} hidden {% endif %}"><i class="fa-brands fa-tiktok"></i></a>
                  <a href="{{ indice.link_youtube }}" class="hover:text-red-700 {% if indice.link_youtube == '' %} hidden {% endif %}"><i class="fa-brands fa-youtube"></i></a>
                </div>
              </div>
            </div>
  
          {% endfor %}
   --}}
        </div>
  
      </div>
  
      <div id="tab-content" class="block p-6 hidden">
  
        <div class="grid gap-4 grid grid-cols-1 md:grid-cols-2">
  
          @foreach ($noticieros as $item)
          <div class="shadow-xl rounded-xl overflow-hidden w-full max-w-sm mx-auto border-2 border-gray-400">
            <img src="{{ asset('storage').'/'.$item->foto }}" alt="" class="w-full h-48 object-fill">
            <div class="p-4 text-center text-gray-900">
              <h3 class="text-2xl font-bold">{{ $item->nombre }}</h3>
              <p class="text-lg font-semibold py-2">{{ substr($item->hora_inicio, 0, 5) }} - {{  substr($item->hora_fin, 0, 5) }}</p>
              <p class="leading-7">
                {{ $item->descripcion }}
              </p>
          
              <div class="flex flex-row justify-center gap-8 text-2xl mt-2">
                <a href="{{ $item->facebook }}" class="hover:text-red-700 {{ $item->facebook == "" ? 'hidden':'' }}"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{ $item->twitter }}" class="hover:text-red-700 {{ $item->twitter == "" ? 'hidden':'' }}"><i class="fa-brands fa-twitter"></i></a>
                <a href="{{ $item->instagram }}" class="hover:text-red-700 {{ $item->instagram == "" ? 'hidden':'' }}"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ $item->tiktok }}" class="hover:text-red-700 {{ $item->tiktok == "" ? 'hidden':'' }}"><i class="fa-brands fa-tiktok"></i></a>
                <a href="{{ $item->youtube }}" class="hover:text-red-700 {{ $item->youtube == "" ? 'hidden':'' }}"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>
          </div>
          @endforeach
          {{-- {% for indice in noticieros %}
  
          <div class="shadow-xl rounded-xl overflow-hidden w-full max-w-sm mx-auto border-2 border-gray-400">
            <img src="{{ indice.imagen.url }}" alt="" class="w-full h-48 object-fill">
            <div class="p-4 text-center text-gray-900">
              <h3 class="text-2xl font-bold">{{ indice.nombre }}</h3>
              <p class="text-lg font-semibold py-2">{{ indice.hora_inicio }} - {{ indice.hora_fin }}</p>
              <p class="leading-7">
                {{ indice.descripcion }}
              </p>
              <div class="flex flex-row justify-center gap-8 text-2xl mt-2">
                <a href="{{ indice.link_facebook }}" class="hover:text-red-700 {% if indice.link_facebook == '' %} hidden {% endif %}"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{ indice.link_twitter }}" class="hover:text-red-700 {% if indice.link_twitter == '' %} hidden {% endif %}"><i class="fa-brands fa-twitter"></i></a>
                <a href="{{ indice.link_instagram }}" class="hover:text-red-700 {% if indice.link_instagram == '' %} hidden {% endif %}"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ indice.link_tiktok }}" class="hover:text-red-700 {% if indice.link_tiktok == '' %} hidden {% endif %}"><i class="fa-brands fa-tiktok"></i></a>
                <a href="{{ indice.link_youtube }}" class="hover:text-red-700 {% if indice.link_youtube == '' %} hidden {% endif %}"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>
          </div>
  
          {% endfor %} --}}
  
          <!--
          <div class="shadow-xl rounded-xl overflow-hidden max-w-md mx-auto ">
            <img src="assets/Programa1.png" alt="" class="w-full h-48">
            <div class="p-4 text-center rounded-b-xl border-b-2 border-x-2 border-gray-400 text-gray-900">
              <h3 class="text-2xl font-bold">CTV NOTICIAS.</h3>
              <p class="text-lg font-semibold py-2">12:00 - 13:00</p>
              <p class="leading-7">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae quis officia ratione! Architecto corrupti
                fugiat enim.
              </p>
              <div class="flex flex-row justify-center gap-8 text-2xl mt-2">
                <a href="" class="hover:text-red-700"><i class="fa-brands fa-facebook"></i></a>
                <a href="" class="hover:text-red-700"><i class="fa-brands fa-instagram"></i></a>
                <a href="" class="hover:text-red-700"><i class="fa-brands fa-twitter"></i></a>
                <a href="" class="hover:text-red-700"><i class="fa-brands fa-tiktok"></i></a>
                <a href="" class="hover:text-red-700"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>
          </div>
        -->
         
  
  
        </div>
  
      </div>
      <div id="tab-content" class="block p-6 hidden">
        <div class="grid gap-4 grid grid-cols-1 md:grid-cols-2">
  
          @foreach ($analisis as $item)
          <div class="shadow-xl rounded-xl overflow-hidden w-full max-w-sm mx-auto border-2 border-gray-400">
            <img src="{{ asset('storage').'/'.$item->foto }}" alt="" class="w-full h-48 object-fill">
            <div class="p-4 text-center text-gray-900">
              <h3 class="text-2xl font-bold">{{ $item->nombre }}</h3>
              <p class="text-lg font-semibold py-2">{{ substr($item->hora_inicio, 0, 5) }} - {{  substr($item->hora_fin, 0, 5) }}</p>
              <p class="leading-7">
                {{ $item->descripcion }}
              </p>
          
              <div class="flex flex-row justify-center gap-8 text-2xl mt-2">
                <a href="{{ $item->facebook }}" class="hover:text-red-700 {{ $item->facebook == "" ? 'hidden':'' }}"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{ $item->twitter }}" class="hover:text-red-700 {{ $item->twitter == "" ? 'hidden':'' }}"><i class="fa-brands fa-twitter"></i></a>
                <a href="{{ $item->instagram }}" class="hover:text-red-700 {{ $item->instagram == "" ? 'hidden':'' }}"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ $item->tiktok }}" class="hover:text-red-700 {{ $item->tiktok == "" ? 'hidden':'' }}"><i class="fa-brands fa-tiktok"></i></a>
                <a href="{{ $item->youtube }}" class="hover:text-red-700 {{ $item->youtube == "" ? 'hidden':'' }}"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>
          </div>
          @endforeach
          {{-- {% for indice in analisis %}
  
          <div class="shadow-xl rounded-xl overflow-hidden w-full max-w-sm mx-auto border-2 border-gray-400">
            <img src="{{ indice.imagen.url }}" alt="" class="w-full h-48 object-fill">
            <div class="p-4 text-center text-gray-900">
              <h3 class="text-2xl font-bold">{{ indice.nombre }}</h3>
              <p class="text-lg font-semibold py-2">{{ indice.hora_inicio }} - {{ indice.hora_fin }}</p>
              <p class="leading-7">
                {{ indice.descripcion }}
              </p>
              <div class="flex flex-row justify-center gap-8 text-2xl mt-2">
                <a href="{{ indice.link_facebook }}" class="hover:text-red-700 {% if indice.link_facebook == '' %} hidden {% endif %}"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{ indice.link_twitter }}" class="hover:text-red-700 {% if indice.link_twitter == '' %} hidden {% endif %}"><i class="fa-brands fa-twitter"></i></a>
                <a href="{{ indice.link_instagram }}" class="hover:text-red-700 {% if indice.link_instagram == '' %} hidden {% endif %}"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ indice.link_tiktok }}" class="hover:text-red-700 {% if indice.link_tiktok == '' %} hidden {% endif %}"><i class="fa-brands fa-tiktok"></i></a>
                <a href="{{ indice.link_youtube }}" class="hover:text-red-700 {% if indice.link_youtube == '' %} hidden {% endif %}"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>
          </div>
  
          {% endfor %} --}}
        </div>
      </div>
      <div id="tab-content" class="block p-6 hidden">
        
        <div class="grid gap-4 grid grid-cols-1 md:grid-cols-2">
  
          @foreach ($familiares as $item)
          <div class="shadow-xl rounded-xl overflow-hidden w-full max-w-sm mx-auto border-2 border-gray-400">
            <img src="{{ asset('storage').'/'.$item->foto }}" alt="" class="w-full h-48 object-fill">
            <div class="p-4 text-center text-gray-900">
              <h3 class="text-2xl font-bold">{{ $item->nombre }}</h3>
              <p class="text-lg font-semibold py-2">{{ substr($item->hora_inicio, 0, 5) }} - {{  substr($item->hora_fin, 0, 5) }}</p>
              <p class="leading-7">
                {{ $item->descripcion }}
              </p>
          
              <div class="flex flex-row justify-center gap-8 text-2xl mt-2">
                <a href="{{ $item->facebook }}" class="hover:text-red-700 {{ $item->facebook == "" ? 'hidden':'' }}"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{ $item->twitter }}" class="hover:text-red-700 {{ $item->twitter == "" ? 'hidden':'' }}"><i class="fa-brands fa-twitter"></i></a>
                <a href="{{ $item->instagram }}" class="hover:text-red-700 {{ $item->instagram == "" ? 'hidden':'' }}"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ $item->tiktok }}" class="hover:text-red-700 {{ $item->tiktok == "" ? 'hidden':'' }}"><i class="fa-brands fa-tiktok"></i></a>
                <a href="{{ $item->youtube }}" class="hover:text-red-700 {{ $item->youtube == "" ? 'hidden':'' }}"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>
          </div>
          @endforeach
          {{-- {% for indice in familiares %}
  
          <div class="shadow-xl rounded-xl overflow-hidden w-full max-w-sm mx-auto border-2 border-gray-400">
            <img src="{{ indice.imagen.url }}" alt="" class="w-full h-48 object-fill">
            <div class="p-4 text-center text-gray-900">
              <h3 class="text-2xl font-bold">{{ indice.nombre }}</h3>
              <p class="text-lg font-semibold py-2">{{ indice.hora_inicio }} - {{ indice.hora_fin }}</p>
              <p class="leading-7">
                {{ indice.descripcion }}
              </p>
              <div class="flex flex-row justify-center gap-8 text-2xl mt-2">
                <a href="{{ indice.link_facebook }}" class="hover:text-red-700 {% if indice.link_facebook == '' %} hidden {% endif %}"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{ indice.link_twitter }}" class="hover:text-red-700 {% if indice.link_twitter == '' %} hidden {% endif %}"><i class="fa-brands fa-twitter"></i></a>
                <a href="{{ indice.link_instagram }}" class="hover:text-red-700 {% if indice.link_instagram == '' %} hidden {% endif %}"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ indice.link_tiktok }}" class="hover:text-red-700 {% if indice.link_tiktok == '' %} hidden {% endif %}"><i class="fa-brands fa-tiktok"></i></a>
                <a href="{{ indice.link_youtube }}" class="hover:text-red-700 {% if indice.link_youtube == '' %} hidden {% endif %}"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>
          </div>
  
          {% endfor %} --}}
        </div>
  
      </div>
      <div id="tab-content" class="block p-6 hidden">
        
        <div class="grid gap-4 grid grid-cols-1 md:grid-cols-2">
  
          @foreach ($entretenimiento as $item)
          <div class="shadow-xl rounded-xl overflow-hidden w-full max-w-sm mx-auto border-2 border-gray-400">
            <img src="{{ asset('storage').'/'.$item->foto }}" alt="" class="w-full h-48 object-fill">
            <div class="p-4 text-center text-gray-900">
              <h3 class="text-2xl font-bold">{{ $item->nombre }}</h3>
              <p class="text-lg font-semibold py-2">{{ substr($item->hora_inicio, 0, 5) }} - {{  substr($item->hora_fin, 0, 5) }}</p>
              <p class="leading-7">
                {{ $item->descripcion }}
              </p>
          
              <div class="flex flex-row justify-center gap-8 text-2xl mt-2">
                <a href="{{ $item->facebook }}" class="hover:text-red-700 {{ $item->facebook == "" ? 'hidden':'' }}"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{ $item->twitter }}" class="hover:text-red-700 {{ $item->twitter == "" ? 'hidden':'' }}"><i class="fa-brands fa-twitter"></i></a>
                <a href="{{ $item->instagram }}" class="hover:text-red-700 {{ $item->instagram == "" ? 'hidden':'' }}"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ $item->tiktok }}" class="hover:text-red-700 {{ $item->tiktok == "" ? 'hidden':'' }}"><i class="fa-brands fa-tiktok"></i></a>
                <a href="{{ $item->youtube }}" class="hover:text-red-700 {{ $item->youtube == "" ? 'hidden':'' }}"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>
          </div>
          @endforeach
          {{-- {% for indice in entretenimiento %}
  
          <div class="shadow-xl rounded-xl overflow-hidden w-full max-w-sm mx-auto border-2 border-gray-400">
            <img src="{{ indice.imagen.url }}" alt="" class="w-full h-48 object-fill">
            <div class="p-4 text-center text-gray-900">
              <h3 class="text-2xl font-bold">{{ indice.nombre }}</h3>
              <p class="text-lg font-semibold py-2">{{ indice.hora_inicio }} - {{ indice.hora_fin }}</p>
              <p class="leading-7">
                {{ indice.descripcion }}
              </p>
              <div class="flex flex-row justify-center gap-8 text-2xl mt-2">
                <a href="{{ indice.link_facebook }}" class="hover:text-red-700 {% if indice.link_facebook == '' %} hidden {% endif %}"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{ indice.link_twitter }}" class="hover:text-red-700 {% if indice.link_twitter == '' %} hidden {% endif %}"><i class="fa-brands fa-twitter"></i></a>
                <a href="{{ indice.link_instagram }}" class="hover:text-red-700 {% if indice.link_instagram == '' %} hidden {% endif %}"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ indice.link_tiktok }}" class="hover:text-red-700 {% if indice.link_tiktok == '' %} hidden {% endif %}"><i class="fa-brands fa-tiktok"></i></a>
                <a href="{{ indice.link_youtube }}" class="hover:text-red-700 {% if indice.link_youtube == '' %} hidden {% endif %}"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>
          </div>
  
          {% endfor %} --}}
        </div>
  
      </div>
    </div>
  
  </div>

@endsection