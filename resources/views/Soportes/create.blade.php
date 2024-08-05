<x-app-layout>
    <div class="">
        <div class="container max-w-screen-lg mx-auto">
          <div>
            <h2 class="font-semibold text-xl text-gray-600">Soporte</h2>
            <p class="text-gray-500 mb-6"></p>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                <div class="text-gray-600">
                  <p class="font-medium text-lg">Solicitud de Soporte</p>
                  <p></p>
                </div>

                <div class="lg:col-span-2">
                  <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                    <div class="md:col-span-5 " style="margin-bottom: 0rem;">
                        <label for="full_name">Usuarios Registrados</label>
                        <input type="text" name="UsuarioRegistrado" id="UsuarioRegistrado" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Buscar por Numero de Cedula" / >
                      </div>
                      <div class="md:col-span-5 " style="margin-bottom: 2rem;">
                        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Buscar</button>
                      </div>
                    <div class="md:col-span-1" >
                        <label for="full_name">N° Control</label>
                        <input type="text" name="NControl" id="NControl" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="0" / disabled>
                      </div>
                    <div class="md:col-span-2">
                      <label for="full_name">Nombre</label>
                      <input type="text" name="nombre" id="nombre" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                    </div>
                    <div class="md:col-span-2">
                        <label for="full_name">Apellido</label>
                        <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                      </div>
                      <div class="md:col-span-2">
                        <label for="full_name">Cedula</label>
                        <input type="text" name="Cedula" id="Cedula" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                      </div>
                    <div class="md:col-span-3">
                      <label for="email">Correo</label>
                      <input type="text" name="correo" id="correo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="enahp@enahp.com" />
                    </div>


                    <div class="md:col-span-2">
                        <label for="city">Telefono o Extension</label>
                        <input type="text" name="telefono" id="telefono" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                      </div>

                    <div class="md:col-span-3">
                      <label for="departamento_id">Departamento</label>
                      <select name="departamento_id" id="departamento_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach($Departamentos as $dep)
                           <option value="{{$dep->id}}">{{$dep->Departamento}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="md:col-span-2">
                        <label for="city">Ip de la maquina</label>
                        <input type="text" name="telefono" id="telefono" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$ip}}" placeholder=""  readonly/>
                      </div>
                      <div class="md:col-span-3">
                        <label for="address">Fecha / Hora</label>
                            <input type="datetime" name="fecha" id="fecha" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$date}}" readonly>
                      </div>

                    <div class="md:col-span-5">
                        <label for="address">Tipo de Falla</label>
                        <select name="tipo_falla" id="tipo_falla" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          @foreach ($TipoFalla as $tipo )
                               <option value="{{$tipo->id}}">{{$tipo->Tipo_Falla}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="md:col-span-3">
                        <label for="address">Especifique el Motivo de la falla</label>
                            <textarea name="motivo_falla" id="motivo_falla" cols="81" rows="3"></textarea>
                      </div>

                    <div class="md:col-span-5 text-center">
                      <div class="inline-flex items-end">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

</x-app-layout>

