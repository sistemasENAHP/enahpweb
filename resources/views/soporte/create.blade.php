<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }} Soporte
        </h2>
    </x-slot>
<div id="NotificacionUsuario"></div>
<div id="Notificaciones"></div>
    <div class="">
        <div class="container max-w-screen-lg mx-auto">
          <div>
            <h2 class="font-semibold text-xl text-gray-600">Soporte</h2>
            <p class="text-gray-500 mb-6"></p>

                 <form method="POST" action="{{ route('Soportes.store') }}"  role="form" enctype="multipart/form-data" id="validacion">
                    @csrf
                  <div class="space-y-6">
    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3" id="on">
        <div class="text-gray-600">
          <p class="font-medium text-lg">Solicitud de Soporte</p>
          <p></p>
        </div>
        <div class="lg:col-span-2">
          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
            <div class="md:col-span-1" >
                <label for="NControl">N° Control</label>
                @if(!$NControl == '')
                <x-text-input type="text" name="NControl" id="NControl" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="SP-{{ substr($NControl->NControl++, 3); }}"  autocomplete="NControl" placeholder="" readonly />

                <x-input-error class="mt-2" :messages="$errors->get('NControl')"/>
                    @else

                    <x-text-input type="text" name="NControl" id="NControl" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="SP-100" autocomplete="NControl" placeholder="" readonly />

                        <x-input-error class="mt-2" :messages="$errors->get('NControl')"/>
                    @endif
              </div>
            <div class="md:col-span-2">
              <label for="Nombre">Nombre</label>
              <x-text-input type="text" id="Nombre" name="Nombre"  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$user->name}}" autocomplete="Nombres" placeholder="Nombres" readonly />
              <x-input-error class="mt-2" :messages="$errors->get('Nombre')"/>

            </div>
            <div class="md:col-span-2">
                <label for="Apellidos">Apellido</label>
                <x-text-input type="text" id="Apellidos" name="Apellidos" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$user->surname}}" autocomplete="Apellidos" placeholder="Apellidos" readonly/>
                <x-input-error class="mt-2" :messages="$errors->get('Apellidos')"/>

              </div>
              <div class="md:col-span-2">
                <label for="Cedula">Cedula</label>
                <x-text-input type="text" name="Cedula" id="Cedula" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$user->identification_card}}" autocomplete="Cedula" placeholder="Cedula" readonly/>
                <x-input-error class="mt-2" :messages="$errors->get('Cedula')"/>
              </div>
            <div class="md:col-span-3">
              <label for="email">Correo</label>
              <x-text-input type="email" name="Correo" id="Correo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$user->email}}" autocomplete="Correo" placeholder="enahp@enahp.com"  readonly/>
              <x-input-error class="mt-2" :messages="$errors->get('Correo')"/>
            </div>

            <div class="md:col-span-2">
                <label for="Telefono">Telefono o Extension</label>
                <x-text-input type="text" name="Telefono" id="Telefono" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$user->telefono}}" autocomplete="Telefono"  placeholder="Telefono" readonly/>
                <x-input-error class="mt-2" :messages="$errors->get('Telefono')"/>
              </div>

              <div class="md:col-span-3">
                <label for="Telefono">Celular</label>
                <x-text-input type="text" name="telefonoI" id="telefonoI" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$user->telefonoI}}" autocomplete="telefonoI"  placeholder="Celular" readonly/>
                <x-input-error class="mt-2" :messages="$errors->get('telefonoI')"/>
              </div>

           <div class="md:col-span-2">
                <label for="departamento_id">Departamento</label>
                <x-text-input type="hidden" name="departamento_id" id="departamento_id" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{old('departamento_id',$user->departamentos->id) }}" autocomplete="departamento_id"  placeholder="" />
                <x-text-input type="text" name="" id="" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{old('departamento_id',$user->departamentos->Departamento) }}" autocomplete=""  placeholder=""  readonly/>
                <x-input-error class="mt-2" :messages="$errors->get('')"/>
              </div>

            @if(!$soporte->ip_equipo)
            <div class="md:col-span-3">
                <label for="ip_maquina">Ip de la maquina</label>
                <x-text-input type="text" name="ip_maquina" id="ip_maquina" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$user->ip_equipo}}" placeholder=""  readonly />
                <x-input-error class="mt-2" :messages="$errors->get('ip_maquina')"/>
              </div>
              @else
                  <div class="md:col-span-3">
                <label for="ip_maquina">Ip de la maquina</label>
                <x-text-input type="text" name="ip_maquina" id="ip_maquina" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{old('ip_equipo',$user?->ip_equipo)}}" placeholder=""  readonly />
                <x-input-error class="mt-2" :messages="$errors->get('ip_maquina')"/>
              </div>

              @endif

               <div class="md:col-span-2">
                <label for="nombre_equipo">Nombre Equipo</label>
                <x-text-input type="text" name="nombre_equipo" id="nombre_equipo" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $user->nombre_equipo }}" placeholder=""  readonly/>
                <x-input-error class="mt-2" :messages="$errors->get('nombre_equipo')"/>
               </div>

              <div class="md:col-span-3">
                <label for="address">Fecha / Hora</label>
                <x-text-input type="datetime"  name="FechaEntrada" id="FechaEntrada" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  value="{{$date,old('FechaEntrada',$user?->FechaEntrada)}}" placeholder="" readonly />
                  <x-input-error class="mt-2" :messages="$errors->get('FechaEntrada')"/>
              </div>

            <div class="md:col-span-5">
                <label for="address">Tipo de Falla</label>
                <select name="tipo_falla_id" id="tipo_falla_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
              </div>

              <div class="md:col-span-5">
                <x-text-input type="hidden" name="estatus_id" id="estatus_id" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="1" placeholder=""  readonly />
              </div>

              <div class="md:col-span-3">
                <label for="address">Especifique el Motivo de la falla</label>
                    <textarea name="Motivo_Falla" id="Motivo_Falla" cols="79" rows="3" required>{{$soporte->Motivo_Falla}}</textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('Motivo_Falla')"/>
              </div>
            <div class="md:col-span-5 text-center">
              <div class="inline-flex items-end" >
                 <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" >Enviar..</button>

                 {{-- <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Actualizar</button> --}}

              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
</div>


            </div>
          </div>
        </div>
      </div>
</x-app-layout>
<script>

    function cerrar() { 
              setTimeout(function(){
            // window.location.href = 'https://www.google.com/?hl=es';
             this.myWindow.close();

        },3000); //Dejara un tiempo de 3 seg para que el usuario vea que se envio el formulario correctamente

    }

    $(document).ready(function(){

              $('#validacion').on('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Confirme si desea enviar un Soporte?",
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "Enviar",
                    denyButtonText: `No`,
                   
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        this.submit();

                        Swal.fire("Enviado informacion a un Técnico!", "", "success");
                        // window.location.href = 'https://www.google.com/?hl=es';

                   // window.location.href = 'https://www.google.com/?hl=es';


                    } else if (result.isDenied) {
                        Swal.fire("Los cambios no se guardaran", "", "info");

                    }
                });
            });



 // Enable pusher logging - don't include this in production
 Pusher.logToConsole = true;

var pusher = new Pusher('5dade7404be34deb0ac4', {
    cluster: 'us2'
});

var channel = pusher.subscribe('usuario-channel');
channel.bind('usuario-event', function(data) {
if(data['cedula'] == {{  Auth()->user()->identification_card}}){
$('#NotificacionUsuario').append(function(){

           Swal.fire({

            position: "top-center",
            icon: "info",
            title:'Hola!  El Técnico ' +data['Tecnico']+ '  Acepto tu Solicitud.  ' +data['messager'],
                  
            // timer: 9000

        }).then((result) => {

            // location.reload();
            tr.hide();

        });


});

}

});

       Pusher.logToConsole = false;

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
                          showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "Enviar",
                    denyButtonText: `OK`,
                    

                    }).then((result) => {

                        // location.reload();
                        tr.hide();

                    })




                });

}

                });  

                 });       


   



</script>

