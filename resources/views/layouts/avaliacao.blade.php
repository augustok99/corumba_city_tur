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
        <h1 class="text-center font-montserrat text-2xl md:text-[1.8rem] font-bold">Avaliação</h1>
    </div>

    <!-- Avaliação -->
    <div id="ratingsContainer" class="flex flex-col justify-center">

        @foreach($ratings as $rating)
        <div id="rating-item" data-rating-id="{{ $rating->id }}"
            class="flex flex-col mt-16 shadow-2xl break-after-all xl:w-[55rem] w-[22rem] sm:w-[23rem] h-full md:w-[46rem] bg-white rounded-2xl mx-auto">
            <div class="flex justify-start items-center">
                <div class="mt-7 ml-7 w-[2.5rem] h-[2.5rem] rounded-full overflow-hidden">
                    <img src="{{ $rating && $rating->profile_image ? asset('profiles/' . $rating->profile_image) : asset('images/default_profile.jpg') }}"
                        alt="Profile Image">
                </div>
                <h3 class="font-poppins mt-6 ml-2">{{ $rating->username }}</h3>
            </div>
            <div class="mt-5 sm:ml-12 ml-6 xl:w-[49rem] md:w-[40rem] h-full mb-6 ">
                <h3 class="font-poppins px-3 text-justify w-[19rem] break-words md:text-justify md:w-full">
                    {{ $rating->content }}
                </h3>
            </div>
            <div class="flex flex-col mb-16 ml-12">
                @include('partials.like_button')
            </div>
        </div>
        @endforeach

    </div>

    <div class="flex justify-center">
        <button id="loadMoreButtonRating" type="button"
            class="text-base text-center hover:scale-105 mt-8 text-black font-poppins px-3 py-2 bg-rose_medium shadow-lg rounded-xl w-[7rem] h-[3rem] md:w-[8rem] md:h-[3.2rem] font-medium duration-300">Ver
            Mais</button>
    </div>

    <div class="flex justify-center items-center mt-28">
        <h1 class="text-2xl md:pl-5 font-semibold font-poppins mx-auto">Comentar Avaliacao</h1>
    </div>

    <div class="flex justify-center items-center mt-6 mb-6">
        <div class="bg-rose_medium md:w-[43rem] md:h-[12rem] rounded-xl shadow-2xl w-[18rem] h-[22rem]">
            <form action="{{ route('ratings.store') }}" method="POST">
                @csrf
                <textarea name="content" id="content"
                    class="text-base mb-7 md:mb-0 font-poppins placeholder-gray-500 focus:ring-0 w-full h-[12rem] pl-5 pt-4 pr-4 border-none placeholder:font-medium placeholder:font-poppins bg-transparent rounded-xl resize-none outline-none focus:outline-none"
                    placeholder="Digite aqui..."></textarea>
                <div class="flex justify-center mt-44 md:mt-12">
                    <button type="submit"
                        class="text-base text-center hover:scale-105 text-black font-poppins px-3 py-2 bg-rose_medium shadow-lg rounded-xl w-[7rem] h-[3rem] md:w-[8rem] md:h-[3.2rem] font-medium mb-32 duration-300">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>