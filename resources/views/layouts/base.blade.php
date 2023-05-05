<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ asset('assets/LogoDorado.png') }}">
    <script src="{{ asset('js/all.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>CTV Bolivia @yield('subtitulo')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=7">

</head>

<body>
    <header class="relative w-full h-40 md:h-36 header__container">
        {{-- <img src="{{ asset('assets/background2.jpg') }}" alt=""
            class=" absolute top-0 left-0 w-full h-full object-cover"> --}}
        <div
            class="relative z-1 h-full container max-w-screen-xl mx-auto  p-2 flex flex-col justify-between sm:flex-row sm:items-center">
            <a href="{{ route('index') }}" class="w-32 h-20"><img src="{{ asset('assets/Logo.png') }}" alt=""
                    class="logo w-full h-full"></a>
            <div class="text-white font-medium flex flex-row justify-between sm:flex-col">
                <div>
                    <p class=""><i class="fa-solid fa-location-dot pr-2"></i>C. Dias Romero #1370, La Paz -
                        Bolivia
                    </p>
                    <p class=""><i class="fa-solid fa-phone pr-2"></i>222 06 55, 222 06 05</p>
                </div>
                <div>
                    <a href="{{ route('correos') }}"><i class="fa-solid fa-envelope pr-2"></i>Correos</a>
                    <p><i class="fa-brands fa-whatsapp text-lime-500 text-xl pr-2"></i>62221482</p>
                </div>
            </div>
        </div>
    </header>

    <nav class="bg-gray-900 relative text-white text-2xl py-4 px-2">
        <div class="container max-w-screen-xl mx-auto flex flex-wrap justify-between items-center">
            <button id="btn-menu" class="px-1 pt-1 rounded-md md:hidden"><i
                    class="fa-solid fa-bars w-8 h-8"></i></button>

            <ul class="flex flex-row gap-1 md:order-2">
                <a href="https://www.facebook.com/CTVLaPaz" target="_blank" rel="noopener noreferrer"
                    class="w-10 h-10 text-center rounded-full transition hover:bg-white hover:text-gray-900 duration-300"><i
                        class="fa-brands fa-facebook-f py-2"></i></a>
                <a href="https://www.youtube.com/@ctvbolivia" target="_blank" rel="noopener noreferrer"
                    class="w-10 h-10 text-center rounded-full transition hover:bg-white hover:text-gray-900 duration-300"><i
                        class="fa-brands fa-youtube py-2"></i></a>
                <a href="https://twitter.com/CTV_Bolivia" target="_blank" rel="noopener noreferrer"
                    class="w-10 h-10 text-center rounded-full transition hover:bg-white hover:text-gray-900 duration-300"><i
                        class="fa-brands fa-twitter p-2"></i></a>
                <a href="https://www.tiktok.com/@ctvbolivia" target="_blank" rel="noopener noreferrer"
                    class="w-10 h-10 text-center rounded-full transition hover:bg-white hover:text-gray-900 duration-300"><i
                        class="fa-brands fa-tiktok p-2"></i></a>
            </ul>

            <ul id="menu"
                class="block w-full h-56 flex flex-col justify-evenly gap-1 md:gap-4 hidden md:w-auto md:h-auto md:block md:order-1 md:flex md:flex-row text-xl">
                <li>
                    <a href="{{ route('quienessomos') }}"
                        class="menu_item text-slate-400 hover:text-slate-50 {{ request()->routeIs('quienessomos') ? 'text-slate-50 font-medium' : '' }}">Quienes
                        somos
                    </a>
                </li>
                <li>
                    <a href="{{ route('programacion') }}"
                        class="menu_item text-slate-400 hover:text-slate-50 {{ request()->routeIs('programacion') ? 'text-slate-50 font-medium' : '' }}">Programación
                    </a>
                </li>
                <li>
                    <a href="{{ route('programas') }}"
                        class="menu_item text-slate-400 hover:text-slate-50 {{ request()->routeIs('programas') ? 'text-slate-50 font-medium' : '' }}">Programas
                    </a>
                </li>
                <li>
                    <a href="{{ route('contactos') }}"
                        class="menu_item text-slate-400 hover:text-slate-50 {{ request()->routeIs('contactos') ? 'text-slate-50 font-medium' : '' }}">Contactos
                    </a>
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
            {{-- bajar el height --}}

            <div class=" bg-gray-200 shadow-xl lg:m-4">
                <h2 class="inline-block text-xl bg-red-700 text-white px-4 rounded"><i
                        class="fa-solid fa-circle-play mr-2"></i>Live</h2>
                <iframe src="" width="100%" height="360" frameborder="0" scrolling="no" target="_blank"
                    allowfullscreen="yes"></iframe>
            </div>

            <div class="flex flex-col gap-2 m-4 p-4 shadow-xl rounded-xl overflow-hidden">
                @foreach ($miniaturas as $miniatura)
                    <picture class="w-3/5 h-24 mx-auto sm:w-2/4 md:w-2/5 lg:w-3/5">
                        <img loading="lazy" src="{{ asset('storage') . '/' . $miniatura->foto }}" alt=""
                            class="w-full h-full">
                    </picture>
                @endforeach
            </div>

        </div>

    </main>

    <footer class="bg-slate-200 text-gray-900">
        <div class="container max-w-screen-xl mx-auto grid grid-cols-2 md:flex md:justify-between md:h-48 p-4 ">
            <div class="md:w-1/4">
                <h3 class="font-bold text-xl mb-2">Redes sociales</h3>
                <a href="https://www.facebook.com/CTVLaPaz" target="_blank" rel="noopener noreferrer"
                    class="block text-xl hover:text-red-700"><i
                        class="fa-brands fa-square-facebook w-6 h-6 mr-2"></i>Facebook</a>
                <a href="https://www.youtube.com/@ctvbolivia" target="_blank" rel="noopener noreferrer"
                    class="block text-xl hover:text-red-700"><i class="fa-brands fa-youtube w-6 h-6 mr-2"></i>You
                    tube</a>
                <a href="https://twitter.com/CTV_Bolivia" target="_blank" rel="noopener noreferrer"
                    class="block text-xl hover:text-red-700"><i
                        class="fa-brands fa-twitter w-6 h-6 mr-2"></i>Twitter</a>
                <a href="https://www.tiktok.com/@ctvbolivia" target="_blank" rel="noopener noreferrer"
                    class="block text-xl hover:text-red-700"><i class="fa-brands fa-tiktok w-6 h-6 mr-2"></i>Tik
                    tok</a>
            </div>
            <div class="mt-2 md:w-1/4 md:mt-0">
                <h3 class="font-bold text-xl">Contabilidad</h3>
                <p class="mb-2"><strong>Correo:</strong> contabilidad@ctvbolivia.com</p>

                <h3 class="font-bold text-xl">Área producción</h3>
                <p class="mb-2"><strong>Correo:</strong> produccion@ctvbolivia.com</p>

                <h3 class="font-bold text-xl">Área programación</h3>
                <p class="mb-2"><strong>Correo:</strong> programacion@ctvbolivia.com</p>
            </div>
            <div class="mt-2 md:w-1/4 md:mt-0">
                <h3 class="font-bold text-xl mb-2">Enlaces</h3>
                <a href="https://titan.hostgator.mx/login/" target="_blank" rel="noopener noreferrer"
                    class="block hover:text-red-700 underline underline-offset-2 cursor-pointer">mi correo</a>
            </div>
            <div class="w-40 h-28 self-center">
                <img loading="lazy" src="{{ asset('assets/LogoDorado.png') }}" alt=""
                    class="w-full h-full">
            </div>
        </div>

        <p class="text-center font-bold p-4">
            Copyright © 2023 · Todos los Derechos Reservados · Copacabana Television Srl.
        </p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('js/moment.min.js') }}"></script> --}}
    <script src="{{ asset('js/all.min.js') }}"></script>

</body>

</html>
