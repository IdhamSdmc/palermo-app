@extends('/admin/backend/layout/layout')
@section('content')
    <script type="text/javascript">
        $(document).ready(function () {

            $('#notification').show().delay(4000).fadeOut(700);

            // publish settings
            $(".publish").bind("click", function (e) {
                var id = $(this).attr('id');
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{!! url('/admin/article/" + id + "/toggle-publish/') !!}",
                    headers: {
                        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                    },
                    success: function (response) {
                        if (response['result'] == 'success') {
                            var imagePath = (response['changed'] == 1) ? "{!!url('/')!!}/assets/images/publish.png" : "{!!url('/')!!}/assets/images/not_publish.png";
                            $("#publish-image-" + id).attr('src', imagePath);
                        }
                    },
                    error: function () {
                        alert("error");
                    }
                })
            });
        });
    </script>
    <section class="content-header">
        <h1> Articulo
            <small> | Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url( '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Articulo</li>
        </ol>
    </section>
    <br>

    <div class="container">
        <div class="col-lg-10">
            <br>

            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{!!  URL::route('admin.article.create') !!}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;Nuevo Articulo </a>
                    <a href="{!!  URL::route('admin.category.create') !!}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;Nueva Categoria </a>
                </div>
            </div>
            <br> <br> <br>
            @if($articles->count())
                <div class="">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Fecha Creacion</th>
                            <th>Fecha Actualizacion</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $articles as $article )
                            <tr>
                                <td>
                                    <a href="{!! URL::route('admin.article.show', array($article->id)) !!}" class=" btn-link">
                                        {!! $article->title !!} </a>
                                </td>
                                <td>{!! $article->created_at !!}</td>
                                <td>{!! $article->updated_at !!}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                            Opciones <span class="caret"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{!! URL::route('admin.article.show', array($article->id)) !!}">
                                                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Mostrar Articulo
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{!! URL::route('admin.article.edit', array($article->id)) !!}">
                                                    <span class="glyphicon glyphicon-edit"></span>&nbsp;Editar Articulo
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="{!! URL::route('admin.article.delete', array($article->id)) !!}">
                                                    <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Eliminar Articulo </a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-danger">No results found</div>
            @endif
            
        </div>
        {!! $articles->links() !!}

    </div>
@stop
