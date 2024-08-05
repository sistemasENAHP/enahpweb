<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion de Punto') }}
        </h2>
    </x-slot>
    <h4 class="text-center"><strong>Listado de Puntos</strong></h4>
<br>
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
                            <p class="mt-2 text-sm text-gray-700">Listado de  todos los {{ __('Punto PB') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('ListadoPunto.CreatePB') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <table class="w-full divide-y divide-gray-300">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">ID</th>
                                        <th colspan="0" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500" >Departamento</th>

                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                         {{-- @php $sum = 0; @endphp --}}
                                        @foreach ($ListadoPuntoPB->unique('departamento_id') as $listadopunto)
                                        {{-- @php $sum += $listadopunto->departamento_id  @endphp --}}
                
                                        <tr class="even:bg-gray-50">
                                            <td class="py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{ ++$PB}}</td>
                                            <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center"><a href="#" data-modal-target="default-modal" data-modal-toggle="default-modal" class="modal">{{$listadopunto->departamentos->Departamento}}</a></td>
                                            <td class=" py-4 pl-4 pr-3 text-sm font-medium text-gray-900">

                                                <form action="{{ route('ListadoPunto.destroy', $listadopunto->id) }}" method="POST">
                                                    <a href="{{ route('ListadoPunto.show', $listadopunto->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2" >{{ __('Mostrar') }}</a>

                                                    {{-- <a href="{{ route('ListadoPunto.editPB', $listadopunto->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a> --}}
                                                    {{-- @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('ListadoPunto.destroy', $listadopunto->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a> --}}

                                                </form>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>

                                <div class="mt-4 px-4">
                                    {!! $ListadoPuntoPB->withQueryString()->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

         {{-- @include('Listado.ListadoPuntos.Modal.listadoModal') --}}

         @include('Listado.ListadoPuntos.Modal.listadoModal', ['title' => 'Mi Modal', 'content' => 'Contenido del modal'])

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
                                <p class="mt-2 text-sm text-gray-700">Listado del todo los punto del piso {{ __('P1') }}.</p>
                            </div>
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <a type="button" href="{{ route('ListadoPunto.CreateP1') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
                            </div>
                        </div>

                        <div class="flow-root">
                            <div class="mt-8 overflow-x-auto">
                                <div class="inline-block min-w-full py-2 align-middle">
                                    <table class="w-full divide-y divide-gray-300">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">ID</th>
                                        <th colspan="0" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500" >Departamento</th>
                                        </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">

                                       @foreach ($ListadoPuntoP1 as $listadopuntoP1)
                                        <tr class="even:bg-gray-50">
                                            <td class="py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{ ++$P1}}</td>
                                            <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$listadopuntoP1->departamentos->Departamento}}</td>
                                            <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900">

                                                <form action="{{ route('ListadoPunto.destroy', $listadopuntoP1->id) }}" method="POST">
                                                    <a href="{{ route('ListadoPunto.show', $listadopuntoP1->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>
                                                    {{-- <a href="{{ route('ListadoPunto.editP1', $listadopuntoP1->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('ListadoPunto.destroy', $listadopuntoP1->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a> --}}

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                        </tbody>
                                    </table>

                                    <div class="mt-4 px-4">
                                        {!! $ListadoPuntoP1->withQueryString()->links() !!}
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
                                <p class="mt-2 text-sm text-gray-700">Listado del todo los punto del piso {{ __('P2 Y P3') }}.</p>
                            </div>
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <a type="button" href="{{ route('ListadoPunto.CreateP2YP3') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
                            </div>
                        </div>

                        <div class="flow-root">
                            <div class="mt-8 overflow-x-auto">
                                <div class="inline-block min-w-full py-2 align-middle">
                                    <table class="w-full divide-y divide-gray-300">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">ID</th>
                                            <th colspan="0" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500" >Departamento</th>

                                        </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">

                                            @foreach ($ListadoPuntoP2YP3 as $listadopuntoP2YP3)
                                            <tr class="even:bg-gray-50">
                                                <td class="py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{ ++$P2YP3}}</td>
                                                <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$listadopuntoP2YP3->departamentos->Departamento}}</td>
                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" >

                                                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900">

                                                    <form action="{{ route('ListadoPunto.destroy', $listadopuntoP2YP3->id) }}" method="POST">
                                                        <a href="{{ route('ListadoPunto.show', $listadopuntoP2YP3->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>
                                                        {{-- <a href="{{ route('ListadoPunto.editP2YP3', $listadopuntoP2YP3->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('ListadoPunto.destroy', $listadopuntoP2YP3->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a> --}}

                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <div class="mt-4 px-4">
                                        {!! $ListadoPuntoP2YP3->withQueryString()->links() !!}
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



