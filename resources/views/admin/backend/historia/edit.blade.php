@extends('/admin/backend/layout/layout')
@section('content')
    {!! Html::style('assets/bootstrap/css/bootstrap-tagsinput.css') !!}
    {!! Html::style('jasny-bootstrap/css/jasny-bootstrap.min.css') !!}
    {!! Html::script('jasny-bootstrap/js/jasny-bootstrap.min.js') !!}
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
        <h1> Historia de Exito<small> | Actualizar Historia</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url( '/admin/historia') !!}"><i class="fa fa-book"></i> Historia</a></li>
            <li class="active">Actualizar Hitoria</li>
        </ol>
    </section>
    <br>
    <br>
    <div class="container">

        {!! Form::open( array( 'route' => array( 'admin.historia.update', $historia->id), 'method' => 'PATCH', 'files'=>true)) !!}
        <!-- Title -->
        <div class="control-group {!! $errors->has('titulo') ? 'has-error' : '' !!}">
            <label class="control-label" for="title">Titulo</label>

            <div class="controls">
                {!! Form::text('title', $historia->titulo, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Titulo', 'value'=>Input::old('title'))) !!}
                @if ($errors->first('title'))
                    <span class="help-block">{!! $errors->first('title') !!}</span>
                @endif
            </div>
        </div>

        <br>

        <!-- Reto -->
        <div class="control-group {!! $errors->has('reto') ? 'has-error' : '' !!}">
            <label class="control-label" for="title">Reto</label>

            <div class="controls">
                {!! Form::textarea('reto', $historia->reto, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Reto', 'value'=>Input::old('reto'))) !!}
                @if ($errors->first('reto'))
                    <span class="help-block">{!! $errors->first('reto') !!}</span>
                @endif
            </div>
        </div>
        <br>
        <!-- Solucion -->
        <div class="control-group {!! $errors->has('solucion') ? 'has-error' : '' !!}">
            <label class="control-label" for="title">Solucion</label>

            <div class="controls">
                {!! Form::textarea('solucion', $historia->solucion, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Solucion', 'value'=>Input::old('solucion'))) !!}
                @if ($errors->first('solucion'))
                    <span class="help-block">{!! $errors->first('solucion') !!}</span>
                @endif
            </div>
        </div>
        <br>
        <!-- Resultado -->
        <div class="control-group {!! $errors->has('resultado') ? 'has-error' : '' !!}">
            <label class="control-label" for="title">Resultado</label>

            <div class="controls">
                {!! Form::textarea('resultado', $historia->resultado, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Resultado', 'value'=>Input::old('resultado'))) !!}
                @if ($errors->first('resultado'))
                    <span class="help-block">{!! $errors->first('resultado') !!}</span>
                @endif
            </div>
        </div>
        <br>
        <!-- Image -->
        <div class="fileinput fileinput-new control-group {!! $errors->has('image') ? 'has-error' : '' !!}" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                <img data-src="" {!! (($historia->path) ? "src='".url($historia->path.$historia->file_name) ."'" : null) !!} alt="...">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
            <div>
                <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Seleccionar imagen</span><span class="fileinput-exists">Cambiar</span>
        {!! Form::file('image', null, array('class'=>'form-control', 'id' => 'image', 'placeholder'=>'Image', 'value'=>Input::old('image'))) !!}
                        @if ($errors->first('image')) <span class="help-block">{!! $errors->first('image') !!}</span> @endif </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a> </div>
            </div>
            <br>


            <br>
            {!! Form::submit('Actualizar historia', array('class' => 'btn btn-success')) !!}
            {!! Form::close() !!}
           
        </div>
@stop
