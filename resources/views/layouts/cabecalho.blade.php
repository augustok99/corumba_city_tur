<nav class="fixed z-10 bg-clip-border bg-rose_medium w-full">
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
                        <a href="{{ route('home') }}"
                            class="sm:text-sm md:text-base font-poppins font-medium rounded-md px-3 py-2 hover:bg-rose_light hover:font-semibold"
                            aria-current="page">Home</a>
                        <a href="#"
                            class="sm:text-sm md:text-base font-poppins font-medium rounded-md px-3 py-2 hover:bg-rose_light hover:font-semibold">Histórias</a>
                        <a href="#"
                            class="sm:text-sm md:text-base font-poppin font-medium rounded-md px-3 py-2 hover:bg-rose_light  hover:font-semibold">Sobre</a>
                        <a href="{{ route('detalhes') }}"
                            class="sm:text-sm md:text-base font-poppins font-medium rounded-md px-3 py-2 hover:bg-rose_light  hover:font-semibold ">Detalhes</a>
                        <a href="{{ route('avaliacao') }}"
                            class="sm:text-sm md:text-base font-poppins font-medium rounded-md px-3 py-2 hover:bg-rose_light  hover:font-semibold">Avaliacão</a>
                    </div>
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button">
                    <img src=" {{ asset('images/notificacoes.png') }}" class="w-7 mr-2" alt="">
                </button>


                <!-- Profile dropdown -->
                <div class="relative ml-3 flex items-center">
                    <div>
                        <button type="button" class="relative flex rounded-full text-sm focus:outline-none"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </button>
                    </div>


                    <div class="flex flex-col mt-9">
                        <div id="user-menu"
                            class=" hidden absolute right-0 z-10 mt-3 items-center w-48 origin-top-right rounded-md bg-white py-1 shadow-xl focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-0">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-1">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-2">Sign out</a>
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
                class="block rounded-md px-3 py-2 text-black text-base font-medium hover:bg-rose_light hover:text-black">Home</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-black text-base font-medium hover:bg-rose_light hover:text-black">Historias</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-black text-base font-medium hover:bg-rose_light hover:text-black">Sobre</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-black text-base font-medium hover:bg-rose_light hover:text-black">Detalhes</a>
        </div>
    </div>
</nav>