<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $soporte->name ?? __('Mostrar') . " " . __('Soporte') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Listado del ') }} Piso {{$ListadoEquipo->pisos->Pisos}}</h1>
                            <p class="mt-2 text-sm text-gray-700">Detalles del {{ $ListadoEquipo->pisos->Pisos}}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('ListadoEquipo.index') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Regresar</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <div class="mt-6 border-t border-gray-100">
                                    <dl class="divide-y divide-gray-100">
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

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Bits</th>
        
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Version</th>

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Escuela</th>
        
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Ministerio</th>

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Mac</th>
                                                
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cap GB Disco Duro</th>
                                                
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Memoria Ram</th>
                     
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Mouse</th>
        
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Teclado</th>
        
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Corneta</th>
        
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Regulador</th>
                                                                                                              
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Proxy</th>

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Dns</th>

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Puerto</th>

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cable Corriente</th>

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cable VGA/HDMI</th>

                                                 
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Impresora</th>

                                                 
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Telefono</th>

                                                 
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Route</th>
        
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Punto de Red</th>
                                              
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cajetin de Puntos</th>
        
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Observaciones</th>
        
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Caso Especiales</th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">
        
                                             @foreach ($ListadoEquipoP1 as $listadoEquipoP1)
                                             @if($listadoEquipoP1->departamento_id == $ListadoEquipo->departamento_id)
                                                <tr class="even:bg-gray-50">
                                                    <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{ ++$P1 }}</td>
                                                    <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$listadoEquipoP1->departamentos->Departamento}}</td>
                                                     <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$listadoEquipoP1->Nombre}} - {{ $listadoEquipoP1->Apellidos }}</td>
        
                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Cedula }}</td>
        
                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Equipo }}</td>
        
                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Nombre_Equipo }}</td>
        
                                                     <td class="px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Marca }}</td>
        
                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Cantidad_Equipo }}</td>
        
                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Sistema_Operativo }}</td>

                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->bits }}</td>
                                                     
        
                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Version }}</td>

                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->ip_escuela }}</td>
        
                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->ip_ministerio }}</td>

                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->MacAdress }}</td>

                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->DiscoDuroGB }}</td>

                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->MemoriaRam }}</td>
        
        
                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Mouse }}</td>
        
                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Teclado }}</td>
        
                                                      <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Corneta }}</td>
        
                                                      <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Regulador }}</td>
        
                                                      <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Proxy }}</td>
                                                      
        
                                                     
                                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Dns }}</td>

                                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Puerto }}</td>

                                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->CableCorriente }}</td>

                                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->CableVGAHDMI }}</td>

                                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Impresora }}</td>

                                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Telefono }}</td>

                                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Route }}</td>
        
                                                         <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->PuntoRed }}</td>

                                                         <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->CajetinPuntos }}</td>
        
                                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->Observacion }}</td>
        
                                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoP1->CasoEspeciales }}</td>
        
        
                                                        <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                        <form action="{{ route('ListadoEquipo.destroy', $listadoEquipoP1->id) }}" method="POST">
                                                            {{-- <a href="{{ route('ListadoEquipo.show', $listadoEquipoPB->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a> --}}
                                                            <a href="{{ route('ListadoEquipo.editP1', $listadoEquipoP1->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('ListadoEquipo.destroy', $listadoEquipoP1->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                        </table>
        
                                        <div class="mt-4 px-4">
                                             {{ $ListadoEquipoP1->withQueryString()->links() }}
                                        </div>
                                        

                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
