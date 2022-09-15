@extends('/admin/backend/layout/layout')
@section('content')
{{ Html::script('highcharts/highcharts.js') }}
{{ Html::script('highcharts/exporting.js') }}
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Panel de Control
        <small>Grupo Palermo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Panel de Control</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
</section>

@stop
