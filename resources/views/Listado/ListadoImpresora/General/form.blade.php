<div class="space-y-6">
    <div class="grid gap-3 gap-y-2 text-sm grid-cols-1 lg:grid-cols-2">
        <div class="text-gray-600">
          <p class="font-medium text-lg ">Listado Impresora</p>
          <p></p>
        </div>
        <div class="lg:col-span-2">
        <div class="grid gap-3 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
     <div class="md:col-span-5" >
                <label for="departamento_id">Departamento</label>
                <select name="departamento_id" id="departamento_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option >Seleccione un Departamento</option>
                    {{$sel = 0}}
                  @foreach($Departamentos as $dep)
                  @if($dep->id == $ListadoImpresora->departamento_id)
                  {{$sel = 'selected'}}
                  @else
                  {{$sel = ''}}
                  @endif
                    
                          <option value="{{$dep->id}}" {{$sel}} >{{$dep->Departamento}}</option>
                         
                  @endforeach
                </select>
            </div>

              <div class="md:col-span-5">
        <label for="dep">Usuario</label>
       <select name="user_id" id="user_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="">Seleccione</option>
        {{$sel = 0}}
        @foreach($User as $user)
        @if($user->id == $ListadoImpresora->user_id)
        {{$sel = 'selected'}}
        @else

        {{$sel = ''}}

        @endif

                <option value="{{$user->id}}" {{$sel}}>{{$user->name}} {{$user->surname}}</option>

        @endforeach


       </select>
    </div>

             <div class="md:col-span-5">
            <label for="ip_ministerio">Ubicacion</label>
            <select id="ip_piso" name="id_piso" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     <option >Seleccione Piso</option>
                    {{$sel = 0}}
                  @foreach($Pisos as $pisos)
                  @if($pisos->id == $ListadoImpresora->piso_id)
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
            <x-text-input type="text" name="equipo" id="equipo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="equipo" placeholder="Equipo" :value="'Impresora',old('equipo',$ListadoImpresora?->Equipo)" />
            <x-input-error class="mt-2" :messages="$errors->get('equipo')"/>
          </div>


           <div class="md:col-span-2">
            <label for="ip_ministerio">Tipo Conexion</label>
            <select id="tipo_conexion" name="tipo_conexion" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     <option >Seleccione</option>
                     <option value="USB"{{ $ListadoImpresora->tipo_conexion == 'USB' ? 'selected' : '' }}>USB</option>
                     <option value="IP"{{ $ListadoImpresora->tipo_conexion == 'IP' ? 'selected' : '' }}>IP</option>
                                  
            </select>
          </div>

           <div class="md:col-span-2">
            <label for="ip_escuela">Ip</label>
            <x-text-input type="text" name="ip_equipo" id="ip_equipo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="ip_equipo" placeholder="ip_equipo" :value="old('ip_equipo',$ListadoImpresora?->ip_equipo)" />
            <x-input-error class="mt-2" :messages="$errors->get('ip_equipo')"/>
          </div>

           <div class="md:col-span-2">
            <label for="ip_escuela">Punto de red</label>
            <x-text-input type="text" name="punto_impresora" id="punto_impresora" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="punto_impresora" placeholder="punto impresora" :value="old('Punto_Red',$ListadoImpresora?->Punto_Red)" />
            <x-input-error class="mt-2" :messages="$errors->get('punto_impresora')"/>
          </div>

         
          <div class="md:col-span-2">
            <label for="ip_escuela">Marca</label>
            <x-text-input type="text" name="Marca" id="Marca" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Marca" placeholder="Marca" :value="old('Marca',$ListadoImpresora?->Marca)" />
            <x-input-error class="mt-2" :messages="$errors->get('Marca')"/>
          </div>

          <div class="md:col-span-2">
            <label for="ip_escuela">Modelo</label>
            <x-text-input type="text" name="Modelo" id="Modelo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Modelo" placeholder="Modelo" :value="old('Modelo',$ListadoImpresora?->Modelo)" />
            <x-input-error class="mt-2" :messages="$errors->get('Modelo')"/>
          </div>
         
<br><br>
          <div class="md:col-span-5 text-center">
            <div class="inline-flex items-end" >
              <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar</button>

              <div ><a href="/ListadoImpresora"><button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" >Regresar</button></a></div>

            </div>
          </div>
        </div>
        </div>
    </div>
</div>
