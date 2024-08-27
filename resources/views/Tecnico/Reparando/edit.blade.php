<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update') }} Soporte
        </h2>
    </x-slot>
    <div class="">
        <div class="container max-w-screen-lg mx-auto">
          <div>
            <h2 class="font-semibold text-xl text-gray-600">Soporte</h2>
            <p class="text-gray-500 mb-6"></p>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <form method="POST" action="{{ route('ActualizarReparados.TecnicoReparacionActualizar', $soporte->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                   
                    <div class="space-y-6">
    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
        <div class="text-gray-600">
          <p class="font-medium text-lg">Solicitud de Soporte</p>
          <p></p>
        </div>
        <div class="lg:col-span-2">
          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
            <div class="md:col-span-1" >
                <label for="NControl">N° Control</label>
                     <x-text-input type="text" name="NControl" id="NControl" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" :value="old('NControl', substr(Auth()->user()->name,0,1).substr(Auth()->user()->surname,0,1). '-' .substr($soporte?->NControl , -3))"   autocomplete="NControl" placeholder="" readonly    />

                <x-input-error class="mt-2" :messages="$errors->get('NControl')"/>


              </div>
            <div class="md:col-span-2">
              <label for="Nombre">Nombre</label>
              <x-text-input type="text" id="Nombre" name="Nombre"  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" :value="old('Nombre', $soporte?->Nombre)" autocomplete="Nombres" placeholder="Nombres"/>
              <x-input-error class="mt-2" :messages="$errors->get('Nombre')"/>

            </div>
            <div class="md:col-span-2">
                <label for="Apellidos">Apellido</label>
                <x-text-input type="text" id="Apellidos" name="Apellidos" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" :value="old('Apellidos',$soporte?->Apellidos)" autocomplete="Apellidos" placeholder="Apellidos"/>
                <x-input-error class="mt-2" :messages="$errors->get('Apellidos')"/>

              </div>
              <div class="md:col-span-2">
                <label for="Cedula">Cedula</label>
                <x-text-input type="text" name="Cedula" id="Cedula" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" :value="old('Cedula',$soporte?->Cedula)" autocomplete="Cedula" placeholder="Cedula" />
                <x-input-error class="mt-2" :messages="$errors->get('Cedula')"/>
              </div>
            <div class="md:col-span-3">
              <label for="email">Correo</label>
              <x-text-input type="email" name="Correo" id="Correo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" :value="old('Correo',$soporte?->Correo)" autocomplete="Correo" placeholder="enahp@enahp.com"  />
              <x-input-error class="mt-2" :messages="$errors->get('Correo')"/>
            </div>

            <div class="md:col-span-2">
                <label for="Telefono">Telefono o Extension</label>
                <x-text-input type="text" name="Telefono" id="Telefono" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" :value="old('Telefono',$soporte?->Telefono)" autocomplete="Telefono"  placeholder="" />
                <x-input-error class="mt-2" :messages="$errors->get('Telefono')"/>
              </div>

            <div class="md:col-span-3">
              <label for="departamento_id">Departamento</label>
              <select name="departamento_id" id="departamento_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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

            <div class="md:col-span-2">
                <label for="ip_maquina">Ip de la maquina</label>
                <x-text-input type="text" name="ip_maquina" id="ip_maquina" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{old('ip_maquina',$soporte?->ip_equipo)}}" placeholder=""  readonly />
                <x-input-error class="mt-2" :messages="$errors->get('ip_maquina')"/>
              </div>

              <div class="md:col-span-3">
                <label for="address">Fecha solicitud</label>
                <x-text-input type="datetime"  name="FechaEntrada" id="FechaEntrada" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  value="{{ $soporte->FechaEntrada }}" placeholder="" readonly />
                  <x-input-error class="mt-2" :messages="$errors->get('FechaEntrada')"/>
              </div>

              <div class="md:col-span-2">
                <label for="address">Fecha / Hora Salida</label>
                <x-text-input type="datetime"  name="FechaSalida" id="FechaSalida" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  value=" {{$dates}}" placeholder="" readonly />
                  <x-input-error class="mt-2" :messages="$errors->get('FechaSalida')"/>
              </div>

            <div class="md:col-span-3">
                <label for="address">Tipo de Falla</label>
                <select name="tipo_falla_id" id="tipo_falla_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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

              <div class="md:col-span-3">
                <label for="address">Especifique el Motivo de la falla</label>
                    <textarea name="Motivo_Falla" id="Motivo_Falla" cols="79" rows="3">{{$soporte->Motivo_Falla}}</textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('Motivo_Falla')"/>
              </div>

              <div class="md:col-span-3">
                <label for="address">Solucion / Recomendaciones</label>
                    <textarea name="Solucion" id="Solucion" cols="79" rows="3">{{ $soporte->Solucion }}   </textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('Solucion')"/>
              </div>
              <div class="md:col-span-5">
                <x-text-input type="hidden" name="estatus_id" id="estatus_id" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="3" placeholder=""  readonly />
              </div>
              <div class="md:col-span-5">
                <label for="Telefono">Técnico</label>
                <x-text-input type="text" name="tecnico" id="tecnico" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{Auth()->user()->name}} {{ Auth()->user()->surname }}" autocomplete="tecnico"  placeholder="" readonly />
                <x-input-error class="mt-2" :messages="$errors->get('tecnico')"/>
              </div>

            <div class="md:col-span-5 text-center">
              <div class="inline-flex items-end" >
                <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar</button>

                <div ><a href="/Reparacion"><button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" >Regresar</button></a></div>

              </div>
            </div>
          </div>
        </div>
      </div>
    {{-- <div>
        <x-input-label for="departamento_id" :value="__('Departamento Id')"/>
        <x-text-input id="departamento_id" name="departamento_id" type="text" class="mt-1 block w-full" :value="old('departamento_id', $soporte?->departamento_id)" autocomplete="departamento_id" placeholder="Departamento Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('departamento_id')"/>
    </div>  --}}

</div>

                </form>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>
