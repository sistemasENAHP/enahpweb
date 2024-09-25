<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet" />


<x-app-layout>
  
 @role('Administrador|Usuario')
 <div id="Notificaciones"></div>
@endrole

 @role('Administrador|Coordinador|Tecnico')
 <div class="block max-w-sm p-6 bg-black border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
@foreach($Soporte as $soporte)
@if($soporte->estatus_id < 4)

    
{{-- <MARQUEE direction="up"> --}}
<div id="alert-additional-content-2" class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert"><div class="flex items-center"><svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg><span class="sr-only">Info</span><h3 class="text-lg font-medium">Notificación de Soporte</h3></div><div class="mt-2 mb-4 text-sm">Hola Tiene un Nuevo Soporte {{ $soporte->NControl }} en el Departamento {{ $soporte->departamentos->Departamento }}   Técnico Responsable:{{ $soporte->Tecnico }}   Estatus: {{ $soporte->estatus->Estatus }} </div><div class="flex"><a href="/Espera"><button type="button" class="text-black bg-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"><svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14"><path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/></svg>Ver Soporte</button></a></div></div>
{{--   --}}

@endif

@endforeach

<div class="w-full block max-w-sm p-6 bg-black dark:border dark:border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" style="margin-left:450px; position:relative; top:13%; color:#000 z-index: 1;">
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
    <textarea id="Descripcion" name="Descripcion" cols="41" rows="3"></textarea>
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
 <form action="" method="get">
 <div id="alert-additional-content-2" class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert"><div class="flex items-center"><svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg><span class="sr-only">Info</span><h3 class="text-lg font-medium">Notificación</h3></div><div class="mt-2 mb-4 text-sm">Asunto:{{ $notificacion->Asuntos  }}</div><div class="flex">Descripcion:{{ $notificacion->Descripcion }}</div><br><div class="flex"><a href="#"><button type="button" class="text-black bg-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"><svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14"><path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/></svg>Cerrar</button></a></div></div>
 </form>
 @endforeach
 @endforeach
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
    // +JSON.stringify(data.messager)+
    
     
  // $('#NotificacionesTecnico').append('<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert"> <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg><span class="sr-only">Info</span><span class="font-medium">¡Hola!</span><h4 class="text-sm">Hay un Soporte en '+data.Departamento+'</h4></div>');

      // $('#NotificacionesTecnico').append('<div id="alert-border-1" class="flex items-center p-4 mb-4 text-blue-800 border-t-4 border-blue-300 bg-blue-50 dark:text-red-400 dark:bg-gray-800 dark:border-blue-800" role="alert"><svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg><div class="ms-3 text-sm font-medium">Tiene un nuevo Soporte! dale en <a href="/Espera" class="font-semibold underline hover:no-underline">Ir </a> para  ver el soporte</div><button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-1" aria-label="Close"><span class="sr-only">Dismiss</span><svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg></button></div>');


    // $('#NotificacionesTecnico').append('<div class="bg-indigo-900 text-center py-4 lg:px-4"><div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert"><span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span><span class="font-semibold mr-2 text-left flex-auto">Get the coolest t-shirts from our brand new store</span><svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg></div><span class="absolute top-0 bottom-0 right-0 px-4 py-3"><svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg></span></div>');

  

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
