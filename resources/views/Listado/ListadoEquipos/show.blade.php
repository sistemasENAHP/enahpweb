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
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Ver') }} Piso {{$ListadoEquipo->pisos->Pisos}}</h1>
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
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Departamento</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->departamentos->Departamento }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Nombre</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->Nombre }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Apellidos</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->Apellidos }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Cedula</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->Cedula }}</dd>
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Equipo</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->Equipo }}</dd>
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Nombre de Equipo</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->Nombre_Equipo }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Marca del Equipo</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->Marca }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Cantida de  Equipo</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->Cantidad_Equipo }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Sistema Operativo</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->Sistema_Operativo }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Version</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->Version }}</dd>
                                        </div>
                                        <div class="md:col-span-4">
                                            <br>
                                            <div class="grid grid-cols-8 place-items-center">
                                           @if($ListadoEquipo->Mouse == 'on')
                                            <label for="">Mouse</label>
                                            <input type="checkbox" id="Mouse" name="Mouse" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" :value="old('Mouse',$ListadoEquipo?->Mouse)" checked />
                                            @else
                                            <label for="">Mouse</label>
                                            <input type="checkbox" id="Mouse" name="Mouse" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" :value="old('Mouse',$ListadoEquipo?->Mouse)"  />
                                            @endif
                                            @if($ListadoEquipo->Teclado == 'on')
                                            <label for="">Teclado</label>
                                            <input type="checkbox" id="Teclado" name="Teclado" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" :value="old('Teclado',$ListadoEquipo?->Teclado)" checked />
                                            @else
                                            <label for="">Teclado</label>
                                            <input type="checkbox" id="Teclado" name="Teclado" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" :value="old('Teclado',$ListadoEquipo?->Teclado)"  />
                                            @endif

                                            @if($ListadoEquipo->Corneta == 'on')
                                            <label for="">Corneta</label>
                                            <input type="checkbox" id="Corneta" name="Corneta" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" :value="old('Corneta',$ListadoEquipo?->Corneta)" checked />
                                            @else
                                            <label for="">Corneta</label>
                                            <input type="checkbox" id="Corneta" name="Corneta" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" :value="old('Corneta',$ListadoEquipo?->Corneta)"  />
                                            @endif

                                            @if($ListadoEquipo->Regulador == 'on')
                                            <label for="">Regulador</label>
                                            <input type="checkbox" id="Regulador" name="Regulador" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" :value="old('Regulador',$ListadoEquipo?->Regulador)" checked />
                                            @else

                                            <label for="">Regulador</label>
                                            <input type="checkbox" id="Regulador" name="Regulador" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" :value="old('Regulador',$ListadoEquipo?->Regulador)"  />
                                            @endif
                                          </div>
                                          <br>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Capacidad Disco Duro GB</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->DiscoDuroGB }}</dd>
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">MAC ADRESS</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->MacAdress }}</dd>
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">IP Escuela</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->ip_escuela }}</dd>
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">IP Ministerio</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->ip_ministerio }}</dd>
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Proxy / Dns</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->ProxyDns }}</dd>
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Punto de Red</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->PuntoRed }}</dd>
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Observaciones</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->Observacion }}</dd>
                                        </div>

                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Caso Especiales</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $ListadoEquipo->CasoEspeciales }}</dd>
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
