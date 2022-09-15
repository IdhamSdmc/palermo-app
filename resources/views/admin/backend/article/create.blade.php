@extends('/admin/backend/layout/layout')
@section('content')
{!! Html::style('assets/bootstrap/css/bootstrap-tagsinput.css') !!}
{!! Html::style('jasny-bootstrap/css/jasny-bootstrap.min.css') !!}
{!! Html::script('jasny-bootstrap/js/jasny-bootstrap.min.js') !!}
{!! Html::script('ckeditor/ckeditor.js') !!}
{!! Html::script('assets/bootstrap/js/bootstrap-tagsinput.js') !!}
{!! Html::script('assets/js/jquery.slug.js') !!}
<script type="text/javascript">
    $(document).ready(function () {
        $("#title").slug();
    });
</script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Articulo <small> | Agregar Articulos</small> </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url('/admin/article') !!}"><i class="fa fa-book"></i> Articulo</a></li>
        <li class="active">Agregar Articulos</li>
    </ol>
</section>
<br>
<br>
<div class="container">

    {!! Form::open(array('action' => '\App\Http\Controllers\Admin\ArticleController@store', 'files'=>true)) !!}

    <!-- Title -->
    <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
        <label class="control-label" for="title">Titulo</label>

        <div class="controls">
            {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
            @if ($errors->first('title'))
            <span class="help-block">{!! $errors->first('title') !!}</span>
            @endif
        </div>
    </div>
    <br>

   

    <!-- Category -->
    <div class="control-group {!! $errors->has('category') ? 'error' : '' !!}">
        <label class="control-label" for="title">Categoria</label>

        <div class="controls">
            {!! Form::select('category', $categories, null, array('class' => 'form-control', 'value'=>Input::old('category'))) !!}
            @if ($errors->first('category'))
            <span class="help-block">{!! $errors->first('category') !!}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Content -->
    <div class="control-group {!! $errors->has('content') ? 'has-error' : '' !!}">
        <label class="control-label" for="title">Contenido</label>

        <div class="controls">
            {!! Form::textarea('content', null, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Content', 'value'=>Input::old('content'))) !!}
            @if ($errors->first('content'))
            <span class="help-block">{!! $errors->first('content') !!}</span>
            @endif
        </div>
    </div>
    <br>

 

    <!-- Image -->
    
    <div class="fileinput fileinput-new control-group {!! $errors->has('image') ? 'has-error' : '' !!}" data-provides="fileinput">
        <label class="control-label" for="title">Imagen</label>

        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
        <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Seleccionar Imagen</span><span class="fileinput-exists">Cambiar</span> {!! Form::file('image', null, array('class'=>'form-control', 'id' => 'image', 'placeholder'=>'Image', 'value'=>Input::old('image'))) !!}
      @if ($errors->first('image')) <span class="help-block">{!! $errors->first('image') !!}</span> @endif </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
    </div>
    <br>
   
    <br>

    {!! Form::submit('Create', array('class' => 'btn btn-success')) !!}
    {!! Form::close() !!}
    <script type="text/javascript">
        window.onload = function () {
            CKEDITOR.replace('content', {
                "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
            });
        };

        $(document).ready(function () {

            if ($('#tag').length != 0) {
                var elt = $('#tag');
                elt.tagsinput();
            }
        });
    </script>
</div>
@stop
