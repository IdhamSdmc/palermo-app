@extends('layouts.app')
@section('content')
    <section id="hero">
        <div class="carousel-item active"
            style="background-image: url('assets/imgs/recursos/inicio 2.jpg'); background-position-y: 15%">
            <div class="carousel-container d-flex justify-content-start">
                <div class="container m-0">
                    <h2 class="animate__animated animate__fadeInUp col">Somos Grupo Palermo</h2>
                    <p class="animate__animated animate__fadeInDown col-lg-8 col-md-8 col-sm-12 col-12">Más de 25 años en el
                        mercado tecnológico nos respaldan.
                        Nuestra amplia experiencia y capacidad nos permiten brindar, las
                        mejores soluciones empresariales y verdaderas oportunidades de
                        mejora.</p>

                </div>
            </div>
        </div>
    </section>
    {{-- SOBRE NOSOTROS --}}
    <section class="sobre-nosotros">
        <h2>SOBRE NOSOTROS</h2>
        <div class="container mt-5">

            <div class="row">
                <div class="list-tarjetas">

                    <div class="tarjeta-box">
                        <div class="tarjeta">
                            <div class="front">
                                <h4>Propósito de la marca</h4>
                                <img src="assets/imgs/resources/Grupo 891.svg" class="img-fluid" alt="">
                            </div>
                            <div class="front back">
                                <h4>Propósito de la marca</h4>
                                <img src="assets/imgs/nosotros/Grupo 697.svg" class="img-fluid" alt="">
                                <p class="mt-2"><strong>Transformamos digitalmente</strong> tu
                                    empresa para <strong>crecer</strong> con
                                    soluciones tecnológicas
                                    integradas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tarjeta-box">
                        <div class="tarjeta">
                            <div class="front">
                                <h4>¿Por qué elegir Palermo?</h4>
                                <img src="assets/imgs/resources/Grupo 890.svg" class="img-fluid" alt="">
                            </div>
                            <div class="front back">
                                <h4>¿Por qué elegir Palermo?</h4>
                                <img src="assets/imgs/nosotros/Grupo 696.svg" class="img-fluid" alt="">
                                <p class="mt-2"><strong>Más de 25 años</strong> en el mercado
                                    peruano nos <strong>respaldan</strong> para brindar
                                    <strong>soluciones</strong> que <strong>optimizan y mejoran</strong>
                                    la Infraestructura de TI, los procesos
                                    de flujos de documentos y la
                                    colaboración en tu empresa.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tarjeta-box">
                        <div class="tarjeta">
                            <div class="front">
                                <h4>¿Cómo lo hacemos?</h4>
                                <img src="assets/imgs/resources/Trazado 1186.svg" class="img-fluid" alt="">
                            </div>
                            <div class="front back">
                                <h4>¿Cómo lo hacemos?</h4>
                                <img src="assets/imgs/nosotros/Trazado 915.svg" class="img-fluid" alt="">
                                <p class="mt-2">A través de Servicios integrados
                                    de Infraestructura TI, Digitalización
                                    y gestión Documental,
                                    Videoconferencia y Colaboración.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="actions">
                    <button type="button" class="btn-slider btn-slider-l" id="slider-previous">
                        <img src="{{ asset('assets/imgs/left-slider.png') }}" alt="left">
                    </button>
                    <button type="button" class="btn-slider btn-slider-r" id="slider-next">
                        <img src="{{ asset('assets/imgs/right-slider.png') }}" alt="right">
                    </button>
                </div>
            </div>

        </div>
    </section>
    {{-- NUESTRA HISTORIA --}}
    <section class="nuestra-historia">
        <div class="historia-container">
            <button type="button" class="btn-slider">
                <img src="{{ asset('assets/imgs/left-slider.png') }}" alt="">
            </button>
            <div class="historia">
                <h2>NUESTRA HISTORIA</h2>
                <div class="timeline-container">
                    <ul class="timeline">
                        <li>
                            <div>
                                <time datetime="2018-10-09">1996</time>
                                <p class="time-text">Comienza nuestra historia como
                                    GRUPO PALERMO dedicada al
                                    servicio de fotocopiado e
                                    impresión.</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <time datetime="2018-10-09">2010</time>
                                <p class="time-text">Alianza estratégica y de
                                    distribución exclusiva en el Perú
                                    con la marca de impresoras
                                    RICOH</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <time datetime="2018-10-09">2016</time>
                                <p class="time-text">Grupo Palermo se expande en el
                                    norte del país, con sucursales en
                                    Chiclayo, Piura,
                                    consolidándose como líder en los
                                    servicios de outsourcing de
                                    impresoras en el norte del país.</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <time datetime="2018-10-09">2016</time>
                                <p class="time-text">Grupo Palermo se expande en el
                                    norte del país, con sucursales en
                                    Chiclayo, Piura,
                                    consolidándose como líder en los
                                    servicios de outsourcing de
                                    impresoras en el norte del país.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>
            <button type="button" class="btn-slider">
                <img src="{{ asset('assets/imgs/right-slider.png') }}" alt="">
            </button>
        </div>
    </section>

    {{-- @include('pages.timeline') --}}

    <script src="">
        const timeline = document.querySelector(".timeline ol"),
            elH = document.querySelectorAll(".timeline li > div"),
            arrows = document.querySelectorAll(".timeline .arrows .arrow"),
            arrowPrev = document.querySelector(".timeline .arrows .arrow__prev"),
            arrowNext = document.querySelector(".timeline .arrows .arrow__next"),
            firstItem = document.querySelector(".timeline li:first-child"),
            lastItem = document.querySelector(".timeline li:last-child"),
            xScrolling = 280,
            disabledClass = "disabled";
    </script>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/nosotros.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layouts/nosotros/historia.css') }}">
@endpush

@push('js')
    <script src="{{ asset('assets/js/nosotros/historia.js') }}"></script>
@endpush