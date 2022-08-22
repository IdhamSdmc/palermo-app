@extends('layouts.app')
@section('content')
    <section id="hero">
        <div class="carousel-item active" style="background-image: url('assets/imgs/recursos/inicio 2.jpg')">
            <div class="carousel-container">
                <div class="container nosotros ">
                    <h2 class="animate__animated animate__fadeInUp col">Somos Grupo Palermo</h2>
                    <p class="animate__animated animate__fadeInDown col-8">Más de 25 años en el mercado tecnológico nos respaldan.
                        Nuestra amplia experiencia y capacidad nos permiten brindar, las
                        mejores soluciones empresariales y verdaderas oportunidades de
                        mejora.</p>

                </div>
            </div>
        </div>
    </section>
{{--    SOBRE NOSOTROS--}}
    <section class="sobre-nosotros">
        <h2>SOBRE NOSOTROS</h2>
        <div class="container row">
            <div class="col cuadro m-5 ">
                <h4>Propósito de la marca</h4>
                <img src="assets/imgs/nosotros/Grupo 697.svg" class="img-fluid" alt="">
                <p><strong>Transformamos digitalmente</strong> tu
                    empresa para <strong>crecer</strong> con
                    soluciones tecnológicas
                    integradas.</p>
            </div>
            <div class="col cuadro m-5">
                <h4>¿Por qué elegir Palermo?</h4>
                <img src="assets/imgs/nosotros/Grupo 696.svg" class="img-fluid" alt="">
                <p><strong>Más de 25 años</strong> en el mercado
                    peruano nos <strong>respaldan</strong> para brindar
                    <strong>soluciones</strong> que <strong>optimizan y mejoran</strong>
                    la Infraestructura de TI, los procesos
                    de flujos de documentos y la
                    colaboración en tu empresa.</p>
            </div>
            <div class="col cuadro m-5">
                <h4>¿Cómo lo hacemos?</h4>
                <img src="assets/imgs/nosotros/Trazado 915.svg" class="img-fluid" alt="">
                <p><strong>Transformamos digitalmente</strong> tu
                    empresa para <strong>crecer</strong> con
                    soluciones tecnológicas
                    integradas.</p>
            </div>
        </div>
    </section>
@endsection
