
@extends('layouts.dashboard')
@section('pageheader')
    Inicio
@endsection
@section('content')
@php
    $roluser=auth()->user()->roles()->first()->id;
    //dd($roluser);
@endphp
    {{-- <img src="{{ asset('assets/img/fondo.jpg') }}" width="100%" > --}}
 <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css')}} ">

    <div class="col-md-12">
       <div class="bg-image " style="background-image: url('{{ asset('assets/img/fondo.jpg')}}')">
        <div class="bg-primary-dark-op">
            <div class="content content-narrow content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                    <div class="flex-sm-fill">
                        <h1 class="font-w600 text-white mb-0" ></h1>
                        <h2 class="h4 font-w400 text-white-75 mb-0">Bienvenido {{ auth()->user()->nombres.' '.auth()->user()->apellidos }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="card card">
        <div class="card-header bg-black">Inicio</div>
        <div class="card-body">
        {{-- ROW CONFIGURACIONS IVA ACTIVO Y/O VALOR DOLAR MONITOS DICOM --}}
        <div class="row">
          <div class="col-12 col-sm-6 col-md-2">
          </div>
            <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-orange elevation-1"><i class="fas fa-dollar-sign"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Dolar BCV:</span>
                <span class="info-box-number" id="dicom"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-pink elevation-1"><i class="fas fa-euro-sign"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">EURO BCV:</span>
                <span class="info-box-number" id="monitor"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-2">
          </div>
        </div>


        <div class="row">
            @if ($roluser<=2)
       {{--       <div class="col-12 col-sm-6 col-md-6" id="container1">
            </div> --}}
            <div class="col-12 col-sm-6 col-md-6" id="container">
            </div>
            @endif
            <div class="col-12 col-sm-6 col-md-6">
            <div class="card">
              <div class="card-header" style="background-color: white">
                <h3 class="card-title">Ultimos 5 Clientes Atendidos del día {{ $fechaactual }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="height:250px;">
                <ul>

                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">

              </div>
              <!-- /.card-footer -->
            </div>
            </div>
        </div>
         </div>
       </div>
     </div>
{{-- <script src="{{ asset('assets/js/oneui.core.min.js') }}"></script>
<script src="{{ asset('assets/js/oneui.app.min.js') }}"></script> --}}
<script src="{{ asset('hchart/highcharts.js')}}"></script>
<script src="{{ asset('hchart/highcharts-3d.js')}}"></script>
<script src="{{ asset('hchart/modules/exporting.js')}}"></script>
<script src="{{ asset('hchart/modules/export-data.js')}}"></script>
<script src="{{ asset('hchart/modules/accessibility.js')}}"></script>
<script type="text/javascript">
// Set up the chart
var chart = new Highcharts.Chart({
    chart: {
        renderTo: 'container',
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 0,
            depth: 50,
            viewDistance: 25
        }
    },
    title: {
        text: 'Total Clientes Atendidos'
    },
    subtitle: {
        text: 'A5P'
    },
    plotOptions: {
        column: {
            depth: 25
        }
    },
    xAxis: {
        categories: [
            'Ene',
            'Feb',
            'Mar',
            'Abr',
            'May',
            'Jun',
            'Jul',
            'Ago',
            'Sep',
            'Oct',
            'Nov',
            'Dic'
        ],
        crosshair: true
    },
    series: [{
        name: 'Repuestos',
        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
        color: ' #c0392b'
    },{
        name: 'Servicios',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2],
        color: '#9c640c'
    }]
});

// var chart2 = new Highcharts.chart('container1', {

//    chart: {
//         type: 'pie',
//         options3d: {
//             enabled: true,
//             alpha: 45,
//             beta: 0
//         }
//     },
//     title: {
//         text: 'Analisis Ultimo Expediente Procesado'
//     },
//     accessibility: {
//         point: {
//             valueSuffix: '%'
//         }
//     },
//     tooltip: {
//         pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
//     },
//     plotOptions: {
//         pie: {
//             allowPointSelect: true,
//             cursor: 'pointer',
//             depth: 35,
//             dataLabels: {
//                 enabled: true,
//                 format: '{point.name}'
//             }
//         }
//     },
//     series: [{
//         type: 'pie',
//         name: 'Browser share',
//         data: [
//             {
//                 name: 'Agente Aduanal',
//                 y: 12.8,
//                 sliced: true,
//                 selected: true
//             },
//             ['Bases Legales', 8.5],
//             ['Gastos 3eros', 6.2]
//         ]
//     }]

// });
</script>


@endsection
