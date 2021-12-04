@extends('layouts.index')


@section('titulo')
    <!-- contenido -->
    <div class="container">
        <div class="page-header">
            <h1 class="text-5xl all-tittles">Panel de control administrador <small>Inicio</small></h1>
        </div>
    </div>

@endsection

@section('subtitulo')
    <div class="container">
        <div class="page-header">
            <h1 class="text-4xl all-tittles">Panel de control grafica <small>Inicio</small></h1>
        </div>
    </div>

@endsection

@section('grafica')

    <div class="container">
        <div id="high_chart" class="high_chart"></div>
        <p class="highcharts-description">
            Pie charts are very popular for showing a compact overview of a
            composition or comparison. While they can be harder to read than
            column charts, they remain a popular choice for small datasets.
        </p>
    </div>


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    

    <script>
        var users = <?php echo json_encode($users); ?>;

        //variables para las consultas
        var cel = <?php echo json_encode($cel); ?>;
        var ase = <?php echo json_encode($ase); ?>;
        var tod = <?php echo json_encode($tod); ?>;
        var asi = <?php echo json_encode($asi); ?>;
        var asistente = <?php echo json_encode($asistente); ?>;

        //variables para los nombres
        var cela = <?php echo json_encode($cela); ?>;
        var asea = <?php echo json_encode($asea); ?>;
        var tode = <?php echo json_encode($tode); ?>;
        var asis = <?php echo json_encode($asis); ?>;


        Highcharts.chart('high_chart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Usuarios con cargos en el sistema, 2022'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: asistente,
                colorByPoint: true,
                data: [{
                    name: 'Celadores',
                    y: cel,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Aseadoras',
                    y: ase
                }, {
                    name: 'Toderos',
                    y: tod
                }, {
                    name: 'Asistentes',
                    y: asi
                }]
            }]
        });
    </script>

@endsection
