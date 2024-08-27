<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }} Soporte
        </h2>
    </x-slot>

    <div class="">
        <div class="container max-w-screen-lg mx-auto">
          <div>
            <h2 class="font-semibold text-xl text-gray-600">Piso P2 Y P3</h2>
            <p class="text-gray-500 mb-6"></p>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                 <form method="POST" action="{{ route('ListadoEquipo.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    @include('Listado.ListadoEquipos.P2YP3.formP2YP3')
                </form>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>

<script>
//     $(document).ready(function() {

//         $('#dep').hide();

//      $('#departamento_id').change(function() {
//             var departamento_id = $(this).val();
//              $('#dep').show();
//             $.ajax({
//                 url: "{{ route('ListadoEquipos.get') }}",
//                 data: { departamento_id: departamento_id },
//                 success: function(data) {
//                     $('#dep').empty();
//                     $.each(data, function(key, value) {
//                         $('#dep').append('<option value="' + value.id + '">' + value.name + ' '+value.surname+'</option>');
//                     });
//                 },
//                 error: function(data){

//                     $('#dep').append('<option value="">"hola"</option>');
//                 }
//             });
//         });


// });
</script>