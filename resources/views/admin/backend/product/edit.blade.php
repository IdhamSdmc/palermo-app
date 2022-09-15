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

            if ($('#tag').length != 0) {
                var elt = $('#tag');
                elt.tagsinput();
            }
        });
    </script>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Producto <small> | Actualizar Producto</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url( '/admin/product') !!}"><i class="fa fa-book"></i> Producto</a></li>
            <li class="active">Actualizar Producto</li>
        </ol>
    </section>
    <br>
    <br>
    <div class="container">

        {!! Form::open( array( 'route' => array( 'admin.product.update', $product->id), 'method' => 'PATCH', 'files'=>true)) !!}
        <!-- Title -->
        <div class="control-group {!! $errors->has('titulo') ? 'has-error' : '' !!}">
            <label class="control-label" for="title">Titulo</label>

            <div class="controls">
                {!! Form::text('title', $product->titulo, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Titulo', 'value'=>Input::old('title'))) !!}
                @if ($errors->first('title'))
                    <span class="help-block">{!! $errors->first('title') !!}</span>
                @endif
            </div>
        </div>

        <br>

        <!-- Content -->
        <div class="control-group {!! $errors->has('descripcion') ? 'has-error' : '' !!}">
            <label class="control-label" for="title">Descripcion</label>

            <div class="controls">
                {!! Form::textarea('descripcion', $product->descripcion, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Descripción', 'value'=>Input::old('descripcion'))) !!}
                @if ($errors->first('descripcion'))
                    <span class="help-block">{!! $errors->first('descripcion') !!}</span>
                @endif
            </div>
        </div>
        <br>
        <!-- Image -->
        <div class="fileinput fileinput-new control-group {!! $errors->has('image') ? 'has-error' : '' !!}" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                <img data-src="" {!! (($product->path) ? "src='".url($product->path.$product->file_name) ."'" : null) !!} alt="...">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
            <div>
                <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Seleccionar imagen</span><span class="fileinput-exists">Cambiar</span>
        {!! Form::file('image', null, array('class'=>'form-control', 'id' => 'image', 'placeholder'=>'Image', 'value'=>Input::old('image'))) !!}
                        @if ($errors->first('image')) <span class="help-block">{!! $errors->first('image') !!}</span> @endif </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a> </div>
            </div>
            <br>


            <br>
            {!! Form::submit('Actualizar producto', array('class' => 'btn btn-success')) !!}
            {!! Form::close() !!}
            <script>
                window.onload = function () {
                    CKEDITOR.replace('content', {
                        "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
                    });
                };
            </script>
        </div>
@stop
