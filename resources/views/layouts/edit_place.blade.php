<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @include("config")
</head>

<header class="flex justify-center w-full">
    @include('layouts.cabecalho')
</header>

<body class="bg-gradient-to-r from-gray-200 via-rose_light to-gray-50 from-10% via-10% to-80%">
    <div class="mt-32 flex justify-center items-center">
        <h1 class="text-center font-montserrat text-2xl md:text-[1.8rem] font-bold">Editar Lugar</h1>
    </div>

    <div class="mt-12 flex justify-center">
        <div
            class="mt-16 bg-white w-[22rem] h-[18rem] md:w-[35rem] flex justify-center md:h-[31rem] rounded-lg shadow-lg">

            <form action="{{ route('places.update', $place->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-col justify-between pt-4 space-y-12 mt-4">
                    <div class="flex mx-auto items-center justify-start ml-12">
                        <h3 class="text-center font-montserrat text-base md:text-base font-semibold mx-auto">*Titulo
                        </h3>
                        <input
                            class="text-base border ring-2 ring-rose_medium border-gray-300 rounded-lg ml-6 pr-2 w-[12rem] h-[2rem] md:w-[15rem] md:h-[2rem] pl-2 py-5 font-poppins placeholder-gray-500 border-none outline-none placeholder:font-medium placeholder:font-poppins placeholder:pl-2"
                            name="title" placeholder="Digite aqui..." value="{{ $place->title }}" required>
                    </div>

                    <div class="flex items-center justify-start ml-12">
                        <h3 class="text-center font-montserrat text-base md:text-base font-semibold">*Tipo de local</h3>
                        <div id="dropdown" class="w-40">
                            <select
                                class="text-black font-poppins h-full cursor-pointer hover:bg-rose_light ml-6 focus:ring-0 bg-rose_medium ring-0 outline-none border-none font-medium rounded-lg text-sm px-1 py-2.5 text-center items-center"
                                name="type" aria-labelledby="dropdownDefaultButton">
                                <option value="Hotel" {{ $place->type == 'Hotel' ? 'selected' : '' }}>Hotel</option>
                                <option value="Restaurante" {{ $place->type == 'Restaurante' ? 'selected' : '' }}>
                                    Restaurante</option>
                                <option value="Monumento" {{ $place->type == 'Monumento' ? 'selected' : '' }}>Monumento
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="flex items-center justify-start ml-6">
                        <h3 class="text-center font-montserrat text-base pr-3 md:text-base font-semibold">Adicione uma
                            imagem
                        </h3>
                        <input id="imageInput" class="custom-file-input" type="file" name="image" accept="image/*">
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
                        class="pl-3 pt-2 text-sm border resize-none ring-2 mb-12 ring-rose_medium border-gray-300 rounded-lg w-[12rem] h-[2rem] md:w-[25rem] md:h-[7rem] font-poppins placeholder-gray-500 border-none outline-none"
                        name="description"></textarea>
                </div>

                <div class="flex justify-center mt-4 mx-auto">
                    <button type="submit"
                        class="text-base text-center hover:scale-105 text-black font-poppins px-3 py-2 bg-red-200font-poppins mt-4 mx-auto bg-rose_medium shadow-lg rounded-xl w-[7rem] h-[3rem] md:w-[8rem] md:h-[3rem] font-medium mb-32 duration-300">Salvar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>