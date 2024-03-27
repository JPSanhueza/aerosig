{{-- <nav x-data="{ open: false }" class="bg-white/0 fixed top-0 left-0 w-full z-10 "> --}}
<nav x-data="{ open: false, scrolled: false }" 
    :class="{'bg-white/0': !scrolled, 'bg-[#2E332C]/80': scrolled}" 
    class="fixed top-0 left-0 w-full z-10 transition-colors duration-300" 
    @scroll.window="scrolled = (window.pageYOffset > 50 ? true : false)">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-4 sm:px-6 lg:px-8 w-full  ">
        <div class="flex justify-between h-16 w-full">
            <div class="flex w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>
                <div class=" w-full flex justify-end">
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                            {{ __('Inicio') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link href="{{ url('/#nosotros') }}" :active="request()->routeIs('welcome')">
                            {{ __('Nosotros') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link href="{{ url('/#equipo') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Equipos') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link href="{{ url('/#servicios') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Servicios') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link href="{{ url('/#galeria') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Galería') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link href="{{ url('/#contacto') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Contacto') }}
                        </x-nav-link>
                    </div>
                </div>
                
            </div>

           
            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('')">
                {{ __('Inicio') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ url('/#nosotros') }}" :active="request()->routeIs('')">
                {{ __('Nosotros') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ url('/#equipo') }}" :active="request()->routeIs('')">
                {{ __('Equipos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ url('/#servicios') }}" :active="request()->routeIs('')">
                {{ __('Servicios') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ url('/#galeria') }}" :active="request()->routeIs('')">
                {{ __('Galería') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ url('/#contacto') }}" :active="request()->routeIs('')">
                {{ __('Contacto') }}
            </x-responsive-nav-link>
        </div>

        
    </div>
</nav>
