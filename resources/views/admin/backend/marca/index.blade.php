@extends('/admin/backend/layout/layout')
@section('content')
    <section class="content-header">
        <h1> Marcas
            <small> | Panel de Control</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url( '/marca') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Marcas</li>
        </ol>
    </section>
    <br>

    <div class="container">
        <div class="col-lg-12">
            <br>

            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{!!  URL::route('admin.marca.create') !!}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar Marca </a>
                </div>
            </div>
            <br> <br> <br>
            @if($marcas->count())
                <div class="">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Fecha Creacion</th>
                            <th>Ultima Actualizacion</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $marcas as $marca )
                            <tr>
                                <td>
                                    <a href="{!! URL::route('admin.marca.show', array($marca->id)) !!}" class="btn-link text-bold">
                                        {!! $marca->marca !!}
                                    </a>
                                </td>
<<<<<<< HEAD
                              
                                <td>{!! $marca->marca !!}</td>
=======
                                <td>
                                    <a href="{!! URL::route('admin.marca.show', array($marca->id)) !!}" class="btn-link text-bold">
                                        {!! $marca->marca !!}
                                    </a>
                                </td>
>>>>>>> 80165be1278c0a336dad5c8b285d833e086e0868
                                <td>{!! $marca->created_at !!}</td>
                                <td>{!! $marca->updated_at !!}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                            Opciones <span class="caret"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{!! URL::route('admin.marca.show', array($marca->id)) !!}">
                                                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Mostrar Marca
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{!! URL::route('admin.marca.edit', array($marca->id)) !!}">
                                                    <span class="glyphicon glyphicon-edit"></span>&nbsp;Editar Marca
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a onclick="return confirm('¿Estas seguro de eliminar esta marca?')" href="{!! URL::route('admin.marca.delete', array($marca->id)) !!}">
                                                    <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Eliminar Marca </a>
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
                <div class="alert alert-danger">No se encontraron registro aun</div>
            @endif
        </div>
             
    {!! $marcas->links() !!}
    </div>
@stop
