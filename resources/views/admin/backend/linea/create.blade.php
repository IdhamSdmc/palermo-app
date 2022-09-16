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
        });
    </script>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Linea de Tiempo <small> | Agregar Año</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url('/admin/product') !!}"><i class="fa fa-start"></i> Linea de Tiempo</a></li>
            <li class="active">Agregar Año</li>
        </ol>
    </section>
    <br>
    <br>
    <div class="container">

        {!! Form::open(array('action' => '\App\Http\Controllers\Admin\LineaController@store', 'files'=>true)) !!}

        <!-- Title -->
        <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
            <label class="control-label" for="title">Año</label>

            <div class="controls">
                {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Año', 'value'=>Input::old('title'))) !!}
                @if ($errors->first('title'))
                    <span class="help-block">{!! $errors->first('title') !!}</span>
                @endif
            </div>
        </div>
        <br>


        <br>

        <!-- Content -->
        <div class="control-group {!! $errors->has('descripcion') ? 'has-error' : '' !!}">
            <label class="control-label" for="descripcion">Descripción</label>

            <div class="controls">
                {!! Form::textarea('descripcion', null, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Descripción', 'value'=>Input::old('descripcion'))) !!}
                @if ($errors->first('descripcion'))
                    <span class="help-block">{!! $errors->first('descripcion') !!}</span>
                @endif
            </div>
        </div>
        <br>

        {!! Form::submit('Registrar año', array('class' => 'btn btn-success')) !!}
        {!! Form::close() !!}
        <br>
       
    </div>
@stop
