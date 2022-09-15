@extends('/admin/backend/layout/layout')
@section('content')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#notification').show().delay(4000).fadeOut(700);
        });
    </script>
    <section class="content-header">
        <h1> Categoria
            <small> | Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url('/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Categoria</li>
        </ol>
    </section>
    <br>
    <div class="container">
        <div class="col-lg-10">
            
            <br>

            <div class="pull-left">
                <div class="btn-toolbar"><a href="{!! URL::route('admin.category.create') !!}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar Categoria </a></div>
            </div>
            <br> <br> <br>
            @if($categories->count())
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Descripcion</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $categories as $category )
                            <tr>
                                <td> {!! link_to_route( 'admin.category.show', $category->title,
                                    $category->id, array( 'class' => 'btn btn-link btn-xs' )) !!}
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                            Opciones <span class="caret"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{!!  URL::route('admin.category.show', array($category->id)) !!}">
                                                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Ver Categoria </a>
                                            </li>
                                            <li>
                                                <a href="{!!  URL::route('admin.category.edit', array($category->id)) !!}">
                                                    <span class="glyphicon glyphicon-edit"></span>&nbsp;Editar Categoria
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="{!! URL::route('admin.category.delete', array($category->id)) !!}">
                                                    <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Eliminar Categoria </a>
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
        <div class="pull-left">
            <ul class="pagination">
                {!! $categories->render() !!}
            </ul>
        </div>
    </div>
@stop