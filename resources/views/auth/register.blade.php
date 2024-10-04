
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" id="validacion">
        @csrf
        {{--   <div>
              <p class="text-white">hola</p>
          </div>
          <br> --}}
        <!-- Name -->
             <div>
            <x-input-label for="name" :value="__('Departamento')" />
            <select name="departamento_id" id="departamento_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option value="">Seleccione un Departamento</option>
           @foreach($Departamentos as $departamento)

           <option value="{{ $departamento->id }} ">{{ $departamento->Departamento }}</option>

           
               
              @endforeach
            </select>
        </div>


        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

          <div>
            <x-input-label for="surname" :value="__('Apellido')" />
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus autocomplete="surname" />
            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
        </div>

         <div>
            <x-input-label for="surname" :value="__('Cedula')" />
            <x-text-input id="identification_card" class="block mt-1 w-full" type="text" name="identification_card" :value="old('identification_card')" required autofocus autocomplete="identification_card"  maxlength='9' onKeypress='if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;' />
            <x-input-error :messages="$errors->get('identification_card')" class="mt-2" />
                 @if ($errors->has('Cedula'))
                                        <small class="form-text text-danger">
                                            * ( {{ $errors->first('identification_card') }} )
                                        </small>
                                    @endif
                                    <div id="Cedula"></div>
        </div>

         <div>
            <x-input-label for="user" :value="__('Telefono')"/>
        <x-text-input id="telefono" name="telefono" type="text" class="mt-1 block w-full"  autocomplete="telefono" placeholder="" :value="old('telefono')"/>
        <x-input-error class="mt-2" :messages="$errors->get('telefono')"/>
        </div>

        <div>
           <x-input-label for="user" :value="__('Celular')"/>
         <x-text-input id="telefonoI" name="telefonoI" type="text" class="mt-1 block w-full"  autocomplete="telefonoI" placeholder="" :value="old('telefonoI')"/>
        <x-input-error class="mt-2" :messages="$errors->get('telefonoI')"/>
        </div>

        <div>
       {{-- <x-input-label for="ip_equipo" :value="__('ip equipo')"/> --}}
       <x-text-input id="ip_equipo" name="ip_equipo" type="hidden" class="mt-1 block w-full" value="{{$ip}}" autocomplete="user" placeholder="ip_equipo"/>
       <x-input-error class="mt-2" :messages="$errors->get('ip_equipo')"/>
        </div>


            <div>
          {{-- <x-input-label for="user" :value="__('Nombre Equipo')"/> --}}
          <x-text-input id="nombre_equipo" name="nombre_equipo" type="hidden" class="mt-1 block w-full" value="{{ $machineName }}" autocomplete="nombre_equipo" placeholder="nombre_equipo"/>
       <x-input-error class="mt-2" :messages="$errors->get('nombre_equipo')"/>
        </div>


        <div>
     <x-input-label for="email" :value="__('Correo')"/>
    <x-text-input id="email" name="email" type="text" class="mt-1 block w-full"  autocomplete="email" placeholder="" :value="old('email')"/>
    <x-input-error class="mt-2" :messages="$errors->get('email')"/>
         </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Ya estas registrado?') }}
            </a>

            <x-primary-button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                {{ __('Registrar') }}
            </x-primary-button>
           
        </div>
    </form>
</x-guest-layout>

