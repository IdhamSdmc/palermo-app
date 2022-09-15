@extends('/admin/backend/layout/layout')
@section('content')
    {!! Html::style('ckeditor/contents.css') !!}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Linea de Tiempo
            <small> | Mostrar Año</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url('/admin/linea') !!}"><i class="fa fa-book"></i> Linea de Tiempo</a></li>
            <li class="active">Mostrar Año</li>
        </ol>
    </section>
    <br>
    <br>
    <div class="container">
        <div class="col-lg-12">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{!! url('/admin/linea') !!}"
                       class="btn btn-primary"> <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Volver </a>
                </div>
            </div>
            <br> <br> <br>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td><strong>Año</strong></td>
                    <td>{!! $linea->year !!}</td>
                </tr>
                <tr>
                    <td><strong>Descripcion</strong></td>
                    <td>{!! $linea->descripcion !!}</td>
                </tr>
                <tr>
                    <td><strong>Fecha creación</strong></td>
                    <td>{!! $linea->created_at !!}</td>
                </tr>
                <tr>
                    <td><strong>Ultima Actualización</strong></td>
                    <td>{!! $linea->updated_at!!}</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
@stop
