@extends('/admin/backend/layout/layout')
@section('content')
    {!! Html::style('ckeditor/contents.css') !!}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Historias de Exito
            <small> | Mostrar Historia</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url('/admin/historia') !!}"><i class="fa fa-book"></i> Historia de Exito</a></li>
            <li class="active">Mostrar Historia</li>
        </ol>
    </section>
    <br>
    <br>
    <div class="container-flui">
        <div class="col-lg-12">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{!! url('/admin/historia') !!}"
                       class="btn btn-primary"> <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Volver </a>
                </div>
            </div>
            <br> <br> <br>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td><strong>Titulo</strong></td>
                    <td>{!! $historia->titulo !!}</td>
                </tr>
                <tr>
                    <td><strong>Reto</strong></td>
                    <td>{!! $historia->reto !!}</td>
                </tr>
                <tr>
                    <td><strong>Solucion</strong></td>
                    <td>{!! $historia->solucion !!}</td>
                </tr>
                <tr>
                    <td><strong>Resultado</strong></td>
                    <td>{!! $historia->resultado !!}</td>
                </tr>

                <tr>
                    <td><strong>Fecha creación</strong></td>
                    <td>{!! $historia->created_at !!}</td>
                </tr>
                <tr>
                    <td><strong>Ultima Actualización</strong></td>
                    <td>{!! $historia->updated_at!!}</td>
                </tr>
                <tr>
                    <td><strong>Imagen</strong></td>
                    <td>
                        <img src="{{ url($historia->path.$historia->file_name) }}" class="w-50" alt="">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
