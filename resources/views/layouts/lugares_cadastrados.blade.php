<!DOCTYPE html>
<html lang="en">

<head>
    @include("config")
</head>

<header class="flex justify-center w-full">
    @include('layouts.cabecalho')
</header>

< class="bg-gradient-to-r from-gray-200 via-rose_light to-gray-50 from-10% via-10% to-80%">
    <div class="mt-32 flex justify-center items-center">
        <h1 class="text-center font-montserrat text-2xl md:text-[1.8rem] font-bold">Adicione seus lugares</h1>
    </div>

    <div class="mt-10 flex justify-center">
        <div
            class="bg-white ring-2 ring-rose_strong w-[22rem] h-[39rem] md:w-[35rem] flex justify-center md:h-[37rem] rounded-lg shadow-lg">
            <form action="{{ route('places.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col justify-between pt-4 space-y-12 mt-4">
                    <div class="flex mx-auto items-center justify-start ml-12">
                        <span
                            class="text-center font-montserrat text-base md:text-base font-semibold mx-auto">*Titulo</span>
                        <input
                            class="text-base border ring-1 focus:ring-2 ring-rose_strong border-gray-300 rounded-lg ml-6 pr-2 w-[12rem] h-[2rem] md:w-[15rem] md:h-[2rem] pl-2 py-5 font-poppins placeholder-gray-500 border-none outline-none placeholder:font-medium placeholder:font-poppins placeholder:pl-2"
                            name="title" placeholder="Digite aqui..." required>
                    </div>

                    <div class="flex justify-start mx-auto items-center ml-[4.2rem]">

                        <span
                            class="text-center font-montserrat text-base md:text-base font-semibold mx-auto">Link</span>
                        <input
                            class="text-base border ring-1 focus:ring-2 ring-rose_strong border-gray-300 rounded-lg ml-6 pr-2 w-[12rem] h-[2rem] md:w-[15rem] md:h-[2rem] pl-2 py-5 font-poppins placeholder-gray-500 border-none outline-none placeholder:font-medium placeholder:font-poppins placeholder:pl-2"
                            name="links" placeholder="Cole aqui a url...">
                    </div>
                    <div class="flex items-center justify-start ml-12">
                        <span class="text-center font-montserrat text-base md:text-base font-semibold">Tipo de
                            local</span>
                        <div id="dropdown" class="w-40">
                            <select
                                class="text-black font-poppins inline-flex h-full cursor-pointer ml-6 bg-rose_medium ring-0 outline-none border-none font-medium rounded-lg text-sm px-1 py-2.5 text-center items-center"
                                name="type" aria-labelledby="dropdownDefaultButton">
                                <option value="Hotel">Hotel</option>
                                <option value="Restaurante">Restaurante</option>
                                <option value="Monumento">Monumento</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex items-center justify-start ml-6">
                        <span class="text-center font-montserrat text-base pr-3 md:text-base font-semibold">Adicione
                            uma
                            imagem
                        </span>
                        <input id="imageInput" class="custom-file-input pr-36 sm:pr-36" type="file" name="image"
                            accept="image/*">
                    </div>
                </div>

                <div class="text-black text-sm font-poppins h-[1rem] pl-2 mt-2">
                    <ul id="taskList" class="hidden">
                        <li class="flex justify-center items-center font-poppins text-sm">
                            <svg class="w-4 h-4 me-2 text-green-700 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Imagem carregada com sucesso!
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col mt-5 items-center justify-center">
                    <span class="text-left font-montserrat md:text-base font-semibold mb-3">Descrição do
                        Local</span>
                    <textarea
                        class="pl-3 pt-3 text-base border resize-none ring-1 focus:ring-2 mb-12 ring-rose_strong border-gray-300 rounded-lg w-[15rem] h-[10rem] md:w-[25rem] md:h-[7rem] font-poppins placeholder-gray-500 border-none outline-none"
                        name="description"></textarea>
                </div>


                <div class="flex justify-center mt-4 mx-auto">
                    <button type="submit"
                        class="text-base text-center hover:scale-105 text-black font-poppins px-3 py-2 bg-red-200font-poppins mt-4 mx-auto bg-rose_medium shadow-lg rounded-xl w-[7rem] h-[3rem] md:w-[8rem] md:h-[3rem] font-medium mb-32 duration-300">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

    @if ($errors->any())
    <div class="flex justify-center mt-28">
        <div class="bg-red-100 items-center flex justify-center w-[22rem] border flex-col border-red-400 text-red-700 px-4 py-3 rounded relative"
            role="alert">
            <strong class="font-bold">Erro!</strong>
            <span class="block sm:inline">Por favor, corrija os seguintes erros:</span>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    </div>
    @endif


    <!-- Lugares Cadastrados -->
    @if ($places->count() > 0)
    <!-- Seção de Cadastros -->
    <div class="item hotel flex flex-col justify-center items-center mx-auto mt-32 md:mt-44">
        <h1 class="font-montserrat_alter flex font-semibold text-2xl">
            Locais já cadastrados
        </h1>
    </div>
    <hr
        class="item hotel 2xl:ml-28 mt-1 md:mr-[12rem] mx-auto md:w-11/12 w-10/12 xl:w-auto xl:ml-12 md:ml-12 h-0.5 border-t-0 bg-black" />

    <div
        class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid lg:grid-cols-2 2xl:grid-cols-4 lg:px-28 justify-center mx-auto pl-20 sm:pl-44 md:pl-20 mt-10">
        @foreach ($places as $place)
        <div class="relative shadow-2xl rounded-2xl w-[18rem] h-[22rem] mb-16 hover:scale-110 duration-300">
            <a href="{{ route('places.show', $place->id) }}" id="place-item"
                class=" item {{ strtolower($place->type) }}">
                <img class="w-full h-full object-cover max-w-[18rem] max-h-[22rem] rounded-lg absolute left-0 z-0"
                    src="{{ asset('places_path/' . ($place->image_path ?? 'img_break.png')) }}" alt="Imagem do local">

                <div class="absolute w-full inset-0 items-start flex flex-col justify-between p-5 rounded-2xl">
                    <div class="flex justify-start rounded-xl mr-12 px-2 bg-white items-center mt-2">
                        <img class="h-8 w-8 rounded-full"
                            src="{{auth()->check() && auth()->user()->profile_image ? asset('profiles/' . auth()->user()->profile_image) : asset('images/default_profile.png') }}"
                            alt="Foto de perfil do usuário">
                        <span class="block font-poppins py-2 text-base text-black font-medium ml-2" role="menuitem"
                            tabindex="-1"
                            id="user-menu-item-0">{{ auth()->check() ? auth()->user()->username : 'Seu Perfil' }}</span>
                    </div>

                    <div class="flex flex-col mx-auto space-y-1 bg-white rounded-lg justify-center mt-4">
                        <span class="flex font-poppins justify-center px-4 text-base text-black font-medium"
                            role="menuitem" tabindex="-1" id="user-menu-item-0">{{ $place->type }}</span>
                        <span class="block font-poppins px-4 text-base text-black font-medium" role="menuitem"
                            tabindex="-1" id="user-menu-item-0">{{$place->title }}</span>
                    </div>
                </div>

                <div class="absolute w-10 mt-8 ml-[14.4rem]">
                    <a class="" href="{{ route('places.edit', $place->id) }}">
                        <img class="" src="{{asset('images/pencil.png')}}" alt="icone de alteracao">
                    </a>
                    <form action="{{ route('places.destroy', $place->id) }}" method="POST" class="mt-4">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja deletar este lugar?')">
                            <img src="{{asset('images/delete.png')}}" alt="icone de deletar">
                        </button>
                    </form>
                </div>
            </a>
        </div>


        @endforeach
    </div>
    @endif
    </body>

</html>