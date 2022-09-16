@extends('/admin/backend/layout/layout')
@section('content')
{!! Html::style('ckeditor/contents.css') !!}
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Articulo
        <small> | Ver Articulo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url('admin.article.index') !!}"><i class="fa fa-book"></i> Article</a></li>
        <li class="active">Ver Articulo</li>
    </ol>
</section>
<br>
<br>
<div class="container">
    <div class="col-lg-12">
        <div class="pull-left">
            <div class="btn-toolbar">
                <a href="{!! URL::route('admin.article.index') !!}"
                   class="btn btn-primary"> <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back </a>
            </div>
        </div>
        <br> <br> <br>
        <table class="table table-striped">
            <tbody>
            <tr>
                <td><strong>Titulo</strong></td>
                <td>{!! $article->title !!}</td>
            </tr>
           
            <tr>
                <td><strong>Categoria</strong></td>
                <td>{!! $article->category[0]->title !!}</td>
            </tr>
            <tr>
                <td><strong>Fecha Creación</strong></td>
                <td>{!! $article->created_at !!}</td>
            </tr>
            <tr>
                <td><strong>Fecha Creación</strong></td>
                <td>{!! $article->updated_at !!}</td>
            </tr>
        
           
           
            <tr>
                <td><strong>Contenido</strong></td>
                <td>{!! $article->content !!}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@stop
