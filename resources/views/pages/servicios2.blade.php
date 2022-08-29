@extends('layouts.app2')
@section('content')
    <section class="banner mb-5" id="infrastructura"
        style="background-image: url('assets/imgs/recursos/inicio 3.jpg'); background-position-y: 87%;">
        <div class="wrapper">
            <div class="banner-container">
                <div class="banner-content">
                    <h2 class="animate__animated animate__fadeInUp">Servicios & Infraestructura de TI</h2>
                    <p>
                        Simplifica y equipa tu organización. Te acompañamos durante todo el proceso, desde el
                        dimensionamiento, implementación hasta la adopción de nuevas tecnologías.
                    </p>
                    <a href="#footer" class="btn-banner">COTIZA AHORA</a>
                    <a href="https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor"
                        target="_blank" class="btn-whatsapp">
                        <img src="{{ asset('assets/imgs/resources/whatsapp.svg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <article class="wrapper">
        <section class="section-container" id="nosotros">
            <div class="section">
                <div class="content">
                    <div class="solutions">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide solution">
                                    <div class="image">
                                        <img src="{{ asset('assets/imgs/recursos/sol-ejemplos1.jpg') }}" alt="...">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Administración y Outsourcing de Dispositivos de Cómputo e Impresión
                                        </h5>
                                        <p class="card-text">
                                            Administración y gestión de diferentes dispositivos para tu organización.
                                        </p>
                                        <ul>
                                            <li>
                                                Impresoras láser, Inkjet, matricial, térmica industrial.
                                            </li>
                                            <li>
                                                Scanner de producción y formato ancho.
                                            </li>
                                            <li>
                                                Desktops, Notebooks, Workstation & Pda.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide solution">
                                    <div class="image">
                                        <img src="{{ asset('assets/imgs/recursos/sol-ejemplos2.jpg') }}" alt="...">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Proyectos de centros de datos, Networking & Seguridad TI
                                        </h5>
                                        <p class="card-text">
                                            Aumente la agilidad y el control de TI y déjenos la administración del ciclo de
                                            vida a
                                            nosotros.
                                        </p>
                                        <ul>
                                            <li>
                                                Servidores & Almacenamiento & Redes.
                                            </li>
                                            <li>
                                                Virtualización & Hiper convergencia.
                                            </li>
                                            <li>
                                                Seguridad perimetral, Endpoint & CCTV.
                                            </li>
                                        </ul>

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
    <section class="banner mb-5" id="colaboracion"
        style="background-image: url('assets/imgs/recursos/digitalizacion.jpg'); background-position-y: 70%;">
        <div class="wrapper">
            <div class="banner-container">
                <div class="banner-content">
                    <h2 class="animate__animated animate__fadeInUp">Colaboración & Videoconferencia</h2>
                    <div style="max-width: 28rem">
                        <p>
                            Te ayudaremos a estar conectado desde cualquier lugar y dispositivo. La distancia ya no es un
                            impedimento.
                        </p>
                        <a href="#footer" class="btn-banner">COTIZA AHORA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <article class="wrapper">
        <section class="section-container" id="reuniones">
            <div class="section">
                <div class="content">
                    <div class="solutions reuniones">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide solution">
                                    <div class="image">
                                        <img src="{{ asset('assets/imgs/recursos/reuniones1.jpg') }}" alt="...">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Salas de reuniones & colaboración
                                        </h5>
                                        <p>
                                            Incorpora un estilo de trabajo híbrido, equipa tus espacios con recursos
                                            audiovisuales y
                                            pantallas y
                                            amplía la experiencia de colaboración empresarial.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide solution">
                                    <div class="image">
                                        <img src="{{ asset('assets/imgs/recursos/reuniones2.jpg') }}" alt="...">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Salón de clase inteligente
                                        </h5>
                                        <p>
                                            Ayuda a brindar una mejor educación a los alumnos, de manera remota o
                                            presencial.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide solution">
                                    <div class="image">
                                        <img src="{{ asset('assets/imgs/recursos/reuniones3.jpg') }}" alt="...">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Digital Signage
                                        </h5>
                                        <p>
                                            Transmite ideas, información y objetivos comerciales, con más facilidad.
                                        </p>
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
    <section class="banner mb-5"
        style="background-image: url('assets/imgs/recursos/digitalizacion.jpg'); background-position-y: 70%;" id="gestion">
        <div class="wrapper">
            <div class="banner-container">
                <div class="banner-content">
                    <h2 class="animate__animated animate__fadeInUp">Digitalización & Gestión Documental</h2>
                    <div style="max-width: 28rem">
                        <p>
                            Te acompañamos desde la creación, control, gestión y custodia de todo el acervo documental con
                            la finalidad de liberara tus colaboradores de las tareas manuales y repetitivas.
                        </p>
                        <a href="#footer" class="btn-banner">COTIZA AHORA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <article class="wrapper">
        <section class="section-container" id="digitalizacion">
            <div class="section">
                <div class="content">
                    <div class="solutions">
                        <div class="swiper mySwiper3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide solution">
                                    <div class="image">
                                        <img src="{{ asset('assets/imgs/recursos/dig-ejemplo01.jpg') }}" alt="...">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Digitalización, Gestión & Custodia de Documentos
                                        </h5>
                                        <ul>
                                            <li>
                                                Elimina costos de almacenamiento en las oficinas.
                                            </li>
                                            <li>
                                                Virtualización & Hiper convergencia.
                                            </li>
                                            <li>
                                                Inventario y organización de toda la documentación.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide solution">
                                    <div class="image">
                                        <img src="{{ asset('assets/imgs/recursos/dig-ejemplo02.jpg') }}" alt="...">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            Optimización de flujos de trabajo & automatización de procesos RPA
                                        </h5>
                                        <ul>
                                            <li>
                                                Accede a la documentación en cuestión de segundos.
                                            </li>
                                            <li>
                                                Agiliza y optimiza los procedimientos.
                                            </li>
                                            <li>
                                                Digitaliza aprobaciones y crea workflows automáticos.
                                            </li>
                                        </ul>

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
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/servicios.css') }}">
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend/js/servicios.js') }}"></script>
@endpush
