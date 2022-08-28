@extends('layouts.app')
@section('content')
    <article class="position-relative">
        <section id="hero">
            <div class="carousel-item active" style="background-image: url('assets/imgs/recursos/inicio 4 LAPTOPS Y PANTALLAS.jpg'); background-position: top">
                <div class="carousel-container d-flex justify-content-start">
                    <div class="container m-0">

                        <h2 class="animate__animated animate__fadeInUp col">LAPTOPS Y PANTALLAS</h2></h2>
                        <p class="animate__animated animate__fadeInDown col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">Equipa tu empresa con los mejores
                            equipos tecnológicos.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">VER MÁS</a>
                    </div>
                </div>
            </div>
        </section>
        <a href="https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor" target="_blank" class="btn-whatsapp">
            <img src="{{asset('assets/imgs/resources/whatsapp.svg')}}" alt="">
        </a>
    </article>
    <section class="productos">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-4">
                    <div class="cuadro h-100">
                        <img src="assets/imgs/recursos/producto01.png" class="img-fluid" alt="">
                        <h4>IMPRESORA MULTIFUNSIONAL
                            B/W</h4>
                        <p class="mt-2">Impresoras multifunciones que
                            satisfacen las necesidades de
                            impresión sin importar el
                            tamaño de su empresa.</p>
                        <a target="_blank" href="{{url('https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor')}}"><i class="bi bi-whatsapp"></i> COTIZAR</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-4">
                    <div class="cuadro h-100">
                        <img src="assets/imgs/recursos/producto02.png" class="img-fluid" alt="">
                        <h4>IMPRESORA MULTIFUNCIONAL
                            A COLORES</h4>
                        <p class="mt-2">Impresoras multifunciones a color,
                            que satisfacen la necesidad de
                            impresión sin importar el tamaño
                            de su empresa.</p>
                        <a target="_blank" href="{{url('https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor')}}"><i class="bi bi-whatsapp"></i> COTIZAR</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-4">
                    <div class="cuadro h-100">
                        <img src="assets/imgs/recursos/producto03.png" class="img-fluid" alt="">
                        <h4>IMPRESORA TÉRMICA
                            MULTIFUNCIONAL</h4>
                        <p class="mt-2">Impresoras con una excelente
                            capacidad para grandes
                            volúmenes de producción.</p>
                        <a target="_blank" href="{{url('https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor')}}"><i class="bi bi-whatsapp"></i> COTIZAR</a>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center align-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-4">
                    <div class="cuadro h-100">
                        <img src="assets/imgs/recursos/producto04.png" class="img-fluid" alt="">
                        <h4>LAPTOPS Y PC’S</h4>
                        <p class="mt-2">Si quiere trabajar, estudiar o
                            diseñar, tenemos varios modelos
                            con hardware potente y diseño
                            sencillo a un precio razonable.</p>
                        <a target="_blank" href="{{url('https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor')}}"><i class="bi bi-whatsapp"></i> COTIZAR</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-4">
                    <div class="cuadro h-100">
                        <img src="assets/imgs/recursos/producto05.png" class="img-fluid" alt="">
                        <h4>PANTALLAS</h4>
                        <p class="mt-2">Comparte y transmite contenidos
                            con soluciones interactivas.</p>
                        <a target="_blank" href="{{url('https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor')}}"><i class="bi bi-whatsapp"></i> COTIZAR</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-4">
                    <div class="cuadro h-100">
                        <img src="assets/imgs/recursos/producto06.png" class="img-fluid" alt="">
                        <h4>VIDEOCONFERENCIA</h4>
                        <p class="mt-2">Lleva la colaboración al
                            siguiente nivel con: speakers,
                            headsets y cámaras.</p>
                        <a target="_blank" href="{{url('https://wa.me/+5116206065?text=Hola Grupo Palermo, estoy interesad@ en sus soluciones y quisiera conversar con un asesor')}}"><i class="bi bi-whatsapp"></i> COTIZAR</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/productos.css') }}">
@endpush
