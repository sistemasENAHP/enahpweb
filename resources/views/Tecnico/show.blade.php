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
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Ver') }} Soporte</h1>
                            <p class="mt-2 text-sm text-gray-700">Detalles {{ __('Soporte') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('Tecnico.index') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Regresar</a>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('Tecnico.update', $soporte->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf
                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <div class="mt-6 border-t border-gray-100">
                                    <dl class="divide-y divide-gray-100">
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Ncontrol</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0" id="NControl" name="NControl">{{ $soporte->NControl }}</dd><input type="hidden" name="NControl" value="{{ $soporte->NControl }}">
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900" >Nombre</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0" id="Nombre" name="Nombre">{{ $soporte->Nombre }}</dd><input type="hidden" name="Nombre" value="{{ $soporte->Nombre }}">
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Apellidos</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $soporte->Apellidos }}</dd><input type="hidden" name="Apellidos" value="{{ $soporte->Apellidos }}">
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Cedula</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $soporte->Cedula }}</dd><input type="hidden" name="Cedula" value="{{ $soporte->Cedula }}">
                                        </div>

                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Correo</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $soporte->Correo }}</dd><input type="hidden" name="Correo" value="{{ $soporte->Correo }}">
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Telefono</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $soporte->Telefono }}</dd><input type="hidden" name="Telefono" value="{{ $soporte->Telefono }}">
                                        </div>
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Fecha Llegada</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $soporte->FechaEntrada }}</dd><input type="hidden" name="FechaEntrada" value="{{ $soporte->FechaEntrada }}">
                                        </div>

                                         <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Fecha Salida</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $soporte->FechaSalida }}</dd><input type="hidden" name="FechaSalida" value="{{ $soporte->FechaSalida }}">
                                        </div>

                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Departamento</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $soporte->departamentos->Departamento }}</dd><select id="departamento_id" name="departamento_id" style="display: none;">
                                      {{$sel = 0}}
                @foreach($Departamentos as $dep)
                @if($dep->id == $soporte->departamento_id)
                {{$sel = 'selected'}}
                @else
                {{$sel = ''}}
                @endif
                        <option value="{{$dep->id}}" {{$sel}} >{{$dep->Departamento}}</option>
                @endforeach
            </select>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Tipo Falla</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $soporte->tipoFallas->Tipo_Falla }}</dd><select id="tipo_falla_id" name="tipo_falla_id" style="display: none;">
                                         {{$sel = 0}}
                  @foreach ($TipoFalla as $tipo )
                  @if($tipo->id == $soporte->tipo_falla_id)
                  {{$sel = 'selected'}}
                  @else
                  {{$sel = ''}}
                  @endif
                       <option value="{{$tipo->id}}" {{$sel}}>{{$tipo->Tipo_Falla}}</option>
                  @endforeach
                                    </select>
                                </div>



                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Ip Maquina</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $soporte->ip_equipo }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Motivo Falla</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $soporte->Motivo_Falla }}</dd>
                                    <input type="hidden" name="Motivo_Falla" value="{{  $soporte->Motivo_Falla }}">
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Solucion</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $soporte->Solucion }}</dd><input type="hidden" name="Solucion" value="{{  $soporte->Solucion }}">
                                </div>
                                <div class="md:col-span-5">
                                    <x-text-input type="hidden" name="estatus_id" id="estatus_id" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="2" placeholder=""  readonly />
                                  </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Técnico</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0" id="tecnico" name="tecnico" >{{ Auth()->user()->name }} {{ Auth()->user()->surname }}</dd><input type="hidden" name="tecnico" value="{{ Auth()->user()->name }} {{ Auth()->user()->surname }}">
                                    {{-- <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0" id="tecnico" name="tecnico" >{{ $soporte->Tecnico }}</dd> --}}
                                </div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-5 text-center">
              <div class="inline-flex items-end" >
                <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Aceptar Soporte</button>
            </div>
                </div>
                   </form>
            </div>
        </div>
    </div>
</x-app-layout>
