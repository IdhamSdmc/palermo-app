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
        <h1> Linea de Tiempo <small> | Actualizar Año</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url( '/admin/linea') !!}"><i class="fa fa-book"></i> Linea de Tiempo</a></li>
            <li class="active">Actualizar Año</li>
        </ol>
    </section>
    <br>
    <br>
    <div class="container">

        {!! Form::open( array( 'route' => array( 'admin.linea.update', $linea->id), 'method' => 'PATCH', 'files'=>true)) !!}
        <!-- Title -->
        <div class="control-group {!! $errors->has('titulo') ? 'has-error' : '' !!}">
            <label class="control-label" for="title">Año</label>

            <div class="controls">
                {!! Form::text('title', $linea->year, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Año', 'value'=>Input::old('title'))) !!}
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
                {!! Form::textarea('descripcion', $linea->descripcion, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Descripción', 'value'=>Input::old('descripcion'))) !!}
                @if ($errors->first('descripcion'))
                    <span class="help-block">{!! $errors->first('descripcion') !!}</span>
                @endif
            </div>
        </div>

            <br>
            {!! Form::submit('Update', array('class' => 'btn btn-success')) !!}
            {!! Form::close() !!}
        <br>
            <script>
                window.onload = function () {
                    CKEDITOR.replace('content', {
                        "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
                    });
                };
            </script>
        </div>
@stop
