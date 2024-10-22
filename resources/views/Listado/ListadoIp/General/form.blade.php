<div class="space-y-6">
    <div class="grid gap-3 gap-y-2 text-sm grid-cols-1 lg:grid-cols-2">
        <div class="text-gray-600">
          <p class="font-medium text-lg ">Listado Ip</p>
          <p></p>
        </div>
        <div class="lg:col-span-2">
        <div class="grid gap-3 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">


          <div class="md:col-span-2">
            <label for="ip_escuela">IP Escuela</label>
            <x-text-input type="text" name="ip_escuela" id="ip_escuela" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="ip_escuela" placeholder="IP Escuela" :value="old('Escuela',$Ips?->ip_escuela)" />
            <x-input-error class="mt-2" :messages="$errors->get('ip_escuela')"/>
          </div>
          <div class="md:col-span-2">
            <label for="ip_ministerio">IP Ministerio</label>
            <x-text-input type="text" name="ip_ministerio" id="ip_ministerio" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="ip_ministerio" placeholder="IP Ministerio" :value="old('Ministerio',$Ips?->ip_ministerio)" />
            <x-input-error class="mt-2" :messages="$errors->get('ip_ministerio')"/>
          </div>

          <div class="md:col-span-4">
            <label for="Observacion">Observaciones</label>
            <select name="Observacion" id="Observacion" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value>Selecciones</option>
                <option value="libre" {{$Ips->Observacion == 'libre' ? 'selected' : ''}}>Libre</option>
                <option value="Ocupado" {{$Ips->Observacion == 'Ocupado' ? 'selected' : ''}} >Ocupado</option>
           </select>
            {{-- <textarea name="Observaciones" id="Observaciones" cols="118" rows="3"></textarea>
            <x-input-error class="mt-2" :messages="$errors->get('Observaciones')"/> --}}
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
