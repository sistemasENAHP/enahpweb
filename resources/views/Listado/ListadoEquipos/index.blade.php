<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listao de Equipo') }}
        </h2>
    </x-slot>
<h4 class="text-center"><strong>Listado de Equipos</strong></h4>
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
                            <p class="mt-2 text-sm text-gray-700">Listado del piso {{ __('PB') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('ListadoEquipo.CreatePB') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
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

                                        <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500 ">Usuario</th>

                                        <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500 ">Cedula</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Equipo</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Nombre de Equipo</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Marca</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cantidad Equipo</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Sistema Operativo</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Version</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Mouse</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Teclado</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Corneta</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Regulador</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cap GB Disco Duro</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Mac</th>


                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Escuela</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Ministerio</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Proxy - DNS</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Punto de Red</th>


                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Observaciones</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Caso Especiales</th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">

                                     @foreach ($ListadoEquipoPB as $listadoEquipoPB)
                                        <tr class="even:bg-gray-50">
                                            <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{ ++$PB }}</td>
                                            <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$listadoEquipoPB->departamentos->Departamento}}</td>
                                             <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$listadoEquipoPB->Nombre}} - {{ $listadoEquipoPB->Apellidos }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Cedula }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Equipo }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Nombre_Equipo }}</td>

                                             <td class="px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Marca }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Cantidad_Equipo }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Sistema_Operativo }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Version }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Mouse }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Teclado }}</td>

                                              <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Corneta }}</td>

                                              <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Regulador }}</td>

                                              <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->DiscoDuroGB }}</td>

                                              <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->MacAdress }}</td>

                                               <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->ip_escuela }}</td>

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->ip_ministerio }}</td>

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->ProxyDns }}</td>

                                                 <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->PuntoRed }}</td>

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Observacion }}</td>

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->CasoEspeciales }}</td>


                                                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                <form action="{{ route('ListadoEquipo.destroy', $listadoEquipoPB->id) }}" method="POST">
                                                    <a href="{{ route('ListadoEquipo.show', $listadoEquipoPB->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>
                                                    <a href="{{ route('ListadoEquipo.editPB', $listadoEquipoPB->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('ListadoEquipo.destroy', $listadoEquipoPB->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
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
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <a type="button" href="{{ route('ListadoEquipo.CreateP1') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
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

                                            <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500 ">Usuario</th>

                                            <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500 ">Cedula</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Equipo</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Nombre de Equipo</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Marca</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cantidad Equipo</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Sistema Operativo</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Version</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Mouse</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Teclado</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Corneta</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Regulador</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cap GB Disco Duro</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Mac</th>


                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Escuela</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Ministerio</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Proxy - DNS</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Punto de Red</th>


                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Observaciones</th>


                                            <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">Caso Especiales</td>

                                        </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">

                                         @foreach ($ListadoEquipoP1 as $listadoEquipoP1)
                                            <tr class="even:bg-gray-50">
                                               <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{ ++$P1}}</td>
                                            <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$listadoEquipoP1->departamentos->Departamento}}</td>
                                             <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$listadoEquipoP1->Nombre}} - {{ $listadoEquipoP1->Apellidos }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Cedula }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Equipo }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Nombre_Equipo }}</td>

                                             <td class="px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Marca }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Cantidad_Equipo }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Sistema_Operativo }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Version }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Mouse }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Teclado }}</td>

                                              <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Corneta }}</td>

                                              <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Regulador }}</td>

                                              <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->DiscoDuroGB }}</td>

                                              <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->MacAdress }}</td>

                                               <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->ip_escuela }}</td>

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->ip_ministerio }}</td>

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->ProxyDns }}</td>

                                                 <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->PuntoRed }}</td>

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Observacion }}</td>

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->CasoEspeciales }}</td>


                                                <td class=" py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                    <form action="{{ route('ListadoEquipo.destroy', $listadoEquipoP1->id) }}" method="POST">
                                                        <a href="{{ route('ListadoEquipo.show', $listadoEquipoP1->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>
                                                        <a href="{{ route('ListadoEquipo.editP1', $listadoEquipoP1->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('ListadoEquipo.destroy', $listadoEquipoP1->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
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


      {{----------------------------------------------------------P2 Y P3---------------------------------------------}}

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
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <a type="button" href="{{ route('ListadoEquipo.CreateP2YP3') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
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

                                            <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500 ">Usuario</th>

                                            <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500 ">Cedula</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Equipo</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Nombre de Equipo</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Marca</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cantidad Equipo</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Sistema Operativo</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Version</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Mouse</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Teclado</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Corneta</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Regulador</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cap GB Disco Duro</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Mac</th>


                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Escuela</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Ministerio</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Proxy - DNS</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Punto de Red</th>


                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Observaciones</th>

                                            <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500"> Caso Especiales</th>

                                           
                                        </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">

                                        @foreach ($ListadoEquipoP2YP3 as $lListadoEquipoP2YP3)
                                            <tr class="even:bg-gray-50">
                                            <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{ ++$P2YP3 }}</td>
                                            <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$lListadoEquipoP2YP3->departamentos->Departamento}}</td>
                                             <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$lListadoEquipoP2YP3->Nombre}} - {{ $lListadoEquipoP2YP3->Apellidos }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->Cedula }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->Equipo }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->Nombre_Equipo }}</td>

                                             <td class="px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->Marca }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->Cantidad_Equipo }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->Sistema_Operativo }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->Version }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->Mouse }}</td>

                                             <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->Teclado }}</td>

                                              <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->Corneta }}</td>

                                              <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->Regulador }}</td>

                                              <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->DiscoDuroGB }}</td>

                                              <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->MacAdress }}</td>

                                               <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->ip_escuela }}</td>

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->ip_ministerio }}</td>

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->ProxyDns }}</td>

                                                 <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->PuntoRed }}</td>

                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->Observacion }}</td>
v
                                                <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $lListadoEquipoP2YP3->CasoEspeciales }}</td>



                                                <td class=" py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                    <form action="{{ route('ListadoEquipo.destroy', $lListadoEquipoP2YP3->id) }}" method="POST">
                                                        <a href="{{ route('ListadoEquipo.show', $lListadoEquipoP2YP3->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>
                                                        <a href="{{ route('ListadoEquipo.editP2YP3', $lListadoEquipoP2YP3->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('ListadoEquipo.destroy', $lListadoEquipoP2YP3->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
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
