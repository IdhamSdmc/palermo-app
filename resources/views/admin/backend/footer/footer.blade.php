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
   
    $('input[type="file"]').change(function(e) {
                var geekss = e.target.files[0].name;
console.log(geekss);
            });
    const agregarFila = () => {
        var url = $('#url').val();

  document.getElementById('tablaprueba').insertRow(-1).innerHTML = '<td>' +url +'</td><td></td>'
}
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
        <li class="active"><a href="#footers" data-toggle="tab">General</a></li>
    </ul>

    <div class="tab-content">

        <div class="tab-pane active" id="footers">
            <br>
            <h4><i class="glyphicon glyphicon-cog"></i> General</h4>

            <br>
            
            {!! Form::open(array('action' => '\App\Http\Controllers\Admin\FooterController@store', 'files'=>true)) !!}

            <!-- Title -->
            <div class="control-group {!! $errors->has('correo') ? 'has-error' : '' !!}">
                <label class="control-label" for="correo">Correo</label>
                <div class="controls">
                    {!! Form::text('correo', ($footer['correo']) ?: null, array('class'=>'form-control', 'id' => 'correo', 'placeholder'=>'Correo', 'value'=>Input::old('telefono'))) !!}
                    @if ($errors->first('correo'))
                    <span class="help-block">{!! $errors->first('correo') !!}</span>
                    @endif
                </div>
            </div>
            <br>
            <div class="control-group {!! $errors->has('telefono') ? 'has-error' : '' !!}">
                <label class="control-label" for="telefono">Telefono</label>
                <div class="controls">
                    {!! Form::text('telefono', ($footer['telefono']) ?: null, array('class'=>'form-control', 'id' => 'telefono', 'placeholder'=>'Telefono', 'value'=>Input::old('telefono'))) !!}
                    @if ($errors->first('telefono'))
                    <span class="help-block">{!! $errors->first('telefono') !!}</span>
                    @endif
                </div>
            </div>
            <br>
            <div class="control-group {!! $errors->has('enlaces') ? 'has-error' : '' !!}">
                <label class="control-label" for="enlaces">Enlaces</label>
                <div class="controls">
                    <label class="control-label" for="url">URL</label>
                    {!! Form::text('url', ($footer['url']) ?: null, array('class'=>'form-control', 'id' => 'url', 'placeholder'=>'URL', 'value'=>Input::old('url'))) !!}
                    @if ($errors->first('url'))
                    <span class="help-block">{!! $errors->first('url') !!}</span>
                    @endif
                    <label class="control-label" for="image">Imagen</label>

                    <div class="fileinput fileinput-new control-group {!! $errors->has('image') ? 'has-error' : '' !!}" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                        <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Seleccionar imagen</span><span class="fileinput-exists">Cambiar</span> 
                            {!! Form::file('image', null, array('class'=>'form-control', 'id' => 'image', 'placeholder'=>'Image', 'value'=>Input::old('image'))) !!}
                                @if ($errors->first('image')) <span class="help-block">{!! $errors->first('image') !!}</span> @endif </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a> </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary mr-2" onclick="agregarFila()">Agregar Fila</button>
                        <button type="button" class="btn btn-danger" onclick="eliminarFila()">Eliminar Fila</button>
                      </div>
                      <table border="1" class="table" id="tablaprueba">
                        <thead class="thead-dark">
                          <tr>
                            <th>URL</th>
                            <th>Imagen</th>
                          </tr>
                        </thead>
                        <tbody></tbody>
                      </table>
                  
                </div>
            </div>
            <br>
           
            {!! Form::submit('Guardar', array('class' => 'btn btn-success')) !!}
            {!! Form::close() !!}
        </div>
   
       
    </div>
</div>

@stop