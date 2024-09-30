<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $soporte->name ?? __('Show') . " " . __('Soporte') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            {{-- <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Ver') }} Piso {{$ListadoPuntoPB->pisos->Pisos}}</h1> --}}
                            {{-- <p class="mt-2 text-sm text-gray-700">Detalles del {{ $ListadoPuntoPB->pisos->Pisos}}.</p> --}}
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('ListadoPunto.index') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Regresar</a>
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

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Punto de Red</th>

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Puerto Patch Panel</th>

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">N° Puerto de Switch</th>

                                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Observaciones</th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">

                                                @foreach ($ListadoPuntoP2YP3 as $listadopunto)
                                                @if($listadopunto->departamento_id == $Listado->departamento_id)

                                                <tr class="even:bg-gray-50">
                                                    <td class="py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{++$P2YP3 }}</td>
                                                    <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center"><a href="#" data-modal-target="default-modal" data-modal-toggle="default-modal" class="modal">{{$listadopunto->departamentos->Departamento}}</a></td>

                                                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" >{{$listadopunto->Nombre}} - {{$listadopunto->Apellido}}</td>
                                                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" >{{$listadopunto->Cedula}}</td>
                                                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" >{{$listadopunto->Equipo}}</td>
                                                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" >{{$listadopunto->Puntos }}</td>

                                                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" >{{$listadopunto->PuertoPatch}}</td>

                                                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$listadopunto->NPuertoSwitch}}</td>
                                                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{$listadopunto->Observacion}}</td>

                                                    <td class=" py-4 pl-4 pr-3 text-sm font-medium text-gray-900">

                                                        <form action="{{ route('ListadoPunto.destroy', $listadopunto->id) }}" method="POST">
                                                            {{-- <a href="{{ route('ListadoPunto.show', $listadopunto->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a> --}}

                                                            <a href="{{ route('ListadoPunto.editP2YP3', $listadopunto->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('ListadoPunto.destroy', $listadopunto->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>

                                                        </form>
                                                    </td>
                                                </tr>
                                            @endif
                                            @endforeach
                                            </tbody>
                                        </table>

                                        <div class="mt-4 px-4">
                                            {!! $ListadoPuntoP2YP3->withQueryString()->links() !!}
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
