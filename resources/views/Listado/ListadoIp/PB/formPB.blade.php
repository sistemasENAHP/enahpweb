<div class="space-y-6">
    <div class="grid gap-3 gap-y-2 text-sm grid-cols-1 lg:grid-cols-2">
        <div class="text-gray-600">
          <p class="font-medium text-lg ">Listado Ip</p>
          <p></p>
        </div>
        <div class="lg:col-span-2">
        <div class="grid gap-3 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">

        <x-text-input type="hidden" id="piso_idPB" name="piso_idPB" :value="1,old('Nombre',$ListaIp?->Nombre)" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="PB" placeholder="PB"/>

        <div class="md:col-span-5" >
        <label for="departamento_id">Departamento</label>
        <select name="departamento_id" id="departamento_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option>Seleccione un Departamento</option>
          {{$sel = 0}}
          @foreach($Departamentos as $dep)
          @if($dep->id == $ListaIp->departamento_id)
          {{$sel = 'selected'}}
          @else
          {{$sel = ''}}
          @endif
                  <option value="{{$dep->id}}" {{$sel}} >{{$dep->Departamento}}</option>
          @endforeach
        </select>
    </div>
    
    <div class="md:col-span-5">
                <label for="dep"></label>
               <select name="dep" id="dep" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></select>
            </div>


    <div class="md:col-span-2">
        <label for="Nombre">Nombre</label>
        <x-text-input type="text" id="Nombre" name="Nombre"  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Nombres" placeholder="Nombres" :value="old('Nombre',$ListaIp?->Nombre)" />
        <x-input-error class="mt-2" :messages="$errors->get('Nombre')"/>

      </div>
      <div class="md:col-span-2">
          <label for="Apellidos">Apellido</label>
          <x-text-input type="text" id="Apellidos" name="Apellidos" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  autocomplete="Apellidos" placeholder="Apellidos" :value="old('Apellido',$ListaIp?->Apellido)" />
          <x-input-error class="mt-2" :messages="$errors->get('Apellidos')"/>

        </div>
        <div class="md:col-span-2">
            <label for="Cedula">Cedula</label>
            <x-text-input type="text" name="Cedula" id="Cedula" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Cedula" placeholder="Cedula" :value="old('Cedula',$ListaIp?->Cedula)"  maxlength='9' onKeypress='if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;'  />
            <x-input-error class="mt-2" :messages="$errors->get('Cedula')"/>
          </div>
          <div class="md:col-span-2">
            <label for="Cedula">Equipo</label>
                <select name="Equipo" id="Equipo" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    <option >Selecciones</option>
                    <option value="PC"{{$ListaIp->Equipo == 'PC' ? 'selected' : ''}}>PC (Computadora) </option>
                    <option value="Impresora"{{$ListaIp->Equipo == 'Impresora' ? 'selected' : ''}}>Impresora</option>
                    <option value="Telefono"{{$ListaIp->Equipo == 'Telefono' ? 'selected' : ''}}>Telefono</option>
                    <option value="Route"{{$ListaIp->Equipo == 'Route' ? 'selected' : ''}}>Route</option>
                </select>
          </div>

          <div class="md:col-span-2">
            <label for="ip_escuela">IP Escuela</label>
            <x-text-input type="text" name="ip_escuela" id="ip_escuela" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="ip_escuela" placeholder="IP Escuela" :value="old('Escuela',$ListaIp?->Escuela)" />
            <x-input-error class="mt-2" :messages="$errors->get('ip_escuela')"/>
          </div>
          <div class="md:col-span-2">
            <label for="ip_ministerio">IP Ministerio</label>
            <x-text-input type="text" name="ip_ministerio" id="ip_ministerio" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="ip_ministerio" placeholder="IP Ministerio" :value="old('Ministerio',$ListaIp?->Ministerio)" />
            <x-input-error class="mt-2" :messages="$errors->get('ip_ministerio')"/>
          </div>

         {{--  <div class="md:col-span-2">
            <label for="ip_ministerio">Punto de Red</label>
            <x-text-input type="text" name="punto_red" id="punto_red" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="punto_red" placeholder="Punto de Red" value="" />
            <x-input-error class="mt-2" :messages="$errors->get('punto_red')"/>
          </div> --}}
          <div class="md:col-span-2">
            <label for="ip_ministerio">Observaciones</label>
            <textarea name="Observaciones" id="Observaciones" cols="118" rows="3">{{$ListaIp->Observacion}}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('Observaciones')"/>
          </div>
          <div class="md:col-span-5 text-center">
            <div class="inline-flex items-end" >
              <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar</button>

              <div ><a href="/ListadoIp"><button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" >Regresar</button></a></div>

            </div>
          </div>
        </div>
        </div>
    </div>
</div>
