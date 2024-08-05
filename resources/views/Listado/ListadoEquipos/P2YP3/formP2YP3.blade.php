<div class="space-y-6">
    <div class="grid gap-3 gap-y-2 text-sm grid-cols-1 lg:grid-cols-2">
        <div class="text-gray-600">
          <p class="font-medium text-lg ">Registrar Equipos</p>
          <p></p>
        </div>
        <div class="lg:col-span-2">
        <div class="grid gap-3 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">

            <x-text-input type="hidden" id="piso_idP2YP3" name="piso_idP2YP3" :value=3 class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="P2YP3" placeholder="P2YP3"/>

            <div class="md:col-span-5" >
        <label for="departamento_id">Departamento</label>
        <select name="departamento_id" id="departamento_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          {{$sel = 0}}
          @foreach($Departamentos as $dep)
          @if($dep->id == $ListadoEquipo->departamento_id)
          {{$sel = 'selected'}}
          @else
          {{$sel = ''}}
          @endif
                  <option value="{{$dep->id}}" {{$sel}} >{{$dep->Departamento}}</option>
          @endforeach
        </select>
    </div>

    <div class="md:col-span-2">
        <label for="Nombre">Nombre</label>
        <x-text-input type="text" id="Nombre" name="Nombre"  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Nombres" placeholder="Nombres" :value="old('Nombre',$ListadoEquipo?->Nombre)" />
        <x-input-error class="mt-2" :messages="$errors->get('Nombre')"/>

      </div>
      <div class="md:col-span-2">
          <label for="Apellidos">Apellido</label>
          <x-text-input type="text" id="Apellidos" name="Apellidos" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  autocomplete="Apellidos" placeholder="Apellidos" :value="old('Apellido',$ListadoEquipo?->Apellidos)" />
          <x-input-error class="mt-2" :messages="$errors->get('Apellidos')"/>

        </div>
        <div class="md:col-span-1">
          <label for="Cedula">Cedula</label>
          <x-text-input type="text" name="Cedula" id="Cedula" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Cedula" placeholder="Cedula" :value="old('Cedula',$ListadoEquipo?->Cedula)" />
          <x-input-error class="mt-2" :messages="$errors->get('Cedula')"/>
        </div>

        <div class="md:col-span-2">
            <label for="Cedula">Equipo</label>
            <x-text-input type="text" name="Equipo" id="Equipo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Equipo" placeholder="Equipo" :value="old('Equipo',$ListadoEquipo?->Equipo)" />
            <x-input-error class="mt-2" :messages="$errors->get('Equipo')"/>
          </div>

        <div class="md:col-span-2">
            <label for="Cedula">Nombre de Equipo</label>
            <x-text-input type="text" name="NombreEquipo" id="NombreEquipo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="NombreEquipo" placeholder="Nombre de Equipo" :value="old('Nombre_Equipo',$ListadoEquipo?->Nombre_Equipo)" />
            <x-input-error class="mt-2" :messages="$errors->get('NombreEquipo')"/>
          </div>

          <div class="md:col-span-1">
            <label for="marca_equipo">Marca Equipo</label>
            <x-text-input type="text" name="marca_equipo" id="marca_equipo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="marca_equipo" placeholder="Marca del Equipo" :value="old('Marca',$ListadoEquipo?->Marca)" />
            <x-input-error class="mt-2" :messages="$errors->get('marca_equipo')"/>
          </div>
          <div class="md:col-span-2">
           <label for="cantidad_Equipo">Cantida de  Equipo</label>
            <x-text-input type="text" name="cantidad_Equipo" id="cantidad_Equipo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="cantidad_Equipo" placeholder="Cantidad de Equipo" :value="old('Cantidad_Equipo',$ListadoEquipo?->Cantidad_Equipo)" />
            <x-input-error class="mt-2" :messages="$errors->get('cantidad_Equipo')"/>
          </div>
          <div class="md:col-span-2">
            <label for="Cedula">Sistema Operativo</label>
            <x-text-input type="text" name="sistema_operativo" id="sistema_operativo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="sistema_operativo" placeholder="Sistema Operactivo" :value="old('Sistema_Operativo',$ListadoEquipo?->Sistema_Operativo)" />
            <x-input-error class="mt-2" :messages="$errors->get('sistema_operativo')"/>
          </div>
          <div class="md:col-span-1">
            <label for="Cedula">Version</label>
            <x-text-input type="text" name="Version" id="Version" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Version" placeholder="Version" :value="old('Version',$ListadoEquipo?->Version)" />
            <x-input-error class="mt-2" :messages="$errors->get('Version')"/>
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

          <div class="md:col-span-2">

            <label for="Cedula">Capacidad Disco Duro GB</label>
            <x-text-input type="text" name="discoduro" id="discoduro" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="discoduro" placeholder="Disco Duro" :value="old('DiscoDuroGB',$ListadoEquipo?->DiscoDuroGB)" />
            <x-input-error class="mt-2" :messages="$errors->get('discoduro')"/>
          </div>
          <div class="md:col-span-2">
            <label for="Cedula">MAC ADRESS</label>
            <x-text-input type="text" name="mac" id="mac" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="mac" placeholder="MAC ADRESS" :value="old('MacAdress',$ListadoEquipo?->MacAdress)" />
            <x-input-error class="mt-2" :messages="$errors->get('mac')"/>
          </div>
          <div class="md:col-span-1">
            <label for="ip_escuela">IP Escuela</label>
            <x-text-input type="text" name="ip_escuela" id="ip_escuela" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="ip_escuela" placeholder="IP Escuela" :value="old('ip_escuela',$ListadoEquipo?->ip_escuela)" />
            <x-input-error class="mt-2" :messages="$errors->get('ip_escuela')"/>
          </div>
          <div class="md:col-span-2">
            <label for="ip_ministerio">IP Ministerio</label>
            <x-text-input type="text" name="ip_ministerio" id="ip_ministerio" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="ip_ministerio" placeholder="IP Ministerio" :value="old('ip_ministerio',$ListadoEquipo?->ip_ministerio)" />
            <x-input-error class="mt-2" :messages="$errors->get('ip_ministerio')"/>
          </div>

          <div class="md:col-span-2">
            <label for="proxy_dns">Proxy / Dns</label>
            <x-text-input type="text" name="proxy_dns" id="proxy_dns" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="proxy_dns" placeholder="Proxy / dns" :value="old('ProxyDns',$ListadoEquipo?->ProxyDns)" />
            <x-input-error class="mt-2" :messages="$errors->get('proxy_dns')"/>
          </div>

          <div class="md:col-span-1">
            <label for="ip_ministerio">Punto de Red</label>
            <x-text-input type="text" name="punto_red" id="punto_red" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="punto_red" placeholder="Punto de Red" :value="old('PuntoRed',$ListadoEquipo?->PuntoRed)" />
            <x-input-error class="mt-2" :messages="$errors->get('punto_red')"/>
          </div>
          <div class="md:col-span-3">
            <label for="ip_ministerio">Observaciones</label>
            <textarea name="Observaciones" id="Observaciones" cols="55" rows="3">{{ $ListadoEquipo->Observacion }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('Observaciones')"/>
          </div>
          <div class="md:col-span-2">
            <label for="ip_ministerio">Caso Especiales</label>
            <textarea name="caso_especiales" id="caso_especiales" cols="59" rows="3">{{ $ListadoEquipo->CasoEspeciales }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('caso_especiales')"/>
          </div>
          <div class="md:col-span-5 text-center">
            <div class="inline-flex items-end" >
              <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar</button>

              <div ><a href="/ListadoEquipo"><button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" >Regresar</button></a></div>

            </div>
          </div>
        </div>
        </div>
    </div>
</div>
