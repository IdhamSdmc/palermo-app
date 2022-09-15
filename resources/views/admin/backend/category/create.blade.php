@extends('/admin/backend/layout/layout')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Categoria
        <small> | Agregar Categoria</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url('/admin/category') !!}"><i class="fa fa-list"></i> Categoria</a></li>
        <li class="active">Agregar Categoria</li>
    </ol>
</section>
<br>
<br>
<div class="container">

    {!! Form::open(array('action' => '\App\Http\Controllers\Admin\CategoryController@store' )) !!}
    <!-- Title -->
    <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
        <label class="control-label" for="title">Categoria</label>

        <div class="controls">
            {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Categoria', 'value'=>Input::old('title'))) !!}
            @if ($errors->first('title'))
            <span class="help-block">{!! $errors->first('title') !!}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Form actions -->
    {!! Form::submit('Guardar', array('class' => 'btn btn-success')) !!}
    <a  href="{!! URL::route('admin.category.index') !!}" class="btn btn-default">&nbsp;Cancel</a>
    {!! Form::close() !!}
</div>
@stop