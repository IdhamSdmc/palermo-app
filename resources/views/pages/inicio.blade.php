@extends('layouts.app')
@section('content')
    <article class="position-relative">
    <section id="hero">
        <div class="carousel-item active" style="background-image: url('assets/imgs/recursos/inicio.jpg')">
            <div class="carousel-container">
                <div class="container">
                    <P class="animate__animated animate__fadeInDown">MÁS DE 25 AÑOS DE EXPERIENCIA</P>
                    <h2 class="animate__animated animate__fadeInUp col-4">TECNOLOGÍA PARA CRECER</h2></h2>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">CONTÁCTANOS</a>
                </div>
            </div>
        </div>
    </section>
        <a href="https://wa.me/+5116206065" target="_blank" class="btn-whatsapp">
            <img src="{{asset('assets/imgs/resources/whatsapp.svg')}}" alt="">
        </a>
    </article>

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
               <div class="about-content">
                   <div class="about-text">
                       <h2>SOLUCIONES</h2>
                       <h3 class="mb-4">Enfocados en la <strong>optimizacion de procesos</strong> y <strong>recursos</strong></h3>
                       <h5>Implementamos los mejores servicios tecnológicos</h5>
                   </div>
                   <div class="about-flex">
                       <div class="about-item">
                           <div class="header">
                               <img src="assets/imgs/recursos/soluciones 1.jpg" class="card-img-top " alt="...">
                           </div>
                           <div class="body">
                               <div class="content">
                                   <h3 class="card-title " style="line-height: normal; font-size: 20px; font-weight: 600;">Servicios & infraestructura de TI</h3>
                                   <p class="card-text">Optimiza y equipa tu organización con nuevas tecnologías, desde el dimensionamiento hasta la implementación.</p>
                               </div>
                               <div class="action">
                                   <a href="#" class="btn btn-info">VER MÁS</a>
                               </div>
                           </div>
                       </div>
                       <div class="about-item">
                           <div class="header">
                               <img src="assets/imgs/recursos/soluciones 2.jpg" class="card-img-top " alt="...">
                           </div>
                           <div class="body">
                               <div class="content">
                                   <h3 class="card-title " style="line-height: normal; font-size: 20px; font-weight: 600;">Colaboración & videoconferencia</h3>
                                   <p class="card-text">Adáptate al trabajo híbrido y mantente conectado desde cualquier lugar y dispositivo.</p>
                               </div>
                               <div class="action">
                                   <a href="#" class="btn btn-info">VER MÁS</a>
                               </div>
                           </div>
                       </div>
                       <div class="about-item">
                           <div class="header">
                               <img src="assets/imgs/recursos/soluciones 3.jpg" class="card-img-top " alt="...">
                           </div>
                           <div class="body">
                               <div class="content">
                                   <h3 class="card-title " style="line-height: normal; font-size: 20px; font-weight: 600;">Digitalización y Ge documental</h3>
                                   <p class="card-text">Optimiza y equipa tu organización con nuevas tecnologías, desde el dimensionamiento hasta la implementación.</p>
                               </div>
                               <div class="action">
                                   <a href="#" class="btn btn-info">VER MÁS</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
                {{--<div class="row content">
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
            <div class="container">

                <div class="row">


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

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- Historias de Exito -->
        <section class="historias-exito">
            <div class="container">
                <div class="row">
                    <h2>HISTORIAS DE ÉXITO</h2>
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        {{--<div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>--}}
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
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
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
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
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
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
                            <img src="assets/imgs/left-slider.png" class="w-50" alt="">
                        </button>

                        <button class="carousel-control-next cc-button" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <img src="assets/imgs/right-slider.png" class="w-50" alt="">
                        </button>

                    </div>
                </div>
            </div>
        </section>
        <!-- Fin Historias de Exito -->


    </main><!-- End #main -->

@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/inicio.css') }}">
@endpush
