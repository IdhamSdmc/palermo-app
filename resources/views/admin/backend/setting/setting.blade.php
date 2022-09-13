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
        $('#notification').show().delay(4000).fadeOut(700);
    });
</script>
<section class="content-header">
    <h1> Configuracion
        <small> | Cambiar Configuracion</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url('/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Cambiar Configuracion</li>
    </ol>
</section>
<br>
<br>
<div class="col-lg-10">

    
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#settings" data-toggle="tab">General</a></li>
        <li><a href="#info" data-toggle="tab">Info</a></li>
    </ul>

    <div class="tab-content">

        <div class="tab-pane active" id="settings">
            <br>
            <h4><i class="glyphicon glyphicon-cog"></i> General</h4>

            <br>
            
            {!! Form::open(array('action' => '\App\Http\Controllers\Admin\SettingController@store', 'files'=>true)) !!}

            <!-- Title -->
            <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                <label class="control-label" for="title">Titulo</label>
                <div class="controls">
                    {!! Form::text('title', ($setting['title']) ?: null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
                    @if ($errors->first('title'))
                    <span class="help-block">{!! $errors->first('title') !!}</span>
                    @endif
                </div>
            </div>
            <br>
            <div class="fileinput fileinput-new control-group {!! $errors->has('logo') ? 'has-error' : '' !!}" data-provides="fileinput">
                
                <label class="control-label" for="title">Logo</label>
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <img data-src="" {!! (($setting["path_logo"]) ? "src='".url($setting["path_logo"].$setting["file_name_logo"]) ."'" : null) !!} alt="...">

                </div>

                <div> <span class="btn btn-default btn-file"><span class="fileinput-new">SeLecciona </span><span class="fileinput-exists">Archivo</span> {!! Form::file('logo', null, array('class'=>'form-control', 'id' => 'logo', 'placeholder'=>'Image', 'value'=>Input::old('logo'))) !!}
              @if ($errors->first('logo')) <span class="help-block">{!! $errors->first('logo') !!}</span> @endif </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
            </div>
            <br>
            <div class="fileinput fileinput-new control-group {!! $errors->has('favicon') ? 'has-error' : '' !!}" data-provides="fileinput">
                <label class="control-label" for="title">Favicon</label>
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <img data-src="" {!! (($setting["path_favicon"]) ? "src='".url($setting["path_favicon"].$setting["file_name_favicon"]) ."'" : null) !!} alt="...">

                </div>

                <div> <span class="btn btn-default btn-file"><span class="fileinput-new">SeLecciona </span><span class="fileinput-exists">Archivo</span> {!! Form::file('favicon', null, array('class'=>'form-control', 'id' => 'favicon', 'placeholder'=>'Image', 'value'=>Input::old('favicon'))) !!}
              @if ($errors->first('favicon')) <span class="help-block">{!! $errors->first('favicon') !!}</span> @endif </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
            </div>

            {!! Form::submit('Guardar', array('class' => 'btn btn-success')) !!}
            {!! Form::close() !!}
        </div>
   
        <div class="tab-pane" id="info">
            <br>
            <h4><i class="glyphicon glyphicon-info-sign"></i> Info</h4>
            <br>
            Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                Aliquam in felis sit amet augue.</p>
        </div>
    </div>
</div>
@stop