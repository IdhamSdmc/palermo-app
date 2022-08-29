@extends('layouts.app2')
@section('content')
    <section class="banner" style="background-image: url('assets/imgs/recursos/inicio 5.jpg'); background-position-y: 40%;">
        <div class="wrapper">
            <div class="banner-container">
                <div class="banner-content">
                    <h2 class="animate__animated animate__fadeInUp">¿Por qué invertir en Infraestructura de TI?</h2>
                    <div style="max-width: 28rem">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                        <a href="#productos" class="btn-banner">VER MÁS</a>
                        <a href="https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor"
                            target="_blank" class="btn-whatsapp">
                            <img src="{{ asset('assets/imgs/resources/whatsapp.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <article class="wrapper">
        <section class="section-container" id="articulos">
            <div class="section">
                <div class="actions">
                    <div class="input-search">
                        <input type="text" autocomplete="none">
                        <i class="bi bi-search"></i>
                    </div>
                    <select name="" id="" class="select">
                        <option value="" selected></option>
                    </select>
                </div>
                <div class="content">
                    <div class="lista-articulos">
                        <div class="articulo">
                            <div class="image">
                                <img src="{{ asset('assets/imgs/recursos/articulo 1.jpg') }}" alt="">
                            </div>
                            <span>2022, 12 DE MAYO</span>
                            <h3>Título de artículo</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                            </p>
                            <a href="#">VER MÁS</a>
                        </div>
                        <div class="articulo">
                            <div class="image">
                                <img src="{{ asset('assets/imgs/recursos/articulo 2.jpg') }}" alt="">
                            </div>
                            <span>2022, 12 DE MAYO</span>
                            <h3>Título de artículo</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                            </p>
                            <a href="#">VER MÁS</a>
                        </div>
                        <div class="articulo">
                            <div class="image">
                                <img src="{{ asset('assets/imgs/recursos/articulo 3.jpg') }}" alt="">
                            </div>
                            <span>2022, 12 DE MAYO</span>
                            <h3>Título de artículo</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                            </p>
                            <a href="#">VER MÁS</a>
                        </div>
                        <div class="articulo">
                            <div class="image">
                                <img src="{{ asset('assets/imgs/recursos/articulo 4.jpg') }}" alt="">
                            </div>
                            <span>2022, 12 DE MAYO</span>
                            <h3>Título de artículo</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                            </p>
                            <a href="#">VER MÁS</a>
                        </div>
                        <div class="articulo">
                            <div class="image">
                                <img src="{{ asset('assets/imgs/recursos/articulo 5.jpg') }}" alt="">
                            </div>
                            <span>2022, 12 DE MAYO</span>
                            <h3>Título de artículo</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                            </p>
                            <a href="#">VER MÁS</a>
                        </div>
                        <div class="articulo">
                            <div class="image">
                                <img src="{{ asset('assets/imgs/recursos/articulo 6.jpg') }}" alt="">
                            </div>
                            <span>2022, 12 DE MAYO</span>
                            <h3>Título de artículo</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                            </p>
                            <a href="#">VER MÁS</a>
                        </div>
                        <div class="articulo">
                            <div class="image">
                                <img src="{{ asset('assets/imgs/recursos/articulo 7.jpg') }}" alt="">
                            </div>
                            <span>2022, 12 DE MAYO</span>
                            <h3>Título de artículo</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                            </p>
                            <a href="#">VER MÁS</a>
                        </div>
                        <div class="articulo">
                            <div class="image">
                                <img src="{{ asset('assets/imgs/recursos/articulo 8.jpg') }}" alt="">
                            </div>
                            <span>2022, 12 DE MAYO</span>
                            <h3>Título de artículo</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                            </p>
                            <a href="#">VER MÁS</a>
                        </div>
                        <div class="articulo">
                            <div class="image">
                                <img src="{{ asset('assets/imgs/recursos/articulo 9.jpg') }}" alt="">
                            </div>
                            <span>2022, 12 DE MAYO</span>
                            <h3>Título de artículo</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                            </p>
                            <a href="#">VER MÁS</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev cc-button" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <img src="{{ asset('assets/imgs/left-slider.png') }}" alt="left">
                </button>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button class="carousel-control-next cc-button" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <img src="{{ asset('assets/imgs/right-slider.png') }}" alt="left">
                </button>
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
@endpush
