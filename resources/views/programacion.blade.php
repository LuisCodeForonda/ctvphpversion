@extends('layouts.base')

@section('subtitulo', '- programacion')

@section('content')

    
<div class="tabs">
    <h2 class="text-2xl font-bold p-4">Programación</h2>
    <ul class="flex flex-row gap-1 font-medium text-lg text-white">
      <li id="tab"
        class="grow text-center cursor-pointer p-2 bg-gray-200 text-gray-900 hover:bg-red-700 hover:text-gray-200 bg-red-700 text-gray-200">
        Lunes-Viernes
      </li>
      <li id="tab"
        class="grow text-center cursor-pointer p-2 bg-gray-200 text-gray-900 hover:bg-red-700 hover:text-gray-200">
        Sábados
      </li>
      <li id="tab"
        class="grow text-center cursor-pointer p-2 bg-gray-200 text-gray-900 hover:bg-red-700 hover:text-gray-200">
        Domingos
      </li>
    </ul>
  
    <div class="tab-container">
      <div id="tab-content" class="block p-6 text-gray-800">
        <h3 class="py-4 font-medium">Lunes-Viernes</h3>
        <ul>
  
          @foreach ($lunesviernes as $item)
          <li class="flex flex-row item__list">
            <strong class="inline-block border-t-4 border-red-600 p-4">{{ substr($item->hora, 0, 5) }}</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">{{ $item->nombre }}</p>
            <p class="block border-t-4 border-red-300/50 p-4 w-24">En vivo</p>
          </li>
          @endforeach
  
          <!--
          <li class="flex flex-row ">
            <strong class="inline-block border-t-4 border-red-600 p-4">05:55</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">HORA SANTA</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">06:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">SANTA MISA</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">07:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">REVISTA BUENOS DÍAS</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">09:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">EL SAZÓN DE LA MAÑANA </p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">10:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">PRIMERO TU SALUD</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">11:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">SLEDGE HAMMER</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">12:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">DXTV</p>
          </li>
  
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">12:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">CTV NOTICIAS MERIDIANO</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">13:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">PROTAGONISTA</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">15:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">BRAVESTARR</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">15:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">LAS AVENTURAS DE TOM SAWYER</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">16:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">APRENDIENDO A VIVIR</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">16:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">QUIEN MANDA A QUIEN</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">17:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">CONTACTO EXPLOSIVO</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">18:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">MI CIUDAD</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">19:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">INTENSAMENTE</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">20:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">CTV NOTICIAS CENTRAL</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">21:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">BOLIVIA PARA EL MUNDO</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">22:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">DORAMA</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">23:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">DXTV</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">00:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">CIERRE DE EMISIÓN</p>
          </li>
          -->
  
        </ul>
      </div>
      <div id="tab-content" class="block p-6 hidden text-gray-800">
        <h3 class="py-4 font-medium">Sábados</h3>
        <ul>
  
          @foreach ($sabados as $item)
          <li class="flex flex-row ">
            <strong class="inline-block border-t-4 border-red-600 p-4">{{ substr($item->hora, 0, 5) }}</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">{{ $item->nombre }}</p>
          </li>
          @endforeach

          <!--
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">06:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">CAMINO AL CIELO</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">07:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">BRAVESTARR</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">07:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">CONDE PATULA</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">08:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">HAMTARO</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">08:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">CHIP Y DALE</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">09:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">LOS CAZAFANTASMAS NUEVA GENERACIÓN</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">09:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">HEATHCLIFF</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">10:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">TRANSFORMES</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">10:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">TRANSFORMES</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">11:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">HE - MAN MASTERS</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">11:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">SHE-RA PRINCESA DEL PODER</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">12:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">RAMBO</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">13:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">ROBOTECH</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">13:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">JIBAN</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">14:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">G.I. JOE</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">15:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">CICLO DE CINE ANIME</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">15:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">CICLO DE CINE ANIME</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">17:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">KUNG FU</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">18:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">EL AUTO FANTÁSTICO</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">19:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">SUPER AGENTE 86</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">20:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">LOS MAGNÍFICOS</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">21:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">MACGYVER</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">22:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">MIAMI VICE</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">23:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">LOBO DEL AIRE</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4">00:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">CIERRE DE EMISIÓN</p>
          </li>-->
          
        </ul>
      </div>
      <div id="tab-content" class="block p-6 hidden text-gray-800">
        <h3 class="py-4 font-medium">Domingos</h3>
        <ul class="list__programacion">
           @foreach ($domingos as $item)
          <li class="flex flex-row ">
            <strong class="inline-block border-t-4 border-red-600 p-4">{{ substr($item->hora, 0, 5) }}</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">{{ $item->nombre }}</p>
          </li>
          @endforeach 
          {{--
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">06:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">CAMINO AL CIELO</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">07:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">SANTA MISA</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">08:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">SUPER LIBRO</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">08:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">LAS AVENTURAS DE LOS OSOS GUMMI</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">09:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">AVENTUREROS EN EL AIRE</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">09:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">TRANSFORMES</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">10:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">TRANSFORMES</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">10:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">SANTA MISA</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">11:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">LA PEQUEÑA LU LU</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">12:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">BUTACA FAMILIAR</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">13:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">SABRINA</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">14:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">DINOSAURIOS</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">15:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">CICLO DE CINE AVENTURA</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">16:30</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">ALF</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">17:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">LA BELLA Y LA BESTIA</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">18:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">EL DIARIO DEL DESTINO</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">19:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">WALKER RANGER TEXAS</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">20:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">LOS MAGNIFICOS</p>

          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">21:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">MISIÓN IMPOSIBLE</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">22:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">LOBO DEL AIRE</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">23:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">LOS INVASORES</p>
          </li>
          <li class="flex flex-row">
            <strong class="inline-block border-t-4 border-red-600 p-4 hour">00:00</strong>
            <p class="inline-block border-t-4 border-red-300/50 w-full p-4">CIERRE DE EMISIÓN</p>
          </li>
          --}}
        </ul>
      </div>
    </div>
  </div>

@endsection