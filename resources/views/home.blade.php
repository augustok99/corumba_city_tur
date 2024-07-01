<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Teste</title>
</head>

<body class="bg-blue_light">
    <!-- <script src="https://unpkg.com/tailwindcss-jit-cdn"></script> -->

    <header class="flex justify-center">
        @include('layouts.cabecalho')
    </header>

    <main>
        <div class=" mt-28 flex justify-center">
            <h1 class="text-center font-montserrat_alter text-[2.1rem] font-bold"> Venha Descobrir mais sobre a<br />
                nossa
                cidade!
            </h1>
            <img class="ml-5 h-16 w-auto" src="{{ asset('images/rosa.png') }}" alt="rosa">
        </div>

        <!-- cards -->
        <div class="flex justify-between ml-12">
            <!-- card 1 -->
            <div class="mt-14 flex ml-40 w-[65rem] h-[65rem] z-0">
                <div
                    class="absolute flex mt-14 flex-col text-gray-700 bg-rose_medium shadow-xl bg-clip-border rounded-xl w-[25rem] h-[24rem]">
                    <div id="default-carousel" data-carousel="slide"
                        class="absolute ml-14 mt-12 overflow-hidden text-gray-700 bg-rose_medium shadow-xl bg-clip-border rounded-xl h-[24rem] w-[24rem]">
                        <!-- <img class="w-[24rem] h-full mt-1 absolute" src="{{ asset('images/modelo.png') }}" -->
                        <!-- alt="mulher apontando para o titulo" /> -->

                        <!-- caroucel -->

                        <!-- Carousel wrapper -->
                        <div class="relative h-full overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="carousel-item absolute w-full h-full transition-opacity duration-700 ease-in-out"
                                data-carousel-item>
                                <img src="https://blog.ebaconline.com.br/blog/wp-content/uploads/2023/11/image6-1.png"
                                    class="absolute block w-full h-full" alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="carousel-item absolute w-full h-full transition-opacity duration-700 ease-in-out"
                                data-carousel-item>
                                <img src="https://services.meteored.com/img/article/inteligencia-artificial-aprende-a-reconstruir-imagens-vistas-por-pessoas-ciencia-fotos-1679175318563_1280.jpg"
                                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="carousel-item absolute w-full h-full transition-opacity duration-700 ease-in-out"
                                data-carousel-item>
                                <img src="https://img.freepik.com/fotos-gratis/respingo-colorido-abstrato-3d-background-generativo-ai-background_60438-2509.jpg"
                                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="carousel-item absolute w-full h-full transition-opacity duration-700 ease-in-out"
                                data-carousel-item>
                                <img src="https://png.pngtree.com/thumb_back/fw800/background/20230611/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-image_2916211.jpg"
                                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="carousel-item absolute w-full h-full transition-opacity duration-700 ease-in-out"
                                data-carousel-item>
                                <img src="https://pareto.io/wp-content/uploads/2024/05/gerador-imagens-ia-header-tess-astronaut-1.jpg"
                                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>

                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center hover:bg-black duration-300 w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center  hover:bg-black duration-300 w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- card 2 -->
            <div class="mt-14 flex ml-40 w-[65rem] h-[65rem] rounded-full">
                <div
                    class="absolute flex mt-14 flex-col text-gray-700 bg-rose_medium shadow-xl bg-clip-border rounded-full w-[28rem] h-[29rem]">
                    <div
                        class="absolute -ml-16 -mt-3 overflow-hidden text-gray-700 bg-rose_medium shadow-xl bg-clip-border rounded-full h-[30rem] w-[30rem]">
                        <img class="w-[24rem] h-full mt-1 ml-8 absolute" src="{{ asset('images/modelo.png') }}"
                            alt="mulher apontando para o titulo" />
                    </div>
                </div>
            </div>
        </div>
    </main>

    </div>


</body>


</html>