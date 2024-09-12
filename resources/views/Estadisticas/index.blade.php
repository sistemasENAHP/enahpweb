<x-app-layout>
    <div class="container">
        <h3 style="position:relative; top:-80px;">
            <P class="text-center">Estadistica</P>
        </h3>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-11">
        <form action="/EstadisticasPDF" method="get" target="_blank">
        <div class="form-group row g-3">

            <div class="col-3">
                <select name="opciones" id="opciones" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 opcion">

                    <option value="0">Seleciones.....</option>
                    <option value="1">Mostrar Técnico.....</option>
                    <option value="2">Mostrar Usuario.....</option>
                    <option value="3">Mostrar Departamento.....</option>
                    <option value="4">Mostrar Mes.....</option>
                    <option value="5">Mostrar Año.....</option>
                    <option value="11">Mostrar Todo</option>
                </select>
            </div>

            <div class="col-3">
           <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded  top-50 right-20 transform translate-y-1/2">PDF</button>
            </div>
        </div>
        </form>
    </div>
     <br>

            <div class="form-group row g-3">
                <div class="col" id="TablaTecnico">
                    <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table table-fixed w-3/4">

                        <thead class="">
                            <tr class="">
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="2">Soporte Realizado por Técnico</th>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="1">Cantidad</th>

                            </tr>

                        </thead>
                        @php $sum = 0;@endphp
                      
                           @foreach($Tecnico as $tec)
                            <tbody>
                                <tr>
                                    <td class="text-center  text-black" style="font-size: 95%;" colspan="2">{{ $tec->Tecnico }}</td>
                                    <td class="text-center  text-black" style="font-size: 95%;" colspan="1">{{ $tec->id }}@php $sum+=$tec->id; @endphp
                                       </td>
                                </tr>
                            </tbody>
                            @endforeach
                       

                        <thead>
                            <tr>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="2">Total:</th>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="1">{{ $sum }}</th>
                            </tr>
                        </thead>

                    </table>
                </div>

                    <div class="w-100" style=" ">{{-- Mostrar la grafica Motivo Consulta--}}
                        <div id="MostrarTecnico"></div>
                    </div>

<br>
                    <div class="col" id="TablaUsuario">
                    <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table table-fixed w-3/4">

                        <thead class="">
                            <tr class="">
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="2">Soporte Realizado Usuario</th>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="1">Cantidad</th>

                            </tr>

                        </thead>
                        @php $sum = 0;@endphp
                      
                             @foreach($Usuarios as $usuario )
                            <tbody>
                                <tr>
                                    <td class="text-center  text-black" style="font-size: 95%;" colspan="2">{{ $usuario->Nombre }} {{ $usuario->Apellidos }}</td>
                                    <td class="text-center  text-black" style="font-size: 95%;" colspan="1">{{ $usuario->id }}@php $sum+=$usuario->id; @endphp
                                       </td>
                                </tr>
                            </tbody>
                            @endforeach
                       

                        <thead>
                            <tr>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="2">Total:</th>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="1">{{ $sum }}</th>
                            </tr>
                        </thead>

                    </table>
                </div>

                    <div class="w-100" style=" ">{{-- Mostrar la grafica Motivo Consulta--}}
                        <div id="MostrarUsuario"></div>
                    </div>

  <br>                  
   <div class="col" id="TablaDepartamento">
                    <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table table-fixed w-3/4">

                        <thead class="">
                            <tr class="">
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="2">Por Departamento</th>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="1">Cantidad</th>

                            </tr>

                        </thead>
                        @php $sum = 0;@endphp
                      
                            @foreach($departamentos as $dep)
                            <tbody>
                                <tr>
                                    <td class="text-center  text-black" style="font-size: 95%;" colspan="2">{{ $dep->Departamento }}</td>
                                    <td class="text-center  text-black" style="font-size: 95%;" colspan="1">{{ $dep->departamento_id }}@php $sum+=$dep->departamento_id; @endphp
                                       </td>
                                </tr>
                            </tbody>
                            @endforeach
                       

                        <thead>
                            <tr>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="2">Total:</th>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="1">{{ $sum }}</th>
                            </tr>
                        </thead>

                    </table>
                </div>

                    <div class="w-100" style=" ">{{-- Mostrar la grafica Motivo Consulta--}}
                        <div id="MostrarDepartamento"></div>
                    </div>

<br>

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

                    <div class="w-100" style=" ">{{-- Mostrar la grafica Motivo Consulta--}}
                        <div id="MostrarMes"></div>
                    </div>

<br>

                    <div class="col" id="TablaAños">
                    <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table table-fixed w-3/4">

                        <thead class="">
                            <tr class="">
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="2">Años</th>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="1">Cantidad</th>

                            </tr>

                        </thead>
                     @php $Sumaaño = 0;@endphp
                    @foreach ($CAños as $consultaxaño)
                      
                            <tbody>
                                <tr>
                                     <td class="text-center  text-black" style="font-size: 95%;"  colspan="2">{{$consultaxaño->anio}}</td>
                            <td class="text-center  text-black" style="font-size: 95%;"  colspan="1">{{$consultaxaño->id}}@php $Sumaaño+=$consultaxaño->id; @endphp</td>
                                </tr>
                            </tbody>

                            @endforeach
                       

                        <thead>
                            <tr>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="2">Total:</th>
                                <th class="text-center  text-black" style="font-size: 95%; background-color:#3886E0;" colspan="1">{{ $Sumaaño }}</th>
                            </tr>
                        </thead>

                    </table>
                </div>

                    <div class="w-100" style=" ">{{-- Mostrar la grafica Motivo Consulta--}}
                        <div id="MostrarAños"></div>
                    </div>



                     </div>
</x-app-layout>
 <script>
        $(document).ready(function() {

            $('#TablaTecnico').hide();
              $('#MostrarTecnico').hide();
              $('#TablaUsuario').hide();
              $('#MostrarUsuario').hide();
               $('#TablaDepartamento').hide();
              $('#MostrarDepartamento').hide();
              $('#MostrarMes').hide();
               $('#TablaMes').hide();
               $('#TablaAños').hide();
               $('#MostrarAños').hide();
              


            $('.opcion').on('change', function() {

                if (this.value == '0') {

                    $('#TablaTecnico').hide();
                   $('#MostrarTecnico').hide();
                   $('#TablaUsuario').hide();
                   $('#MostrarUsuario').hide();
                    $('#TablaDepartamento').hide();
                   $('#MostrarDepartamento').hide();
                   $('#MostrarMes').hide();
                   $('#TablaMes').hide();
                 $('#TablaAños').hide();
                  $('#MostrarAños').hide();


                }

                if (this.value == '1') {

                    $('#TablaTecnico').show();
                     $('#MostrarTecnico').show();
                     $('#TablaUsuario').hide();
                     $('#MostrarUsuario').hide();
                      $('#TablaDepartamento').hide();
                      $('#MostrarDepartamento').hide();
                      $('#MostrarMes').hide();
                      $('#TablaMes').hide();
                      $('#TablaAños').hide();
                       $('#MostrarAños').hide();
                    

                }

                if(this.value == '2'){

                     $('#TablaTecnico').hide();
                     $('#MostrarTecnico').hide();
                     $('#TablaUsuario').show();
                     $('#MostrarUsuario').show();
                      $('#TablaDepartamento').hide();
                     $('#MostrarDepartamento').hide();
                     $('#MostrarMes').hide();
               $('#TablaMes').hide();
               $('#TablaAños').hide();
               $('#MostrarAños').hide();

                }

                if(this.value == '3'){

                     $('#TablaTecnico').hide();
                     $('#MostrarTecnico').hide();
                     $('#TablaUsuario').hide();
                     $('#MostrarUsuario').hide();
                     $('#TablaDepartamento').show();
                     $('#MostrarDepartamento').show();
                     $('#MostrarMes').hide();
                      $('#TablaMes').hide();
                      $('#TablaAños').hide();
                      $('#MostrarAños').hide();


                }

                if(this.value == '4'){
                  $('#TablaTecnico').hide();
                     $('#MostrarTecnico').hide();
                     $('#TablaUsuario').hide();
                     $('#MostrarUsuario').hide();
                     $('#TablaDepartamento').hide();
                     $('#MostrarDepartamento').hide();
                     $('#MostrarMes').show();
                      $('#TablaMes').show();
                      $('#TablaAños').hide();
                      $('#MostrarAños').hide();

                }

                  if(this.value == '5'){

                     $('#TablaTecnico').hide();
                     $('#MostrarTecnico').hide();
                     $('#TablaUsuario').hide();
                     $('#MostrarUsuario').hide();
                     $('#TablaDepartamento').hide();
                     $('#MostrarDepartamento').hide();
                     $('#MostrarMes').hide();
                      $('#TablaMes').hide();
                      $('#TablaAños').show();
                      $('#MostrarAños').show();
                }

                 if (this.value == '11') {

                    $('#TablaTecnico').show();
                    $('#MostrarTecnico').show();
                    $('#TablaUsuario').show();
                    $('#MostrarUsuario').show();
                    $('#TablaDepartamento').show();
                     $('#MostrarDepartamento').show();
                      $('#MostrarMes').show();
                      $('#TablaMes').show();
                      $('#TablaAños').show();
                      $('#MostrarAños').show();
                


                }

        

            });
        });
    </script>

     <script>
        // Highcharts.chart('MostrarTecnico', {
        //      chart: {
        //         type: 'pie'
        //     },
        //     title: {
        //         text: 'Grafico de soporte por Tecnico',
        //         align: 'CENTER'
        //     },

        //     xAxis: {
        //         categories: <?= $dataa1 ?>,
        //         crosshair: true,
        //         accessibility: {
        //             description: 'Countries'
        //         }
        //     },
        //     yAxis: {
        //         min: 0,
        //         title: {
        //             text: ''
        //         }
        //     },
        //     tooltip: {
        //         valueSuffix: ''
        //     },
        //     plotOptions: {
        //         column: {
        //             pointPadding: 0.2,
        //             borderWidth: 0
        //         }
        //     },
        //     series: [{
        //             name: 'Tecnico',
        //             data: <?= $data1 ?>
        //         },
        //         // {
        //         //     name: 'Wheat',
        //         //     data: [51086, 136000, 5500, 141000, 107180, 77000]
        //         // }
        //     ]
        // });   
        Highcharts.chart('MostrarTecnico', {
        chart: {
                type: 'pie'
            },
            title: {
                text: 'Grafico de soporte por Tecnico'
            },
            tooltip: {
                valueSuffix: '%'
            },
            subtitle: {
                text: ''
            },
            plotOptions: {
                series: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: [{
                        enabled: true,
                        distance: 20
                    }, {
                        enabled: true,
                        distance: -40,
                        format: '{point.percentage:.1f}%',
                        style: {
                            fontSize: '1.2em',
                            textOutline: 'none',
                            opacity: 0.7
                        },
                        filter: {
                            operator: '>',
                            property: 'percentage',
                            value: 10
                        }
                    }]
                }
            },
            series: [{
                name: 'Percentage',
                colorByPoint: true,
                data: <?= $data1 ?>
            }]

              });


         Highcharts.chart('MostrarUsuario', {
             chart: {
                type: 'column'
            },
            title: {
                text: 'Grafico de soporte por Usuario',
                align: 'CENTER'
            },

            xAxis: {
                categories: <?= $Usuario1 ?>,
                crosshair: true,
                accessibility: {
                    description: 'Countries'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Usuario',
                    data: <?= $Usuario ?>
                },
                // {
                //     name: 'Wheat',
                //     data: [51086, 136000, 5500, 141000, 107180, 77000]
                // }
            ]
        });   


            Highcharts.chart('MostrarDepartamento', {
             chart: {
                type: 'column'
            },
            title: {
                text: 'Grafico por Departamentos',
                align: 'CENTER'
            },

            xAxis: {
                categories: <?= $dataa ?>,
                crosshair: true,
                accessibility: {
                    description: 'Countries'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Departamentos',
                    data: <?= $data ?>
                },
                // {
                //     name: 'Wheat',
                //     data: [51086, 136000, 5500, 141000, 107180, 77000]
                // }
            ]
        });   

          let Año = <?php echo json_encode($ConsultAño); ?>;   // JSON data parsed by jQuery
        Highcharts.chart('MostrarAños', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Soporte Por Año',
                align: 'left'
            },

            xAxis: {
                categories: ['2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034',
                    '2035'
                ],
                crosshair: true,
                accessibility: {
                    description: 'Countries',
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Soporte por Año',
                    data: Año
                },
                // {
                //     name: 'Wheat',
                //     data: [51086, 136000, 5500, 141000, 107180, 77000]
                // }
            ]
        });

      let Mes = <?php echo json_encode($counts); ?>; // JSON data parsed by jQuery
        Highcharts.chart('MostrarMes', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Soporte Por Mes',
                align: 'left'
            },

            xAxis: {
                categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                    'Octubre', 'Noviembre', 'Diciembre'
                ],
                crosshair: true,
                accessibility: {
                    description: 'Countries'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Soporte por Mes',
                    data: Mes
                },
                // {
                //     name: 'Wheat',
                //     data: [51086, 136000, 5500, 141000, 107180, 77000]
                // }
            ]
        });

    </script>