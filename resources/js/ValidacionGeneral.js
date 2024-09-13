$(document).ready(function() {
    $('.guardar').click(function(){

        $('#validacion').validate({

            rules:{
                personal_paciente_id:{required:true},
                nombre:{required:true},
                apellidos:{required:true},
                cedula:{required:true,number:true,unique:pacientes},
                sexo:{required:true},
                Edad:{required:true,number:true},
                Correo:{required:true,email:true},
                Telefono:{required:true,number:true},
                EstadoCivil:{required:true},
                Direccion:{required:true},
                TurnoEstudiantes:{required:true},
                TurnoProfesores:{required:true},
                Fecha:{required:true},
                Motivo_Consulta:{required:true},





            },


            messages:{
                personal_paciente_id:{required:'<div class="text-danger">Este Campo es requerido</div>'},
                nombre:{required:'<div class="text-danger">Este Campo es requerido</div>'},
                apellidos:{required:'<div class="text-danger">Este Campo es requerido</div>'},
                cedula:{required:'<div class="text-danger">Este Campo es requerido</div>'},
                sexo:{required:'<div class="text-danger">Este Campo es requerido</div>'},
                Edad:{required:'<div class="text-danger">Este Campo es requerido</div>'},
                Correo:{required:'<div class="text-danger">Este Campo es requerido</div>'},
                Telefono:{required:'<div class="text-danger">Este Campo es requerido</div>'},
                EstadoCivil:{required:'<div class="text-danger">Este Campo es requerido</div>'},
                Direccion:{required:'<div class="text-danger">Este Campo es requerido</div>'},
                TurnoEstudiantes:{required:'<div class="text-danger">Este Campo es requerido</div>'},
                TurnoProfesores:{required:'<div class="text-danger">Este Campo es requerido</div>'},
                Fecha:{required:'<div class="text-danger">Este Campo es requerido</div>'},
                Motivo_Consulta:{required:'<div class="text-danger">Este Campo es requerido</div>'},

            }


        });

    });

    $('.ValidarNombres').keyup(function(){


        let Campo =  $(this).val();
        let myText = "palabravalida";
         /^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+$/i.test(myText)

       if(Campo.trim() === ""){

         $('#mensajes').html('<p class="text-danger">*Esté Campo No puede esta Vacio y  Tienes que llevar Caracteres...</p>');



         return false;
       }
       if (!/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+$/i.test(Campo) ) {

        $('#mensajes').html('<p class="text-danger">*Esté Campo No puede tener numerco solo Letras...</p>');


        return false;


       }


         $('#mensajes').html("");


      });

      $('.ValidarApellidos').keyup(function(){


        let Campo1 =  $(this).val();
        let myText = "palabravalida";
         /^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+$/i.test(myText)

       if(Campo1.trim() === ""){

         $('#mensajes1').html('<p class="text-danger">*Esté Campo No puede esta Vacio y  Tienes que llevar Caracteres...</p>');

         return false;
       }
       if (!/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+$/i.test(Campo1) ) {

        $('#mensajes1').html('<p class="text-danger">*Esté Campo No puede tener numerco solo Letras...</p>');


        return false;


       }


         $('#mensajes1').html("");


      });

      $('.ValidarCedula').keyup(function(){


        let Cedula =  $(this).val();

        if(Cedula.trim() === ""){

            $('#Cedula').html('<p class="text-danger">*Esté Campo No puede esta Vacio...</p>');

            return false;
          }
          if(Cedula.length < 8){

            $('#Cedula').html('<p class="text-danger">*La Cedula tiene que tener 8 Digito</p>');

            return false;

          }else if(Cedula.length > 8){

            $('#Cedula').html('<p class="text-danger">*La Cedula tiene que tener 8 Digito</p>');

            return false;


          }



          $('#Cedula').html("");


      });

});
