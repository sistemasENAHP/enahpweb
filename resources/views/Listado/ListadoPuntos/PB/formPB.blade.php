<div class="space-y-6">
    <div class="grid gap-3 gap-y-2 text-sm grid-cols-1 lg:grid-cols-2">
        <div class="text-gray-600">
          <p class="font-medium text-lg ">Listado Punto de Red</p>
          <p></p>
        </div>
        <div class="lg:col-span-2">
        <div class="grid gap-3 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">

        <div class="md:col-span-5" >
        <label for="departamento_id">Departamento</label>
        <select name="departamento_id" id="departamento_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          {{$sel = 0}}
          @foreach($Departamentos as $dep)
          @if($dep->id == $ListadoPunto->departamento_id)
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

    <x-text-input type="hidden" id="piso_idPB" name="piso_idPB" :value=1 class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="PB" placeholder="PB"/>
    <div class="md:col-span-2">
        <label for="Nombre">Nombre</label>
        <x-text-input type="text" id="Nombre" name="Nombre"  :value="old('Nombre', $ListadoPunto?->Nombre)" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Nombres" placeholder="Nombres"/>
        <x-input-error class="mt-2" :messages="$errors->get('Nombre')"/>

      </div>
      <div class="md:col-span-2">
          <label for="Apellidos">Apellido</label>
          <x-text-input type="text" id="Apellidos" name="Apellidos" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  :value="old('Apellido', $ListadoPunto?->Apellido)" autocomplete="Apellidos" placeholder="Apellidos"/>
          <x-input-error class="mt-2" :messages="$errors->get('Apellidos')"/>

        </div>
        <div class="md:col-span-2">
          <label for="Cedula">Cedula</label>
          <x-text-input type="text" name="Cedula" id="Cedula" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Cedula" placeholder="Cedula"  :value="old('Cedula', $ListadoPunto?->Cedula)"/>
          <x-input-error class="mt-2" :messages="$errors->get('Cedula')"/>
        </div>

        <div class="md:col-span-2">
            <label for="Cedula">Equipo</label>
            <x-text-input type="text" name="Equipo" id="Equipo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Equipo" placeholder="Equipo" :value="old('Equipo', $ListadoPunto?->Equipo)"/>
            <x-input-error class="mt-2" :messages="$errors->get('Equipo')"/>
          </div>
          <div class="md:col-span-2">
            <label for="ip_ministerio">Punto de Red</label>
            <x-text-input type="text" name="punto_red" id="punto_red" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="punto_red" placeholder="Punto de Red"  :value="old('Puntos', $ListadoPunto?->Puntos)" />
            <x-input-error class="mt-2" :messages="$errors->get('punto_red')"/>
          </div>
           <div class="md:col-span-2">
            <label for="Puerto_PatchPanel">Puerto Patch Panel</label>
            <x-text-input type="text" name="Puerto_PatchPanel" id="Puerto_PatchPanel" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Puerto_PatchPanel" placeholder="Puerto Patch Panel" :value="old('PuertoPatch', $ListadoPunto?->PuertoPatch)"    />
            <x-input-error class="mt-2" :messages="$errors->get('Puerto_PatchPanel')"/>
          </div>

           <div class="md:col-span-2">
            <label for="Puerto_PatchPanel">N° Puerto De Switch</label>
            <x-text-input type="text" name="Puerto_Switch" id="Puerto_Switch" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Puerto_Switch" placeholder="N° Puerto De Switch" :value="old('NPuertoSwitch', $ListadoPunto?->NPuertoSwitch)" />
            <x-input-error class="mt-2" :messages="$errors->get('Puerto_Switch')"/>
          </div>

           <div class="md:col-span-2">
            <label for="">Observaciones</label>
             <textarea name="Observaciones" id="Observaciones" cols="50.5" rows="3" :value="old('Observacion', $ListadoPunto?->Observacion)">{{$ListadoPunto?->Observacion}}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('Observaciones')"/>
            </div>



          <div class="md:col-span-5 text-center">
            <div class="inline-flex items-end" >
              <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar</button>

              <div ><a href="/ListadoPunto"><button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" >Regresar</button></a></div>

            </div>
          </div>
        </div>
        </div>
    </div>
</div>
