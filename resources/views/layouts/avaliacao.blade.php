<!DOCTYPE html>
<html lang="en">

<head>
    @include("config")

</head>

<header class="flex justify-center w-full">
    @include('layouts.cabecalho')
</header>

<body class="bg-gradient-to-r from-blue_light to-rose_light from-20% to-80%">
    <div class=" mt-28 flex justify-center items-center">
        <h1 class="text-center font-montserrat text-2xl md:text-[1.8rem] font-bold">Avaliação</h1>
    </div>

    <!-- Avaliação -->
    <div class="flex justify-center">

        <div
            class="flex flex-col mt-16 shadow-2xl xl:w-[55rem] w-[23rem] h-[26rem] md:w-[46rem] bg-white rounded-2xl mx-auto">
            <div class="flex justify-start items-center">

                <div class="mt-6 ml-4 w-[2.5rem] h-[2.5rem] bg-gray-400 rounded-full">
                    <!-- imagem -->
                </div>

                <h3 class="font-poppins mt-6 ml-2"> Username</h3>
            </div>

            <div class="mt-5 ml-16 xl:w-[49rem] md:w-[40rem] h-full mb-6 ">
                <h3 class="font-poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta expedita, hic
                    tempore totam eveniet
                    ex alias doloribus vel veritatis debitis reiciendis culpa molestias et voluptates voluptas
                    consequuntur unde. Autem perferendis suscipit facilis? Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Fuga unde exercitationem pariatur?</h3>
            </div>

            <hr class="hidden md:flex mt-1 mb-3 ml-12 w-11/12 h-0.5 border-t-0 bg-gray-600/50" />

            <div class="mb-8 ml-12">
                <img class="w-9 hover:scale-110" src="{{asset('images/heart.png')}}" alt="">
            </div>
        </div>
    </div>

    <!-- Botao -->

    <div class="flex justify-center mt-7">
        <form action="">
            <button type="submit"
                class="font-poppins font-medium mt-4 ml-5 bg-rose_medium shadow-2xl rounded-xl w-[8rem] h-[4rem] mb-32 hover:scale-110 duration-300">Ver
                Mais</button>
        </form>
    </div>

    <div class="flex justify-center items-center">
        <h1 class="text-2xl md:pl-5 font-extrabold font-poppins mx-auto">Comentar Avaliacao</h1>
    </div>

    <div class="flex justify-center mt-6 mb-6">
        <div class="mr-2 justify-center hidden md:flex">
            <h3 class="ml-2 font-medium font-poppins">Mensagem:</h3>
        </div>

        <div class="bg-rose_medium md:w-[43rem] md:h-[12rem] rounded-xl shadow-2xl w-[18rem] h-[22rem]">
            <form action="" method="post">

                <textarea name="" id=""
                    class="text-base font-poppins placeholder-gray-500 focus:ring-0 w-full h-[12rem] pl-5 pt-4 pr-4 border-none placeholder:font-medium placeholder:font-poppins bg-transparent rounded-xl resize-none outline-none focus:outline-none"
                    placeholder="Digite aqui..."></textarea>

                <!-- Botao -->

                <div class="flex justify-center mt-44 md:mt-12">
                    <form action="">
                        <button type="submit"
                            class="font-poppins font-medium mt-4 ml-5 bg-rose_medium shadow-2xl rounded-xl w-[8rem] h-[4rem] mb-32 hover:scale-110 duration-300">Enviar</button>
                    </form>
                </div>
            </form>
        </div>


</body>