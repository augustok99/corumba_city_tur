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
            class="w-[20rem] h-[20rem] absolute flex mt-14 flex-col text-gray-700 bg-red-200 shadow-2xl bg-clip-content rounded-xl sm:w-[23rem] sm:h-[22rem] xl:w-[25rem] xl:h-[24rem] ">
            <div id="default-carousel" data-carousel="slide"
                class="w-[20rem] h-[20rem] absolute ml-14 mt-12 overflow-hidden text-gray-700 bg-rose_medium shadow-2xl bg-clip-border rounded-xl sm:h-[22rem] sm:w-[22rem] xl:h-[24rem] xl:w-[24rem]">

                <!-- caroucel -->

                <!-- Carousel wrapper -->
                <div id="carousel-example"
                    class="w-[20rem] h-[20rem] relative sm:w-full sm:h-full overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div id="carousel-item-1"
                        class="w-[20rem] h-[20rem] carousel-item absolute sm:w-full sm:h-full transition-opacity duration-500 ease-in-out"
                        data-carousel-item>
                        <img src="{{asset('images/local-1.jpeg')}}" class="absolute object-cover block w-full h-full"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div id="carousel-item-2"
                        class="w-[20rem] h-[20rem] carousel-item absolute sm:w-full sm:h-full transition-opacity duration-500 ease-in-out"
                        data-carousel-item>
                        <img src="{{asset('images/local-2.jpg')}}"
                            class="absolute object-cover block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div id="carousel-item-3"
                        class="w-[20rem] h-[20rem] carousel-item absolute sm:w-full sm:h-full transition-opacity duration-500 ease-in-out"
                        data-carousel-item>
                        <img src="{{asset('images/local-3.jpg')}}"
                            class="absolute object-cover block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div id="carousel-item-4"
                        class="w-[20rem] h-[20rem] carousel-item absolute sm:w-full sm:h-full transition-opacity duration-500 ease-in-out"
                        data-carousel-item>
                        <img src="{{asset('images/local-4.jpg')}}"
                            class="absolute object-cover block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div id="carousel-item-5"
                        class="w-[20rem] h-[20rem] carousel-item absolute sm:w-full sm:h-full transition-opacity duration-500 ease-in-out"
                        data-carousel-item>
                        <img src="{{asset('images/local-5.jpg')}}"
                            class="absolute object-cover block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
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
                class="absolute ml-8 lg:mb-16 lg:ml-96 xl:ml-0 overflow-hidden bg-red-200 shadow-xl bg-clip-border rounded-full h-[29rem] w-[28rem] lg:h-[28rem] lg:w-[28rem] xl:h-[30rem] xl:w-[30rem]">
                <div class="flex justify-center items-center">
                    <!-- <img class="xl:w-[25rem] lg:w-[23rem] h-full mx-auto px-auto overflow-hidden"
                        src="{{ asset('images/modelo.png') }}" alt="mulher jovem apontando para o titulo" /> -->

                    <svg class="animated mx-auto h-full animate-slideInAndFade" id="freepik_stories-young-and-happy"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 430 430" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                        <g id="freepik--Shadow--inject-49" class="animable animator-hidden"
                            style="transform-origin: 250px 416.24px;">
                            <ellipse id="freepik--path--inject-49" cx="250" cy="416.24" rx="193.89" ry="11.32"
                                style="fill: rgb(245, 245, 245); transform-origin: 250px 416.24px;" class="animable">
                            </ellipse>
                        </g>
                        <g id="freepik--Character--inject-49" class="animable animator-active"
                            style="transform-origin: 200.816px 232.905px;">
                            <path
                                d="M221.4,143.56c-7.51,9.11,3.38,19.75-9.73,19.89s-17.34-1.56-17.23,12.77-12.33,5-10.88,19.45,55.76,25.19,55.52,9.41-8.23-17.55,2.32-21.66,19.85-28.48,10.6-34.14C255.56,139.44,231.89,130.82,221.4,143.56Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 219.616px 175.023px;" id="eluvr4k77lmxg"
                                class="animable">
                            </path>
                            <path
                                d="M250.84,189.06c.71.71,1.61,1.55,2.44,2.32s1.72,1.56,2.61,2.31c1.79,1.49,3.57,3,5.45,4.36a71.75,71.75,0,0,0,11.73,7.13c1,.44,2.06.92,3.07,1.3s2.09.73,3.18,1.07c2.21.66,4.53,1.24,6.86,1.79,4.66,1.09,9.44,2.09,14.18,3.1l-.39,4.44a124.57,124.57,0,0,1-15-.68c-2.5-.26-5-.6-7.55-1.11-1.28-.26-2.56-.54-3.89-.94s-2.52-.87-3.78-1.32a66.86,66.86,0,0,1-13.67-7.53,75.87,75.87,0,0,1-6.12-4.71c-1-.83-1.94-1.68-2.88-2.56s-1.84-1.74-2.83-2.79Z"
                                style="fill: rgb(255, 195, 189); transform-origin: 272.305px 202.977px;"
                                id="el2x0wbeeirbx" class="animable"></path>
                            <path
                                d="M249.74,186.61c9.11,5.82,8.37,9.4,8.37,9.4l-5.73,8.29s-14.6-5.86-15.52-10.44C235.9,189.09,245.32,183.79,249.74,186.61Z"
                                style="fill: #E76578; transform-origin: 247.458px 195.061px;" id="eljyjys7w3otq"
                                class="animable"></path>
                            <g id="eloemvrn9ca8">
                                <path
                                    d="M249.74,186.61c9.11,5.82,8.37,9.4,8.37,9.4l-5.73,8.29s-14.6-5.86-15.52-10.44C235.9,189.09,245.32,183.79,249.74,186.61Z"
                                    style="opacity: 0.3; transform-origin: 247.458px 195.061px;" class="animable"
                                    id="el6a8m74s2iru"></path>
                            </g>
                            <path
                                d="M258.61,195.19h0a.78.78,0,0,1,.19,1.09l-5.86,8.4a.78.78,0,0,1-1.09.19h0a.77.77,0,0,1-.19-1.09l5.86-8.39A.79.79,0,0,1,258.61,195.19Z"
                                style="fill: #E76578; transform-origin: 255.228px 200.034px;" id="elcqodr9ymxna"
                                class="animable"></path>
                            <path d="M298.88,212.75l7.29-1.93L305,219.7s-5.65-.38-8.23-4.52Z"
                                style="fill: rgb(255, 195, 189); transform-origin: 301.47px 215.26px;"
                                id="el5jrm61sd8ol" class="animable">
                            </path>
                            <polygon points="312.97 213.81 311.41 220.97 305.01 219.7 306.17 210.82 312.97 213.81"
                                style="fill: rgb(255, 195, 189); transform-origin: 308.99px 215.895px;"
                                id="el9o5tynzm56j" class="animable">
                            </polygon>
                            <polygon points="196.35 403.23 204.12 405.56 210.5 386.19 202.74 383.86 196.35 403.23"
                                style="fill: rgb(255, 195, 189); transform-origin: 203.425px 394.71px;"
                                id="elij98x9543ng" class="animable">
                            </polygon>
                            <polygon points="144.78 378.21 151.9 382.69 162.09 365.87 154.97 361.4 144.78 378.21"
                                style="fill: rgb(255, 195, 189); transform-origin: 153.435px 372.045px;"
                                id="elhowiiwwfo29" class="animable"></polygon>
                            <path
                                d="M152.31,382.05l-6.11-7.26a.68.68,0,0,0-.88-.14l-7.31,4.4a1.35,1.35,0,0,0-.28,2c2.17,2.49,3.35,3.59,6,6.78,1.65,2,5.54,7.57,7.83,10.28s6,.21,5.25-1.12c-3.18-6-4-10.61-4-13.52A2.24,2.24,0,0,0,152.31,382.05Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 147.158px 386.934px;" id="elpmvo20gserb"
                                class="animable">
                            </path>
                            <path
                                d="M206.05,402l-9.24-3.88a.84.84,0,0,0-1,.26l-5.08,6.47a1.25,1.25,0,0,0,.51,1.94c3.25,1.39,4.8,2,8.86,3.73,2.51,1.05,9.39,5.32,13.11,5.77s4.85-3.13,3.38-3.65c-6.56-2.32-8.31-6.95-9.48-9.58A2.05,2.05,0,0,0,206.05,402Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 203.835px 407.19px;" id="elotzmv70wv1m"
                                class="animable">
                            </path>
                            <g id="elldjw01180e">
                                <polygon points="210.5 386.2 207.21 396.18 199.18 394.64 202.73 383.87 210.5 386.2"
                                    style="opacity: 0.2; transform-origin: 204.84px 390.025px;" class="animable"
                                    id="elycepo9bb1j">
                                </polygon>
                            </g>
                            <g id="el2g7rsjohl5f">
                                <polygon points="154.97 361.4 162.09 365.88 156.83 374.54 149.71 370.07 154.97 361.4"
                                    style="opacity: 0.2; transform-origin: 155.9px 367.97px;" class="animable"
                                    id="el63vyemxf1po"></polygon>
                            </g>
                            <path
                                d="M249.74,186.61s3.31,2.26-17.69,47.89L199,225.34c4.28-13.31,6.59-21.6,7.81-51a100.92,100.92,0,0,1,14.55,2,109,109,0,0,1,15,4.16A143.1,143.1,0,0,1,249.74,186.61Z"
                                style="fill: #E76578; transform-origin: 224.465px 204.42px;" id="elgg0krj56i3b"
                                class="animable"></path>
                            <g id="eld5cdjkvrav8">
                                <path
                                    d="M249.74,186.61s3.31,2.26-17.69,47.89L199,225.34c4.28-13.31,6.59-21.6,7.81-51a100.92,100.92,0,0,1,14.55,2,109,109,0,0,1,15,4.16A143.1,143.1,0,0,1,249.74,186.61Z"
                                    style="opacity: 0.3; transform-origin: 224.465px 204.42px;" class="animable"
                                    id="elhx2jn5synh"></path>
                            </g>
                            <path
                                d="M227.51,159.87c-.39,5.1-1.89,14.21-6.17,16.5,0,0-2.64,7.16,8.35,9.45,8.79,1.83,6.67-5.29,6.67-5.29-5-2.78-1.92-7.7-1-13.21Z"
                                style="fill: rgb(255, 195, 189); transform-origin: 228.823px 172.995px;"
                                id="elpscnx6h92i" class="animable">
                            </path>
                            <g id="ellvtcns9i7s">
                                <path
                                    d="M227.51,159.88c-.31,4.09-1.34,10.79-4,14.44,3,.3,7.84-.63,9.2-2.89a33.09,33.09,0,0,0,1.69-5Z"
                                    style="opacity: 0.2; transform-origin: 228.955px 167.127px;" class="animable"
                                    id="eljjr3vbh4rpi"></path>
                            </g>
                            <path
                                d="M247.55,159.24c-3.56,7.6-4.9,10.89-10.41,13.33-8.29,3.67-16.84-2.36-15.63-10.86,1.09-7.66,6.72-18.79,15.57-18.88A11.45,11.45,0,0,1,247.55,159.24Z"
                                style="fill: rgb(255, 195, 189); transform-origin: 235.038px 158.248px;"
                                id="elv0ui45c2tol" class="animable"></path>
                            <path
                                d="M249.5,151.08c-7.33,2-19.06-5.16-20.32-7.79,7.95-3.21,16.57-2.41,19.78.71S249.5,151.08,249.5,151.08Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 239.861px 146.333px;" id="el51qwjl3lsj"
                                class="animable">
                            </path>
                            <path
                                d="M247.4,167.8a6.14,6.14,0,0,1-4.5,1.32c-2.13-.25-2.39-2.35-1.12-3.94,1.14-1.44,3.63-3,5.45-2A2.76,2.76,0,0,1,247.4,167.8Z"
                                style="fill: rgb(255, 195, 189); transform-origin: 244.79px 166.009px;"
                                id="eletoq80emf9o" class="animable">
                            </path>
                            <path
                                d="M249.06,148.89c-5.58-.72-8.45,6.36-7.34,11S230.34,170.44,230.5,179c.25,13.54,21.33,12.17,17.83,3-1.18-3.12,3.44-8.89,4.84-12.5C256.31,161.32,253.33,149.44,249.06,148.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 242.487px 168.933px;" id="el1cdvz930bfu"
                                class="animable">
                            </path>
                            <path
                                d="M232.05,234.5s9.08,47.69,1.36,83.76c-5.17,24.16-21.13,73-21.13,73l-14.58-.38s11.42-51.22,14.34-71.36c5-34.46-4.21-91.7-4.21-91.7Z"
                                style="fill: #E76578; transform-origin: 217.11px 309.54px;" id="elbqfix4ez04r"
                                class="animable"></path>
                            <g id="elhwuq8aauig8">
                                <path
                                    d="M216.4,247.62l-4.94,9.26a399.72,399.72,0,0,1,2.06,40C221,278.82,218,256.9,216.4,247.62Z"
                                    style="opacity: 0.2; transform-origin: 214.913px 272.25px;" class="animable"
                                    id="elimdge3v2z9e"></path>
                            </g>
                            <polygon points="214.3 394.11 196.35 391.26 197.7 384.5 216.41 388.15 214.3 394.11"
                                style="fill: rgb(38, 50, 56); transform-origin: 206.38px 389.305px;" id="el60ubkifjlw2"
                                class="animable">
                            </polygon>
                            <path
                                d="M224.8,232.59s-8.88,48.93-23.59,78.56c-11.88,23.93-41.51,61.21-41.51,61.21L151.6,364s19.33-40.24,28.16-56.14c21.66-39,4.54-70.7,19.22-82.53Z"
                                style="fill: #E76578; transform-origin: 188.2px 298.845px;" id="el442zbaqh2rv"
                                class="animable"></path>
                            <polygon points="161.14 374.46 148.92 366.46 151.42 361.16 164.87 370.54 161.14 374.46"
                                style="fill: rgb(38, 50, 56); transform-origin: 156.895px 367.81px;" id="elhsv6fg7h159"
                                class="animable">
                            </polygon>
                            <path
                                d="M199,223.26l-2.31,2.55c-.18.2,0,.51.41.61L231.8,236c.3.09.59,0,.66-.17l1.12-2.88c.08-.2-.13-.45-.46-.54l-33.49-9.27A.67.67,0,0,0,199,223.26Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 215.109px 229.572px;"
                                id="elk32tj1zhcl" class="animable">
                            </path>
                            <path
                                d="M202.48,228.25l-.89-.25c-.18-.05-.29-.18-.25-.28l1.49-3.73c0-.11.22-.16.4-.11l.9.25c.17.05.29.18.24.28l-1.48,3.73A.35.35,0,0,1,202.48,228.25Z"
                                style="fill: #E76578; transform-origin: 202.857px 226.068px;" id="el739327gicrn"
                                class="animable"></path>
                            <path
                                d="M229.19,235.65l-.89-.25c-.18-.05-.29-.18-.25-.29l1.49-3.73c0-.11.22-.16.4-.11l.9.25c.18,0,.29.18.24.29l-1.48,3.73C229.56,235.65,229.37,235.7,229.19,235.65Z"
                                style="fill: #E76578; transform-origin: 229.567px 233.46px;" id="eld7xiuxobaw5"
                                class="animable"></path>
                            <path
                                d="M215.84,232l-.9-.25c-.18,0-.29-.18-.24-.29l1.48-3.73c0-.11.23-.15.41-.1l.89.24c.18.05.29.18.25.29l-1.49,3.73C216.2,232,216,232,215.84,232Z"
                                style="fill: #E76578; transform-origin: 216.213px 229.804px;" id="elvkhvrbn4qpe"
                                class="animable"></path>
                            <path
                                d="M234.88,156.75c-.25.63-.79,1-1.2.85s-.55-.81-.3-1.44.79-1,1.2-.85S235.13,156.12,234.88,156.75Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 234.13px 156.455px;" id="elhtki5frcs2u"
                                class="animable">
                            </path>
                            <path
                                d="M227.72,153.92c-.26.63-.79,1-1.21.85s-.55-.81-.29-1.45.78-1,1.2-.85S228,153.28,227.72,153.92Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 226.973px 153.62px;" id="ela8y2gss15m9"
                                class="animable">
                            </path>
                            <path d="M227.59,152.58l-1.35-1S226.55,153,227.59,152.58Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 226.915px 152.119px;" id="elkn95rj0wwdl"
                                class="animable">
                            </path>
                            <path d="M229.18,155.76a18.42,18.42,0,0,1-3.86,3.15,2.92,2.92,0,0,0,2.09,1.31Z"
                                style="fill: rgb(237, 132, 126); transform-origin: 227.25px 157.99px;" id="el29oxdbigsn"
                                class="animable">
                            </path>
                            <path
                                d="M229.87,163.92a6.15,6.15,0,0,1-1.2-.35.17.17,0,0,1-.1-.22.18.18,0,0,1,.22-.09,5.4,5.4,0,0,0,4.9-.35.17.17,0,0,1,.23,0,.15.15,0,0,1,0,.23A5.48,5.48,0,0,1,229.87,163.92Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 231.266px 163.445px;" id="elhso1voj636"
                                class="animable">
                            </path>
                            <path
                                d="M239.29,153.32a.33.33,0,0,1-.25-.21,3.22,3.22,0,0,0-2.14-2.05.34.34,0,0,1-.25-.4.33.33,0,0,1,.4-.25,3.87,3.87,0,0,1,2.61,2.46.34.34,0,0,1-.19.43A.37.37,0,0,1,239.29,153.32Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 238.161px 151.862px;" id="elnekm63bao1g"
                                class="animable">
                            </path>
                            <path
                                d="M226.54,148.48a.32.32,0,0,1-.28-.17.33.33,0,0,1,.13-.45,3.87,3.87,0,0,1,3.58-.16.32.32,0,0,1,.14.45.33.33,0,0,1-.45.13,3.24,3.24,0,0,0-2.95.16A.33.33,0,0,1,226.54,148.48Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 228.186px 147.909px;" id="elkvlswigf8v"
                                class="animable">
                            </path>
                            <path
                                d="M207.38,184.4c-.86-.19-1.53-.35-2.27-.54s-1.43-.4-2.14-.61c-1.4-.44-2.8-.89-4.17-1.4a85.9,85.9,0,0,1-8.05-3.55,66.54,66.54,0,0,1-7.59-4.55l-1.8-1.31c-.6-.45-1.17-.93-1.75-1.39l-.87-.71-.9-.79c-.58-.53-1.15-1.07-1.67-1.63a66,66,0,0,1-10-14.44c-1.34-2.52-2.57-5.08-3.73-7.66s-2.19-5.19-3.12-7.92l4.1-1.75c1.3,2.34,2.65,4.75,4.07,7.07s2.82,4.65,4.34,6.88a71.36,71.36,0,0,0,9.88,12.16c.45.42.91.81,1.37,1.19l.7.55.79.55c.53.36,1,.75,1.58,1.1l1.63,1a76.07,76.07,0,0,0,6.84,3.69q3.54,1.65,7.25,3c1.22.45,2.47.86,3.71,1.25l1.86.54c.6.17,1.27.35,1.76.47Z"
                                style="fill: rgb(255, 195, 189); transform-origin: 184.26px 160.275px;"
                                id="elxwih7lurtij" class="animable">
                            </path>
                            <path d="M164.86,139.17l-2.65-8.74-6.3,6.2s2.64,3.86,6.14,4.19Z"
                                style="fill: rgb(255, 195, 189); transform-origin: 160.385px 135.625px;"
                                id="elvynbn0rbpe" class="animable">
                            </path>
                            <polygon points="157.3 126.36 153.55 130.92 155.91 136.63 162.21 130.43 157.3 126.36"
                                style="fill: rgb(255, 195, 189); transform-origin: 157.88px 131.495px;"
                                id="elg34tetb8its" class="animable">
                            </polygon>
                            <path
                                d="M148.9,164.4a7,7,0,0,0,14-1.21c0-.31,0-.62-.06-.93l-.07-.46-.1-.54L161,152.69l-6.46-34.3-6.36-34.31L145,66.92l-1.59-8.58a57.1,57.1,0,0,1-1-8.69l.93-.17a56,56,0,0,1,2.2,8.46l1.63,8.57,3.27,17.14,6.51,34.29,6.42,34.31,1.58,8.58.1.53.08.62a10.31,10.31,0,0,1,.07,1.24,9.71,9.71,0,0,1-.38,2.46,9.27,9.27,0,0,1-18-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 153.805px 110.906px;" id="ela9h41jga8oq"
                                class="animable">
                            </path>
                            <path
                                d="M99.74,78.34,99,77.66a71.65,71.65,0,0,1,15-12l.52.86A70.83,70.83,0,0,0,99.74,78.34Z"
                                style="fill: #E76578; transform-origin: 106.76px 72px;" id="eldfuqqpo6k3"
                                class="animable"></path>
                            <path
                                d="M93.81,85.71,93,85.15a56.65,56.65,0,0,1,3.53-4.67l.76.64C96,82.61,94.86,84.16,93.81,85.71Z"
                                style="fill: #E76578; transform-origin: 95.145px 83.095px;" id="ellplje7f8auh"
                                class="animable"></path>
                            <path
                                d="M89.24,115.45c-.14-.75,4.58-2.26,10.54-3.38s10.91-1.42,11-.67c-.14-.75,5.44-2.42,12.47-3.74s12.83-1.78,13-1c-.14-.74,7.23-2.75,16.46-4.48s16.83-2.53,17-1.79c-.13-.74,5.44-2.42,12.47-3.74s12.85-1.78,13-1c-.14-.74,4.57-2.25,10.53-3.37s10.91-1.42,11-.68c-4.67-24.89-36.42-39.88-71.2-33.78l-1.09.2-1.09.21C108.72,65.07,84.57,90.56,89.24,115.45Z"
                                style="fill: #E76578; transform-origin: 152.686px 85.9554px;" id="elmc0dpsbkce"
                                class="animable"></path>
                            <g id="elj6apjcma57p">
                                <path
                                    d="M110.83,111.4c-.14-.75,5.44-2.42,12.47-3.74s12.83-1.78,13-1c-.14-.74,7.23-2.75,16.46-4.48s16.83-2.53,17-1.79c-.13-.74,5.44-2.42,12.47-3.74s12.85-1.78,13-1c-4.65-24.75-26.72-41.47-49.62-37.83l-1.09.2-1.09.21C120.69,63.05,106.18,86.64,110.83,111.4Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 152.596px 84.3614px;"
                                    class="animable" id="elraoms091xg"></path>
                            </g>
                            <path
                                d="M136.27,106.62c-.14-.74,7.23-2.75,16.46-4.48s16.83-2.53,17-1.79c-4.72-25.15-16-44.14-25.25-42.41S131.55,81.47,136.27,106.62Z"
                                style="fill: #E76578; transform-origin: 151.972px 82.2253px;" id="ell6i2gy3iu7g"
                                class="animable"></path>
                            <path
                                d="M218.88,178.56c-1.53-4-17-6.81-17-6.81l-5,10.08s10.8,8,16.07,6.51C217.44,187.08,220.84,183.62,218.88,178.56Z"
                                style="fill: #E76578; transform-origin: 208.163px 180.137px;" id="el0mt0ctysmd3j"
                                class="animable"></path>
                            <g id="elhe8frm7vcn6">
                                <path
                                    d="M218.88,178.56c-1.53-4-17-6.81-17-6.81l-5,10.08s10.8,8,16.07,6.51C217.44,187.08,220.84,183.62,218.88,178.56Z"
                                    style="opacity: 0.3; transform-origin: 208.163px 180.137px;" class="animable"
                                    id="ell6oizux9c8f"></path>
                            </g>
                            <path
                                d="M196.6,182.51h0a.78.78,0,0,1-.35-1l5.07-10.08a.78.78,0,0,1,1.05-.35h0a.78.78,0,0,1,.34,1.05l-5.06,10.08A.78.78,0,0,1,196.6,182.51Z"
                                style="fill: #E76578; transform-origin: 199.49px 176.8px;" id="elozh3qzntv3"
                                class="animable"></path>
                            <path
                                d="M154.32,386.68a1.24,1.24,0,0,0,.73-.28.67.67,0,0,0,.29-.59c-.09-1.06-2.77-2.49-3.07-2.65a.17.17,0,0,0-.18,0,.15.15,0,0,0-.06.17c.3,1.08,1,2.93,2,3.27A1,1,0,0,0,154.32,386.68Zm-1.85-3c.91.52,2.48,1.54,2.54,2.19a.33.33,0,0,1-.16.29.79.79,0,0,1-.75.18C153.53,386.11,152.93,385.13,152.47,383.65Z"
                                style="fill: #E76578; transform-origin: 153.682px 384.907px;" id="eltu5aqgkuqdp"
                                class="animable"></path>
                            <path
                                d="M154.73,384.07a1.92,1.92,0,0,0,1.21-.31.67.67,0,0,0,.15-.82,1.05,1.05,0,0,0-.63-.59c-1.14-.4-3.26.76-3.35.81a.16.16,0,0,0-.08.14.15.15,0,0,0,.07.15A6.1,6.1,0,0,0,154.73,384.07Zm.17-1.47a1.29,1.29,0,0,1,.45.07.66.66,0,0,1,.43.4c.1.26,0,.37-.06.44-.5.42-2.26.18-3.16-.2A6.2,6.2,0,0,1,154.9,382.6Z"
                                style="fill: #E76578; transform-origin: 154.099px 383.171px;" id="elxqkbgyy5t3"
                                class="animable"></path>
                            <path
                                d="M209.52,405.26a3.27,3.27,0,0,0,2,.32,1.18,1.18,0,0,0,.82-.67.53.53,0,0,0,0-.57c-.6-.92-4.6-.78-5.06-.76a.16.16,0,0,0-.15.12.16.16,0,0,0,.06.18A13.22,13.22,0,0,0,209.52,405.26Zm2.15-1a.7.7,0,0,1,.34.23.24.24,0,0,1,0,.24.88.88,0,0,1-.61.5c-1,.25-2.74-.76-3.65-1.36A12.39,12.39,0,0,1,211.67,404.29Z"
                                style="fill: #E76578; transform-origin: 209.773px 404.59px;" id="elgz94c7gkrgs"
                                class="animable"></path>
                            <path
                                d="M207.16,403.9h.07c1.18,0,4-.8,4.25-1.69.05-.19,0-.47-.42-.71-1.72-1-3.88,2-4,2.14a.17.17,0,0,0,0,.17A.3.3,0,0,0,207.16,403.9Zm3.62-2.17.12.07c.3.17.27.29.25.33-.15.57-2.24,1.32-3.57,1.43C208.13,402.89,209.61,401.25,210.78,401.73Z"
                                style="fill: #E76578; transform-origin: 209.267px 402.598px;" id="elkhsfnjao53h"
                                class="animable"></path>
                            <path d="M234.75,155.41l-1.35-1S233.71,155.87,234.75,155.41Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 234.075px 154.955px;" id="elvv0i30plxi"
                                class="animable">
                            </path>
                        </g>
                        <g id="freepik--Streetlight--inject-49" class="animable animator-hidden"
                            style="transform-origin: 307.14px 228.32px;">
                            <path
                                d="M319.62,411.45h-1.69l-7.38-97a4.26,4.26,0,0,0,.79-2.48V300.87a4.34,4.34,0,0,0-2.13-3.72V149.09a2.77,2.77,0,0,0,1.77-2.57v-3.18a2.76,2.76,0,0,0-1.77-2.56V93.36a2.73,2.73,0,0,0-.06-.5A2.75,2.75,0,0,0,311,90.27V87.1a2.74,2.74,0,0,0-1-2.14c2.53-.86,4.3-2.79,4.3-5h-.89l5.32-30.12h1c0-2.75-4.6-5-10.62-5.45a1.46,1.46,0,0,0,.19-.72V41.87a1.54,1.54,0,0,0-1.54-1.54h-1.36a1.54,1.54,0,0,0-1.53,1.54v1.76a1.46,1.46,0,0,0,.19.72c-6,.43-10.62,2.7-10.62,5.45h1l5.32,30.12h-.89c0,2.25,1.76,4.18,4.3,5a2.74,2.74,0,0,0-1,2.14v3.17a2.75,2.75,0,0,0,1.83,2.59,2.07,2.07,0,0,0-.06.5v47.42a2.76,2.76,0,0,0-1.77,2.56v3.18a2.77,2.77,0,0,0,1.77,2.57V297.15a4.35,4.35,0,0,0-2.14,3.72v11.07a4.27,4.27,0,0,0,.8,2.48l-7.38,97h-1.7a2.88,2.88,0,0,0-2.88,2.89v2h31v-2A2.89,2.89,0,0,0,319.62,411.45ZM304.54,79.92,300.6,49.8h12.79l-3.94,30.12Zm7.62,0h-1.52l3.94-30.12h2.9ZM296.51,49.8h2.9l3.94,30.12h-1.52Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 307.14px 228.32px;" id="eletezvwzn7pw"
                                class="animable">
                            </path>
                        </g>
                        <defs>
                            <filter id="active" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                            </filter>
                            <filter id="hover" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                                <feColorMatrix type="matrix"
                                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                </feColorMatrix>
                            </filter>
                        </defs>
                    </svg>
                </div>

            </div>
        </div>
    </div>
</div>