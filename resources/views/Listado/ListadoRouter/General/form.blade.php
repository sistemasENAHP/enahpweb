<div class="space-y-6">
    <div class="grid gap-3 gap-y-2 text-sm grid-cols-1 lg:grid-cols-2">
        <div class="text-gray-600">
          <p class="font-medium text-lg ">Listado de Router</p>
          <p></p>
        </div>
        <div class="lg:col-span-2">
        <div class="grid gap-3 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
     <div class="md:col-span-2" >
                <label for="departamento_id">Departamento</label>
                <select name="departamento_id" id="departamento_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option >Seleccione un Departamento</option>
                    {{$sel = 0}}
                  @foreach($Departamentos as $dep)
                  @if($dep->id == $Router->departamento_id)
                  {{$sel = 'selected'}}
                  @else
                  {{$sel = ''}}
                  @endif
                    
                          <option value="{{$dep->id}}" {{$sel}} >{{$dep->Departamento}}</option>
                         
                  @endforeach
                </select>
            </div>

               <div class="md:col-span-2">
        <label for="dep">Usuario</label>
       <select name="user_id" id="user_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="">Seleccione</option>
        {{$sel = 0}}
        @foreach($User as $user)
        @if($user->id == $Router->user_id)
        {{$sel = 'selected'}}
        @else

        {{$sel = ''}}

        @endif

                <option value="{{$user->id}}" {{$sel}}>{{$user->name}} {{$user->surname}}</option>

        @endforeach


       </select>
    </div>

             <div class="md:col-span-2">
            <label for="ip_ministerio">Ubicacion</label>
            <select id="ip_piso" name="id_piso" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     <option >Seleccione Piso</option>
                    {{$sel = 0}}
                  @foreach($Pisos as $pisos)
                  @if($pisos->id == $Router->piso_id)
                  {{$sel = 'selected'}}
                  @else
                  {{$sel = ''}}
                  @endif
                    
                          <option value="{{$pisos->id}}" {{$sel}} >{{$pisos->Pisos}}</option>
                         
                  @endforeach

              
            </select>
          </div>

           <div class="md:col-span-2">
            <label for="ip_escuela">Equipo</label>
            <x-text-input type="text" name="Equipo" id="Equipo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="equipo" placeholder="" :value="'Router',old('Router',$Router?->Equipo)" />
            <x-input-error class="mt-2" :messages="$errors->get('Equipo')"/>
          </div>

          <div class="md:col-span-2">
            <label for="ip_escuela">Nombre de Wifi</label>
            <x-text-input type="text" name="Nombre_Wifi" id="Nombre_Wifi" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="equipo" placeholder="Nombre Wifi" :value="old('Nombre_Wifi',$Router?->Nombre_Wifi)" />
            <x-input-error class="mt-2" :messages="$errors->get('Nombre_Wifi')"/>
          </div>

            <div class="md:col-span-2">
            <label for="ip_escuela">Clave Wifi</label>
            <x-text-input type="text" name="Clave_Wifi" id="Clave_Wifi" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Clave_Wifi" placeholder="Clave Wifi" :value="old('Clave_Wifi',$Router?->Clave_Wifi)" />
            <x-input-error class="mt-2" :messages="$errors->get('Clave_Wifi')"/>
          </div>

          <div class="md:col-span-2">
            <label for="ip_escuela">Usuario Root</label>
            <x-text-input type="text" name="Usuario_Root" id="Usuario_Root" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Usuario_Root" placeholder="Usuario Root" :value="old('Usuario_Root',$Router?->Usuario_Root)" />
            <x-input-error class="mt-2" :messages="$errors->get('Usuario_Root')"/>
          </div>

          <div class="md:col-span-2">
            <label for="ip_escuela">Clave Root</label>
            <x-text-input type="text" name="Clave_Root" id="Clave_Root" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Clave_Root" placeholder="Clave Root" :value="old('Clave_Root',$Router?->Clave_Root)" />
            <x-input-error class="mt-2" :messages="$errors->get('Clave_Root')"/>
          </div>

          <div class="md:col-span-2">
            <label for="ip_escuela">Ip Acceso</label>
            <x-text-input type="text" name="ip_acceso" id="ip_acceso" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="ip_acceso" placeholder="Ip acceso" :value="old('ip_acceso',$Router?->ip_acceso)" />
            <x-input-error class="mt-2" :messages="$errors->get('ip_acceso')"/>
          </div>

           <div class="md:col-span-2">
            <label for="ip_escuela">Ip Route</label>
            <x-text-input type="text" name="ip_route" id="ip_route" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="ip_route" placeholder="Ip Route" :value="old('ip_route',$Router?->ip_route)" />
            <x-input-error class="mt-2" :messages="$errors->get('ip_route')"/>
          </div>

          <div class="md:col-span-2">
            <label for="ip_escuela">Punto de Red</label>
            <x-text-input type="text" name="Punto_Red" id="Punto_Red" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Punto_Red" placeholder="Punto de Red" :value="old('Punto_Red',$Router?->Punto_Red)" />
            <x-input-error class="mt-2" :messages="$errors->get('Punto_Red')"/>
          </div>

          <div class="md:col-span-2">
            <label for="Observacion">Observacion</label>
              <textarea name="Observaciones" id="Observaciones" cols="55" rows="3">{{ $Router->Observacion }}</textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('Observaciones')"   />
          </div>

                 
<br><br>
          <div class="md:col-span-5 text-center">
            <div class="inline-flex items-end" >
              <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar</button>

              <div ><a href="/ListadoTelefono"><button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" >Regresar</button></a></div>

            </div>
          </div>
        </div>
        </div>
    </div>
</div>
