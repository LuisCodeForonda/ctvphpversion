<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="{{ asset('assets/LogoDorado.png') }}">
  <!-- <script src="https://cdn.tailwindcss.com"></script>  -->
  <script src="{{ asset('js/all.min.js') }}"></script>

  <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <header class="relative w-full h-36">
    <img src="{{ asset('assets/background2.jpg') }}" alt=""
      class=" absolute top-0 left-0 w-full h-full object-cover">
    <div
      class="relative z-1 h-full container max-w-screen-xl mx-auto  p-2 flex flex-col justify-between sm:flex-row sm:items-center">
      <a href="{{ route('index') }}" class="w-36 h-24"><img src="{{ asset('assets/Logo.png') }}" alt=""
          class="logo w-full h-full"></a>
      <div class="text-white font-medium">
        <p class=""><i class="fa-solid fa-location-dot pr-2"></i>C. Dias Romero #1370, La Paz - Bolivia</p>
        <p class=""><i class="fa-solid fa-phone pr-2"></i>222 06 55, 222 06 05</p>
      </div>
    </div>
  </header>

  <nav class="bg-gray-900 relative text-white text-2xl py-4 px-2">
    <div class="container max-w-screen-xl mx-auto flex flex-wrap justify-between items-center">
      <button id="btn-menu" class="px-1 py-1 rounded-md md:hidden"><i class="fa-solid fa-bars w-8 h-8"></i></button>

      <ul class="flex flex-row gap-1 md:order-2">
        <a href="#" target="_blank" rel="noopener noreferrer"
          class="w-10 h-10 text-center rounded-full transition hover:bg-white hover:text-gray-900 duration-300"><i
            class="fa-brands fa-facebook-f py-2"></i></a>
        <a href="https://www.youtube.com/channel/UCoPZwSoP3WqyiILInzpvIkQ" target="_blank" rel="noopener noreferrer"
          class="w-10 h-10 text-center rounded-full transition hover:bg-white hover:text-gray-900 duration-300"><i
            class="fa-brands fa-youtube py-2"></i></a>
        <a href="https://twitter.com/CTV_Bolivia" target="_blank" rel="noopener noreferrer"
          class="w-10 h-10 text-center rounded-full transition hover:bg-white hover:text-gray-900 duration-300"><i
            class="fa-brands fa-twitter p-2"></i></a>
        <a href="https://www.tiktok.com/@ctvbolivia?is_from_webapp=1&sender_device=pc" target="_blank"
          rel="noopener noreferrer"
          class="w-10 h-10 text-center rounded-full transition hover:bg-white hover:text-gray-900 duration-300"><i
            class="fa-brands fa-tiktok p-2"></i></a>
      </ul>

      <ul id="menu"
        class="block w-full h-56 flex flex-col justify-evenly gap-1 md:gap-4 hidden md:w-auto md:h-auto md:block md:order-1 md:flex md:flex-row">
        <li id="menu-item" class="text-center text-xl">
          <a href="{{ route('quienessomos') }}"
            class="text-slate-400 hover:text-slate-50 {{ request()->routeIs('quienessomos') ? 'text-slate-50':''}}">Quienes
            somos
          </a>
        </li>
        <li id="menu-item" class="text-center text-xl"><a href="{{ route('programacion') }}"
            class=" text-slate-400 hover:text-slate-50 {{ request()->routeIs('programacion') ? 'text-slate-50':''}}">Programación</a>
        </li>
        <li id="menu-item" class="text-center text-xl"><a href="{{ route('programas') }}"
            class="text-slate-400 hover:text-slate-50 {{ request()->routeIs('programas') ? 'text-slate-50':''}}">Programas</a>
        </li>
        <li id="menu-item" class="text-center text-xl"><a href="{{ route('contactos') }}"
            class="text-slate-400 hover:text-slate-50 {{ request()->routeIs('contactos') ? 'text-slate-50':''}}">Contactos</a>
        </li>
      </ul>

    </div>
  </nav>

  <main class="container max-w-screen-xl mx-auto my-6 lg:flex lg:flex-row">

    <div class="m-4 lg:basis-4/6">

      <div id="content" class="rounded-xl shadow-xl overflow-hidden">

        <!--Contenido Dinamico-->

        @yield('content')

        <!--Fin Contenido Dinamico-->

      </div>

    </div>

    <div class="lg:basis-2/6">
      <div class="h-72 bg-gray-200 shadow-xl p-2 lg:m-4">
        Stream
      </div>

      <div class="flex flex-col gap-2 m-4 p-4 shadow-xl rounded-xl overflow-hidden">
        <picture class="w-3/5 h-24 mx-auto sm:w-2/4 md:w-2/5 lg:w-3/5">
          <img loading="lazy" src="{{ asset('assets/RP1.jpg') }}" alt="" class="w-full h-full">
        </picture>
        <picture class="w-3/5 h-24 mx-auto sm:w-2/4 md:w-2/5 lg:w-3/5">
          <img loading="lazy" src="{{ asset('assets/bot-evangelio-vida.jpg') }}" alt="" class="w-full h-full">
        </picture>
        <picture class="w-3/5 h-24 mx-auto sm:w-2/4 md:w-2/5 lg:w-3/5">
          <img loading="lazy" src="{{ asset('assets/Protagonistas.jpg') }}" alt="" class="w-full h-full">
        </picture>
        <picture class="w-3/5 h-24 mx-auto sm:w-2/4 md:w-2/5 lg:w-3/5">
          <img loading="lazy" src="{{ asset('assets/DXTV_logo.jpg') }}" alt="" class="w-full h-full">
        </picture>
      </div>

    </div>

  </main>

  <footer class="bg-slate-200 text-gray-900">
    <div class="container max-w-screen-xl mx-auto flex flex-row flex-wrap items-center justify-between p-4">
      <div class="">
        <h3 class="font-bold text-xl mb-2">Redes sociales</h3>
        <a href="" target="_blank" rel="noopener noreferrer" class="block text-xl hover:text-red-700"><i
            class="fa-brands fa-square-facebook w-6 h-6 mr-2"></i>Facebook</a>
        <a href="https://www.youtube.com/channel/UCoPZwSoP3WqyiILInzpvIkQ" target="_blank" rel="noopener noreferrer"
          class="block text-xl hover:text-red-700"><i class="fa-brands fa-youtube w-6 h-6 mr-2"></i>You
          tube</a>
        <a href="https://twitter.com/CTV_Bolivia" target="_blank" rel="noopener noreferrer"
          class="block text-xl hover:text-red-700"><i class="fa-brands fa-twitter w-6 h-6 mr-2"></i>Twitter</a>
        <a href="https://www.tiktok.com/@ctvbolivia?is_from_webapp=1&sender_device=pc" target="_blank"
          rel="noopener noreferrer" class="block text-xl hover:text-red-700"><i
            class="fa-brands fa-tiktok w-6 h-6 mr-2"></i>Tik
          tok</a>
      </div>
      <div class="w-40 h-28">
        <img loading="lazy" src="{{ asset('assets/LogoDorado.png') }}" alt="" class="w-full h-full">
      </div>
    </div>

    <p class="text-center font-bold pb-4">
      Copyright © 2023 · Todos los Derechos Reservados · Copacabana Television
    </p>
  </footer>

  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>