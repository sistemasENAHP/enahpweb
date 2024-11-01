<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }} Soporte
        </h2>
    </x-slot>

    <div class="">
        <div class="container max-w-screen-lg mx-auto">
          <div>
            <h2 class="font-semibold text-xl text-gray-600">Piso P1</h2>
            <p class="text-gray-500 mb-6"></p>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <form method="POST" action="{{ route('ListadoIp.update', $ListaIp->id) }}"  role="form" enctype="multipart/form-data" id="validacion">
                    {{ method_field('PATCH') }}
                    @csrf
                    @include('Listado.ListadoIp.P1.formP1')
                </form>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>
<script>
    $(document).ready(function(){

    $('#validacion').on('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                position: "top-center",
                icon: "success",
                 title: "la Informacion se ha Guardado Exitosamente",
                 showConfirmButton: false,
                 timer: 1500
                  }).then((result) => {

                     this.submit();


                                       }); 

                                     });
                               });
</script>
