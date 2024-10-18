<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de ip') }}
        </h2>
    </x-slot>
    <h4 class="text-center"><strong>Listado de IP</strong></h4>
    <br>
    <div class="py-12">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-center">

              {{-- <a href="#" aria-current="page" class="General px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white" style="background-color: #033B5C; color: white;">
              Tabla General Ip
              </a> --}}

            <a href="#" aria-current="page" class="PB px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white" style="background-color: #033B5C; color: white;">
              PB
            </a>
            <a href="#" class="P1 px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white" style="background-color: #033B5C; color: white;">
              P1
            </a>
            <a href="#" class="P2YP3 px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white" style="background-color: #033B5C; color: white;">
              P2 Y P3
            </a>
          </div>

<br>



          <div id="pb">
             <div class="py-12">
            <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="w-full">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Piso PB') }}</h1>
                                <p class="mt-2 text-sm text-gray-700">Listado del todo los IP del piso {{ __(' PB') }}.</p>
                            </div>
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <a type="button" href="{{ route('ListadoIp.CreatePB') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
                            </div>
                        </div>

                        <div class="flow-root">
                            <div class="mt-8 overflow-x-auto">
                                <div class="inline-block min-w-full py-2 align-middle">
                                    <table class="w-full divide-y divide-gray-300">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500" style='display:none;'>ID</th>
                                            <th colspan="0" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500" >Departamento</th>

                                        </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">

                                            @foreach ($ListadoIpPB->unique('departamento_id') as $listadoipPB)
                                            <tr class="even:bg-gray-50">
                                                <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center" style='display:none;'>{{ ++$PB}}</td>
                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$listadoipPB->departamentos->Departamento}}</td>



                                                <td class=" py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                    <form action="{{ route('ListadoIp.destroy', $listadoipPB->id) }}" method="POST">
                                                        <a href="{{ route('ListadoIp.show', $listadoipPB->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>

                                                    </form>
                                                </td>
                                            </tr>
                                    @endforeach
                                        </tbody>
                                    </table>

                                    <div class="mt-4 px-4">
                                        {!! $ListadoIpPB->withQueryString()->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          </div>


          {{--------------------------------------------P1 ------------------------------}}

          <div id="p1">
            <div class="py-12">
                <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="w-full">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Piso P1') }}</h1>
                                    <p class="mt-2 text-sm text-gray-700">Listado del todo los IP del piso {{ __(' P1') }}.</p>
                                </div>
                                <div class="whitespace-nowrap mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <a type="button" href="{{ route('ListadoIp.CreateP1') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
                                </div>
                            </div>

                            <div class="flow-root">
                                <div class="mt-8 overflow-x-auto">
                                    <div class="inline-block min-w-full py-2 align-middle">
                                        <table class="w-full divide-y divide-gray-300">
                                            <thead>
                                            <tr>
                                                {{-- <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">ID</th> --}}
                                                <th colspan="0" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500" >Departamento</th>

                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">

                                                <tr class="even:bg-gray-50">
                                                    @foreach ($ListadoIpP1->unique('departamento_id') as $listadoipP1)
                                                    <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center" style='display:none;'>{{ ++$P1}}</td>
                                                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$listadoipP1->departamentos->Departamento}}</td>


                                                    <td class=" py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                        <form action="{{ route('ListadoIp.destroy', $listadoipP1->id) }}" method="POST">
                                                            <a href="{{ route('ListadoIp.ShowP1', $listadoipP1->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>

                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                        <div class="mt-4 px-4">
                                            {!! $ListadoIpP1->withQueryString()->links() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>


          {{-- ----------------------------------------------------------P2 Y P3--------------------------------------------- --}}

          <div id="p2yp3">
            <div class="py-12">
                <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="w-full">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Piso P2 Y P3') }}</h1>
                                    <p class="mt-2 text-sm text-gray-700">Listado del todo los IP del piso {{ __('P2 Y P3') }}.</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <a type="button" href="{{ route('ListadoIp.CreateP2YP3') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
                                </div>
                            </div>

                            <div class="flow-root">
                                <div class="mt-8 overflow-x-auto">
                                    <div class="inline-block min-w-full py-2 align-middle">
                                        <table class="w-full divide-y divide-gray-300">
                                            <thead>
                                            <tr>
                                                <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500" style='display:none;'>ID</th>
                                                <th colspan="0" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500" >Departamento</th>

                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">

                                                @foreach ($ListadoIpP2YP3->unique('departamento_id') as $listadoipP2YP3)
                                        <tr class="even:bg-gray-50">
                                            <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center" style='display:none;'>{{ ++$P2YP3 }}</td>
                                            <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$listadoipP2YP3->departamentos->Departamento}}</td>



                                            <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                <form action="{{ route('ListadoIp.destroy', $listadoipP2YP3->id) }}" method="POST">
                                                    <a href="{{ route('ListadoIp.showP2YP3', $listadoipP2YP3->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                            </tbody>
                                        </table>

                                        <div class="mt-4 px-4">
                                            {!! $ListadoIpP2YP3->withQueryString()->links() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>


 {{-- ----------------------------------------------------------Tabla General--------------------------------------------- --}}

          <div id="">
            <div class="">
                <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-3">
                    <div>

                    </div>

                    <form method="GET">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">

                        </div>

                        <div style="">
                        <input type="text" id="search" name="search"  class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" value="{{ request()->get('search') }}">
                        </div>
                        <div class="flex items-center justify-end " style="">
                            <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded " >Buscar</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
             <div class="buscar py-12">
            <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="w-full">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Listado General') }}</h1>
                                <p class="mt-2 text-sm text-gray-700">Listado General  de  IP</p>
                            </div>
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <a type="button" href="{{ route('ListadoIp.createGeneral') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
                            </div>
                        </div>

                        <div class="flow-root">
                            <div class="mt-8 overflow-x-auto">
                                <div class="inline-block min-w-full py-2 align-middle">
                                    <table class="w-full divide-y divide-gray-300">
                                        <thead>
                                        <tr>
                                              <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">ID</th>
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Escuela</th>
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Ministerio</th>

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Observaciones</th>

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Accion</th>

                                        </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">
                                     
                                            @foreach ($ListadoGeneral as $ListadoGenerals)
                                             
                                               
                                            <tr class="even:bg-gray-50">
                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$ListadoGenerals->id}}</td>
                                                
                                                @if($ListadoGenerals->Observacion == 'Ocupado')

                                                <td class="px-3 py-4 text-sm text-gray-500 text-center text-red-500" colspan="0" >{{$ListadoGenerals->ip_escuela}}</td>

                                                @else

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0" >{{$ListadoGenerals->ip_escuela}}</td>

                                                @endif

                                               
                                              

                                                @if($ListadoGenerals->ip_ministerio == 'Ocupado')

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0" style="color: red">{{$ListadoGenerals->ip_ministerio}}</td>

                                                @else

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$ListadoGenerals->ip_ministerio}}</td>

                                                @endif

                                                @if($ListadoGenerals->Observacion == 'Libre')
                                            
                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$ListadoGenerals->Observacion}}</td>

                                                @else

                                                 <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$ListadoGenerals->Observacion}}</td>
                                                
                                                @endif

                                                 <td class=" py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center">
                                                    <form action="#" method="POST">
                                                        <a href="#" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>

                                                    </form>
                                                </td>



                                            </tr>
                                    
                         
                                   
                                     @endforeach
                                        </tbody>
                                    </table>

                                    <div class="mt-4 px-4">
                                        {!! $ListadoGeneral->withQueryString()->links() !!}
                                    </div>
                                </div>
                            </div>
                            <div id="regresar">
                            <a href="/ListadoIp"><button type="button" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">regresar</button></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          </div>
          </div>

    </x-app-layout>
    <script>
        $(document).ready(function(){

            $('#General').hide();
            $('#regresar').hide();
            $('#pb').hide();
            $('#p1').hide();
            $('#p2yp3').hide();

            // $('.General').click(function(e){
            //      e.preventDefault();
            //     $('#General').toggle();


            // });


            $('.buscar').click(function(){


                $('#regresar').show();
            });




            $('.PB').click(function(e){
                 e.preventDefault();
                $('#pb').toggle();


            });

            $('.P1').click(function(e){
                e.preventDefault();
              $('#p1').toggle();


             });

             $('.P2YP3').click(function(e){
                e.preventDefault();
            $('#p2yp3').toggle();


               });

        });




    </script>



