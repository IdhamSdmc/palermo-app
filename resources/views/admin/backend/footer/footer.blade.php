@extends('/admin/backend/layout/layout')
@section('content')
{!! Html::style('assets/bootstrap/css/bootstrap-tagsinput.css') !!}
{!! Html::style('jasny-bootstrap/css/jasny-bootstrap.min.css') !!}
{!! Html::script('jasny-bootstrap/js/jasny-bootstrap.min.js') !!}
{!! Html::script('ckeditor/ckeditor.js') !!}
{!! Html::script('assets/bootstrap/js/bootstrap-tagsinput.js') !!}
{!! Html::script('assets/js/jquery.slug.js') !!}
<script type="text/javascript">
        var arrayenlaces  = new Array();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {
        $('#notification').show().delay(4000).fadeOut(700);
    
   
        $("#formulario").on("submit", function (e){
                e.preventDefault();
                
                
                var correo = $("input[name=correo]").val();
        var telefono = $("input[name=telefono]").val();
        var form_data = new FormData();
            form_data.append('correo', correo);
         form_data.append('telefono', telefono);
         form_data.append('redes', JSON.stringify(arrayenlaces));
                $.ajax({
                    url: "{{ route('admin.footer.store') }}",
                    method: "POST",
                    data: form_data,
                    dataType: "json",
                    contentType: false,
processData: false,
cache: false,
                    success: function(response){
                        if(response['ok']==true){
                            alert(response['msg']);
                          
                        }else{
                            alert("Ocurrio un error vuelva a intentarlo");
                        }
                    },
                    error: function(e){
                        /*alert("Ocurio un error");*/
                        alert(e);
                    }
                });

            });
    });
   
    
   
    const agregarFila = () => {
        var url = $('#url').val();
        var file = $('#image_file')[0].files[0];
if (file){
    console.log(file);
    var tab=document.getElementById("tablaprueba");

    var filereader = new FileReader();
  filereader.readAsDataURL(file);
  filereader.onload = function (evt) {
     var base64 = evt.target.result;
   
     if (f_valida_repetido()){
    document.getElementById('tablaprueba').insertRow(-1).innerHTML = '<td id="urllist">' +url +'</td><td><img src="'+base64+'" style="width: 200px; height: 150px;"></td><td style="display:none;">1</td><td style="display:none;">'+base64+'</td><td>'+ file.name+'</td>';

    }
  }
  
   
for (i=0; fila = tab.getElementsByTagName('tr')[i]; i++){
var redes = new Object();
  for (j=0; celda = fila.getElementsByTagName('td')[j]; j++){

  switch (j) {
  case 0:
  redes.url= celda.innerHTML.replace("\n", "").trim();;
    break;
  case 2:
  redes.nuevo= celda.innerHTML;

    break;
  case 3:
  redes.file= celda.innerHTML;
    //Declaraciones ejecutadas cuando el resultado de expresión coincide con valorN
    break;
    case 4:
  redes.name= celda.innerHTML;
    //Declaraciones ejecutadas cuando el resultado de expresión coincide con valorN
    break;
}

}

if (JSON.stringify(redes)!=='{}') {
    checkAndAdd(redes)
 }
}

}
console.log(arrayenlaces);

}
function f_valida_repetido(){


    var v_valor = 0;

$('#tablaprueba td:nth-child(1)').each(function () {
      if ($(this).html() == $("#url").val()){
                    v_valor = 1;
                }
});
if(v_valor == 1){
                return false;
            }else{
                return true;
            }
}



     

function checkAndAdd (obj) {
    for (var i = 0; i < arrayenlaces.length; i++) {
        if (arrayenlaces[i].url === obj.url) {
            return;                             // exit loop and function
        }
    }
    arrayenlaces.push(obj);
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
<div class="container">

    
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#footers" data-toggle="tab">Footer</a></li>
    </ul>

    <div class="tab-content">

        <div class="tab-pane active" id="footers">
            <br>
            <h4><i class="glyphicon glyphicon-cog"></i> Footer</h4>

            <br>
            
            <form  id="formulario">
            <!-- Title -->
            <div class="input_container">
            <div class="control-group {!! $errors->has('correo') ? 'has-error' : '' !!}">
                <label class="control-label" for="correo">Correo</label>
                <div class="controls">
                    {!! Form::text('correo', ($footer['correo']) ?: null, array('class'=>'form-control', 'id' => 'correo', 'placeholder'=>'Correo', 'value'=>Input::old('telefono'))) !!}
                    @if ($errors->first('correo'))
                    <span class="help-block">{!! $errors->first('correo') !!}</span>
                    @endif
                </div>
            </div>
            <div class="control-group {!! $errors->has('telefono') ? 'has-error' : '' !!}">
                <label class="control-label" for="telefono">Telefono</label>
                <div class="controls">
                    {!! Form::text('telefono', ($footer['telefono']) ?: null, array('class'=>'form-control', 'id' => 'telefono', 'placeholder'=>'Telefono', 'value'=>Input::old('telefono'))) !!}
                    @if ($errors->first('telefono'))
                    <span class="help-block">{!! $errors->first('telefono') !!}</span>
                    @endif
                </div>
            </div>
            </div>
            <br>
            <label class="control-label" for="enlaces">Enlaces</label>

            <div class="control-group {!! $errors->has('enlaces') ? 'has-error' : '' !!}">
                <div class="controls">
                    <label class="control-label" for="url">URL</label>
                    {!! Form::text('url', ($footer['url']) ?: null, array('class'=>'form-control', 'id' => 'url', 'placeholder'=>'URL', 'value'=>Input::old('url'))) !!}
                    @if ($errors->first('url'))
                    <span class="help-block">{!! $errors->first('url') !!}</span>
                    @endif
                    <label class="control-label" for="image">Imagen</label>

                    <div class="fileinput fileinput-new control-group {!! $errors->has('image_file') ? 'has-error' : '' !!}" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                        <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Seleccionar imagen</span><span class="fileinput-exists">Cambiar</span> 
                            <input type="file" class="form-control" id="image_file" placeholder="Image" value="image_file"/>
                                @if ($errors->first('image_file')) <span class="help-block">{!! $errors->first('image_file') !!}</span>
                                 @endif </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a> </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary mr-2" onclick="agregarFila()">Agregar Fila</button>
                    </div>
                      <table class="table table-striped" id="tablaprueba">
                        <thead class="thead-dark">
                          <tr>
                            <th>URL</th>
                            <th>Imagen</th>
                          </tr>
                        </thead>
                        <tbody>

                     @isset($footer["redes"] )
                        @foreach( $footer["redes"] as $red )
                        <tr>
                             <td id="urllist"> {{$red["url"]}}
                             </td>
                             <td>  <img data-src="" {!! (($red["path"]) ? "src='".url($red["path"].$red["name"]) ."'" : null) !!} style="width: 200px; height: 150px;"alt="...">
                             </td>
                             <td style="display:none;">0</td>
                             <td style="display:none;"></td>
                             <td style="display:none;">{{$red["name"]}}</td>
                        <tr>
                            @endforeach
                     @endisset
                        </tbody>
                      </table>
                  
                </div>
            </div>
            <br>
            <button class="btn btn-success btn-submit">Guardar</button>
        
         </form>
        </div>
       
       
    </div>
</div>
@stop