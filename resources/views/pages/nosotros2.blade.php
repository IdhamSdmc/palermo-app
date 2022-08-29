@extends('layouts.app2')
@section('content')
    <section class="banner" style="background-image: url('assets/imgs/recursos/inicio 2.jpg'); background-position-y: 25%;">
        <div class="wrapper">
            <div class="banner-container">
                <div class="banner-content">
                    <h2 class="animate__animated animate__fadeInUp">Somos Grupo Palermo</h2>
                    <p class="mb-0">Más de 25 años en el mercado tecnológico nos respaldan.</p>
                    <p>
                        Nuestra amplia experiencia y capacidad nos permiten brindar, las mejores soluciones empresariales y
                        verdaderas oportunidades de mejora.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <article class="wrapper">
        <section class="section-container" id="nosotros">
            <div class="section">
                <h2>SOBRE NOSOTROS</h2>
                <div class="content">
                    <div class="list-tarjetas">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide tarjeta-box">
                                    <div class="tarjeta">
                                        <div class="front">
                                            <h4>Propósito de la marca</h4>
                                            <img src="assets/imgs/resources/Grupo 891.svg" class="img-fluid" alt="">
                                        </div>
                                        <div class="front back">
                                            <h4>Propósito de la marca</h4>
                                            <img src="assets/imgs/nosotros/Grupo 697.svg" class="img-fluid" alt="">
                                            <p class="mt-2 text-center"><strong>Transformamos digitalmente</strong> tu
                                                empresa para <strong>crecer</strong> con soluciones tecnológicas integradas.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide tarjeta-box">
                                    <div class="tarjeta">
                                        <div class="front">
                                            <h4>¿Por qué elegir Palermo?</h4>
                                            <img src="assets/imgs/resources/Grupo 890.svg" class="img-fluid" alt="">
                                        </div>
                                        <div class="front back">
                                            <h4>¿Por qué elegir Palermo?</h4>
                                            <img src="assets/imgs/nosotros/Grupo 696.svg" class="img-fluid" alt="">
                                            <p class="mt-2 text-center">
                                                <strong>Más de 25 años</strong> en el mercado
                                                peruano nos <strong>respaldan</strong> para brindar
                                                <strong>soluciones</strong> que <strong>optimizan y mejoran</strong>
                                                la Infraestructura de TI, los procesos de flujos de documentos y la
                                                colaboración en tu empresa.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide tarjeta-box">
                                    <div class="tarjeta">
                                        <div class="front">
                                            <h4>¿Cómo lo hacemos?</h4>
                                            <img src="assets/imgs/resources/Trazado 1186.svg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="front back">
                                            <h4>¿Cómo lo hacemos?</h4>
                                            <img src="assets/imgs/nosotros/Trazado 915.svg" class="img-fluid"
                                                alt="">
                                            <p class="mt-2 text-center">
                                                A través de Servicios integrados de Infraestructura TI, Digitalización
                                                y gestión Documental, Videoconferencia y Colaboración.
                                            </p>
                                        </div>
                                    </div>
                                </div>
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
                    </div>
                </div>
            </div>
        </section>
    </article>
    <article class="wrapper bg-gray">
        <section class="section-container" id="historia">
            <div class="section">
                <h2>NUESTRA HISTORIA</h2>
                <div class="content">
                    <div class="historia-container">
                        <button type="button" class="btn-slider">
                            <img src="{{ asset('assets/imgs/left-slider.png') }}" alt="">
                        </button>
                        <div class="historia">
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
                                </ul>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <button type="button" class="btn-slider">
                            <img src="{{ asset('assets/imgs/right-slider.png') }}" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/tarjetas.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/historia.css') }}">
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend/js/tarjetas.js') }}"></script>
@endpush
