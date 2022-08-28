@extends('layouts.app')
@section('content')
    <article class="position-relative">
        <section id="hero">
            <div class="carousel-item active" style="background-image: url('assets/imgs/recursos/inicio 3.jpg')">
                <div class="carousel-container">
                    <div class="container soluciones">

                        <h2 class="animate__animated animate__fadeInUp col">Servicios & Infraestructura de TI</h2>
                        <p class="animate__animated animate__fadeInDown col-xl-8 col-lg-8 col-md-8 xol-sm-12 col-12">Simplifica y equipa tu organización. Te acompañamos durante
                            todo el proceso, desde el dimensionamiento, implementación
                            hasta la adopción de nuevas tecnologías.</p>
                        <a href="#footer" class="btn-get-started animate__animated animate__fadeInUp scrollto">COTIZA AHORA</a>
                    </div>
                </div>
            </div>
        </section>
            <a href="https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor" target="_blank" class="btn-whatsapp">
                <img src="{{asset('assets/imgs/resources/whatsapp.svg')}}" alt="">
            </a>
    </article>
    <section class="ejemplos">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col align-items-center">
                    <div class="card" >
                        <img src="{{asset('assets/imgs/recursos/sol-ejemplos1.jpg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Administración y Outsourcing de
                                Dispositivos de Cómputo e Impresión</h5>
                            <p class="card-text">Administración y gestión de diferentes
                                dispositivos para tu organización.</p>
                            <ul>
                                <li><p>Impresoras láser, Inkjet, matricial, térmica
                                        industrial.</p></li>
                                <li><p>Scanner de producción y formato ancho.</p></li>
                                <li><p>Desktops, Notebooks, Workstation & Pda.</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col align-items-center">
                    <div class="card" >
                        <img src="{{asset('assets/imgs/recursos/sol-ejemplos2.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Proyectos de centros de datos,
                                Networking & Seguridad TI</h5>
                            <p class="card-text">Aumente la agilidad y el control de TI y
                                déjenos la administración del ciclo de vida a
                                nosotros.</p>
                            <ul>
                                <li><p>Servidores & Almacenamiento & Redes.</p></li>
                                <li><p>Virtualización & Hiper convergencia.</p></li>
                                <li><p>Seguridad perimetral, Endpoint & CCTV.</p></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="hero">
        <div class="carousel-item active" style="background-image: url('assets/imgs/recursos/digitalizacion.jpg')">
            <div class="carousel-container">
                <div class="container colaboracion">

                    <h2 class="animate__animated animate__fadeInUp ">Colaboración & Videoconferencia</h2>
                    <p class="animate__animated animate__fadeInDown col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12">Te ayudaremos a estar conectado desde
                        cualquier lugar y dispositivo. La distancia ya
                        no es un impedimento.
                        </p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">COTIZA AHORA</a>
                </div>
            </div>
        </div>
    </section>
    <section class="reuniones">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 align-items-center">
                    <div class="card" >
                        <img src="{{asset('assets/imgs/recursos/reuniones1.jpg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salas de reuniones &
                                colaboración</h5>
                            <p class="card-text">Incorpora un estilo de trabajo
                                híbrido, equipa tus espacios con
                                recursos audiovisuales y pantallas
                                interactivas y amplía la experiencia
                                de colaboración empresarial.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 align-items-center">
                    <div class="card" >
                        <img src="{{asset('assets/imgs/recursos/reuniones2.jpg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salón de clase inteligente</h5>
                            <p class="card-text">Ayuda a brindar una mejor
                                educación a los alumnos, de manera
                                remota o presencial.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 align-items-center">
                    <div class="card" >
                        <img src="{{asset('assets/imgs/recursos/reuniones3.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Digital Signage</h5>
                            <p class="card-text">Transmite ideas, información y
                                objetivos comerciales, con más
                                facilidad.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="hero">
        <div class="carousel-item active" style="background-image: url('assets/imgs/recursos/digitalizacion.jpg')">
            <div class="carousel-container">
                <div class="container digitalizacion">

                    <h2 class="animate__animated animate__fadeInUp ">Digitalización & Gestión Documental</h2>
                    <p class="animate__animated animate__fadeInDown col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12">Te acompañamos desde la creación, control, gestión y
                        custodia de todo el acervo documental con la finalidad de
                        liberara tus colaboradores de las tareas manuales y
                        repetitivas.
                    </p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">COTIZA AHORA</a>
                </div>
            </div>
        </div>
    </section>
    <section class="dig-ejemplos">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col align-items-center">
                    <div class="card" >
                        <div class="header">
                            <img src="{{asset('assets/imgs/recursos/dig-ejemplo01.jpg')}}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Digitalización, Gestión & Custodia de
                                Documentos</h5>

                            <ul>
                                <li><p>Cuidado y protección de la información,
                                    menor riesgo de deterioro de los
                                    documentos</p></li>
                                <li><p>Elimina costos de almacenamiento en las
                                    oficinas.</p></li>
                                <li><p>Inventario y organización de toda la documentación.</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col align-items-center">
                    <div class="card" >
                        <div class="header">
                        <img src="{{asset('assets/imgs/recursos/dig-ejemplo02.jpg')}}" class="card-img-top img-fluid" alt="...">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Optimización de flujos de trabajo & 
                                automatización de procesos RPA</h5>
                            <ul>
                                <li><p>Accede a la documentación en cuestión de
                                        segundos.</p></li>
                                <li><p>Agiliza y optimiza los procedimientos.</p></li>
                                <li><p>Digitaliza aprobaciones y crea workflows
                                        automáticos.</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/servicios.css') }}">
@endpush
