<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'EnahpWeb') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <header class="bg-eaeeee shadow-md fixed w-full z-50">
        <div class="flex justify-between items-center">
            <img src="{{ asset('img/cintillo.png') }}" alt="cintillo institucional" class="h-16 w-full">
        </div>
    </header>
    <body class="font-sans text-gray-900 antialiased ">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <br><br>
            <div>
                <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Sistema de Gestión de Soporte</span></h1>
                <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400"></p>
                  

            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>

        </div>
    </body>
        <footer class="bg-14415b text-eaeeee text-center p-4 mt-auto size-full z-100 " style="background-color: #033B5C; color:white;">

            <p class="text-center">Intranet</p>
            <p>::Escuela Nacional de Administración y Hacienda Pública-IUT (ENAHP) (Versión 1.00):: </p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

</html>
