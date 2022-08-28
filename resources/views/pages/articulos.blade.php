@extends('layouts.app')
@section('content')
    <article class="position-relative">
        <section id="hero">
            <div class="carousel-item active" style="background-image: url('assets/imgs/recursos/inicio 5.jpg')">
                <div class="carousel-container d-flex justify-content-start">
                    <div class="container m-0">

                        <h2 class="animate__animated animate__fadeInUp col-xl-6 xol-lg-6 col-md-6 col-sm-12 col-12">¿Por qué invertir en
                            Infraestructura de TI?</h2>
                        <p class="animate__animated animate__fadeInDown col-xl-6 xol-lg-6 col-md-6 col-sm-12 col-12">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor.</p>
                        <a href="/blog" class="btn-get-started animate__animated animate__fadeInUp scrollto">VER MÁS</a>
                    </div>
                </div>
            </div>
        </section>
        <a href="https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor" target="_blank" class="btn-whatsapp">
            <img src="{{asset('assets/imgs/resources/whatsapp.svg')}}" alt="">
        </a>
    </article>
    <section class="posts">
        <div class="container-article">
            <div class="card-content">
                <div class="card-article">
                    <div class="card-image"><img src="{{asset('assets/imgs/recursos/articulo 1.jpg')}}" alt=""></div>
                    <div class="card-info">
                        <h4>2022, 12 DE MAYO</h4>
                        <h3>Título de artículo</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do
                            eiusmod tempor.</p>
                        <a href="#">VER MAS</a>
                    </div>
                </div>
                <div class="card-article">
                    <div class="card-image"><img src="{{asset('assets/imgs/recursos/articulo 2.jpg')}}" alt=""></div>
                    <div class="card-info">
                        <h4>2022, 12 DE MAYO</h4>
                        <h3>Título de artículo</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do
                            eiusmod tempor.</p>
                        <a href="#">VER MAS</a>
                    </div>
                </div>
                <div class="card-article">
                    <div class="card-image"><img src="{{asset('assets/imgs/recursos/articulo 3.jpg')}}" alt=""></div>
                    <div class="card-info">
                        <h4>2022, 12 DE MAYO</h4>
                        <h3>Título de artículo</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do
                            eiusmod tempor.</p>
                        <a href="#">VER MAS</a>
                    </div>
                </div>
                <div class="card-article">
                    <div class="card-image"><img src="{{asset('assets/imgs/recursos/articulo 4.jpg')}}" alt=""></div>
                    <div class="card-info">
                        <h4>2022, 12 DE MAYO</h4>
                        <h3>Título de artículo</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do
                            eiusmod tempor.</p>
                        <a href="#">VER MAS</a>
                    </div>
                </div>
                <div class="card-article">
                    <div class="card-image"><img src="{{asset('assets/imgs/recursos/articulo 5.jpg')}}" alt=""></div>
                    <div class="card-info">
                        <h4>2022, 12 DE MAYO</h4>
                        <h3>Título de artículo</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do
                            eiusmod tempor.</p>
                        <a href="#">VER MAS</a>
                    </div>
                </div>
                <div class="card-article">
                    <div class="card-image"><img src="{{asset('assets/imgs/recursos/articulo 6.jpg')}}" alt=""></div>
                    <div class="card-info">
                        <h4>2022, 12 DE MAYO</h4>
                        <h3>Título de artículo</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do
                            eiusmod tempor.</p>
                        <a href="#">VER MAS</a>
                    </div>
                </div>
                <div class="card-article">
                    <div class="card-image"><img src="{{asset('assets/imgs/recursos/articulo 7.jpg')}}" alt=""></div>
                    <div class="card-info">
                        <h4>2022, 12 DE MAYO</h4>
                        <h3>Título de artículo</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do
                            eiusmod tempor.</p>
                        <a href="#">VER MAS</a>
                    </div>
                </div>
                <div class="card-article">
                    <div class="card-image"><img src="{{asset('assets/imgs/recursos/articulo 8.jpg')}}" alt=""></div>
                    <div class="card-info">
                        <h4>2022, 12 DE MAYO</h4>
                        <h3>Título de artículo</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do
                            eiusmod tempor.</p>
                        <a href="#">VER MAS</a>
                    </div>
                </div>
                <div class="card-article">
                    <div class="card-image"><img src="{{asset('assets/imgs/recursos/articulo 9.jpg')}}" alt=""></div>
                    <div class="card-info">
                        <h4>2022, 12 DE MAYO</h4>
                        <h3>Título de artículo</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do
                            eiusmod tempor.</p>
                        <a href="#">VER MAS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/articulos.css') }}">
@endpush
