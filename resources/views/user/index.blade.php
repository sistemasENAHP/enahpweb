<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" >

                <div class="w-full" >

                    <div class="sm:flex sm:items-center" >
                        <div class="sm:flex-auto" >
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Usuarios') }}</h1>
                            <p class="mt-2 text-sm text-gray-700">Lista de todos los {{ __('Usuarios') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('users.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Agregar</a>
                        </div>
                    </div>
                </div>
                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <table class="w-full divide-y divide-gray-300">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">No</th>

									<th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Nombre</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Apellido</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cedula</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Usuario</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Correo</th>
                                    <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Rol</th>

                                        <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Accion</th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($users as $user)
                                        <tr class="even:bg-gray-50">
                                            <td class=" py-4 pl-4 pr-3 text-center text-sm font-semibold text-gray-900">{{ ++$i }}</td>

										<td class=" px-3 py-4 text-sm text-center text-gray-500">{{ $user->name }}</td>
										<td class=" px-3 py-4 text-sm text-center text-gray-500">{{ $user->surname }}</td>
										<td class=" px-3 py-4 text-sm text-center text-gray-500">{{ $user->identification_card }}</td>
										<td class=" px-3 py-4 text-sm text-center text-gray-500">{{ $user->user }}</td>
										<td class=" px-3 py-4 text-sm text-center text-gray-500">{{ $user->email }}</td>
                                        <td class="p px-3 py-4 text-sm text-center text-gray-500">
                                            @if (!empty($user->getRoleNames())) {{--Funcion de Laravel Permission tomara el nombre de los roles--}}
                                                        @foreach ($user->getRoleNames() as $rolname)
                                                            <span>{{ $rolname }}</span>
                                                        @endforeach
                                                    @endif</td>

                                            <td class=" py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    <a href="{{ route('users.show', $user->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>
                                                    <a href="{{ route('users.edit', $user->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('users.destroy', $user->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <div class="mt-4 px-4">
                                    {!! $users->withQueryString()->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
