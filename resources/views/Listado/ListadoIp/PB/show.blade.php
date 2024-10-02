<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $ListaIp->id ?? __('Mostrar') . " " . __('Mostrar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            {{-- <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Mostrar') }} Listado  del piso {{$ListaIp->pisos->Pisos}}</h1>
                            <p class="mt-2 text-sm text-gray-700">Destalles del {{$ListaIp->pisos->Pisos}}.</p> --}}
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('ListadoIp.index') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Regresar</a>
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

                                               

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Escuela</th>
                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Ministerio</th>

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Observaciones</th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">

                                                @foreach ($ListadoIpPB as $listadoipPB)
                                                @if($listadoipPB->departamento_id == $Listado->departamento_id)
                                                <tr class="even:bg-gray-50">
                                          <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{++$PB}}</td>
                                                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$listadoipPB->departamentos->Departamento}}</td>
                                                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$listadoipPB->Nombre}} - {{$listadoipPB->Apellido}} </td>
                                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$listadoipPB->Cedula}}</td>
                                                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$listadoipPB->Equipo}}</td>
                                                    
                                                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoipPB->Escuela }}</td>

                                                    <td class="px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoipPB->Ministerio }}</td>
                                                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$listadoipPB->Observacion}}</td>

                                                    <td class=" py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                        <form action="{{ route('ListadoIp.destroy', $listadoipPB->id) }}" method="POST">
                                                            <a href="{{ route('ListadoIp.editPB', $listadoipPB->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('ListadoIp.destroy', $listadoipPB->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                        </table>

                                        <div class="mt-4 px-4">
                                            {!! $ListadoIpPB->withQueryString()->links() !!}
                                        </div>
                                        {{-- <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Departamento</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListaIp->departamentos->Departamento }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Nombre</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListaIp->Nombre }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Apellidos</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListaIp->Apellido }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Cedula</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListaIp->Cedula }}</dd>
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Equipo</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListaIp->Equipo }}</dd>
                                        </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Escuela</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListaIp->Escuela }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Ministerio</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListaIp->Ministerio }}</dd>
                                </div>

                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Observacion</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListaIp->Observacion }}</dd>
                                </div> --}}

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
