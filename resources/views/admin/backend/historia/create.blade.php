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
        <h1> Historias de Exito <small> | Agregar Historia</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url('/admin/historia') !!}"><i class="fa fa-start"></i> Historia de Exito</a></li>
            <li class="active">Agregar Historia</li>
        </ol>
    </section>
    <br>
    <br>
    <div class="container">

        {!! Form::open(array('action' => '\App\Http\Controllers\Admin\HistoriaController@store', 'files'=>true)) !!}

        <!-- Title -->
        <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
            <label class="control-label" for="title">Titulo</label>

            <div class="controls">
                {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Titulo', 'value'=>Input::old('title'))) !!}
                @if ($errors->first('title'))
                    <span class="help-block">{!! $errors->first('title') !!}</span>
                @endif
            </div>
        </div>
        <br>


        <br>

        <!-- Reto -->
        <div class="control-group {!! $errors->has('reto') ? 'has-error' : '' !!}">
            <label class="control-label" for="reto">Reto</label>

            <div class="controls">
                {!! Form::textarea('reto', null, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Reto', 'value'=>Input::old('reto'))) !!}
                @if ($errors->first('reto'))
                    <span class="help-block">{!! $errors->first('reto') !!}</span>
                @endif
            </div>
        </div>
        <br>
        <!-- Solucion -->
        <div class="control-group {!! $errors->has('solucion') ? 'has-error' : '' !!}">
            <label class="control-label" for="solucion">Solucion</label>

            <div class="controls">
                {!! Form::textarea('solucion', null, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Solucion', 'value'=>Input::old('solucion'))) !!}
                @if ($errors->first('solucion'))
                    <span class="help-block">{!! $errors->first('solucion') !!}</span>
                @endif
            </div>
        </div>
        <br>
        <!-- Resultado -->
        <div class="control-group {!! $errors->has('resultado') ? 'has-error' : '' !!}">
            <label class="control-label" for="resultado">Resultado</label>

            <div class="controls">
                {!! Form::textarea('resultado', null, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Resultado', 'value'=>Input::old('resultado'))) !!}
                @if ($errors->first('resultado'))
                    <span class="help-block">{!! $errors->first('resultado') !!}</span>
                @endif
            </div>
        </div>
        <br>



        <!-- Image -->
        <div class="fileinput fileinput-new control-group {!! $errors->has('image') ? 'has-error' : '' !!}" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
            <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Seleccionar imagen</span><span class="fileinput-exists">Cambiar</span> {!! Form::file('image', null, array('class'=>'form-control', 'id' => 'image', 'placeholder'=>'Image', 'value'=>Input::old('image'))) !!}
                    @if ($errors->first('image')) <span class="help-block">{!! $errors->first('image') !!}</span> @endif </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a> </div>
        </div>
        <br>


        <br>

        {!! Form::submit('Create', array('class' => 'btn btn-success')) !!}
        {!! Form::close() !!}
        <br>
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
