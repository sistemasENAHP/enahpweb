<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'EnahpWeb') }}</title>
    <!--CSS-->
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{asset('resources/css/app.css')}}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


</head>
{{-- <link rel="stylesheet" href="{{asset('Boostraps/css/bootstrap.css')}}"> --}}


<body class="flex flex-col min-h-screen">

    <header class="bg-eaeeee shadow-md fixed w-full z-50">
        <div class="flex justify-between items-center">
            <img src="{{ asset('img/cintillo.png') }}" alt="cintillo institucional" class="h-16 w-full">
        </div>
    </header>
    <nav class="bg-14415b text-eaeeee fixed top-16 left-0 w-64 h-full pt-4 overflow-y-auto" style="background-color: #033B5C; color:white;">
        <div class="relative">
        <div class="flex items-center gap-4">
            <img class="w-10 h-10 rounded" src="{{ asset('img/sp2.png') }}" alt="">
            <span class="absolute bottom-0 left-8 transform translate-y-1/4 w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
            <div class="font-medium dark:text-white">
                <div>{{Auth()->user()->name}}</div>
                <div class="text-sm text-gray-500 dark:text-gray-400"> @if (Auth::check())
                    <span>Último ingreso:
                        {{ Auth::user()->previous_login_at ? 'Día: ' . \Carbon\Carbon::parse(Auth::user()->previous_login_at)->format('d/m/Y') . ' Hora: ' . \Carbon\Carbon::parse(Auth::user()->previous_login_at)->format('H:i') : 'N/A' }}
                    </span>
                @endif</div>
            </div>
        </div>
        </div>
        <ul class="mt-4 px-4 space-y-2">
            <li><a href="{{ route('dashboard') }}" class="block">Inicio</a></li>
            <li>
                <a href="/Soportes/create" class="block">Pedir Soporte</a>

            </li>
            <li>

                <a href="/Soportes" class="block">Técnico</a>
            </li>
            <li><a href="#" class="block">Listado</a>
            <ul class="ml-4 mt-1 space-y-1">
                <li><a href="/ListadoEquipo" class="block">Listado de Equipos</a></li>
                <li><a href="/ListadoIp" class="block">Listado de IP </a></li>
                <li><a href="/ListadoPunto" class="block">Listado de Punto </a></li>

            </ul>
        </li>

            <li><a href="/Planos" class="block">Planos</a></li>
            <li><a href="/Estadisticas" class="block">Estadisticas</a></li>
            <li><a href="/Auditoria" class="block">Auditoria</a></li>
            <li><a href="/users" class="block">Usuarios</a></li>
            @auth
            <li type="submit" class="btn btn-danger">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button>Cerrar Sesión</button>
                </form>
            </li>
            @endauth
        </ul>
    </nav>
    <main class="ml-64 mt-16 flex-1 p-4">
        {{-- <div class="bg-329cca text-eaeeee flex justify-between p-2" style="background-color:#6AA6CB; color:white;">



        </div> --}}
        <div class="bg-eaeeee p-10">
            <div class="content">
                {{ $slot ?? '' }} @yield('content')
            </div>
        </div>
    </main>
    <footer class="bg-14415b text-eaeeee text-center p-4 mt-auto" style="background-color: #033B5C; color:white;">
        <p class="text-center">Intranet</p>
        <p>::Escuela Nacional de Administración y Hacienda Pública-IUT (ENAHP) (Versión 1.00):: </p>
    </footer>
        <!-- Scripts -->
        @vite(['resources/js/app.js'])

        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


</body>
<script type="text/javascript">
   $(document).ready(function() {
    $('.select2').select2();
});
</script>


</html>

