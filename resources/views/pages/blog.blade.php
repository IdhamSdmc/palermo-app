@extends('layouts.app2')
@section('content')
    <section id="hero">
        <div class="carousel-item active" style="background-image: url('{{$article->path.$article->file_name}}');">
            <div class="carousel-container">
                <div class="container">

                    {{--<h2 class="animate__animated animate__fadeInUp col-xl-6 xol-lg-6 col-md-6 col-sm-12 col-12">¿Por qué invertir en
                        Infraestructura de TI?</h2>
                    <p class="animate__animated animate__fadeInDown col-xl-6 xol-lg-6 col-md-6 col-sm-12 col-12">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor.</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">VER MÁS</a>--}}
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">

            <div class="categorias">

                @foreach($categorias as $categoria)
                <a href="">{{$categoria->title}}</a>
                @endforeach

            </div>
            <div class="row">
                {!! $article->content !!}
                </div>
        </div>
    </section>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
@endpush
