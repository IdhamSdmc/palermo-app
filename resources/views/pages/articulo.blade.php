@extends('layouts.app2')
@section('content')
@foreach($articulos as $item)
@if($loop->first)
    <section class="banner" style="background-image: url('{{$item->path.$item->file_name}}'); background-position-y: 40%;">
        <div class="wrapper">
            <div class="banner-container">
                <div class="banner-content">
                    <h2 class="animate__animated animate__fadeInUp">{{$item->title}}</h2>
                    <div style="max-width: 28rem">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                        <a href="{{url('/blog'.'/'.$item->id)}}" class="btn-banner">VER MÁS</a>
                        <a href="https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor"
                            target="_blank" class="btn-whatsapp">
                            <img src="{{ asset('assets/imgs/resources/whatsapp.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endforeach
    <article class="wrapper">
        <section class="section-container" id="articulos">
            <div class="section">
                <div class="actions">
                    <div class="input-search">
                        <form action="{{route('lista')}}" method="get" class="text-center" id="form-busqueda">
                                <input type="text" autocomplete="none" name="texto" id="texto" value="{{$texto}}">
                                <i class="bi bi-search"></i>

                        </form>
                    </div>
                    <form action="{{route('lista')}}" method="get" id="form-categoria">
                        <select name="categoria" id="categoria" class="select">
                            <option value="0" selected disabled>Seleccionar</option>
                            @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->title}}</option>
                            @endforeach
                        </select>
                    </form>

                </div>
                <div class="content" id="list">
                    @if (count($articulos))
                    <div class="lista-articulos">
                        @foreach($articulos as $item)
                        @if(!$loop->first)
                            <div class="articulo">
                                <div class="image">
                                <img src="{{ url($item->path.$item->file_name) }}" alt="">
                                </div>
                                <span>{{  $item->created_at}}</span>
                                <h3>{{$item->title}}</h3>

                                {!! $item->content !!}

                                <a href="{{url('/blog'.'/'.$item->id)}}">VER MÁS</a>
                            </div>

                        @endif
                        @endforeach

                    @endif
                    </div>
                    {{--<div class="pagination mt-3">
                        {{ $articulos->onEachSide(2)->links() }}
                    </div>--}}
                    <div class="opciones">
                            <button type="button" class="btn-slider prev">
                                <img src="{{ asset('assets/imgs/left-slider.png') }}" alt="left">
                            </button>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                             </div>
                            <button type="button" class="btn-slider next">
                                <img src="{{ asset('assets/imgs/right-slider.png') }}" alt="right">
                            </button>

                    </div>


                </div>




            </div>
        </section>
    </article>
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/articulo.css') }}">
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script !src="">
        $(document).ready(function () {

            $("#texto").keypress(function (e){
                var key = e.which;
                if(key == 13)  // the enter key code
                {
                    $("#form-busqueda").submit();
                }

            });
            $("#categoria").on("change", function (e){
                $("#form-categoria").submit();
            })

        });

    </script>
@endpush
