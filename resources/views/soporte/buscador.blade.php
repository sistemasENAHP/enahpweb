 <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <table id="myTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table table-fixed w-3/4 " >
            <caption class="p-5 text-lg font-semibold text-center rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                 Soporte
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400 "></p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center text-xs" >id</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs" >N° Control</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Nombre-Apellido</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Cedula</th>
                    <th scope="col" class="">Departamento</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs" >ip</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Motivo de Falla</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Solucion</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Técnico</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs"></th>
               </tr>
            </thead>
           
            <tbody>
                 @foreach ($soportes as $soporte)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" id="">
                    <td class="py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center text-black">{{ ++$i }}</td>
                    <td class=" px-3 py-4 text-sm text-gray-500  text-center" >{{ $soporte->NControl }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->Nombre }}  - {{ $soporte->Apellidos }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->Cedula }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->departamentos->Departamento}}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->ip_equipo }}</td>
                    <td class=" px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->Motivo_Falla }}</td>
                    <td class=" px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->Solucion }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center">{{ $soporte->Tecnico }}</td>
                        <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center">
                            <form action="{{ route('Soportes.destroy', $soporte->id) }}" method="POST">
                                <a href="{{ route('Soportes.show', $soporte->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar ') }}</a>
                                <a href="{{ route('Soportes.edit', $soporte->id) }}" id="editar" name="editar" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a>
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('Soportes.destroy', $soporte->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
                            </form>
                        </td>
                    </tr>

  @endforeach
            </tbody>
          
        </table>
   </div>