<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Usuario: {{strtoupper($EquipoT->Nombre)}} {{strtoupper($EquipoT->Apellidos)}}</title>
	<link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     
</head>

<style>
    table{
    border-collapse: separate;
    outline:2px solid  rgb(7, 7, 7);
}


th {
outline:1px solid  rgb(7, 7, 7);

}

td {
outline:1px solid  rgb(7, 7, 7);
}

</style>
<body>

	<div class="col-lg-12 col-md-12">
        <img src="../public/img/cintillo.png" alt="" width="100%" >
        </div>
        <br>
	<h5 class="text-center">Entrega de Equipo</h5>
	<br>
    <div class="">
    <table class="table table-bordered border-5 border border-info">
     <thead>
            <tr>
            	<th class="text-center" colspan="2">N°Control</th>
                <th class="text-center" colspan="4">Nombre y Apellido</th>
                <th class="text-center" colspan="20">Cedula</th>
                
            </tr>
        </thead>
            <tbody>
                <tr>
                	<td class="text-center" colspan="2">{{ $EquipoT->NControl }}</td>
                    <td class="text-center" colspan="4">{{strtoupper($EquipoT->Nombre)}} {{strtoupper($EquipoT->Apellidos)}}</td>
                    <td class="text-center" colspan="20">{{ $EquipoT->Cedula }}</td>
                    

                </tr>

             </tbody>
             <thead>
            <tr>

            <th class="text-center" colspan="2" >Telefono</th>
            <th class="text-center" colspan="4" >Departamento</th>
             <th class="text-center" colspan="20" >Ip</th>
            
        </tr>
     </thead>

     <tbody>
        <tr>
            <td class="text-center" colspan="2">{{ $EquipoT->Telefono  }}</td>
           <td class="text-center" colspan="4">{{ $EquipoT->departamentos->Departamento  }}</td>
           <td class="text-center" colspan="20">{{ $EquipoT->ip_equipo  }}</td>

        </tr>

     </tbody>


 <thead>
        <tr>
            <th class="text-center" colspan="4" >Fecha Solicitud</th>
           <th class="text-center" colspan="22" >Fecha Culminacion</th>
            
    </tr>
 </thead>

 <tbody>
    <tr>
        <td  class="text-center" colspan="4" >{{ \Carbon\Carbon::parse($EquipoT->FechaEntrada)->format('d/m/Y H:i') }}</td>
         <td  class="text-center" colspan="22" >{{ \Carbon\Carbon::parse($EquipoT->FechaSalida)->format('d/m/Y H:i') }}</td>
      
    </tr>
 </tbody>

     <thead>
        <tr>
            <th class="text-center" colspan="27" >Tipo de Falla</th>
           
            
    </tr>
 </thead>

 <tbody>
    <tr>
        <td  class="text-center" colspan="27" >{{ $EquipoT->tipoFallas->Tipo_Falla }}</td>
      
    </tr>
 </tbody>

<thead>
        <tr>
           
            <th class="text-center" colspan="27" >Motivo de Falla</th>
            
    </tr>
 </thead>

  <tbody>
    <tr>
       
        <td class="text-center" colspan="27" >{{ $EquipoT->Motivo_Falla }}</td>
        
    </tr>
 </tbody>

 <thead>
    <tr>
        <th class="text-center"   colspan="27" >Solucion</th>


</tr>
</thead>

<tbody>
    <tr>
        <td class="text-center" colspan="27" >{{ $EquipoT->Solucion }}</td>

    </tr>
 </tbody>

 <thead>
    <tr>
        <th class="text-center" colspan="27" >Técnico en  Cargo</th>
        

</tr>
</thead>

<tbody>
    <tr>
        <td class="text-center" colspan="27" >{{ $EquipoT->Tecnico }}</td>
        

    </tr>
 </tbody>

 <thead>
    <tr>

        <th class="text-center" colspan="4" >Firma Técnico</th>
        <th  class="text-center" colspan="23" >Firma Usuario</th>

</tr>
</thead>

<tbody>
    <tr>
        <td class="text-center" colspan="4" >_________________________</td>
        <td class="text-center" colspan="23" >________________________</td>

    </tr>
 </tbody>


    </table>

</div>





{{-- <br>
<strong><center>Firma y Sello:
<br><br>
_________________________________
<br><br>
<p>{{$Pacientes->Psicologo}}</p>
Psicologo</strong></center> --}}


</body>
</html>
