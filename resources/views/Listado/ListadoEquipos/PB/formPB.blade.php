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
                    <option >Seleccione un Departamento</option>
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

            <div class="md:col-span-5">
                <label for="dep"></label>
               <select name="dep" id="dep" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{-- <option value=""></option> --}}
                {{$sel = 0}}
                @foreach($User as $user)
                @if($user->id == $ListadoEquipo->user_id)
                {{$sel = 'selected'}}
                @else

                {{$sel = ''}}

                @endif

                        <option value="{{$user->id}}" {{$sel}}>{{$user->name}} {{$user->surname}}</option>

                @endforeach


               </select>
            </div>

            <div class="md:col-span-2">
                <label for="Nombre">Nombre</label>
                <x-text-input type="text" id="Nombre" name="Nombre"  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Nombres" placeholder="Nombres" :value="old('Nombre',$ListadoEquipo->users?->name)"  />
                <x-input-error class="mt-2" :messages="$errors->get('Nombre')"/>

              </div>
              <div class="md:col-span-2">
                  <label for="Apellidos">Apellido</label>
                  <x-text-input type="text" id="Apellidos" name="Apellidos" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  autocomplete="Apellidos" placeholder="Apellidos" :value="old('Apellido',$ListadoEquipo->users?->surname)"  />
                  <x-input-error class="mt-2" :messages="$errors->get('Apellidos')"/>

                </div>
                <div class="md:col-span-1">
                  <label for="Cedula">Cedula</label>
                  <x-text-input type="text" name="Cedula" id="Cedula" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Cedula" placeholder="Cedula" :value="old('Cedula',$ListadoEquipo->users?->identification_card)" maxlength='9' onKeypress='if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;'  />
                  <x-input-error class="mt-2" :messages="$errors->get('Cedula')"/>
                </div>

                <div class="md:col-span-2">
            <label for="Cedula">Equipo</label>
            <x-text-input type="text" name="Equipo" id="Equipo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Equipo" placeholder="Equipo" :value="old('Equipo',$ListadoEquipo?->Equipo)" value="Computadora"  />
            <x-input-error class="mt-2" :messages="$errors->get('Equipo')"/>

          </div>

                <div class="md:col-span-2">
                    <label for="Cedula">Nombre de Equipo</label>
                    <x-text-input type="text" name="NombreEquipo" id="NombreEquipo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="NombreEquipo" placeholder="Nombre de Equipo" :value="old('Nombre_Equipo',$ListadoEquipo?->Nombre_Equipo)" />
                    <x-input-error class="mt-2" :messages="$errors->get('NombreEquipo')"/ required>
                  </div>

                   <div class="md:col-span-1">
            <label for="marca_equipo">Marca Equipo</label>
            <select name="marca_equipo" id="marca_equipo" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
              <option>Selecciones</option>
              <option value="Vit"{{ $ListadoEquipo->Marca  == 'Vit' ? 'selected' : ''}}>Vit</option>
              <option value="Siragon"{{ $ListadoEquipo->Marca  == 'Siragon' ? 'selected' : ''}}>Siragon</option>
              <option value="HP"{{ $ListadoEquipo->Marca  == 'HP' ? 'selected' : ''}}>HP</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('marca_equipo')"/>
          </div>
                  <div class="md:col-span-2">
                   <label for="cantidad_Equipo">Cantida de  Equipo</label>
                    <x-text-input type="text" name="cantidad_Equipo" id="cantidad_Equipo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="cantidad_Equipo" placeholder="Cantidad de Equipo" :value="old('Cantidad_Equipo',$ListadoEquipo?->Cantidad_Equipo)"  required />
                    <x-input-error class="mt-2" :messages="$errors->get('cantidad_Equipo')"/>
                  </div>
                  <div class="md:col-span-2">
                    <label for="Cedula">Sistema Operativo</label>
                        <select name="sistema_operativo" id="sistema_operativo" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " required>
                            <option>Selecciones</option>
                            <option value="Windows 7"{{$ListadoEquipo->Sistema_Operativo == 'Windows 7' ? 'selected' : ''}} >Windows 7</option>
                            <option value="Windows 8"{{$ListadoEquipo->Sistema_Operativo == 'Windows 8' ? 'selected' : ''}}>Windows 8</option>
                            <option value="Windows 10"{{$ListadoEquipo->Sistema_Operativo == 'Windows 10' ? 'selected' : ''}}>Windows 10</option>
                            <option value="Windows 11"{{$ListadoEquipo->Sistema_Operativo == 'Windows 11' ? 'selected' : ''}}>Windows 11</option>
                            <option value="Linux"{{$ListadoEquipo->Sistema_Operativo == 'Linux' ? 'selected' : ''}}>Linux</option>
                        </select>
                  </div>
                  <div class="md:col-span-1">
                    <label for=" bits"> bits</label>
                    <select name="bits" id="bits" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option>Selecciones</option>
                        <option value="32 Bits"{{$ListadoEquipo->bits == '32 Bits' ? 'selected' : ''}}>32 Bits</option>
                        <option value="64 Bits"{{$ListadoEquipo->bits == '64 Bits' ? 'selected' : ''}}>64 Bits</option>
                    </select>
                  </div>

                  <div class="md:col-span-2">
                    <label for="Cedula">Version</label>
                    <x-text-input type="text" name="Version" id="Version" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Version" placeholder="Version" :value="old('Version',$ListadoEquipo?->Version)" required />
                    <x-input-error class="mt-2" :messages="$errors->get('Version')"/>
                  </div>
                    <div class="md:col-span-2">
                    <label for="Cedula">Edicion Windows</label>
                     <select id="edicion" name="edicion" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                       <option>Seleciones</option>
                       <option value="Windows Home" {{ $ListadoEquipo->Edicion == 'Windows Home'  ? 'selected' : ''}}>Windows Home</option>
                       <option value="Windows Pro" {{ $ListadoEquipo->Edicion == 'Windows Pro'  ? 'selected' : ''}} >Windows Pro</option>
                        <option value="Windows Enterprise"{{ $ListadoEquipo->Edicion == 'Windows Enterprise'  ? 'selected' : ''}} >Windows Enterprise </option>
                        <option value="Windows Education" {{ $ListadoEquipo->Edicion == 'Windows Education'  ? 'selected' : ''}}>Windows Education </option>
                        <option value="Windows Pro Education" {{ $ListadoEquipo->Edicion == 'Windows Pro Education'  ? 'selected' : ''}}>Windows Pro Education </option>
                     </select>
                  </div>
                  <div class="md:col-span-1">
                    <label for="ip_escuela">IP Escuela</label>
                    <x-text-input type="text" name="ip_escuela" id="ip_escuela" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="ip_escuela" placeholder="IP Escuela" :value="old('ip_escuela',$ListadoEquipo?->ip_escuela)" />
                    <x-input-error class="mt-2" :messages="$errors->get('ip_escuela')" required />
                  </div>
                  <div class="md:col-span-2">
                    <label for="ip_ministerio">IP Ministerio</label>
                    <x-text-input type="text" name="ip_ministerio" id="ip_ministerio" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="ip_ministerio" placeholder="IP Ministerio" :value="old('ip_ministerio',$ListadoEquipo?->ip_ministerio)" />
                    <x-input-error class="mt-2" :messages="$errors->get('ip_ministerio')"  required />
                  </div>

                  <div class="md:col-span-2">
                    <label for="Cedula">MAC ADRESS</label>
                    <x-text-input type="text" name="mac" id="mac" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="mac" placeholder="MAC ADRESS" :value="old('MacAdress',$ListadoEquipo?->MacAdress)" required />
                    <x-input-error class="mt-2" :messages="$errors->get('mac')"/>
                  </div>

                  <div class="md:col-span-1">

                    <label for="Cedula">Capacidad Disco Duro GB</label>
                    <x-text-input type="text" name="discoduro" id="discoduro" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="discoduro" placeholder="Disco Duro" :value=" 'GB'  ,old('DiscoDuroGB',$ListadoEquipo?->DiscoDuroGB)" />
                    <x-input-error class="mt-2" :messages="$errors->get('discoduro')"  required />
                  </div>

                  <div class="md:col-span-1">

                    <label for="Cedula"> Memoria Ram</label>
                    <x-text-input type="text" name="memoria_ram" id="memoria_ram" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="memoria_ram" placeholder="Memoria Ram" :value="  'GB' ,old('memoria_ram',$ListadoEquipo?->MemoriaRam)" />
                    <x-input-error class="mt-2" :messages="$errors->get('memoria_ram')" required />
                  </div>

                  <div class="md:col-span-4">
                    <br>
                    <div class="grid grid-cols-8 place-items-center">
                   @if($ListadoEquipo->Mouse == 'on')
                    <label for="">Mouse</label>
                    <input type="checkbox" id="Mouse" name="Mouse" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X" checked />
                    @else
                    <label for="">Mouse</label>
                    <input type="checkbox" id="Mouse" name="Mouse" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X"  />
                    @endif
                    @if($ListadoEquipo->Teclado == 'on')
                    <label for="">Teclado</label>
                    <input type="checkbox" id="Teclado" name="Teclado" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X" checked />
                    @else
                    <label for="">Teclado</label>
                    <input type="checkbox" id="Teclado" name="Teclado" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X"  />
                    @endif

                    @if($ListadoEquipo->Corneta == 'X')
                    <label for="">Corneta</label>
                    <input type="checkbox" id="Corneta" name="Corneta" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X" checked />
                    @else
                    <label for="">Corneta</label>
                    <input type="checkbox" id="Corneta" name="Corneta" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X"  />
                    @endif

                    @if($ListadoEquipo->Regulador == 'on')
                    <label for="">Regulador</label>
                    <input type="checkbox" id="Regulador" name="Regulador" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X" checked />
                    @else

                    <label for="">Regulador</label>
                    <input type="checkbox" id="Regulador" name="Regulador" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X"  />
                    @endif
                  </div>
                  <br>
                </div>

                  <div class="md:col-span-2">
                    <label for="Proxy">Proxy</label>
                    <x-text-input type="text" name="Proxy" id="Proxy" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Proxy" placeholder="Proxy" :value="old('Proxy',$ListadoEquipo?->Proxy)" />
                    <x-input-error class="mt-2" :messages="$errors->get('Proxy')"/>
                  </div>

                  <div class="md:col-span-2">
                    <label for="Dns">Dns</label>
                    <x-text-input type="text" name="Dns" id="Dns" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Dns" placeholder="Dns" :value="old('Dns',$ListadoEquipo?->Dns)" />
                    <x-input-error class="mt-2" :messages="$errors->get('Dns')"/>
                  </div>

                  <div class="md:col-span-1">
                    <label for="Puerto">Puerto</label>
                    <x-text-input type="text" name="Puerto" id="Puerto" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Puerto" placeholder="Puerto" :value="old('Puerto',$ListadoEquipo?->Puerto)" />
                    <x-input-error class="mt-2" :messages="$errors->get('Puerto')"/>
                  </div>

                  <div class="md:col-span-5">
                    <br>
                    <div class="grid grid-cols-8 place-items-center">
                   @if($ListadoEquipo->CableCorriente == 'X')
                    <label for="">Cable Corriente</label>
                    <input type="checkbox" id="CableCorriente" name="CableCorriente" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X" checked />
                    @else
                    <label for="">Cable Corriente</label>
                    <input type="checkbox" id="CableCorriente" name="CableCorriente" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X"  />
                    @endif

                    @if($ListadoEquipo->CableVGAHDMI == 'X')
                    <label for="">Cable VGA/HDMI</label>
                    <input type="checkbox" id="CableVGAHDMI" name="CableVGAHDMI" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X" checked />
                    @else
                    <label for="">Cable VGA/HDMI</label>
                    <input type="checkbox" id="CableVGAHDMI" name="CableVGAHDMI" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X" />
                    @endif

                    @if($ListadoEquipo->Impresora == 'X')
                    <label for="">Impresora</label>
                    <input type="checkbox" id="Impresora" name="Impresora" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X" checked />
                    @else
                    <label for="">Impresora</label>
                    <input type="checkbox" id="Impresora" name="Impresora" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X"  />
                    @endif

                    @if($ListadoEquipo->Telefono == 'X')
                    <label for="">Telefono</label>
                    <input type="checkbox" id="Telefono" name="Telefono" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X" checked />
                    @else

                    <label for="">Telefono</label>
                    <input type="checkbox" id="Telefono" name="Telefono" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X"  />
                    @endif

                    @if($ListadoEquipo->Route == 'X')
                    <label for="">Route</label>
                    <input type="checkbox" id="Route" name="Route" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X" checked />
                    @else

                    <label for="">Route</label>
                    <input type="checkbox" id="Route" name="Route" class="text-blue-500 border-blue-300 rounded h-5 w-5 cursor-pointer" value="X"  />
                    @endif
                  </div>
                  <br>
                </div>
                   
                   <div class="formimpresoras md:col-span-5">
                     <h2 class="text-center" style="font-size: 20px;">Impresora</h2>
                   </div>
            
                                     
                   <div class="formimpresoras md:col-span-2">

                    <label for="Marca">Marca</label>
                    <x-text-input type="text" name="Marca" id="Marca" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Marca" placeholder="" :value="old('Marca',$Impresoras?->Marca)" />
                    <x-input-error class="mt-2" :messages="$errors->get('Marca')" required />
                  </div>

                   <div class="formimpresoras md:col-span-2">
                    <label for="Modelo">Modelo</label>
                    <x-text-input type="text" name="Modelo" id="Modelo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Modelo" placeholder="" :value="old('Modelo',$Impresoras?->Modelo)" />
                    <x-input-error class="mt-2" :messages="$errors->get('punto_red')" required />
                  </div>

                   <div class="formimpresoras md:col-span-1">
                    <label for="Equipo">Equipo</label>
                    <x-text-input type="text" name="Impresora" id="Impresora" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="Equipo" placeholder="" :value="'Impresora',old('Equipo',$Impresoras?->Equipo)" />
                    <x-input-error class="mt-2" :messages="$errors->get('Equipo')" required />
                  </div>

                   <div class="formimpresoras md:col-span-2">
            <label for="ip_ministerio">Tipo Conexion</label>
            <select id="tipo_conexion" name="tipo_conexion" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     <option >Seleccione</option>
                     <option value="USB" {{ $Impresoras?->tipo_conexion == 'USB' ? 'selected' : '' }}>USB</option>
                     <option value="IP" {{ $Impresoras?->tipo_conexion == 'IP' ? 'selected' : '' }}>IP</option>
                                  
            </select>
          </div>

                   <div class="formimpresoras md:col-span-2">
                    <label for="ip_impresora">IP Impresora</label>
                    <x-text-input type="text" name="ip_impresora" id="ip_impresora" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="ip_impresora" placeholder="" :value="old('ip_impresora',$Impresoras?->ip_equipo)" />
                    <x-input-error class="mt-2" :messages="$errors->get('ip_impresora')" required />
                  </div>

                  <div class="formimpresoras md:col-span-1">
            <label for="ip_escuela">Punto de red</label>
            <x-text-input type="text" name="punto_impresora" id="punto_impresora" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="punto_impresora" placeholder="punto impresora" :value="old('Punto_Red',$Impresoras?->Punto_Red)" />
            <x-input-error class="mt-2" :messages="$errors->get('punto_impresora')"/>
          </div>

                      
                  


                   <div class=" md:col-span-2">
                    <label for="punto_red">Punto de Red</label>
                    <x-text-input type="text" name="punto_red" id="punto_red" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="punto_red" placeholder="Punto Switch / Punto de Red" :value="old('PuntoRed',$ListadoEquipo?->PuntoRed)" />
                    <x-input-error class="mt-2" :messages="$errors->get('punto_red')" required />
                  </div>

                   <div class=" md:col-span-2">
                    <label for="punto_red">Punto Switch </label>
                    <x-text-input type="text" name="punto_switch" id="punto_switch" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="punto_red" placeholder="Punto Switch / Punto de Red" :value="old('PuntoRed',$ListadoEquipo?->PuntoRed)" />
                    <x-input-error class="mt-2" :messages="$errors->get('punto_red')" required/>
                  </div>

          <div class="md:col-span-1">
            <label for="CajetinPuntos">Cajetin de Puntos</label>
            <x-text-input type="text" name="CajetinPuntos" id="CajetinPuntos" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" autocomplete="CajetinPuntos" placeholder="Cajetin de Puntos" :value="old('PuntoRed',$ListadoEquipo?->CajetinPuntos)" />
            <x-input-error class="mt-2" :messages="$errors->get('CajetinPuntos')" required />
          </div>
                  <div class="md:col-span-3">
                    <label for="ip_ministerio">Observaciones</label>
                    <textarea name="Observaciones" id="Observaciones" cols="55" rows="3">{{ $ListadoEquipo->Observacion }}</textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('Observaciones')"   />
                  </div>
                  <div class="md:col-span-2">
                    <label for="ip_ministerio">Caso Especiales</label>
                    <textarea name="caso_especiales" id="caso_especiales" cols="59" rows="3">{{ $ListadoEquipo->CasoEspeciales }}</textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('caso_especiales')"   />
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

