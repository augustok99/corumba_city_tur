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

    <div class=" hidden md:flex items-center justify-center mt-3 mx-auto md:ml-10">
        <a href="#" class="hover:scale-110 duration-300 flex items-center justify-between">
            <img class="scale-75" src="{{asset('images/search_map.png')}}" alt="">
            <h3 class="md:text-lg text-base font-poppins font-medium">Mostrar Tudo</h3>
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

    <div class="flex justify-center mx-auto mt-32 md:mt-44 md:mr-[81rem]">
        <h1 class="font-poppins font-medium text-2xl ml-16 mr-auto md:mx-0 md:ml-[12rem] xl:ml-[22rem] 2xl:mr-[18rem]">
            Hoteis
        </h1>
    </div>
    <hr
        class="2xl:ml-28 mt-1 md:mr-[12rem] mx-auto w-10/12 md:w-auto xl:w-auto xl:ml-12 md:ml-12 h-0.5 border-t-0 bg-black" />

    <div class="flex flex-col md:grid md:grid-cols-2 gap-2 xl:flex xl:flex-row">
        <div class="flex justify-center items-center mx-auto">

            <div
                class="mt-20 bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-32 hover:scale-110 duration-300 mx-auto">
            </div>

        </div>
        <div class="flex justify-center items-center mx-auto">

            <div
                class="mt-20 bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-32 hover:scale-110 duration-300">
            </div>
        </div>
        <div class="flex justify-center items-center mx-auto">

            <div
                class="mt-20 bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-32 hover:scale-110 duration-300 mx-auto">
            </div>

        </div>
        <div class="flex justify-center items-center mx-auto">

            <div
                class="mt-20 bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-32 hover:scale-110 duration-300">
            </div>
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

    <div class="flex justify-center mx-auto mt-32 md:mt-44 md:mr-[81rem]">
        <h1 class="font-poppins font-medium text-2xl ml-16 mr-auto md:mx-0 md:ml-[22rem] xl:ml-[22rem] 2xl:mr-[18rem]">
            Restaurantes
        </h1>
    </div>
    <hr
        class="2xl:ml-28 mt-1 md:mr-[12rem] mx-auto w-10/12 md:w-auto xl:w-auto xl:ml-12 md:ml-12 h-0.5 border-t-0 bg-black" />

    <div class="flex flex-col md:grid md:grid-cols-2 gap-2 xl:flex xl:flex-row">
        <div class="flex justify-center items-center mx-auto">

            <div
                class="mt-20 bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-32 hover:scale-110 duration-300 mx-auto">
            </div>

        </div>
        <div class="flex justify-center items-center mx-auto">

            <div
                class="mt-20 bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-32 hover:scale-110 duration-300">
            </div>
        </div>
        <div class="flex justify-center items-center mx-auto">

            <div
                class="mt-20 bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-32 hover:scale-110 duration-300 mx-auto">
            </div>

        </div>
        <div class="flex justify-center items-center mx-auto">

            <div
                class="mt-20 bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-32 hover:scale-110 duration-300">
            </div>
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

    <div class="flex justify-center mx-auto mt-32 md:mt-44 md:mr-[81rem]">
        <h1 class="font-poppins font-medium text-2xl ml-16 mr-auto md:mx-0 md:ml-[22rem] xl:ml-[22rem] 2xl:mr-[18rem]">
            Monumentos
        </h1>
    </div>
    <hr
        class="2xl:ml-28 mt-1 md:mr-[12rem] mx-auto w-10/12 md:w-auto xl:w-auto xl:ml-12 md:ml-12 h-0.5 border-t-0 bg-black" />

    <div class="flex flex-col md:grid md:grid-cols-2 gap-2 xl:flex xl:flex-row">
        <div class="flex justify-center items-center mx-auto">

            <div
                class="mt-20 bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-32 hover:scale-110 duration-300 mx-auto">
            </div>

        </div>
        <div class="flex justify-center items-center mx-auto">

            <div
                class="mt-20 bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-32 hover:scale-110 duration-300">
            </div>
        </div>
        <div class="flex justify-center items-center mx-auto">

            <div
                class="mt-20 bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-32 hover:scale-110 duration-300 mx-auto">
            </div>

        </div>
        <div class="flex justify-center items-center mx-auto">

            <div
                class="mt-20 bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-32 hover:scale-110 duration-300">
            </div>
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