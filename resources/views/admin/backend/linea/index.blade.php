@extends('/admin/backend/layout/layout')
@section('content')
    <section class="content-header">
        <h1> Linea de Tiempo
            <small> | Panel de Control</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url( '/linea') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Linea de Tiempo</li>
        </ol>
    </section>
    <br>

    <div class="container">
        <div class="col-lg-10">
            <br>

            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{!!  URL::route('admin.linea.create') !!}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar Año </a>
                </div>
            </div>
            <br> <br> <br>
            @if($lineas->count())
                <div class="">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Año</th>
                            <th>Descripcion</th>
                            <th>Fecha Creacion</th>
                            <th>Ultima Actualizacion</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $lineas as $linea )
                            <tr>
                                <td>
                                    <a href="{!! URL::route('admin.linea.show', array($linea->id)) !!}" class="btn btn-link btn-xs">
                                        {!! $linea->year !!} </a>
                                </td>
                                <td>{!! Str::limit($linea->descripcion, 50) !!}</td>
                                <td>{!! $linea->created_at !!}</td>
                                <td>{!! $linea->updated_at !!}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                            Opciones <span class="caret"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{!! URL::route('admin.linea.show', array($linea->id)) !!}">
                                                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Mostrar Año
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{!! URL::route('admin.linea.edit', array($linea->id)) !!}">
                                                    <span class="glyphicon glyphicon-edit"></span>&nbsp;Editar Año
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="{!! URL::route('admin.linea.delete', array($linea->id)) !!}">
                                                    <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Eliminar Año </a>
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
                {!! $lineas->render() !!}
            </ul>
        </div>
    </div>
@stop
