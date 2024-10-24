<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listao de Equipo') }}
        </h2>
    </x-slot>
<h4 class="text-center"><strong>Listado de Equipos</strong></h4>
<br>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-center">

        <a href="#" aria-current="page" class="PB px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white" style="background-color: #033B5C;color: white;">
          PB
        </a>
        <a href="#" class="P1 px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white" style="background-color: #033B5C;color: white;">
          P1
        </a>
        <a href="#" class="P2YP3 px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white" style="background-color: #033B5C;color: white;">
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
                            <p class="mt-2 text-sm text-gray-700">Listado del piso {{ __('PB') }}.</p>
                        </div>
                        <div class="md:col-span-5 text-center">
                            <div class="inline-flex items-end" >
                            <a type="button" href="{{ route('ListadoEquipo.CreatePB') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a> 
                             <form action="/ListadoEquiposPDF" method="get">

                            <input type="hidden" name="PB" id="PB" value="1">
                            {{-- <a href="/ListadoEquiposPDF/{{ 1 }}"  target="_blank" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">PDF</a> --}}

                             <button  target="_blank" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">PDF</button>
                             </form>

                              <a href="/ListadosEquiposExel"  target="_blank" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Excel</a>
                        </div>
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

                                     @foreach ($ListadoEquipoPB->unique('departamento_id') as $listadoEquipoPB)
                                        <tr class="even:bg-gray-50">
                                            <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center" style='display:none;'>{{ ++$PB }}</td>
                                            <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$listadoEquipoPB->departamentos->Departamento}}</td>

                                                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                <form action="{{ route('ListadoEquipo.destroy', $listadoEquipoPB->id) }}" method="POST">
                                                    <a href="{{ route('ListadoEquipo.show', $listadoEquipoPB->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <div class="mt-4 px-4">
                                     {{ $ListadoEquipoPB->withQueryString()->links() }}
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
                                <p class="mt-2 text-sm text-gray-700">Listado del piso {{ __('P1') }}.</p>
                            </div>
                              <div class="md:col-span-5 text-center">
                            <div class="inline-flex items-end" >
                            <a type="button" href="{{ route('ListadoEquipo.CreateP1') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>  <form action="/ListadoEquiposPDF" method="get">


                            <input type="hidden" name="P1" id="P1" value="2">

                             <button type="submit"  class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">PDF</button>
                             </form>
                        </div>
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

                                         @foreach ($ListadoEquipoP1->unique('departamento_id') as $listadoEquipoP1)
                                            <tr class="even:bg-gray-50">
                                               <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center" style='display:none;'>{{ ++$P1}}</td>
                                            <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$listadoEquipoP1->departamentos->Departamento}}</td>



                                                <td class=" py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                    <form action="{{ route('ListadoEquipo.destroy', $listadoEquipoP1->id) }}" method="POST">
                                                        <a href="{{ route('ListadoEquipo.ShowP1', $listadoEquipoP1->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>

                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <div class="mt-4 px-4">
                                     {!! $ListadoEquipoP1->withQueryString()->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>


   

      <div id="p2yp3">
        <div class="py-12">
            <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="w-full">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Piso P2 Y P3') }}</h1>
                                <p class="mt-2 text-sm text-gray-700">Listado del piso {{ __('P2 Y P3') }}.</p>
                            </div>
                                 <div class="md:col-span-5 text-center">
                            <div class="inline-flex items-end" >
                            <a type="button" href="{{ route('ListadoEquipo.CreateP2YP3') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>  <form action="/ListadoEquiposPDF" method="get">
                             <input type="hidden" name="P2YP3" id="P2YP3" value="3">
                             <button type="submit"  class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">PDF</button>
                             </form>
                        </div>
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

                                        @foreach ($ListadoEquipoP2YP3->unique('departamento_id') as $lListadoEquipoP2YP3)
                                            <tr class="even:bg-gray-50">
                                            <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center" style='display:none;'>{{ ++$P2YP3 }}</td>
                                            <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$lListadoEquipoP2YP3->departamentos->Departamento}}</td>


                                                <td class=" py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                    <form action="{{ route('ListadoEquipo.destroy', $lListadoEquipoP2YP3->id) }}" method="POST">
                                                        <a href="{{ route('ListadoEquipo.showP2YP3', $lListadoEquipoP2YP3->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>

                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <div class="mt-4 px-4">
                                         {!! $ListadoEquipoP2YP3->withQueryString()->links() !!}
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

            $('#pb').toggle();


        });

        $('.P1').click(function(e){

          $('#p1').toggle();


         });

         $('.P2YP3').click(function(e){

        $('#p2yp3').toggle();


           });

    });




</script>
