@extends('/admin/backend/layout/layout')
@section('content')
    <section class="content-header">
        <h1> Historias de Exito
            <small> | Panel de Control</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url( '/historia') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Historias de Exito</li>
        </ol>
    </section>
    <br>

    <div class="container">
        <div class="col-lg-10">
            <br>

            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{!!  URL::route('admin.historia.create') !!}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar Historia de Exito </a>
                </div>
            </div>
            <br> <br> <br>
            @if($historias->count())
                <div class="">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Reto</th>
                            <th>Solucion</th>
                            <th>Resultado</th>
                            <th>Fecha Creacion</th>
                            <th>Ultima Actualizacion</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $historias as $historia )
                            <tr>
                                <td>
                                    <a href="{!! URL::route('admin.historia.show', array($historia->id)) !!}" class="btn-link">
                                        {!! $historia->titulo !!} </a>
                                </td>
                                <td>{!! Str::limit($historia->reto, 15) !!}</td>
                                <td>{!! Str::limit($historia->solucion, 15) !!}</td>
                                <td>{!! Str::limit($historia->resultado, 15) !!}</td>
                                <td>{!! $historia->created_at !!}</td>
                                <td>{!! $historia->updated_at !!}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                            Opciones <span class="caret"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{!! URL::route('admin.historia.show', array($historia->id)) !!}">
                                                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Mostrar Historia
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{!! URL::route('admin.historia.edit', array($historia->id)) !!}">
                                                    <span class="glyphicon glyphicon-edit"></span>&nbsp;Editar Historia
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a onclick="return confirm('¿Estas seguro de eliminar esta historia?')" href="{!! URL::route('admin.historia.delete', array($historia->id)) !!}">
                                                    <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Eliminar Historia </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                {{--<a target="_blank" href="{!! URL::route('admin.backend.product.show', ['slug' => $product->slug]) !!}">
                                                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;View On Site
                                                </a>--}}
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
                <div class="alert alert-danger">No se encontraron resultados</div>
            @endif
        </div>
        <div class="pull-left">
            <ul class="pagination">
                {!! $historias->render() !!}
            </ul>
        </div>
    </div>
@stop
