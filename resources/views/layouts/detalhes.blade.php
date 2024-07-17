<!DOCTYPE html>
<html lang="en">

<head>
    @include("config")
</head>

<header class="flex justify-center w-full">
    @include('layouts.cabecalho')
</header>

<body class="bg-gradient-to-r from-blue_light to-rose_light from-10% to-90%">
    <div class=" mt-28 flex justify-center items-center">
        <h1 class="text-center font-montserrat text-2xl md:text-[1.8rem] font-bold">Aonde você quer ir?</h1>
    </div>

    <!-- component search -->
    <div class='max-w-md mx-auto mt-2'>
        <div
            class="relative flex items-center mx-auto md:mx-0 w-[18rem] md:w-[32rem] h-12 rounded-lg focus-within:shadow-lg bg-rose_medium overflow-hidden">
            <button type="submit" class="grid place-items-center h-full w-12 text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>

            <input
                class="placeholder-gray-500 placeholder:font-medium font-montserrat peer h-full w-full text-md outline-none text-gray-700 pr-2 bg-rose_medium"
                id="search" placeholder="Pesquise Lugares..." />
        </div>
    </div>

    <!-- Icones -->
    <div class="hidden md:flex items-center justify-center mt-3 mx-auto md:ml-10">
        <a href="#" class="filter-link hover:scale-110 duration-300 flex items-center justify-between"
            data-filter="all">
            <img class="scale-75" src="{{ asset('images/search_map.png') }}" alt="">
            <h3 class="md:text-lg text-base font-poppins font-medium">Mostrar Tudo</h3>
        </a>
        <a href="#" class="filter-link hover:scale-110 duration-300 flex items-center justify-between ml-4"
            data-filter="hotel">
            <img class="mr-1 scale-100" src="{{ asset('images/cama.png') }}" alt="">
            <h3 class="text-lg font-poppins font-medium">Hotel</h3>
        </a>
        <a href="#" class="filter-link hover:scale-110 duration-300 flex items-center justify-between ml-4"
            data-filter="restaurante">
            <img class="mr-1 scale-100" src="{{ asset('images/restaurante.png') }}" alt="">
            <h3 class="text-lg scale-100 font-poppins font-medium">Restaurante</h3>
        </a>
        <a href="#" class="filter-link hover:scale-110 duration-300 flex items-center justify-between ml-4"
            data-filter="monumento">
            <img class="mr-1 scale-90" src="{{ asset('images/monumento.png') }}" alt="">
            <h3 class="text-lg font-poppins font-medium">Monumentos</h3>
        </a>
    </div>

    <!-- Section for displaying places -->
    <div class="item hotel flex justify-center mx-auto mt-32 md:mt-44 md:mr-[81rem]">
        <h1 class="font-poppins font-medium text-2xl ml-16 mr-auto md:mx-0 md:ml-[12rem] xl:ml-[22rem] 2xl:mr-[18rem]">
            Locais
        </h1>
    </div>
    <hr
        class="item hotel 2xl:ml-28 mt-1 md:mr-[12rem] mx-auto w-10/12 md:w-auto xl:w-auto xl:ml-12 md:ml-12 h-0.5 border-t-0 bg-black" />

    <div class="flex flex-wrap justify-center mx-auto mt-10">
        @foreach ($places as $place)
        <div class="flex justify-center items-center mx-auto p-4 item {{ strtolower($place->type) }}">
            <div
                class="relative bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-16 hover:scale-110 duration-300">
                @if ($place->image_path)
                <img class="w-full h-full max-w-[18rem] max-h-[22rem] rounded-2xl absolute top-0 left-0 z-0"
                    src="{{ asset('places_path/' . $place->image_path) }}" alt="Imagem do local">
                @endif
                <div class="absolute inset-0 flex flex-col justify-between p-4 rounded-2xl z-10">
                    <div class="flex justify-start items-center pl-4 pt-2">
                        <img class="h-8 w-8 rounded-full"
                            src="{{ auth()->check() && $place->profile_image ? asset('profiles/' . $place->profile_image) : asset('images/default_profile.jpg') }}"
                            alt="Foto de perfil do usuário">
                        <span class="block font-poppins py-2 text-base text-white font-medium ml-4" role="menuitem"
                            tabindex="-1" id="user-menu-item-0">{{ auth()->check() ? $place->username : 'Seu Perfil'
                                        }}</span>
                    </div>
                    <div class="flex flex-col space-y-2 justify-center mt-4">
                        <span class="block font-poppins px-4 text-base text-white font-medium" role="menuitem"
                            tabindex="-1" id="user-menu-item-0">{{$place->title }}</span>
                        <span class="block font-poppins px-4 text-base text-white font-medium" role="menuitem"
                            tabindex="-1" id="user-menu-item-0">{{ 'Tipo de Local: ' . $place->type }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Botao -->
    <div class="flex justify-center">
        <button id="loadMoreButton" type="button"
            class="font-poppins font-medium mt-4 ml-5 bg-rose_medium shadow-2xl rounded-xl w-[8rem] h-[4rem] mb-32 hover:scale-110 duration-300">Ver
            Mais</button>
    </div>
</body>

</html>