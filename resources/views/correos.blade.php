@extends('layouts.base')

@section('subtitulo', '- correos')

@section('content')
    <div class="p-4 text-lg">
        <h2 class="text-2xl font-bold">Nuestros correos corporativos</h2>
        <div class="border-b my-2 py-2">
            <h3 class="font-semibold">Área contabilidad</h3>
            <div class="flex flex-row justify-between items-center overflow-hidden">
                <p class="text-xl text-gray-800">contabilidad@ctvbolivia.com</p>
                <a href="mailto:contabilidad@ctvbolivia.com" target="_blank" class="cursor-pointer bg-blue-950 rounded px-2 text-white mail"><i class="mail__icon fa-solid fa-message mr-2"></i>enviar correo</a>
            </div>
        </div>

        <div class="border-b my-2 py-2">
            <h3 class="font-semibold">Área producción</h3>
            <div class="flex flex-row justify-between items-center overflow-hidden">
                <p class="text-xl text-gray-800">produccion@ctvbolivia.com</p>
                <a href="mailto:produccion@ctvbolivia.com" target="_blank" class="cursor-pointer bg-blue-950 rounded px-2 text-white mail"><i class="mail__icon fa-solid fa-message mr-2"></i>enviar correo</a>
            </div>
        </div>

        <div class="border-b my-2 py-2">
            <h3 class="font-semibold">Área programación</h3>
            <div class="flex flex-row justify-between items-center overflow-hidden">
                <p class="text-xl text-gray-800">programacion@ctvbolivia.com</p>
                <a href="mailto:programacion@ctvbolivia.com" target="_blank" class="cursor-pointer bg-blue-950 rounded px-2 text-white mail"><i class="mail__icon fa-solid fa-message mr-2"></i>enviar correo</a>
            </div>
        </div>

        <div class="border-b my-2 py-2">
            <h3 class="font-semibold">Área prensa</h3>
            <div class="flex flex-row justify-between items-center overflow-hidden">
                <p class="text-xl text-gray-800">prensa@ctvbolivia.com</p>
                <a href="mailto:prensa@ctvbolivia.com" target="_blank" class="cursor-pointer bg-blue-950 rounded px-2 text-white mail"><i class="mail__icon fa-solid fa-message mr-2"></i>enviar correo</a>
            </div>
        </div>

        <div class="border-b my-2 py-2">
            <h3 class="font-semibold">Área tecnica</h3>
            <div class="flex flex-row justify-between items-center overflow-hidden">
                <p class="text-xl text-gray-800">tecnica@ctvbolivia.com</p>
                <a href="mailto:tecnica@ctvbolivia.com" target="_blank" class="cursor-pointer bg-blue-950 rounded px-2 text-white mail"><i class="mail__icon fa-solid fa-message mr-2"></i>enviar correo</a>
            </div>
        </div>
        
    </div>
@endsection
