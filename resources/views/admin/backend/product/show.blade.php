@extends('/admin/backend/layout/layout')
@section('content')
    {!! Html::style('ckeditor/contents.css') !!}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Producto
            <small> | Mostrar Producto</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url('/admin/product') !!}"><i class="fa fa-book"></i> Producto</a></li>
            <li class="active">Mostrar Producto</li>
        </ol>
    </section>
    <br>
    <br>
    <div class="container">
        <div class="col-lg-10">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{!! url('/admin/product') !!}"
                       class="btn btn-primary"> <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Volver </a>
                </div>
            </div>
            <br> <br> <br>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td><strong>Titulo</strong></td>
                    <td>{!! $product->titulo !!}</td>
                </tr>
                <tr>
                    <td><strong>Descripcion</strong></td>
                    <td>{!! $product->descripcion !!}</td>
                </tr>

                <tr>
                    <td><strong>Fecha creación</strong></td>
                    <td>{!! $product->created_at !!}</td>
                </tr>
                <tr>
                    <td><strong>Ultima Actualización</strong></td>
                    <td>{!! $product->updated_at!!}</td>
                </tr>
                <tr>
                    <td><strong>Imagen</strong></td>
                    <td>
                        <img src="{{ url($product->path.$product->file_name) }}" class="w-50" alt="">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
