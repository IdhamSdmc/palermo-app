@extends('layouts.app')
@section('content')
    <section id="hero">
        <div class="carousel-item active" style="background-image: url('assets/imgs/recursos/inicio 6.jpg')">
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
            <div class="row">
                <h2>¿Por qué invertir en Infraestructura de TI?</h2>
                <h4>2022, 12 DE MAYO</h4>
                <h5>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</h5>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <img src="{{asset('assets/imgs/recursos/blog 1.jpg')}}" alt="">
                <h5 class="mt-5">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</h5>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <img src="{{asset('assets/imgs/recursos/blog 2.jpg')}}" alt="">
            </div>
        </div>
    </section>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
@endpush
