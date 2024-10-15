<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }} Soporte
        </h2>
    </x-slot>

    <div class="">
        <div class="container max-w-screen-lg mx-auto">
          <div>
            <h2 class="font-semibold text-xl text-gray-600">Listado General</h2>
            <p class="text-gray-500 mb-6"></p>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                 <form method="POST" action="{{ route('ListadoIpStore.storeGeneral') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    @include('Listado.ListadoIp.General.form')
                </form>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>
{{-- <script>
      $(document).ready(function() {

        $('#dep').hide();

     $('#departamento_id').change(function() {
            var departamento_id = $(this).val();
            console.log(departamento_id);
             $('#dep').show();
            $.ajax({
                url: "{{ route('ListadoIp.get') }}",
                data: { departamento_id: departamento_id },
                success: function(data) {
                    $('#dep').empty();
                     $('#dep').append('<option value="0">Selecciones</option>');                             
                    $.each(data, function(key, value) {

                        $('#dep').append('<option value="' + value.id + '">' + value.name + ' '+value.surname+'</option>');
                             
                                 
                    });

                   


                },
                error: function(data){

                    
                }
            });

            if(departamento_id == 'Selecciones'){

            $('#dep').hide();
           $('#Nombre').val('');
            $('#Apellidos').val('');
            $('#Cedula').val('');
            $('#ip_ministerio').val('');
            $('#ip_escuela').val('');
            }
        });




     $('#dep').change(function(){
        let dep = $(this).val();

         $.ajax({
                type:'get',
                url: "{{ route('ListadoFuncionario.get') }}",
                data: { dep: dep },
                datatype:'JSON',
                success: function(datas) {
                    $('#Nombre').empty();
                     

                        $('#Nombre').val(datas.name);
                        $('#Apellidos').val(datas.surname);
                        $('#Cedula').val(datas.identification_card);
                        if (datas.ip_equipo > '10.2.2.0' && datas.ip_equipo < '10.2.2.300' ) {
                        
                          $('#ip_escuela').val(datas.ip_equipo);
                        $('#ip_ministerio').val('');
                         }else if(datas.ip_equipo > '10.95.10.0' && datas.ip_equipo < '10.95.10.300' ){

                             $('#ip_ministerio').val(datas.ip_equipo);
                             $('#ip_escuela').val(''); 

                         }
                     
                },
                error: function(datas){

                    
                }
            });


         if(dep == '0'){

            $('#Nombre').val('');
            $('#Apellidos').val('');
            $('#Cedula').val('');
            $('#ip_ministerio').val('');
            $('#ip_escuela').val(''); 

         }
        


        });  


     


});
</script>
 --}}