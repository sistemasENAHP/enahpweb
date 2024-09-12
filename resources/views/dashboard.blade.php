<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("") }}
                    <div id="Notificaciones"></div>
                </div>
            </div>
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

            var channel = pusher.subscribe('chat-channel');
 channel.bind('chat-event', function(data) {
    // +JSON.stringify(data.messager)+
    

  $('#Notificaciones').append('<div class="alert alert-info alert-dismissible fade show" role="alert"><h3 class="text-lg font-bold">¡Hola, '+ data.Nombre + ' ' +data.Apellido+ '!</h3><p class="text-sm">Ya el Equipo está Listo!</p><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');

  

    });

            });
</script>
{{-- <script>
  const beamsClient = new PusherPushNotifications.Client({
    instanceId: '1ec46d32-dd36-47e3-8d16-65e747303989',
  });

  beamsClient
  .start()
  .then((beamsClient) => beamsClient.getDeviceId())
  .then((deviceId) =>
    console.log("Successfully registered with Beams. Device ID:", deviceId)
  )
  .catch(console.error);
</script> --}}