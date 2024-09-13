<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Soportes') }}
        </h2>
    </x-slot>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-3">
            <div>

            </div>
            <form method="GET">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">

                </div>
                <div style="">
                <input type="text" id="search" name="search"  class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" value="{{ request()->get('search') }}">
                </div>
                <div class="flex items-center justify-end " style="">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Buscar</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
         @if($soportes->count())
        <table id="myTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-center rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                 Equipos Terminado
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400 "></p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th  class="px-3 py-3 text-center text-xs" style="font-size: 95%;">id</th>
                    <th scope="col" class="px-2 py-3 text-center text-xs" style="font-size: 95%;">N° Control</th>
                    <th scope="col" class="px-2 py-3 text-center text-xs" style="font-size: 95%;">Nombre-Apellido</th>
                    <th scope="col" class="px-2 py-3 text-center text-xs" style="font-size: 95%;">Cedula</th>
                    <th scope="col" class="">Departamento</th>
                    <th scope="col" class="px-2 py-3 text-center text-xs"  style="font-size: 95%;">ip</th>
                    <th scope="col" class="px-2 py-2 text-center text-xs" style="font-size: 95%;">Motivo de Falla</th>
                    <th scope="col" class="px-2 py-3 text-center text-xs" style="font-size: 95%;">Fecha Solicitud</th>
                    <th scope="col" class="px-2 py-3 text-center text-xs" style="font-size: 90%;">Fecha Salida</th>
                    <th scope="col" class="px-2 py-3 text-center text-xs" style="font-size: 90%;">Solucion</th>
                    <th scope="col" class="px-2 py-3 text-center text-xs" style="font-size: 90%;">Técnico</th>
                    <th scope="col" class="px-2 py-3 text-center text-xs" style="font-size: 90%;">Estatus</th>
                    <th scope="col" class="px-2 py-3 text-center text-xs"></th>
               </tr>
            </thead>

            <tbody>
                 @foreach ($soportes as $soporte)
                 @if($soporte->Tecnico == auth()->user()->name. " " .auth()->user()->surname and $soporte->estatus_id == 3)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" id="resultado">
                    <td class="px-1 py-1 text-sm text-gray-500  text-center text-black" style="font-size: 90%;">{{ ++$i }}</td>
                    <td class=" px-2 py-3 text-sm text-gray-500  text-center" style="font-size: 90%;">{{ $soporte->NControl }}</td>
                    <td class=" text-sm text-gray-500 text-center"style="font-size: 90%;">{{ $soporte->Nombre }} - {{ $soporte->Apellidos }}</td>
                    <td class="px-5 py-6 text-sm text-gray-500 text-center" style="font-size: 90%;">{{ $soporte->Cedula }}</td>
                    <td class=" text-sm text-gray-500 text-center" style="font-size: 90%;">{{ $soporte->departamentos->Departamento}}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center" style="font-size: 90%;">{{ $soporte->ip_equipo }}</td>
                    <td class=" px-3 py-4 text-sm text-gray-500 text-center" style="font-size: 90%;">{{ $soporte->Motivo_Falla }}</td>
                    <td class=" text-sm text-gray-500 text-center" style="font-size: 90%;">{{\Carbon\Carbon::parse($soporte->FechaEntrada)->format('d/m/Y H:i') }}</td>
                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" style="font-size: 90%;">{{\Carbon\Carbon::parse($soporte->FechaSalida )->format('d/m/Y H:i') }}</td>

                    <td class=" px-5 py-4 text-sm text-gray-500 text-center" style="font-size: 90%;">{{ $soporte->Solucion }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center" style="font-size: 90%;">{{ $soporte->Tecnico }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center" style="font-size: 90%;"> {{$soporte->estatus->Estatus;}}</td>
                        <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 text-center" style="font-size: 95%;">
                            <form action="{{ route('Tecnico.destroy', $soporte->id) }}" method="POST">
                                {{-- <a href="{{ route('Reparacion.show', $soporte->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar ') }}</a> --}}
                                <a href="{{ route('EquiposTerminadoPDF.ReporteEquiposTerminado', $soporte->id) }}" target="_blank" id="editar" name="editar" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('PDF') }}</a>
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('Tecnico.destroy', $soporte->id) }}"  class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
                            </form>
                        </td>
                    </tr>
@endif
  @endforeach
            </tbody>

        </table>
        {{ $soportes->links() }}
         @else

         <table id="myTable" class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table table-fixed w-3/4 ">
            <caption class="p-5 text-lg font-semibold text-center rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                 Soporte
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400 "></p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th  class="px-6 py-3 text-center text-xs" >id</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs" >N° Control</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Nombre-Apellido</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Cedula</th>
                    <th scope="col" class="">Departamento</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs" >ip</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Motivo de Falla</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Fecha Solicitud</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Fecha Salida</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Solucion</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs">Técnico</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs"></th>
               </tr>
            </thead>

            <tbody>
                  <tr>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                       <td class="text-center"></td>
                      <td class="text-center">  <div class="" role="alert">
                                <strong class="text-red-500">!Error! No existe ningun Registro Vuelve a Intentar Nuevamente!</strong>
                            </div><a href="/Tecnico" id="editar" name="editar" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Regresar') }}</a> </td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>

                  </tr>
            </tbody>

        </table>

        @endif

   </div>
</x-app-layout>
<script>
// $(document).ready( function () {
//     $('#myTable').DataTable();

// });

</script>
