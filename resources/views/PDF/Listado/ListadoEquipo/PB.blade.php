<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="flow-root">
        <div class="mt-8 overflow-x-auto">
            <div class="inline-block min-w-full py-2 align-middle">
                <div class="mt-6 border-t border-gray-100">
                    <dl class="divide-y divide-gray-100">
                        <table class="w-full divide-y divide-gray-300">
                            <thead>
                            <tr>
                                <th  class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">ID</th>
                                <th colspan="0" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500" >Departamento</th>

                                <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500 ">Usuario</th>

                                <th scope="col" class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500 ">Cedula</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Equipo</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Nombre de Equipo</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Marca</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cantidad Equipo</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Sistema Operativo</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Bits</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Version</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Escuela</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion Ministerio</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Mac</th>
                                
                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cap GB Disco Duro</th>
                                
                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Memoria Ram</th>
     
                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Mouse</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Teclado</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Corneta</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Regulador</th>
                                                                                              
                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Proxy</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Dns</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Puerto</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cable Corriente</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cable VGA/HDMI</th>

                                 
                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Impresora</th>

                                 
                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Telefono</th>

                                 
                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Route</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Punto de Red</th>
                              
                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Cajetin de Puntos</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Observaciones</th>

                                <th scope="col" class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">Caso Especiales</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">

                             @foreach ($ListadoEquipoPB as $listadoEquipoPB)
                             @if($listadoEquipoPB->departamento_id == $listadoEquipoPB->departamento_id )
                                <tr class="even:bg-gray-50">
                                    <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{ $listadoEquipoPB->id }}</td>
                                    <td class=" py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$listadoEquipoPB->departamentos->Departamento}}</td>
                                     <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 text-center">{{$listadoEquipoPB->Nombre}} - {{ $listadoEquipoPB->Apellidos }}</td>

                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Cedula }}</td>

                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Equipo }}</td>

                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Nombre_Equipo }}</td>

                                     <td class="px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Marca }}</td>

                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Cantidad_Equipo }}</td>

                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Sistema_Operativo }}</td>

                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->bits }}</td>
                                     

                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Version }}</td>

                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->ip_escuela }}</td>

                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->ip_ministerio }}</td>

                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->MacAdress }}</td>

                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->DiscoDuroGB }}</td>

                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->MemoriaRam }}</td>


                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Mouse }}</td>

                                     <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Teclado }}</td>

                                      <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Corneta }}</td>

                                      <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Regulador }}</td>

                                      <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Proxy }}</td>
                                      

                                     
                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Dns }}</td>

                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Puerto }}</td>

                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->CableCorriente }}</td>

                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->CableVGAHDMI }}</td>

                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Impresora }}</td>

                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Telefono }}</td>

                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Route }}</td>

                                         <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->PuntoRed }}</td>

                                         <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->CajetinPuntos }}</td>

                                        <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->Observacion }}</td>

                                       <td class=" px-3 py-4 text-sm text-gray-500 text-center" colspan="0">{{ $listadoEquipoPB->CasoEspeciales }}</td>
                                      
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>

                        {{-- <div class="mt-4 px-4">
                             {{ $ListadoEquipoPB->withQueryString()->links() }}
                        </div> --}}
                        

                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
