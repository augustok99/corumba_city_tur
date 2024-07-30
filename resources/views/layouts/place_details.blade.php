<!DOCTYPE html>
<html lang="en">

<head>
    @include("config")
</head>

<header class="flex justify-center w-full">
    @include('layouts.cabecalho')
</header>

<body class="bg-gradient-to-r from-gray-200 via-rose_light to-gray-50 from-10% via-10% to-80%">
    <div class="mt-28 flex justify-center items-center">
        <h1 class="text-center font-poppins text-2xl md:text-[1.8rem] font-bold">{{ $place->title }}</h1>
    </div>

    <div class="flex justify-center mt-10">
        <div class="w-full h-full max-w-4xl bg-transparent px-7 rounded-lg">
            <!-- <a class="absolute flex mt-3 ml-[53rem] justify-end" href="{{ route('places.edit', $place->id) }}">
                <img class="w-10 animate-bounce" src="{{asset('images/pencil.png')}}" alt="caneta">
            </a> -->
            <img class="w-full h-full mx-auto rounded-2xl object-cover"
                src="{{ asset('places_path/' . ($place->image_path ?? 'img_break.png')) }}" alt="Imagem do local">
        </div>
    </div>

    <div class="flex flex-col items-center justify-center">
        <div class="flex justify-center">
            <span class="text-lg font-semibold mt-2 font-poppins mr-2">Tipo de local:</span>
            <p class="text-lg mt-2 font-poppins">{{ $place->type }}</p>
        </div>

        @if($place->links)
            <ul class="mt-2 flex justify-center items-center flex-col">
                <span class="text-lg font-semibold font-poppins">Para ver mais informações acesse:</span>
                <a href="{{ $place->links}}" target="_blank"
                    class="text-lg px-5 text-indigo-600 font-poppins mt-1">{{$place->links ?? 'Link não disponível' }}</a>
            </ul>
        @endif

        <div class="flex flex-col justify-center items-center">
            <span class="text-lg font-semibold mt-2 font-poppins">Descrição do Local:</span>
            <p class="text-lg px-5 font-poppins mt-2">{{ $place->description ?? 'Descrição não disponível' }}</p>
        </div>
    </div>

    <div class="mb-20 space-x-16 mt-3 flex justify-center">
        @if($place->id > $minId)
            <a href="{{ route('places.show', $place->id - 1) }}"
                class="text-base mt-6 text-center hover:scale-105 text-black shadow-lg font-poppins font-medium rounded-lg px-3 py-2 w-[7rem] bg-rose_medium">Voltar</a>
        @endif
        @if($place->id < $maxId) <a href="{{ route('places.show', $place->id + 1) }}"
            class="text-base mt-6 text-center hover:scale-105 text-black shadow-lg font-poppins font-medium rounded-lg px-3 py-2 w-[7rem] bg-rose_medium">
            Próximo</a>
        @endif
</body>

</html>