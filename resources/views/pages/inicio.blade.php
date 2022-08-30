@extends('layouts.app')
@section('content')
    <article class="position-relative">
    <section id="hero">
        <div class="carousel-item active" style="background-image: url('assets/imgs/recursos/inicio.jpg')">
            <div class="carousel-container d-flex justify-content-start">
                <div class="container m-0">
                    <P class="animate__animated animate__fadeInDown">MÁS DE 25 AÑOS DE EXPERIENCIA</P>
                    <h2 class="animate__animated animate__fadeInUp col-4" style="font-size: 3rem">TECNOLOGÍA PARA CRECER</h2>
                    <a href="#footer" class="btn-get-started animate__animated animate__fadeInUp scrollto mt-3">CONTÁCTANOS</a>
                </div>
            </div>
        </div>
    </section>
        <a href="https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor" target="_blank" class="btn-whatsapp">
            <img src="{{asset('assets/imgs/resources/whatsapp.svg')}}" alt="">
        </a>
    </article>

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about" >
            <div class="container">
                <div class="about-content">
                    <div class="about-text">
                        <div class="text">
                            <h2>SOLUCIONES</h2>
                            <h3 class="mb-4">Enfocados en la <strong>optimización de procesos</strong> y
                                <strong>recursos</strong>
                            </h3>
                            <h5>Implementamos los mejores servicios tecnológicos</h5>
                        </div>
                        <div class="arrows">
                            <button type="button" class="btn-slider prev">
                                <img src="{{ asset('assets/imgs/left-slider.png') }}" alt="left">
                            </button>
                            <button type="button" class="btn-slider next">
                                <img src="{{ asset('assets/imgs/right-slider.png') }}" alt="right">
                            </button>
                        </div>

                    </div>
                    <div class="swiper mySwiper" >
                        <div class="swiper-wrapper"  >
                            <div class="swiper-slide solution" id="solutions-tarjet">
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
                                        <a href="/soluciones#infrastructura" class="btn btn-info">VER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide solution" id="solutions-tarjet">
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
                                        <a href="/soluciones#colaboracion" class="btn btn-info">VER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide solution" id="solutions-tarjet">
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
                                        <a href="/soluciones#gestion" class="btn btn-info">VER MÁS</a>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
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

            </div>
        </section><!-- End Clients Section -->

        <!-- Historias de Exito -->
        <section class="historias-exito">
            <div class="container">
                    <h2 class="mb-5">HISTORIAS DE ÉXITO</h2>
                    <div class="content">
                        <div class="historias">
                            <button type="button" class="btn-slider prev">
                                <img src="{{ asset('assets/imgs/left-slider.png') }}" alt="left">
                            </button>
                            <div class="swiper mySwiper" id="">

                                <div class="swiper-wrapper" >
                                    <div class="swiper-slide solution" >
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
                                                        <a class="button" href="{{url('/soluciones')}}">CONOCE NUESTRAS SOLUCIONES</a>
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
                                    <div class="swiper-slide solution" >
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 m-auto">

                                                <div class="detalle">
                                                    <h3>Colegio Montessori</h3>
                                                    <h5>EL RETO</h5>
                                                    <p>Mejorar la capacidad de TI del colegio para aperturar el año académico de manera exitosa.</p>
                                                    <h5>LA SOLUCIÓN</h5>
                                                    <p> Implementamos Servicios e Infraestructura TI para el área administrativa y Salones Inteligentes con pantallas interactivas para todo el colegio.</p>
                                                    <h5>EL RESULTADO</h5>
                                                    <p>Elevamos la eficiencia de las operaciones en el colegio con una mejor capacidad TI y brindamos a los alumnos la experiencia del Salón inteligente.</p>
                                                    <div class="button-he">
                                                        <a class="button" href="{{url('/soluciones')}}">CONOCE NUESTRAS SOLUCIONES</a>
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
                                    <div class="swiper-slide solution" >
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 m-auto">

                                                <div class="detalle">
                                                    <h3>Side Perú</h3>
                                                    <h5>EL RETO</h5>
                                                    <p>Obtener información histórica que confirme el cumplimiento del pago a los empleados y obreros con precisión para evitar penalidades.</p>
                                                    <h5>LA SOLUCIÓN</h5>
                                                    <p>Digitalizamos la información física histórica de la planilla, gestionamos la metadata resultante y lo publicamos en un servidor.
                                                    </p>
                                                    <h5>EL RESULTADO</h5>
                                                    <p>Optimizamos el tiempo de búsqueda y consulta del historial de pagos a los colaboradores, reduciéndolo de 14 días a 05 días minutos.</p>
                                                    <div class="button-he">
                                                        <a class="button" href="{{url('/soluciones')}}">CONOCE NUESTRAS SOLUCIONES</a>
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

                            </div>

                            <button type="button" class="btn-slider next">
                                <img src="{{ asset('assets/imgs/right-slider.png') }}" alt="right">
                            </button>
                            <div>


                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
        </section>
        <!-- Fin Historias de Exito -->


    </main><!-- End #main -->

@endsection
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/inicio.css') }}">
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="{{ asset('frontend/js/inicio.js') }}"></script>

@endpush
