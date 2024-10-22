<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ 'Soporte Técnico' }}</title>
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--CSS-->
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{asset('resources/css/app.css')}}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
     {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.css" /> --}}
      <link rel="stylesheet" href="{{asset('/css/dataTables.css')}}">
       <link rel="stylesheet" href="{{asset('/css/dataTables.min.css')}}">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
       {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet" /> --}}

</head>
{{-- <link rel="stylesheet" href="{{asset('Boostraps/css/bootstrap.css')}}"> --}}


<body class="flex flex-col min-h-screen" >

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
                <div>  @role('Administrador')
                    Administrador:{{auth()->user()->name}} {{auth()->user()->surname}}
                    @endrole

                    @role('Coordinador')
                    Coordinador:{{auth()->user()->name}} {{auth()->user()->surname}}
                    @endrole

                    @role('Tecnico')
                    Técnico:{{auth()->user()->name}} {{auth()->user()->surname}}
                    @endrole

                    @role('Usuario')
                    Usuario:{{auth()->user()->name}} {{auth()->user()->surname}}
                    @endrole

                   </div>


                   
                <div class="text-sm text-gray-500 dark:text-gray-400">
                    @if (Auth::check())
                    <span>Último ingreso:
                        {{ Auth::user()->previous_login ? 'Día: ' . \Carbon\Carbon::parse(Auth::user()->previous_login)->format('d/m/Y') . ' Hora: ' . \Carbon\Carbon::parse(Auth::user()->previous_login)->format('H:i') : 'N/A' }}

                        {{-- {{ Auth::user()->last_login }} --}}
                        {{-- {{ Auth::user()->previous_login }} --}}
                    </span>
                @endif</div>
            </div>
        </div>
        </div>
        <ul class="mt-4 px-4 space-y-2">
            @can('admin.home')
            <li><a href="{{ route('dashboard') }}" class="block">Inicio</a></li>
            @endcan
            @can('admin.soporte.create')
            <li><a href="/Soportes/create" class="block">Solicitar Soporte</a>

            </li>
            @endcan

            @can('admin.soporte.index')
              <ul>
                <li>
                    <a href="/Tecnico" class="block">Técnico</a>
                   <ul class="ml-4 mt-1 space-y-1" role="group">
                     <li>
                        <a href="/Espera" class="block">Soporte En espera</a>
                     </li>
                     <li>
                        <a href="/Reparacion" class="block">Soporte Requerido</a>
                     </li>
                     <li>
                        <a href="/Pendiente" class="block">Soporte Pendiente</a>
                     </li>
                     <li>
                        <a href="/Terminado" class="block">Soporte Culminado</a>
                        <li>
                            <a href="/Historial" class="block">Soporte Historial</a>
                         </li>
                     </li>

                   </ul>
                 </li>
              </ul>
            @endcan
            @can('admin.listado.listadoEquipos.index')
            <nav>
                <ul>
                  <li>
                    <a href="#" class="block">Listado</a>
                    <ul class="ml-4 mt-1 space-y-1" role="group">
                      <li>
                        <a href="/ListadoEquipo" class="block">Listado de Equipos</a>
                      </li>
                      <li>
                        <a href="/ListadoIp" class="block">Listado de IP</a>
                      </li>
                      <li>
                        <a href="/ListadoPunto" class="block">Listado de Puntos</a>
                      </li>
                      <li>
                        <a href="/ListadoTelefono" class="block">Telefono VOIP</a>
                      </li>

                      <li>
                        <a href="/ListadoImpresora" class="block">Impresora</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
              
        @endcan

            @can('admin.Planos.index')<li><a href="/Planos" class="block">Planos</a></li>@endcan
            @can('admin.Estatisticas.index')<li><a href="/Estadisticas" class="block">Estadisticas</a></li>@endcan
            @can('')<li><a href="/Auditoria" class="block">Auditoria</a></li>@endcan
            @can('admin.users.index')<li><a href="/users" class="block">Usuarios</a></li>@endcan
             {{-- @role('Administrador|Coordinador|Tecnico') --}}
            @auth
            <li type="submit" class="btn btn-danger">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button>Cerrar Sesión</button>
                </form>
            </li>
            @endauth
            {{-- @endrole --}}
          
           {{--  @role('Usuario')
            <a href="javascript:cerrar();">Cerrar Sesión </a>
            @endrole --}}
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        {{-- <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
           <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
           <script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>
           
         {{-- <script src="{{asset('/JS/service-worker.js')}}"></script> --}}
        <script src="{{asset('/JS/dataTables.min.js')}}"></script>
        <script src="{{asset('/JS/dataTables.js')}}"></script>
        <script src="/Highcharts/code/highcharts.js"></script>
        <script src="/Highcharts/code/modules/exporting.js"></script>
        <script src="/Highcharts/code/modules/export-data.js"></script>
        {{-- <script src="{{ asset('js/ValidacionGeneral.js') }}" type="text/javascript"></script> --}}
        {{-- <script src="{{asset('/JS/Listado.js')}}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

</body>
{{-- <script type="text/javascript">
navigator.serviceWorker.register('/public/JS/service-worker.js')
</script> --}}
<script language="javascript" type="text/javascript">
   
function cerrar() {

        window.close();
    
}

</script>

</html>

