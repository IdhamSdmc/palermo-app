@extends('/admin/backend/layout/layout')
@section('content')
    <section class="content-header">
        <h1> Productos
            <small> | Panel de Control</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url( '/product') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Productos</li>
        </ol>
    </section>
    <br>

    <div class="container">
        <div class="col-lg-10">
            <br>

            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{!!  URL::route('admin.product.create') !!}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;Agregar Producto </a>
                </div>
            </div>
            <br> <br> <br>
            @if($products->count())
                <div class="">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Fecha Creacion</th>
                            <th>Ultima Actualizacion</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $products as $product )
                            <tr>
                                <td>
                                    <a href="{!! URL::route('admin.product.show', array($product->id)) !!}" class="btn btn-link btn-xs">
                                        {!! $product->titulo !!} </a>
                                </td>
                                <td>{!! $product->descripcion !!}</td>
                                <td>{!! $product->created_at !!}</td>
                                <td>{!! $product->updated_at !!}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                            Opciones <span class="caret"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{!! URL::route('admin.product.show', array($product->id)) !!}">
                                                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Mostrar Producto
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{!! URL::route('admin.product.edit', array($product->id)) !!}">
                                                    <span class="glyphicon glyphicon-edit"></span>&nbsp;Editar Producto
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="{!! URL::route('admin.product.delete', array($product->id)) !!}">
                                                    <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Eliminar Producto </a>
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
                <div class="alert alert-danger">No results found</div>
            @endif
        </div>
        <div class="pull-left">
            <ul class="pagination">
                {!! $products->render() !!}
            </ul>
        </div>
    </div>
@stop
