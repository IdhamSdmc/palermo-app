@extends('layouts.app2')
@section('content')
    <section class="banner" style="background-image: url('assets/imgs/recursos/inicio.jpg');">
        <div class="wrapper">
            <div class="banner-container">
                <div class="banner-content banner-main">
                    <p>MÁS DE 25 AÑOS DE EXPERIENCIA</p>
                    <h2 class="animate__animated animate__fadeInUp title">TECNOLOGÍA PARA CRECER</h2>
                    <a href="#footer" class="btn-banner">CONTÁCTANOS</a>
                    <a href="https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor"
                        target="_blank" class="btn-whatsapp">
                        <img src="{{ asset('assets/imgs/resources/whatsapp.svg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <div class="text">
                        <h2>SOLUCIONES</h2>
                        <h3 class="mb-4">Enfocados en la <strong>optimizacion de procesos</strong> y
                            <strong>recursos</strong>
                        </h3>
                        <h5>Implementamos los mejores servicios tecnológicos</h5>
                    </div>
                    <div class="actions">
                        <button type="button" class="btn-slider" id="slider-previous">
                            <img src="{{ asset('assets/imgs/left-slider.png') }}" alt="left">
                        </button>
                        <button type="button" class="btn-slider" id="slider-next">
                            <img src="{{ asset('assets/imgs/right-slider.png') }}" alt="right">
                        </button>
                    </div>
                </div>
                <div class="about-flex" id="slider-container">
                    <div class="about-item active" data-index="1">
                        <div class="header">
                            <img src="assets/imgs/recursos/soluciones 1.jpg" class="card-img-top " alt="...">
                        </div>
                        <div class="body">
                            <div class="content">
                                <h3 class="card-title " style="line-height: normal; font-size: 20px; font-weight: 600;">
                                    Servicios & infraestructura de TI</h3>
                                <p class="card-text">Optimiza y equipa tu organización con nuevas tecnologías, desde el
                                    dimensionamiento hasta la implementación.</p>
                            </div>
                            <div class="action">
                                <a href="#" class="btn btn-info">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <div class="about-item" data-index="2">
                        <div class="header">
                            <img src="assets/imgs/recursos/soluciones 2.jpg" class="card-img-top " alt="...">
                        </div>
                        <div class="body">
                            <div class="content">
                                <h3 class="card-title " style="line-height: normal; font-size: 20px; font-weight: 600;">
                                    Colaboración & videoconferencia</h3>
                                <p class="card-text">Adáptate al trabajo híbrido y mantente conectado desde cualquier
                                    lugar y dispositivo.</p>
                            </div>
                            <div class="action">
                                <a href="#" class="btn btn-info">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <div class="about-item" data-index="3">
                        <div class="header">
                            <img src="assets/imgs/recursos/soluciones 3.jpg" class="card-img-top " alt="...">
                        </div>
                        <div class="body">
                            <div class="content">
                                <h3 class="card-title " style="line-height: normal; font-size: 20px; font-weight: 600;">
                                    Digitalización y Ge documental</h3>
                                <p class="card-text">Optimiza y equipa tu organización con nuevas tecnologías, desde el
                                    dimensionamiento hasta la implementación.</p>
                            </div>
                            <div class="action">
                                <a href="#" class="btn btn-info">VER MÁS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row content">
                <div class="col-lg-3">
                    <h2>SOLUCIONES</h2>
                    <h3 class="mb-4">Enfocados en la <strong>optimizacion de procesos</strong> y <strong>recursos</strong></h3>
                    <h5>Implementamos los mejores servicios tecnológicos</h5>
                </div>
                <div class="col-lg-9 pt-4 pt-lg-0">
                    <div class="row row-cols-1 row-cols-md-3 mb-3 text-left">
                        <div class="col">
                            <div class="card mb-4 rounded-5 shadow-sm ">

                                <img src="assets/imgs/recursos/soluciones 1.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h3 class="card-title " style="line-height: normal; font-size: 20px; font-weight: 600;">Servicios & infraestructura de TI</h3>
                                    <p class="card-text">Optimiza y equipa tu organización con nuevas tecnologías, desde el dimensionamiento hasta la implementación.</p>
                                    <a href="#" class="btn btn-info">VER MÁS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-5 shadow-sm ">

                                <img src="assets/imgs/recursos/soluciones 2.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h3 class="card-title " style="line-height: normal; font-size: 20px; font-weight: 600;">Colaboración & videoconferencia</h3>
                                    <p class="card-text">Adáptate al trabajo híbrido y mantente conectado desde cualquier lugar y dispositivo.</p>
                                    <a href="#" class="btn btn-info">VER MÁS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-5 shadow-sm ">

                                <img src="assets/imgs/recursos/soluciones 3.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                    <h3 class="card-title " style="line-height: normal; font-size: 20px; font-weight: 600;">Digitalización y Ge documental</h3>
                                    <p class="card-text">Optimiza y equipa tu organización con nuevas tecnologías, desde el dimensionamiento hasta la implementación.</p>
                                    <a href="#" class="btn btn-info">VER MÁS</a>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>--}}

        </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <div class="socios">
        <h2 class="">SOCIOS ESTRATÉGICOS</h2>
    </div>
    <section id="clients" class="clients section-bg">
        <div class="container ">
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="assets/imgs/resources/dell.svg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="assets/imgs/resources/zebra.svg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="assets/imgs/resources/ricoh.svg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="assets/imgs/resources/logitech.svg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="assets/imgs/resources/epson.svg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="assets/imgs/resources/evoko.svg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="assets/imgs/resources/IBM.svg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="assets/imgs/resources/jabra.svg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="assets/imgs/resources/lenovo.svg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="assets/imgs/resources/LG.svg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="assets/imgs/resources/microsoft-teams.svg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="assets/imgs/resources/zoom.svg" height="100" width="250" alt="" />
                    </div>

                </div>
            </div>
            {{--<div class="row">


                <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/imgs/socios/dell.svg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/imgs/socios/zebra.svg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-3 col-md-4 col-6 d-none d-sm-none d-md-block d-flex align-items-center justify-content-center">
                    <img src="assets/imgs/socios/ricoh.svg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-3 col-md-4 col-6 d-none d-sm-none d-md-block d-flex align-items-center justify-content-center">
                    <img src="assets/imgs/socios/logitech.svg" class="img-fluid" alt="">
                </div>

            </div>--}}

        </div>
    </section><!-- End Clients Section -->

    <!-- Historias de Exito -->
    <section class="historias-exito">
        <div class="container">
            <div class="row">
                <h2 class="mb-5">HISTORIAS DE ÉXITO</h2>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    {{--<div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>--}}
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row ">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 m-auto">
                                    <div class="detalle">
                                        <h3>MISSION SOUTH & CENTRAL AMÉRICA</h3>
                                        <h5>EL RETO</h5>
                                        <p>Mejorar la gestión documental entre los fundos para optimizar la
                                            toma de decisiones y actualizar el equipo de TI de la empresa.</p>
                                        <h5>LA SOLUCIÓN</h5>
                                        <p>Brindamos equipos de impresión, etiquetado, laptops, escáneres
                                            e impresora térmica. Además, proporcionamos pantallas
                                            colaborativas de proyección, digitalizamos y clasificamos toda la
                                            documentación de la empresa.</p>
                                        <h5>EL RESULTADO</h5>
                                        <p>Actualizamos el equipo de TI de Mission, mejoramos el proceso
                                            para la toma de decisiones, la comunicación entre las sedes y
                                            optimizamos los datos de la empresa.</p>
                                        <div class="button-he">
                                            <button>CONOCE NUESTRAS SOLUCIONES</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 d-none d-sm-none d-md-block">
                                    <div class="img-he">
                                        <img src="assets/imgs/recursos/historia de exito.jpg" alt="...">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 m-auto">
                                    <div class="detalle">
                                        <h3>MISSION SOUTH & CENTRAL AMÉRICA</h3>
                                        <h5>EL RETO</h5>
                                        <p>Mejorar la gestión documental entre los fundos para optimizar la
                                            toma de decisiones y actualizar el equipo de TI de la empresa.</p>
                                        <h5>LA SOLUCIÓN</h5>
                                        <p>Brindamos equipos de impresión, etiquetado, laptops, escáneres
                                            e impresora térmica. Además, proporcionamos pantallas
                                            colaborativas de proyección, digitalizamos y clasificamos toda la
                                            documentación de la empresa.</p>
                                        <h5>EL RESULTADO</h5>
                                        <p>Actualizamos el equipo de TI de Mission, mejoramos el proceso
                                            para la toma de decisiones, la comunicación entre las sedes y
                                            optimizamos los datos de la empresa.</p>
                                        <div class="button-he">
                                            <button>CONOCE NUESTRAS SOLUCIONES</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 d-none d-sm-none d-md-block">
                                    <div class="img-he">
                                        <img src="assets/imgs/recursos/historia de exito.jpg" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 m-auto">
                                    <div class="detalle">
                                        <h3>MISSION SOUTH & CENTRAL AMÉRICA</h3>
                                        <h5>EL RETO</h5>
                                        <p>Mejorar la gestión documental entre los fundos para optimizar la
                                            toma de decisiones y actualizar el equipo de TI de la empresa.</p>
                                        <h5>LA SOLUCIÓN</h5>
                                        <p>Brindamos equipos de impresión, etiquetado, laptops, escáneres
                                            e impresora térmica. Además, proporcionamos pantallas
                                            colaborativas de proyección, digitalizamos y clasificamos toda la
                                            documentación de la empresa.</p>
                                        <h5>EL RESULTADO</h5>
                                        <p>Actualizamos el equipo de TI de Mission, mejoramos el proceso
                                            para la toma de decisiones, la comunicación entre las sedes y
                                            optimizamos los datos de la empresa.</p>
                                        <div class="button-he">
                                            <button>CONOCE NUESTRAS SOLUCIONES</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 d-none d-sm-none d-md-block">
                                    <div class="img-he">
                                        <img src="assets/imgs/recursos/historia de exito.jpg" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev cc-button" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <img src="assets/imgs/left-slider.png" class="w-25" alt="">
                    </button>

                    <button class="carousel-control-next cc-button" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <img src="assets/imgs/right-slider.png" class="w-25" alt="">
                    </button>

                </div>
            </div>
        </div>
    </section>
    <!-- Fin Historias de Exito -->
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/inicio.css') }}">
@endpush

@push('js')
    <script src="{{ asset('assets/js/slider.js') }}"></script>
@endpush