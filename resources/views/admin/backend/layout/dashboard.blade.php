@extends('/admin/backend/layout/layout')
@section('content')
{{ Html::script('highcharts/highcharts.js') }}
{{ Html::script('highcharts/exporting.js') }}
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Version 2.0</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
</section>

@stop