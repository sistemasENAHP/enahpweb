<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
     <div class="col" id="TablaMes">
                    <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table table-fixed w-3/4">

                        <thead class="">
                            <tr class="">
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="2">Mes</th>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="1">Cantidad</th>

                            </tr>

                        </thead>
                       @php 
                       // use Carbon\Carbon;  
                       $SumaMes = 0;
                       
                       @endphp
                         
                      
                       @foreach ($CMes as $consultaxmes)
                            <tbody>
                                <tr>
                                   <td class="text-center  text-black" style="font-size: 95%;"  colspan="2">{{$Meses}}</td>
                        
                                <td class="text-center  text-black" style="font-size: 95%;"  colspan="1">{{$consultaxmes->id}}@php $SumaMes+=$consultaxmes->id; @endphp</td>
                                </tr>
                            </tbody>

                            @endforeach
                       

                        <thead>
                            <tr>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="2">Total:</th>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="1">{{ $SumaMes }}</th>
                            </tr>
                        </thead>

                    </table>
                </div>
</body>
</html>