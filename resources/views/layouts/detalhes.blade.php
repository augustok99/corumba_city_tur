<!DOCTYPE html>
<html lang="en">

<head>
    @include("config")
</head>

<header class="flex justify-center w-full">
    @include('layouts.cabecalho')
</header>

<body class="bg-gradient-to-r from-gray-200 via-rose_light to-gray-50 from-10% via-10% to-80%">
    <div class=" mt-28 flex justify-center items-center">
        <h1 class="text-center font-montserrat text-2xl md:text-[1.8rem] font-bold">Aonde você quer ir?</h1>
    </div>

    <!-- component search -->
    <div class="max-w-md mx-auto mt-2">
        <form action="{{ route('places.search') }}" method="GET">
            <div
                class="relative flex ring-1 hover:ring-2 focus:ring-2 ring-rose_strong items-center mx-auto md:mx-0 w-[18rem] md:w-[32rem] h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                <button type="submit" class="grid place-items-center h-full w-12 text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <input
                    class="placeholder-gray-500 placeholder:font-medium font-montserrat peer h-full w-full text-md outline-none text-gray-700 pr-2 bg-white"
                    id="search" name="query" placeholder="Pesquise Lugares..." />
            </div>
        </form>
    </div>


    <!-- Icones -->

    <div class="hidden lg:flex lg:flex-row items-center justify-center mt-3 mx-auto pr-6 md:ml-10">
        <button class="filter-link hover:scale-110 duration-300 flex items-center justify-between" data-filter="all">
            <img class="scale-75" src="{{ asset('images/search_map.png') }}" alt="">
            <h3 class="md:text-lg text-base font-poppins font-medium">Mostrar Tudo</h3>
        </button>
        <button
            class="filter-link hover:scale-110 duration-300 flex items-center justify-between mr-12 md:mr-0 md:ml-4 sm:ml-12 sm:mr-[6rem]"
            data-filter="hotel">
            <img class="mr-1 scale-100" src="{{ asset('images/cama.png') }}" alt="">
            <h3 class="text-lg font-poppins font-medium">Hotel</h3>
        </button>
        <button class="filter-link hover:scale-110 duration-300 flex items-center justify-between ml-4"
            data-filter="restaurante">
            <img class="mr-1 scale-100" src="{{ asset('images/restaurante.png') }}" alt="">
            <h3 class="text-lg scale-100 font-poppins font-medium">Restaurante</h3>
        </button>
        <button class="filter-link hover:scale-110 duration-300 flex items-center justify-between ml-4"
            data-filter="monumento">
            <img class="mr-1 scale-90" src="{{ asset('images/monumento.png') }}" alt="">
            <h3 class="text-lg font-poppins font-medium">Monumentos</h3>
        </button>
        <button id="clearFilter" class=" hover:scale-110 duration-300 flex items-center justify-between ml-4">
            <img class="mr-1 w-10 scale-90" src="{{ asset('images/borracha.png') }}" alt="">
            <h3 class="text-lg font-poppins font-medium">Limpar Filtro</h3>
        </button>
    </div>

    <div class="flex justify-center lg:hidden mt-3">
        <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay"
            class="text-black bg-red-200 hover:bg-red-300 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
            type="button">Filtro <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg>
        </button>
    </div>

    <!-- Dropdown menu -->
    <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
        <ul class="py-2 text-sm text-black font-poppins bg-red-200 rounded-lg" aria-labelledby="dropdownDelayButton">
            <li>
                <a href="#" data-filter="all" class="block filter-link px-4 py-2 bg-red-200 hover:bg-red-300 ">Mostrar
                    Tudo</a>
            </li>
            <li>
                <a href="#" data-filter="hotel"
                    class="block filter-link px-4 py-2 bg-red-200 hover:bg-red-300 ">Hotel</a>
            </li>
            <li>
                <a href="#" data-filter="restaurante"
                    class="block filter-link px-4 py-2 bg-red-200 hover:bg-red-300 ">Restaurante</a>
            </li>
            <li>
                <a href="#" data-filter="monumento"
                    class="block filter-link px-4 py-2 bg-red-200 hover:bg-red-300 ">Monumentos</a>
            </li>
            <li>
                <a href="{{route('detalhes')}}" id="clearFilter"
                    class="block px-4 py-2 bg-red-200 hover:bg-red-300 ">Limpar Filtro</a>
            </li>
        </ul>
    </div>





    <!-- Section for displaying places -->
    <div class="flex justify-center items-center mx-auto mt-32 md:mt-44">
        <h1 class="font-montserrat flex font-semibold text-2xl">
            Empresas que confiam em nós
        </h1>
    </div>
    <hr
        class="2xl:ml-28 mt-1 md:mr-[12rem] mx-auto w-10/12 md:w-11/12 xl:w-auto xl:ml-12 md:ml-12 h-0.5 border-t-0 bg-black" />

    <div
        class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid lg:grid-cols-2 2xl:grid-cols-4 lg:px-28 justify-center sm:ml-12 md:ml-12 ml-12 mt-10">
        @foreach ($places as $place)
        <a href="{{ route('places.show', $place->id) }}" class="mx-auto p-4 item {{ strtolower($place->type) }}">
            <div class="relative bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-16 hover:scale-110 duration-300"
                id="place-item">
                <img class="w-full h-full object-cover max-w-[18rem] max-h-[22rem] rounded-lg absolute left-0 z-0"
                    src="{{ asset('places_path/' . ($place->image_path ?? 'img_break.png')) }}" alt="Imagem do local">
                <div class="absolute w-full inset-0 items-start flex flex-col justify-between p-5 rounded-2xl">
                    <div class="flex justify-start rounded-xl mr-12 px-2 bg-white items-center mt-2">
                        <img class="h-8 w-8 rounded-full"
                            src="{{$place->profile_image ? asset('profiles/' . $place->profile_image) : asset('images/default_profile.png') }}"
                            alt="Foto de perfil do usuário">
                        <span class="block font-poppins py-2 text-base text-black font-medium ml-2" role="menuitem"
                            tabindex="-1" id="user-menu-item-0">{{ $place->username }}</span>
                    </div>
                    <div class="flex flex-col mx-auto space-y-1 bg-white rounded-lg justify-center items-center mt-4">
                        <span class="block font-poppins px-4 text-base text-black font-medium" role="menuitem"
                            tabindex="-1" id="user-menu-item-0">{{ "Local: " . $place->type }}</span>
                        <span class="block font-poppins px-4 text-base text-black font-medium" role="menuitem"
                            tabindex="-1" id="user-menu-item-0">{{$place->title }}</span>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</body>

</html>