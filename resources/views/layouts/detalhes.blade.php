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
        <h1 class="text-center font-montserrat text-[2.1rem] font-bold">Aonde você quer ir?</h1>
    </div>

    <!-- component search -->
    <div class='max-w-md mx-auto mt-2'>
        <div
            class="relative flex items-center w-[32rem] h-12 rounded-lg focus-within:shadow-lg bg-rose_light overflow-hidden">
            <button type="submit" class="grid place-items-center h-full w-12 text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>

            <input
                class="placeholder-gray-500 placeholder:font-medium font-montserrat peer h-full w-full text-md outline-none text-gray-700 pr-2 bg-rose_light"
                id="search" placeholder="Pesquise Lugares..." />
        </div>
    </div>

    <!-- Icones -->

    <div class="flex items-center justify-center mt-3 ml-10">
        <a href="#" class="hover:scale-110 duration-300 flex items-center justify-between">
            <img class="scale-75" src="{{asset('images/search_map.png')}}" alt="">
            <h3 class="text-lg font-poppins font-medium">Mostrar Tudo</h3>
        </a>
        <a href="#" class="hover:scale-110 duration-300 flex items-center justify-between ml-4">
            <img class="mr-1 scale-100" src="{{asset('images/cama.png')}}" alt="">
            <h3 class="text-lg font-poppins font-medium">Hotel</h3>
        </a>
        <a href="#" class="hover:scale-110 duration-300 flex items-center justify-between ml-4">
            <img class="mr-1 scale-100" src="{{asset('images/restaurante.png')}}" alt="">
            <h3 class="text-lg scale-100 font-poppins font-medium">Restaurante</h3>
        </a>
        <a href="#" class=" hover:scale-110 duration-300 flex items-center justify-between ml-4">
            <img class="mr-1 scale-90" src="{{asset('images/monumento.png')}}" alt="">
            <h3 class="text-lg font-poppins font-medium">Monumentos</h3>
        </a>
    </div>

    <!-- Hoteis -->

    <div class="flex justify-center mt-44 mr-[81rem]">
        <h1 class="font-poppins font-medium text-2xl">Hoteis</h1>
    </div>
    <hr class="mt-1 ml-[15rem] w-8/12 h-0.5 border-t-0 bg-gray-600/50" />

    <div class="flex justify-center items-center">

        <div
            class="mt-20 ml-56 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class="mt-20 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class="mt-20 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class="mt-20 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
    </div>

    <!-- Hoteis -->

    <div class="flex justify-center items-center">

        <div
            class="ml-56 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class=" mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class=" mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class=" mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
    </div>

    <!-- Botao -->

    <div class="flex justify-center">
        <form action="">
            <button type="submit"
                class="font-poppins font-medium mt-4 ml-5 bg-rose_medium shadow-2xl rounded-xl w-[8rem] h-[4rem] mb-32 hover:scale-110 duration-300">Ver
                Mais</button>
        </form>

    </div>

    <!-- Restaurantes -->

    <div class="flex justify-center mt-44 mr-[81rem]">
        <h1 class="font-poppins font-medium text-2xl">Restaurantes</h1>
    </div>
    <hr class="mt-1 ml-[12.5rem] w-8/12 h-0.5 border-t-0 bg-gray-600/50" />

    <div class="flex justify-center items-center">

        <div
            class="mt-20 ml-56 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class="mt-20 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class="mt-20 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class="mt-20 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
    </div>

    <!-- Restaurantes -->

    <div class="flex justify-center items-center">

        <div
            class="ml-56 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class=" mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class=" mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class=" mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
    </div>

    <!-- Botao -->

    <div class="flex justify-center">
        <form action="">
            <button type="submit"
                class="font-poppins font-medium mt-4 ml-5 bg-rose_medium shadow-2xl rounded-xl w-[8rem] h-[4rem] mb-32 hover:scale-110 duration-300">Ver
                Mais</button>
        </form>

    </div>


    <!-- Monumentos -->

    <div class="flex justify-center mt-44 mr-[81rem]">
        <h1 class="font-poppins font-medium text-2xl">Monumentos</h1>
    </div>
    <hr class="mt-1 ml-[12.5rem] w-8/12 h-0.5 border-t-0 bg-gray-600/50" />

    <div class="flex justify-center items-center">

        <div
            class="mt-20 ml-56 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class="mt-20 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class="mt-20 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class="mt-20 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
    </div>

    <!-- Monumentos -->

    <div class="flex justify-center items-center">

        <div
            class="ml-56 mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class=" mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class=" mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
        <div
            class=" mr-28 bg-rose_medium shadow-2xl rounded-2xl w-[27rem] h-[22rem] mb-32 hover:scale-110 duration-300">
        </div>
    </div>

    <!-- Botao -->

    <div class="flex justify-center">
        <form action="">
            <button type="submit"
                class="font-poppins font-medium mt-4 ml-5 bg-rose_medium shadow-2xl rounded-xl w-[8rem] h-[4rem] mb-32 hover:scale-110 duration-300">Ver
                Mais</button>
        </form>

    </div>





</body>

</html>