<!DOCTYPE html>
<html lang="en">

<head>
    @include("config")
</head>

<header class="flex justify-center w-full">
    @include('layouts.cabecalho')
</header>

<body class="bg-gradient-to-r from-blue_light to-rose_light from-20% to-80%">
    <div class="mt-32 flex justify-center items-center">
        <h1 class="text-center font-montserrat text-2xl md:text-[1.8rem] font-bold">Adicione seus lugares</h1>
    </div>

    <div class="mt-12 flex justify-center">
        <div class="mt-16 bg-white w-[22rem] h-[18rem] md:w-[28rem] md:h-[18rem] rounded-lg shadow-lg">
            <form action="{{ route('places.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col justify-between pt-4 space-y-12 mt-4">
                    <div class="flex mx-auto items-center justify-start ml-12">
                        <h3 class="text-center font-montserrat text-base md:text-base font-semibold mx-auto">Titulo</h3>
                        <input
                            class="bg-rose_medium text-base border-gray-600 rounded-lg ml-6 file:bg-rose_medium pr-2 w-[12rem] h-[2rem] md:w-[15rem] md:h-[2rem] pl-2 font-poppins placeholder-gray-500 ring-0 border-none outline-none placeholder:font-medium placeholder:font-poppins placeholder:pl-2"
                            name="title" placeholder="Digite aqui..." required>
                    </div>

                    <div class="flex items-center justify-start ml-12">
                        <h3 class="text-center font-montserrat text-base md:text-base font-semibold">Tipo de local</h3>
                        <div id="dropdown" class="w-40">
                            <select
                                class="text-black font-poppins ml-6 focus:ring-0 bg-rose_medium hover:bg-rose_light ring-0 outline-none border-none font-medium rounded-lg text-sm px-2 py-2.5 text-center items-center"
                                name="type" aria-labelledby="dropdownDefaultButton">
                                <option value="Hotel">Hotel</option>
                                <option value="Restaurante">Restaurante</option>
                                <option value="Monumento">Monumento</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex items-center justify-start ml-6">
                        <h3 class="text-center font-montserrat text-base md:text-base font-semibold">Adicione uma imagem
                        </h3>
                        <input id="imageInput" class="custom-file-input" type="file" name="image" accept="image/*">
                    </div>
                </div>

                <div class="text-black text-sm font-poppins h-[1rem] pl-2 mt-12">
                    <ul id="taskList" class="hidden">
                        <li class="flex items-center font-poppins text-sm">
                            <svg class="w-4 h-4 me-2 text-green-700 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Imagem carregada com sucesso!
                        </li>
                    </ul>
                </div>

                <div class="flex justify-center mt-4 mx-auto">
                    <button type="submit"
                        class="font-poppins font-medium mt-4 mx-auto bg-rose_medium shadow-2xl rounded-xl w-[7rem] h-[3rem] md:w-[8rem] md:h-[4rem] mb-32 hover:scale-110 duration-300">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Lugares Cadastrados -->
    @if ($places->count() > 0)
    <!-- Seção de Cadastros -->
    <div class="flex justify-center mx-auto mt-36 md:mt-44 md:mr-[81rem]">
        <h1 class="font-poppins font-medium text-2xl ml-16 mr-auto md:mx-0 md:ml-[12rem] xl:ml-[22rem] 2xl:mr-[22rem]">
            Cadastros</h1>
    </div>
    <hr
        class="2xl:ml-28 mt-1 md:mr-[12rem] mx-auto w-10/12 md:w-auto xl:w-auto xl:ml-12 md:ml-12 h-0.5 border-t-0 bg-black" />

    <div id="placesContainer" class="flex flex-col md:grid md:grid-cols-2 gap-2 xl:flex xl:flex-row">
        @foreach ($places as $index => $place)
        <div class="place-item flex justify-center items-center mx-auto {{ $index >= 4 ? 'hidden' : '' }}">
            <div
                class="relative mt-10 md:mt-20 bg-rose_medium shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-16 md:mb-32 hover:scale-110 duration-300 mx-auto">
                @if ($place->image_path)
                <img class="w-full h-full max-w-[18rem] max-h-[22rem] rounded-2xl absolute top-0 left-0 z-0"
                    src="{{ asset('places_path/' . $place->image_path) }}" alt="Imagem do local">
                @endif
                <div class="absolute inset-0 flex flex-col justify-between p-4 rounded-2xl z-10">
                    <div class="flex justify-start items-center pl-4 pt-2">
                        <img class="h-8 w-8 rounded-full"
                            src="{{ auth()->check() && auth()->user()->profile_image ? asset('profiles/' . auth()->user()->profile_image) : asset('images/default_profile.jpg') }}"
                            alt="Foto de perfil do usuário">
                        <span class="block font-poppins py-2 text-base text-white font-medium ml-4" role="menuitem"
                            tabindex="-1"
                            id="user-menu-item-0">{{ auth()->check() ? auth()->user()->username : 'Seu Perfil' }}</span>
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
    @endif

    <script>

    </script>
</body>

</html>