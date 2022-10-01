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
    <h1> Article <small> | Update Article</small> </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url( '/admin/article') !!}"><i class="fa fa-book"></i> Article</a></li>
        <li class="active">Update Article</li>
    </ol>
</section>
<br>
<br>
<div class="container">

    {!! Form::open( array( 'route' => array( 'admin.article.update', $article->id), 'method' => 'PATCH', 'files'=>true)) !!}
    <!-- Title -->
    <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
        <label class="control-label" for="title">Title</label>

        <div class="controls">
            {!! Form::text('title', $article->title, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
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
            {!! Form::select('category', $categories, $article->category_id, array('class' => 'form-control', 'value'=>Input::old('category'))) !!}
            @if ($errors->first('category'))
            <span class="help-block">{!! $errors->first('category') !!}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Content -->
    <div class="control-group {!! $errors->has('content') ? 'has-error' : '' !!}">
        <label class="control-label" for="title">Content</label>

        <div class="controls">
            {!! Form::textarea('content', $article->content, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Content', 'value'=>Input::old('content'))) !!}
            @if ($errors->first('content'))
            <span class="help-block">{!! $errors->first('content') !!}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Image -->
    <div class="fileinput fileinput-new control-group {!! $errors->has('image') ? 'has-error' : '' !!}" data-provides="fileinput">
        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
            <img data-src="" {!! (($article->path) ? "src='".url($article->path.$article->file_name) ."'" : null) !!} alt="...">
        </div>
        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
        <div>
            <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
        {!! Form::file('image', null, array('class'=>'form-control', 'id' => 'image', 'placeholder'=>'Image', 'value'=>Input::old('image'))) !!}
      @if ($errors->first('image')) <span class="help-block">{!! $errors->first('image') !!}</span> @endif </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
        </div>
        <br>

    <!-- Published -->
    <div class="control-group {!! $errors->has('is_published') ? 'has-error' : '' !!}">

        <div class="controls">
            <label class="">{!! Form::checkbox('is_published', 'is_published',$article->is_published) !!} Publish ?</label>
            @if ($errors->first('is_published'))
            <span class="help-block">{!! $errors->first('is_published') !!}</span>
            @endif
        </div>
    </div>
    <br>
    {!! Form::submit('Update', array('class' => 'btn btn-success')) !!}
    {!! Form::close() !!}
    <script>
        window.onload = function () {
            CKEDITOR.replace('content', {
    
                "filebrowserBrowseUrl": filemanager.ckBrowseUrl
            });
        };
        console.log(filemanager);
    </script>
</div>
@stop