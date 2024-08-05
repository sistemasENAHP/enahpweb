<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Soportes') }}
        </h2>
    </x-slot>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
            <div>

            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">

                </div>
                <input type="text" id="Buscar" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar">
            </div>
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table table-fixed w-3/4 ">
            <caption class="p-5 text-lg font-semibold text-center rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                 Soporte
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400 "></p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center text-xs" >id</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs" >N° Control</th>
                    <th scope="col" class="px-6 py-3 text-centertext-xs">Nombre-Apellido</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Cedula</th>
                   <th scope="col" class="px-6 py-3 text-center text-xs">Departamento</th>
                    {{-- <th scope="col" class="px-6 py-3">Telefono</th> --}}
                    {{-- <th scope="col" class="px-6 py-3 text-center">Fecha</th> --}}
                    <th scope="col" class="px-6 py-3 text-center text-xs" >ip Maquina</th>
                    {{-- <th scope="col" class="px-6 py-3">Tipo de Falla</th> --}}
                    <th scope="col" class="px-6 py-3 text-center text-xs">Motivo de Falla</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Solucion</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Técnico</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs"></th>
               </tr>
            </thead>
            @foreach ($soportes as $soporte)
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center text-white">{{ ++$i }}</td>
                    <td class=" px-3 py-4 text-sm text-gray-500  text-center" >{{ $soporte->NControl }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->Nombre }}  - {{ $soporte->Apellidos }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->Cedula }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->departamentos->Departamento}}</td>
                    {{-- <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->FechaHora }}</td> --}}
                    <td class="px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->ip_equipo }}</td>
                    <td class=" px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->Motivo_Falla }}</td>
                    <td class=" px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->Solucion }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->Tecnico }}</td>
                        <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center">
                            <form action="{{ route('Soportes.destroy', $soporte->id) }}" method="POST">
                                <a href="{{ route('Soportes.show', $soporte->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar ') }}</a>
                                <a href="{{ route('Soportes.edit', $soporte->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a>
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('Soportes.destroy', $soporte->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
                            </form>
                        </td>
                    </tr>


            </tbody>
            @endforeach
        </table>
   </div>
</x-app-layout>
