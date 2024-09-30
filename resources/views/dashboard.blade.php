<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet" />


<x-app-layout>

 @role('Administrador|Usuario')
 <div id="Notificaciones"></div>
 <div id="NotificacionesSistema"></div>
@endrole

 @role('Administrador|Coordinador|Tecnico')
 <div id="NotificacionesTecnico"></div>
 <div class="flex justify-between">
<div class="block max-w-sm p-6">
@foreach($Soporte as $soporte)
@if($soporte->estatus_id == 1)


<div id="alert-additional-content-2{{$soporte->id}}" class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert"><div class="flex items-center"><svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg><span class="sr-only">Info</span><h3 class="text-lg font-medium">Notificación de Soporte</h3></div><div class="mt-2 mb-4 text-sm">Tiene un Nuevo Soporte, Numero de Control {{ $soporte->NControl }} en el Departamento {{ $soporte->departamentos->Departamento }} en lo cual Se encuentra en <strong>Estatus: {{ $soporte->estatus->Estatus }}</strong> </div><div class="flex"><a href="{{ route('Espera.MostrarEspera', $soporte->id) }}"><button type="button" class="text-white bg-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"><svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14"><path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/></svg>Ver Soporte</button></a><button type="button" class="text-red-800 bg-transparent border border-red-800 hover:bg-red-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-red-600 dark:border-red-600 dark:text-red-400 dark:hover:text-white dark:focus:ring-red-800" data-dismiss-target="#alert-additional-content-2{{$soporte->id}}" aria-label="Close">Cerrar</button></div></div>


@elseif($soporte->estatus_id == 2)

<div id="alert-additional-content-3{{$soporte->id}}" class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert"><div class="flex items-center"><svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg><span class="sr-only">Info</span><h3 class="text-lg font-medium">Notificación de Soporte</h3></div><div class="mt-2 mb-4 text-sm">
     Este Soporte  {{ $soporte->NControl }} del Departamento  {{ $soporte->departamentos->Departamento }} lo tiene asigano el Técnico Responsable: {{ $soporte->Tecnico }} en lo cual Se encuentra en   <strong>Estatus: {{ $soporte->estatus->Estatus }}</strong> </div><div class="flex"><a href="{{ route('Reparacion.edit', $soporte->id) }}"><button type="button" class="text-white bg-green-800 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14"><path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/></svg>Ver Soporte</button></a><button type="button" class="text-green-800 bg-transparent border border-green-800 hover:bg-green-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-green-600 dark:border-green-600 dark:text-green-400 dark:hover:text-white dark:focus:ring-green-800" data-dismiss-target="#alert-additional-content-3{{$soporte->id}}" aria-label="Close">Cerrar</button>
    </div>
  </div>

  @elseif($soporte->estatus_id == 3)

<div id="alert-additional-content-4{{$soporte->id}}" class="p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400 dark:border-yellow-800" role="alert"><div class="flex items-center"><svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg><span class="sr-only">Info</span><h3 class="text-lg font-medium">Notificación de Soporte</h3></div><div class="mt-2 mb-4 text-sm">
     Este Soporte  {{ $soporte->NControl }} del Departamento  {{ $soporte->departamentos->Departamento }} lo tiene asigano el Técnico Responsable: {{ $soporte->Tecnico }} en lo cual Se encuentra en  <strong> Estatus: {{ $soporte->estatus->Estatus }} </strong></div><div class="flex"><a href="{{ route('Pendiente.edit', $soporte->id) }}"><button type="button" class="text-white bg-yellow-800 hover:bg-yellow-900 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800"><svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14"><path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/></svg>Ver Soporte</button></a><button type="button" class="text-yellow-800 bg-transparent border border-yellow-800 hover:bg-yellow-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-yellow-600 dark:border-yellow-600 dark:text-yellow-400 dark:hover:text-white dark:focus:ring-yellow-800" data-dismiss-target="#alert-additional-content-4{{$soporte->id}}" aria-label="Close">Cerrar</button>
    </div>
  </div>
@endif

@endforeach
</div>
@endrole
@role('Administrador|Coordinador')
<div class="w-full block max-w-sm p-6 " >
 <h4 class="text-center text-black w-full" >Informacion</h4>
 <button type="button" class="text-white  bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" id="agregar">Agregar</button>
 <div id="asunto">
 <form method="POST" action="{{ route('dashboard.store') }}"  role="form" enctype="multipart/form-data">
     @csrf
 <div>
     <label>Asunto</label>
     <input type="text" name="Asuntos" id="Asuntos" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
 </div>
  <div>
     <label>Descripcion</label>
    <textarea id="Descripcion" name="Descripcion" cols="35" rows="3"></textarea>
 </div>
 <br>
 <div class="md:col-span-5 text-center">
              <div class="inline-flex items-end" >
 <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar</button>
 <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" id="cerrar">Cerrar</button>
</div>
</div>
 </form>
@endrole
 </div>
 <br><br>
 @role('Administrador|Coordinador|Tecnico|Usuario')
 @foreach($Notificacion as $notificacion)
 <form action="{{ route('dashboard.Eliminar', $notificacion->id) }}" method="get">
 @csrf
 @method('DELETE')
 <div id="alert-additional-content-2" class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert"><div class="flex items-center"><svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg><span class="sr-only">Info</span><h3 class="text-lg font-medium">Notificación de la Coordinacion de Sistema</h3></div><div class="mt-2 mb-4 text-sm">Asunto:{{ $notificacion->Asuntos  }}</div><div class="flex">Descripcion:{{ $notificacion->Descripcion }}</div><br><div class="flex">@role('Administrador|Coordinador')<a href="{{ route('dashboard.Eliminar', $notificacion->id) }}"><button type="button" class="text-black bg-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"><svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14"><path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/></svg>Eliminar</button></a>@endrole</div></div>
 </form>
 @endforeach
 @endrole
</div>
</div>

</x-app-layout>





<script>
        $(document).ready(function() {
           // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('5dade7404be34deb0ac4', {
                cluster: 'us2'
            });

            var channel = pusher.subscribe('termino-channel');
 channel.bind('termino-event', function(data) {
    // +JSON.stringify(data.messager)+

   if(data.Cedula == {{  Auth()->user()->identification_card}}){
  $('#Notificaciones').append(function(){

                       Swal.fire({
                        position: "top-center",
                        icon: "info",
                        title:'Su equipo se encuentra Listo',
                        showConfirmButton: false,
                        timer: 9000

                    }).then((result) => {

                        // location.reload();
                        tr.hide();

                    })




                });

  $('#Notificaciones').append('<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert"> <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg><span class="sr-only">Info</span><span class="font-medium">¡Hola! '+data.Nombre+' '+data.Apellido+'</span><h4 class="text-sm">Su equipo se encuentra Listo</h4></div>');


}


    });


 // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('5dade7404be34deb0ac4', {
                cluster: 'us2'
            });

            var channel = pusher.subscribe('chat-channel');
 channel.bind('chat-event', function(data) {

    $('#NotificacionesTecnico').append(function(){

                       Swal.fire({
                        position: "top-center",
                        icon: "info",
                        title:'Tiene una Notificacion Nueva',
                        showConfirmButton: false,
                        timer: 9000

                    }).then((result) => {

                        location.reload();
                        tr.hide();

                    });


    });

      });


 // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('5dade7404be34deb0ac4', {
                cluster: 'us2'
            });

            var channel = pusher.subscribe('sistema-channel');
 channel.bind('sistema-event', function(data) {

    $('#NotificacionesSistema').append(function(){

                       Swal.fire({
                        position: "top-center",
                        icon: "info",
                        title:'Tiene una Notificacion Nueva',
                        showConfirmButton: false,
                        timer: 9000

                    }).then((result) => {

                        location.reload();
                        tr.hide();

                    });


    });

      });

$('#asunto').hide();

$('#agregar').click(function(){

      $('#asunto').show();


});


$('#cerrar').click(function(){

      $('#asunto').hide();


});
 });



</script>
