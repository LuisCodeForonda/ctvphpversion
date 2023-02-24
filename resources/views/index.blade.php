@extends('layouts.base')


@section('content')
    <div class="relative">
        <picture id="mySlides" class="block w-full h-64 sm:h-80 md:h-96">
            <img loading="lazy" src="{{ asset('assets/Programa1.png') }}" alt="" class="w-full h-full">
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
        </picture>

        <!-- tarde -->
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
        </picture>



        <span id="prev" class="absolute top-2/4 bg-gray-200/75 rounded-r-lg px-1 py-1 cursor-pointer"><i
                class="fa-solid fa-arrow-left w-6 h-6"></i></span>
        <span id="next" class="absolute right-0 top-2/4 bg-gray-200/75 rounded-l-lg px-1 py-1 cursor-pointer"><i
                class="fa-solid fa-arrow-right w-6 h-6"></i></span>
    </div>

    <div class="relative flex flex-row justify-center p-4 gap-2">
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
        </div>
    </div>
@endsection
