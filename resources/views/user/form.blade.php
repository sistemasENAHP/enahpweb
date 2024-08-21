<div class="space-y-6">

    <div>
        <x-input-label for="name" :value="__('Nombre')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user?->name)" autocomplete="name" placeholder="Nombre"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="surname" :value="__('Apellido')"/>
        <x-text-input id="surname" name="surname" type="text" class="mt-1 block w-full" :value="old('surname', $user?->surname)" autocomplete="surname" placeholder="Apellido"/>
        <x-input-error class="mt-2" :messages="$errors->get('surname')"/>
    </div>
    <div>
        <x-input-label for="identification_card" :value="__('Cedula')"/>
        <x-text-input id="identification_card" name="identification_card" type="text" class="mt-1 block w-full" :value="old('identification_card', $user?->identification_card)" autocomplete="identification_card" placeholder="Cedula"/>
        <x-input-error class="mt-2" :messages="$errors->get('identification_card')"/>
    </div>
    <div>
        <x-input-label for="user" :value="__('Usuario')"/>
        <x-text-input id="user" name="user" type="text" class="mt-1 block w-full" :value="old('user', $user?->user)" autocomplete="user" placeholder="Usuario"/>
        <x-input-error class="mt-2" :messages="$errors->get('user')"/>
    </div>
    <div>
        <x-input-label for="email" :value="__('Correo')"/>
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $user?->email)" autocomplete="email" placeholder="Correo"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>

       <div>
        <label for="role">Role</label>
        <select id="role_id" name="role_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="">Selecciones</option>
           
           @foreach($roles as $id => $roleName)
          
                <option value="{{ $id }}" {{ $id ==  $user->getRoleNames()->first() ? 'selected' : '' }}  >{{ $roleName }}</option>
          
           
           @endforeach
       

            
        </select>
    </div>

    <div>
        <x-input-label for="password" :value="__('Contraseña')"/>
        <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" :value="old('password', $user?->password)" autocomplete="password" placeholder="Contraseña"/>
        <x-input-error class="mt-2" :messages="$errors->get('password')"/>
    </div>

    <div>
        <x-input-label for="confirm_password" :value="__('Confirmar Contraseña')"/>
        <x-text-input id="confirm_password" name="confirm_password" type="password" class="mt-1 block w-full" :value="old('confirm_password', $user?->password)" autocomplete="password" placeholder="Confirmar Contraseña"/>
        <x-input-error class="mt-2" :messages="$errors->get('password')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Guardar</x-primary-button>
    </div>
</div>
