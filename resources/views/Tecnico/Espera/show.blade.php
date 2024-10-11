 {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $soporte->name ?? __('Show') . " " . __('Soporte') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Ver') }} Soporte</h1>
                            <p class="mt-2 text-sm text-gray-700">Detalles {{ __('Soporte') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('Espera.TecnicoEnEspera') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Regresar</a>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('Espera.MostrarActualizarEspera', $soporte->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <div class="w-full mt-6 border-t border-gray-100" >

                                        <table class="w-full text-sm text-left rtl:text-right table-auto w-3/4 border-collapse border border-slate-900 pb-8" >
                                             {{-- <table class="table table-bordered border-5 border border-info" > --}}
     <thead>
            <tr>
                <th class="border border-slate-600 text-center" colspan="2">N°Control</th>
                <th class="border border-slate-600 text-center" colspan="4">Nombre y Apellido</th>
                <th class="border border-slate-600 text-center" colspan="20">Cedula</th>

            </tr>
        </thead>
            <tbody>
                <tr>
                    <td class="border border-slate-700 text-center" colspan="2">{{ $soporte->NControl }}</td>
                    <input type="hidden" name="NControl" value="{{ $soporte->NControl }}">

                    <td class="border border-slate-700 text-center" colspan="4">{{ $soporte->Nombre }} {{ $soporte->Apellidos }}</td>
                    <input type="hidden" name="Nombre" value="{{ $soporte->Nombre }}">
                    <input type="hidden" name="Apellidos" value="{{ $soporte->Apellidos }}">
                    <td class="border border-slate-700 text-center" colspan="20">{{ $soporte->Cedula }}</td>
                    <input type="hidden" name="Cedula" value="{{ $soporte->Cedula }}">

                </tr>

             </tbody>
             <thead>
                 <tr>
                     <th class="border border-slate-600 text-center" colspan="2">Correo</th>
                <th class="border border-slate-600 text-center" colspan="4">Telefono</th>
                <th class="border border-slate-600 text-center" colspan="4">Celular</th>
                <th class="border border-slate-600 text-center" colspan="20">Fecha Solicitud</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td class="border border-slate-700 text-center" colspan="2">{{$soporte->Correo }}</td>
                    <input type="hidden" name="Correo" value="{{ $soporte->Correo }}">
                    <td class="border border-slate-700 text-center" colspan="4">{{$soporte->Telefono }}</td>
                    <input type="hidden" name="Telefono" value="{{ $soporte->Telefono }}">
                    <td class="border border-slate-700 text-center" colspan="4">{{$soporte->telefonoI }}</td>
                    <input type="hidden" name="telefonoI" value="{{ $soporte->telefonoI }}">
                    <td class="border border-slate-700 text-center" colspan="20">
                        {{\Carbon\Carbon::parse($soporte->FechaEntrada)->format('d/m/Y H:i') }}</td>
                    <input type="hidden" name="FechaEntrada" value="{{ $soporte->FechaEntrada }}">
                 </tr>
             </tbody>
             <thead>
                 <tr>
                      <th class="border border-slate-600 text-center" colspan="2">Departamento</th>
                <th class="border border-slate-600 text-center" colspan="4">Tipo Falla</th>
                <th class="border border-slate-600 text-center" colspan="20">Ip</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td class="border border-slate-700 text-center" colspan="2">{{$soporte->departamentos->Departamento }}</td>
                     <select id="departamento_id" name="departamento_id" style="display: none;">
                                      {{$sel = 0}}
                                     @foreach($Departamentos as $dep)
                                    @if($dep->id == $soporte->departamento_id)
                                    {{$sel = 'selected'}}
                                       @else
                                     {{$sel = ''}}
                                       @endif
                                    <option value="{{$dep->id}}" {{$sel}} >{{$dep->Departamento}}</option>
                                @endforeach
                                 </select>
                    <td class="border border-slate-700 text-center" colspan="4">{{$soporte->tipoFallas->Tipo_Falla}}</td>
                  <select id="tipo_falla_id" name="tipo_falla_id" style="display: none;">
                                         {{$sel = 0}}
                                              @foreach ($TipoFalla as $tipo )
                                          @if($tipo->id == $soporte->tipo_falla_id)
                                        {{$sel = 'selected'}}
                                        @else
                                         {{$sel = ''}}
                                          @endif
                                            <option value="{{$tipo->id}}" {{$sel}}>{{$tipo->Tipo_Falla}}</option>
                                     @endforeach
                                    </select>
                    <td class="border border-slate-700 text-center" colspan="20">{{$soporte->ip_equipo }}</td>
                    <input type="hidden" name="ip_equipo" value="{{$soporte->ip_equipo }}">
                 </tr>
             </tbody>
              <thead>
                 <tr>
                      <th class="border border-slate-600 text-center" colspan="2">Nombre Equipo</th>
                <th class="border border-slate-600 text-center" colspan="4">Motivo Falla</th>
                <th class="border border-slate-600 text-center" colspan="20">Técnico</th>
                 </tr>
             </thead>
           <tbody>
                 <tr>
                     <td class="border border-slate-700 text-center" colspan="2">{{$soporte->nombre_equipo }}</td>
                    <input type="hidden" name="nombre_equipo" value="{{ $soporte->nombre_equipo }}">
                    <td class="border border-slate-700 text-center" colspan="4">{{$soporte->Motivo_Falla }}</td>
                    <input type="hidden" name="Motivo_Falla" value="{{ $soporte->Motivo_Falla }}">
                    <td class="border border-slate-700 text-center" colspan="20">{{ Auth()->user()->name }} {{ Auth()->user()->surname }}</td>
                    <input type="hidden" name="tecnico" value="{{ Auth()->user()->name }} {{ Auth()->user()->surname }}">
                 </tr>
             </tbody>
         </table>
                                    <div class="md:col-span-5">
                                    <x-text-input type="hidden" name="estatus_id" id="estatus_id" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="2" placeholder=""  readonly />
                                  </div>
<br>
                                 <div class="md:col-span-5">
                                  <label for="">Mensaje</label>
                                  <input type="text" name="mensaje" id="mensaje" value="Se le dará Asistencia Técnica dentro de   Minutos"  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" >
                                 </div>




                                </div>
                            </div>
                        </div>
                    </div>
<br>
                <form action="/MostrarEspera/{{  $soporte->id}}" method="get">
                 <div class="md:col-span-5 text-center">
              <div class="inline-flex items-end" >
                  <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" id="historial">Ver Historial</button>
                  <input type="hidden" id="Cedula" name="Cedula" value="{{ $soporte->Cedula }}">
              </div>
              </div>
              </form>

              <br>
              <div id="mostrar">
              <div class="relative overflow-x-auto shadow-md sm:rounded-lg" >
                  <table id="myTable" class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400  table-auto w-3/4 ">
            <caption class="p-5 text-lg font-semibold text-center rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Historial Usuario
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400 "></p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center text-xs" style="font-size: 95%; display:none;">id</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs"style="font-size: 95%;">Nombre-Apellido</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs"style="font-size: 95%;">Cedula</th>
                     <th scope="col" class="px-6 py-3 text-center text-xs"style="font-size: 95%;">Ubicacion</th>
                    <th scope="col" class=""style="font-size: 95%;">Departamento</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs" style="font-size: 95%;">ip</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs"style="font-size: 95%;">Fecha Solicitud</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs"style="font-size: 95%;">Fecha Salida</th>
                     <th scope="col" class="px-6 py-3 text-center text-xs"style="font-size: 95%;">Motivo de Falla</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs"style="font-size: 95%;">Solucion</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs"style="font-size: 95%;">Técnico</th>
                </tr>
            </thead>
               @php $sum = 0;@endphp
            <tbody>
                @foreach($soportes as $soportes)
                @if($soportes->Cedula == $soporte->Cedula)
                <tr>
                 {{-- <td class=" px-3 py-4 text-sm text-gray-500  text-center" style="font-size: 90%; display: none;">@php  $sum=$soportes->id; @endphp</td> --}}
                   <td class=" px-3 py-4 text-sm text-gray-500  text-center" style="font-size: 90%; display: none">{{ ++$i }} @php $sum = $i @endphp</td>
                   <td class="px-3 py-4 text-sm text-gray-500 text-center"style="font-size: 90%;">{{ $soportes->Nombre }}  -  {{ $soportes->Apellidos }}</td>
                    <td  scope="col" class="px-3 py-4 text-sm text-gray-500 text-center"style="font-size: 90%;">{{ $soportes->Cedula }}</td>
                    <td  scope="col" class="px-3 py-4 text-sm text-gray-500 text-center"style="font-size: 90%;">{{ $soportes->departamentos->pisos->Pisos }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center"style="font-size: 90%;">{{ $soportes->departamentos->Departamento}}</td>
                     <td class="px-3 py-4 text-sm text-gray-500 text-center"style="font-size: 90%;">{{ $soportes->ip_equipo }}</td>
                     <td class=" px-3 py-4 text-sm text-gray-500 text-center"style="font-size: 90%;">{{\Carbon\Carbon::parse($soportes->FechaEntrada)->format('d/m/Y H:i') }}</td>
                     <td class=" px-3 py-4 text-sm text-gray-500 text-center">{{\Carbon\Carbon::parse($soportes->FechaSalida )->format('d/m/Y H:i') }}</td>
                    <td class=" px-3 py-4 text-sm text-gray-500 text-center"style="font-size: 90%;">{{ $soportes->Motivo_Falla }}</td>
                    <td class=" px-3 py-4 text-sm text-gray-500 text-center"style="font-size: 90%;">{{ $soportes->Solucion }}</td>
                    <td class="px-3 py-4 text-sm text-gray-500 text-center"style="font-size: 90%;">{{ $soportes->Tecnico }}</td>

                         
                                  
               </tr>

               @endif
               @endforeach
        
            </tbody>
          
        </table>
        </div>
        <div class="md:col-span-5 text-right">
              <div class="inline-flex items-end" >
          <strong>Cantidad de veces que ha Recibido Soporte: {{ $sum }}</strong>
          </div>
      </div>
              </div>

              <br>


                    <div class="md:col-span-5 text-center">
              <div class="inline-flex items-end" >
                <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Aceptar Soporte</button>
            </div>
                </div>
                   </form>
            </div>
        </div>
    </div>
</x-app-layout>
<script type="text/javascript">
    $(document).ready(function(){

       $('#mostrar').hide();

          $('#historial').click(function(e){
                 e.preventDefault();
                $('#mostrar').toggle();


            });

    });
</script>
