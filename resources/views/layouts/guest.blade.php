<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            @livewire('navigation-menu')
            <a class="fixed z-30 bottom-7 right-8 shadow-lime-900" href="https://api.whatsapp.com/send?phone=56996822992" target="_blank" rel="noopener">
                <img src="{{ asset('/img/whatsapp.png') }}" width="64px" height="64px" alt="icono">
            </a>
            {{ $slot }}
        </div>
        <x-footer/>

        @livewireScripts
        <script src="{{asset('js/main.js')}} "> </script>
    </body>
</html>
