<nav class="fixed z-10 bg-clip-border bg-red-200 w-full shadow-md">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-rose_light hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" id="menu-button" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                    <svg class="flex flex-1 h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <!-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
              alt="Your Company"> -->
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4 items-center justify-center">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('home') }}" id="#home"
                            class="nav_link sm:text-sm md:text-base font-poppins font-medium rounded-md px-3 py-2 hover:bg-red-100 hover:font-semibold"
                            aria-current="page">Home</a>
                        <a href="{{ route('home') }}" id="#historias"
                            class="nav_link sm:text-sm md:text-base font-poppins font-medium rounded-md px-3 py-2 hover:bg-red-100 hover:font-semibold">Histórias</a>
                        <a href="{{ route('home') }}" id="#sobre"
                            class="nav_link sm:text-sm md:text-base font-poppins font-medium rounded-md px-3 py-2 hover:bg-red-100  hover:font-semibold">Sobre</a>
                        <a href="{{ route('detalhes') }}"
                            class="sm:text-sm md:text-base font-poppins font-medium rounded-md px-3 py-2 hover:bg-red-100  hover:font-semibold ">Detalhes</a>
                        <div>
                            <a href="{{ route('avaliacao') }}"
                                class="sm:text-sm md:text-base font-poppins font-medium rounded-md px-3 py-2 hover:bg-red-100  hover:font-semibold">Avaliacão</a>
                        </div>
                        <a href="{{ route('lugares_cadastrados') }}"
                            class="text-base text-center hover:scale-105 text-black shadow-lg font-poppins font-medium rounded-lg px-3 py-2 w-[7rem] hover:font-medium bg-rose_medium">Cadastrar</a>
                    </div>
                </div>
            </div>

            <div
                class="absolute flex sm:hidden md:flex items-center lg:flex inset-y-0 right-0 pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button">
                    <img src=" {{ asset('images/notificacoes.png') }}" class="w-7 mr-2" alt="">
                </button>


                <!-- Profile dropdown -->
                <div class="flex item-center relative ml-3 md:flex items-center">
                    <div>
                        <button type="button" class="relative flex rounded-full text-sm focus:outline-none"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <!-- Se o usuário estiver autenticado (auth()->check()) e tiver uma imagem de perfil definida (auth()->user()->profile_image),
                              o caminho para essa imagem é retornado.
                              Caso contrário, se o usuário não estiver autenticado ou não tiver uma imagem de perfil definida, retorna o caminho para uma imagem padrão,default_profile.jpg.
                              -->
                            <img class="h-8 w-8 rounded-full"
                                src="{{ auth()->check() && auth()->user()->profile_image ? asset('profiles/' . auth()->user()->profile_image) : asset('images/default_profile.jpg') }}"
                                alt="Foto de perfil do usuário">
                        </button>
                    </div>


                    <div class="flex flex-col mt-9">
                        <div id="user-menu"
                            class="hidden absolute right-0 z-10 mt-3 items-center w-48 origin-top-right rounded-md bg-white py-1 shadow-xl focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Exibe o nome de usuário ou "Seu Perfil" se estiver autenticado -->
                            <span class="block font-poppins px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1"
                                id="user-menu-item-0">{{ auth()->check() ? auth()->user()->username : 'Seu Perfil' }}</span>

                            <!-- Verifica se o usuário está autenticado para exibir o formulário de logout -->
                            @auth
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="font-poppins block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem" tabindex="-1" id="user-menu-item-2">Sair da conta</button>
                                </form>
                            @endauth
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden hidden focus:border-none focus:outline-none" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#"
                class="block rounded-md px-3 py-2 text-black text-base font-medium hover:bg-red-200 hover:text-black">Home</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-black text-base font-medium hover:bg-red-200 hover:text-black">Historias</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-black text-base font-medium hover:bg-red-200 hover:text-black">Sobre</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-black text-base font-medium hover:bg-red-200 hover:text-black">Detalhes</a>
        </div>
    </div>
</nav>