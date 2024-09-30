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

            <a href="#" aria-current="page" class="PB px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white" style="background-color: #033B5C;">
              PB
            </a>
            <a href="#" class="P1 px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white" style="background-color: #033B5C;">
              P1
            </a>
            <a href="#" class="P2YP3 px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white" style="background-color: #033B5C;">
              P2 Y P3
            </a>
          </div>

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


          {{----------------------------------------------------------P2 Y P3---------------------------------------------}}

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
          </div>

    </x-app-layout>
    <script>
        $(document).ready(function(){

            $('#pb').hide();
            $('#p1').hide();
            $('#p2yp3').hide();



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



