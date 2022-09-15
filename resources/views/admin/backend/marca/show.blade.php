@extends('/admin/backend/layout/layout')
@section('content')
    {!! Html::style('ckeditor/contents.css') !!}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Marca
            <small> | Mostrar Marca</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url('/admin/marca') !!}"><i class="fa fa-book"></i> Marca</a></li>
            <li class="active">Mostrar Marca</li>
        </ol>
    </section>
    <br>
    <br>
    <div class="container">
        <div class="col-lg-12">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{!! url('/admin/marca') !!}"
                       class="btn btn-primary"> <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Volver </a>
                </div>
            </div>
            <br> <br> <br>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td><strong>Marca</strong></td>
                    <td>{!! $marca->marca !!}</td>
                </tr>
                <tr>
                    <td><strong>Fecha creación</strong></td>
                    <td>{!! $marca->created_at !!}</td>
                </tr>
                <tr>
                    <td><strong>Ultima Actualización</strong></td>
                    <td>{!! $marca->updated_at!!}</td>
                </tr>
                <tr>
                    <td><strong>Imagen</strong></td>
                    <td >
                        <img src="{{ url($marca->path.$marca->file_name) }}" style="width: 300px"  alt="">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
