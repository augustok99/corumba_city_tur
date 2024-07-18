<div class=" mt-28 flex flex-col sm:flex-row justify-center items-center">
    <img class="ml-5 h-16 w-auto sm:hidden flex" src="{{ asset('images/rosa.png') }}" alt="rosa">
    <h1 class="mt-2 text-center font-montserrat_alter text-2xl sm:text-[1.8rem] font-bold"> Venha Descobrir mais sobre
        a<br />
        nossa
        cidade!
    </h1>
    <img class="ml-5 h-16 w-auto sm:flex hidden" src="{{ asset('images/rosa.png') }}" alt="rosa">
</div>

<!-- cards -->
<div class="flex justify-center sm:justify-between mr-16">
    <!-- card 1 -->
    <div
        class="2xl:mt-14 md:mt-2 w-[20rem] h-[20rem] flex sm:justify-normal mx-auto sm:mr-0 sm:ml-40 sm:w-[65rem] sm:h-[34rem] z-0">
        <div
            class="w-[20rem] h-[20rem] absolute flex mt-14 flex-col text-gray-700 bg-red-300 shadow-2xl bg-clip-content rounded-xl sm:w-[23rem] sm:h-[22rem] xl:w-[25rem] xl:h-[24rem] ">
            <div id="default-carousel" data-carousel="slide"
                class="w-[20rem] h-[20rem] absolute ml-14 mt-12 overflow-hidden text-gray-700 bg-rose_medium shadow-2xl bg-clip-border rounded-xl sm:h-[22rem] sm:w-[22rem] xl:h-[24rem] xl:w-[24rem]">
                <!-- <img class="w-[24rem] h-full mt-1 absolute" src="{{ asset('images/modelo.png') }}" -->
                <!-- alt="mulher apontando para o titulo" /> -->

                <!-- caroucel -->

                <!-- Carousel wrapper -->
                <div id="carousel-example"
                    class="w-[20rem] h-[20rem] relative sm:w-full sm:h-full overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div id="carousel-item-1"
                        class="w-[20rem] h-[20rem] carousel-item absolute sm:w-full sm:h-full transition-opacity duration-500 ease-in-out"
                        data-carousel-item>
                        <img src="{{asset('images/local-1.jpg')}}" class="absolute block w-full h-full" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div id="carousel-item-2"
                        class="w-[20rem] h-[20rem] carousel-item absolute sm:w-full sm:h-full transition-opacity duration-500 ease-in-out"
                        data-carousel-item>
                        <img src="{{asset('images/local-2.jpeg')}}"
                            class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div id="carousel-item-3"
                        class="w-[20rem] h-[20rem] carousel-item absolute sm:w-full sm:h-full transition-opacity duration-500 ease-in-out"
                        data-carousel-item>
                        <img src="{{asset('images/local-3.jpg')}}"
                            class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div id="carousel-item-4"
                        class="w-[20rem] h-[20rem] carousel-item absolute sm:w-full sm:h-full transition-opacity duration-500 ease-in-out"
                        data-carousel-item>
                        <img src="{{asset('images/local-4.jpg')}}"
                            class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div id="carousel-item-5"
                        class="w-[20rem] h-[20rem] carousel-item absolute sm:w-full sm:h-full transition-opacity duration-500 ease-in-out"
                        data-carousel-item>
                        <img src="{{asset('images/local-5.jpg')}}"
                            class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div id="carousel-container"
                    class="z-30 absolute flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button id="carousel-indicator-1" type="button" class="z-30 w-3 h-3 rounded-full"
                        aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button id="carousel-indicator-2" type="button" class="z-30 w-3 h-3 rounded-full"
                        aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button id="carousel-indicator-3" type="button" class="z-30 w-3 h-3 rounded-full"
                        aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button id="carousel-indicator-4" type="button" class="z-30 w-3 h-3 rounded-full"
                        aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button id="carousel-indicator-5" type="button" class="z-30 w-3 h-3 rounded-full"
                        aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
            </div>
        </div>
    </div>

    <!-- card 2 -->
    <div class="hidden 2xl:mt-14 md:mt-2 lg:flex sm:ml-40 sm:w-[65rem] sm:h-[34rem] rounded-full">
        <div class="flex xl:justify-between lg:justify-center items-center mt-14">
            <div
                class="absolute ml-8 lg:mb-16 lg:ml-96 xl:ml-0 overflow-hidden bg-red-300 shadow-xl bg-clip-border rounded-full h-[29rem] w-[28rem] lg:h-[28rem] lg:w-[28rem] xl:h-[30rem] xl:w-[30rem]">
                <div class="flex justify-center">
                    <img class="xl:w-[25rem] lg:w-[23rem] h-full mx-auto px-auto absolute"
                        src="{{ asset('images/modelo.png') }}" alt="mulher jovem apontando para o titulo" />
                </div>

            </div>
        </div>
    </div>
</div>