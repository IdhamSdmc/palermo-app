@extends('layouts.app2')
@section('content')
    <section class="banner"
        style="background-image: url('assets/imgs/recursos/inicio 4 LAPTOPS Y PANTALLAS.jpg'); background-position-y: 50%;">
        <div class="wrapper">
            <div class="banner-container">
                <div class="banner-content">
                    <h2 class="animate__animated animate__fadeInUp">LAPTOPS Y PANTALLAS</h2>
                    <div style="max-width: 28rem">
                        <p>
                            Equipa tu empresa con los mejores equipos tecnológicos.
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
        <section class="section-container" id="productos">
            <div class="section">
                <h2>NUESTROS PRODUCTOS</h2>
                <div class="content">
                    <div class="lista-productos">
                        <div class="product">
                            <div class="image">
                                <img src="assets/imgs/recursos/producto01.png" alt="">
                            </div>
                            <h4>IMPRESORA MULTIFUNSIONAL B/W</h4>
                            <p>
                                Impresoras multifunciones que satisfacen las necesidades de impresión sin importar el tamaño
                                de su empresa.
                            </p>
                            <a target="_blank"
                                href="{{ url('https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor') }}">
                                <i class="bi bi-whatsapp"></i> COTIZAR
                            </a>
                        </div>
                        <div class="product">
                            <div class="image">
                                <img src="assets/imgs/recursos/producto02.png" alt="">
                            </div>
                            <h4>IMPRESORA MULTIFUNCIONAL A COLORES</h4>
                            <p>
                                Impresoras multifunciones a color, que satisfacen la necesidad de impresión sin importar el
                                tamaño de su empresa.
                            </p>
                            <a target="_blank"
                                href="{{ url('https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor') }}">
                                <i class="bi bi-whatsapp"></i> COTIZAR
                            </a>
                        </div>
                        <div class="product">
                            <div class="image">
                                <img src="assets/imgs/recursos/producto03.png" alt="">
                            </div>
                            <h4>IMPRESORA TÉRMICA MULTIFUNCIONAL</h4>
                            <p>
                                Impresoras con una excelente capacidad para grandes volúmenes de producción.
                            </p>
                            <a target="_blank"
                                href="{{ url('https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor') }}">
                                <i class="bi bi-whatsapp"></i> COTIZAR
                            </a>
                        </div>
                        <div class="product">
                            <div class="image">
                                <img src="assets/imgs/recursos/producto04.png" alt="">
                            </div>
                            <h4>LAPTOPS Y PC’S</h4>
                            <p>
                                Si quiere trabajar, estudiar o diseñar, tenemos varios modelos con hardware potente y diseño
                                sencillo a un precio razonable.
                            </p>
                            <a target="_blank"
                                href="{{ url('https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor') }}">
                                <i class="bi bi-whatsapp"></i> COTIZAR
                            </a>
                        </div>
                        <div class="product">
                            <div class="image">
                                <img src="assets/imgs/recursos/producto05.png" alt="">
                            </div>
                            <h4>PANTALLAS</h4>
                            <p>
                                Comparte y transmite contenidos con soluciones interactivas.
                            </p>
                            <a target="_blank"
                                href="{{ url('https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor') }}">
                                <i class="bi bi-whatsapp"></i> COTIZAR
                            </a>
                        </div>
                        <div class="product">
                            <div class="image">
                                <img src="assets/imgs/recursos/producto06.png" alt="">
                            </div>
                            <h4>VIDEOCONFERENCIA</h4>
                            <p>
                                Lleva la colaboración al siguiente nivel con: speakers, headsets y cámaras.
                            </p>
                            <a target="_blank"
                                href="{{ url('https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor') }}">
                                <i class="bi bi-whatsapp"></i> COTIZAR
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/productos.css') }}">
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
@endpush
