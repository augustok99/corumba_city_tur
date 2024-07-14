<!DOCTYPE html>
<html lang="en">

<head>
    @include("config")

</head>

<header class="flex justify-center w-full">
    @include('layouts.cabecalho')
</header>

<body class="bg-gradient-to-r from-blue_light to-rose_light from-20% to-80%">
    <div class=" mt-32 flex justify-center items-center">
        <h1 class="text-center font-montserrat text-2xl md:text-[1.8rem] font-bold">Adicione seus lugares</h1>
    </div>

    <div class="mt-12 flex justify-center">

        <div class="mt-16 bg-white w-[22rem] h-[18rem] md:w-[28rem] md:h-[18rem] rounded-lg shadow-lg">

            <form action="
        ">
                <div class="flex flex-col justify-between pt-4 space-y-12 mt-4">

                    <div class="flex mx-auto items-center justify-start ml-12">
                        <h3 class="text-center font-montserrat text-base md:text-base font-semibold mx-auto">Titulo</h3>

                        <input
                            class="bg-rose_medium text-base border-gray-600 rounded-lg ml-6 file:bg-rose_medium pr-2 w-[12rem] h-[2rem] md:w-[15rem] md:h-[2rem] pl-2 font-poppins placeholder-gray-500 ring-0 border-none outline-none placeholder:font-medium placeholder:font-poppins placeholder:pl-2"
                            placeholder="Digite aqui...">
                        </input>

                    </div>

                    <div class="flex items-center justify-start ml-12">
                        <h3 class="text-center font-montserrat text-base md:text-base font-semibold">Tipo de
                            local
                        </h3>

                        <!-- Dropdown menu -->
                        <div id="dropdown" class="w-40">
                            <select
                                class="text-black font-poppins ml-6 focus:ring-0 bg-rose_medium hover:bg-rose_light ring-0 outline-none border-none font-medium rounded-lg text-sm px-2 py-2.5 text-center items-center"
                                aria-labelledby="dropdownDefaultButton">
                                <option value="Hotel">Hotel</option>
                                <option value="Restaurante">Restaurante</option>
                                <option value="Monumentos">Monumentos</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex items-center justify-start ml-6">
                        <h3 class="text-center font-montserrat text-base md:text-base font-semibold">Adicione uma imagem
                        </h3>

                        <input id="imageInput" class="custom-file-input" type="file" accept="image/*">
                        <!-- <button id="customButton"
                            class="ml-4 py-3 md:px-5 mr-7 text-center w-[8rem] h-[3rem] font-poppins font-medium text-sm bg-rose_medium hover:bg-rose_light text-black rounded-lg cursor-pointer">
                            Adicionar
                        </button> -->
                    </div>
                </div>

                <div class="text-black text-sm font-poppins h-[1rem] pl-2 mt-12">
                    <ul id="taskList" class="hidden">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 me-2 text-green-700 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Imagem carregada com sucesso!
                        </li>
                    </ul>
                </div>


                <!-- Botao -->

                <div class="flex justify-center mt-4 mx-auto">

                    <button type="submit"
                        class="font-poppins font-medium mt-4 mx-auto bg-rose_medium shadow-2xl rounded-xl w-[7rem] h-[3rem] md:w-[8rem] md:h-[4rem] mb-32 hover:scale-110 duration-300">Cadastrar</button>

                </div>

            </form>


        </div>

    </div>

    <!-- Lugares Cadastrados -->

    <div class="flex justify-center mx-auto mt-36 md:mt-44 md:mr-[81rem]">
        <h1 class="font-poppins font-medium text-2xl ml-16 mr-auto md:mx-0 md:ml-[12rem] xl:ml-[22rem] 2xl:mr-[22rem]">
            Cadastros
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