@extends('layouts.base')


@section('content')

<div class="p-4">
    <h2 class="text-2xl font-bold">Contactos</h2>

    @if (session('status'))
        <script>
            alert('{{ session('status') }}')
        </script>
    @endif
    <form action="{{ route('contactos') }}" class="p-0 md:p-6 text-gray-900" method="post">
        @csrf

        <div class="flex flex-col">
            <label for="name" class="font-medium mt-4">Nombre Completo</label>
            <input type="text" class="p-2 border-b-2 border-gray-300 outline-none focus:border-blue-500"
                name="name" id="" value="{{ old('name') }}" placeholder="Nombre completo:">
            @error('name')
                <small class="text-red-500">* {{ $message }}</small>
            @enderror

            <label for="email" class="font-medium mt-4">Email</label>
            <input type="email"
                class="p-2 border-b-2 border-gray-300 outline-none focus:border-blue-500" name="email" id=""
                value="{{ old('email') }}" placeholder="Email:">
            @error('email')
                <small class="text-red-500">* {{ $message }}</small>
            @enderror
            
            <label for="subject" class="font-medium mt-4">Asunto</label>
            <input type="text" class="p-2 border-b-2 border-gray-300 outline-none focus:border-blue-500"
                name="subject" id="" value="{{ old('subject') }}" placeholder="Asunto:">
            @error('subject')
                <small class="text-red-500">* {{ $message }}</small>
            @enderror

            <label for="content" class="font-medium mt-4">Mensaje</label>
            <textarea name="content" id="" class="p-2 outline-blue-500" cols="30" rows="10"
                value="{{ old('content') }}" placeholder="Mensaje:"></textarea>
            @error('content')
                <small class="text-red-500">* {{ $message }}</small>
            @enderror

            <input type="submit" value="Enviar"
                class="inline-block p-2 mt-6 text-white text-2xl font-bold bg-blue-600 rounded-3xl w-48 mx-auto cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-blue-700 duration-300">
        </div>
    </form>

    <div class="my-6 border-4 border-gray-300 w-full md:w-4/5 h-96 mx-auto">
        <iframe class="w-full h-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.484179640445!2d-68.12396248451967!3d-16.501636345143996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2067d102bf79%3A0x6f8dfd206e43e6fe!2sCatolicaTV!5e0!3m2!1ses!2sbo!4v1672952092103!5m2!1ses!2sbo"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <p class="p-6 leading-8 text-gray-800">
        Dirección C. Díaz Romero No. 1370, zona Miraflores <br>
        Casilla #7762 <br>
        Teléfonos Central : 2 220605 – 2 22 0655 <br>
        Fax : 2 225002 <br>
        Prensa : 2 220660 <br>
        Gerencia Comercial: 2 245775 <br>
        Gerencia General: 2 223502 <br>
    </p>
</div>


@endsection