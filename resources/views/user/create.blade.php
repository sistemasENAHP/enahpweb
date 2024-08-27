<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }} User
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Crear') }} Usuario</h1>
                            <p class="mt-2 text-sm text-gray-700">Añadir un nuevo {{ __('Usuario') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('users.index') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Regresar</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="max-w-xl py-2 align-middle">
                                <form method="POST" action="{{ route('users.store') }}"  role="form" enctype="multipart/form-data">
                                    @csrf

                                    <div class="space-y-6">
 

                                        <div>
                                      <x-input-label for="user" :value="__('Departamentos')"/>
                                      <select name="departamento_id" id="departamento_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                          @foreach($Departamentos as $departamento)
                                          <option value="{{ $departamento->id }}">{{ $departamento->Departamento }}</option>
                                          @endforeach
                                      </select>
                                  </div>
                              
                                  <div>
                                      <x-input-label for="name" :value="__('Nombre')"/>
                                      <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user?->name)" autocomplete="name" placeholder="Nombre"/>
                                      <x-input-error class="mt-2" :messages="$errors->get('name')"/>
                                  </div>
                                  <div>
                                      <x-input-label for="surname" :value="__('Apellido')"/>
                                      <x-text-input id="surname" name="surname" type="text" class="mt-1 block w-full" value="" autocomplete="surname" placeholder="Apellido"/>
                                      <x-input-error class="mt-2" :messages="$errors->get('surname')"/>
                                  </div>
                                  <div>
                                      <x-input-label for="identification_card" :value="__('Cedula')"/>
                                      <x-text-input id="identification_card" name="identification_card" type="text" class="mt-1 block w-full"  autocomplete="identification_card" placeholder="Cedula"/>
                                      <x-input-error class="mt-2" :messages="$errors->get('identification_card')"/>
                                  </div>
                                  <div>
                                      <x-input-label for="user" :value="__('Usuario')"/>
                                      <x-text-input id="user" name="user" type="text" class="mt-1 block w-full"  autocomplete="user" placeholder="Usuario"/>
                                      <x-input-error class="mt-2" :messages="$errors->get('user')"/>
                                  </div>
                              
                                   <div>
                                      <x-input-label for="user" :value="__('Telefono')"/>
                                      <x-text-input id="telefono" name="telefono" type="text" class="mt-1 block w-full"  autocomplete="user" placeholder="telefono"/>
                                      <x-input-error class="mt-2" :messages="$errors->get('telefono')"/>
                                  </div>
                              
                              
                                   <div>
                                      <x-input-label for="ip_equipo" :value="__('ip equipo')"/>
                                      <x-text-input id="ip_equipo" name="ip_equipo" type="text" class="mt-1 block w-full" value="{{$ip }}" autocomplete="user" placeholder="ip_equipo"/>
                                      <x-input-error class="mt-2" :messages="$errors->get('ip_equipo')"/>
                                  </div>
                              
                              
                                  <div>
                                      <x-input-label for="email" :value="__('Correo')"/>
                                      <x-text-input id="email" name="email" type="text" class="mt-1 block w-full"  autocomplete="email" placeholder="Correo"/>
                                      <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                                  </div>
                              
                                     <div>
                                      <label for="role">Role</label>
                                      <select id="role_id" name="role_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                          <option value="">Selecciones</option>
                                         
                                         @foreach($roles as $id => $roleName)
                                        
                                              <option value="{{ $id }}">{{ $roleName }}</option>
                                        
                                         
                                         @endforeach
                                     
                              
                                          
                                      </select>
                                  </div>
                              
                                  <div>
                                      <x-input-label for="password" :value="__('Contraseña')"/>
                                      <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="password" placeholder="Contraseña"/>
                                      <x-input-error class="mt-2" :messages="$errors->get('password')"/>
                                  </div>
                              
                                  <div>
                                      <x-input-label for="confirm_password" :value="__('Confirmar Contraseña')"/>
                                      <x-text-input id="confirm_password" name="confirm_password" type="password" class="mt-1 block w-full"  autocomplete="password" placeholder="Confirmar Contraseña"/>
                                      <x-input-error class="mt-2" :messages="$errors->get('password')"/>
                                  </div>
                              
                                  <div class="flex items-center gap-4">
                                      <x-primary-button>Guardar</x-primary-button>
                                  </div>
                              </div>
                              
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
