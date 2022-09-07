@extends('layouts.app2')
@section('content')
    <article class="wrapper bg-gray">
        <section class="section-container" id="contactanos">
            <div class="section">
                <div class="content">
                    <div class="contact-container">
                        <div class="text">
                            <h2>A solo un clic</h2>
                            <h2>de la transformación tecnológica</h2>
                            <p>Llena el formulario y conoce las soluciones que tenemos para tu organización.</p>
                        </div>
                        <form id="formulario-C" class="form-contact">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h2>Contáctanos</h2>
                            <div class="box-form">
                                <input type="text" name="cliente" placeholder="NOMBRE Y APELLIDO" required>
                            </div>
                            <div class="box-form">
                                <input type="text" name="empresa" placeholder="EMPRESA">
                            </div>
                            <div class="box-form">
                                <input type="email" name="correo" placeholder="CORREO" required>
                            </div>
                            <div class="box-form">
                                <input type="number" name="telefono" placeholder="TELÉFONO DE CONTACTO" required>
                            </div>
                            <button type="submit" id="btn-c">ENVIAR</button>
                            <div class="box-form box-check">
                                <input class="term" type="checkbox" name="term_cond" id="term_cond" required>
                                <label class="term" for="term_cond">Acepto términos y condiciones</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </article>
    <article class="wrapper bg-info">
        <section class="section-container" id="work">
            <div class="section">
                <div class="content">
                    <div class="form-work">
                        <h2>TRABAJA CON NOSOTROS</h2>
                        <form id="formulario-T">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="box-form">
                                <input type="text" required placeholder="NOMBRE Y APELLIDO">
                            </div>
                            <div class="box-form">
                                <input type="text" placeholder="EMPRESA">
                            </div>
                            <div class="box-form">
                                <input type="text"  required placeholder="CORREO">
                            </div>
                            <div class="box-form">
                                <input type="text"  required placeholder="TELÉFONO DE CONTACTO">
                            </div>
                            <input type="file" accept=".pdf" id="file" name="file" class="d-none">
                            <div class="form-buttons">
                                <label for="file" class="btn-file">
                                    <i class="bi bi-arrow-up"></i>
                                    SUBIR CURRICULUM VITAE
                                </label>
                                <button type="submit" id="btn-enviar">ENVIAR</button>
                            </div>
                            <div class="box-form box-check">
                                <input class="term" type="checkbox" name="term_cond" id="term_cond" required>
                                <label class="term" for="term_cond">Acepto términos y condiciones</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </article>

@endsection
@push('js')
    <script !src="">
        $(document).ready(function () {
            $("#formulario-C").on("submit", function (e){
                e.preventDefault();

                $.ajax({
                    url: "/mail",
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    beforeSend: function (){
                        $("#btn-c").append(`
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    `);
                    },
                    success: function(response){
                        if(response['ok']==true){
                            alert(response['msg']);
                            $("#btn-c").html("ENVIAR");
                        }else{
                            alert("Ocurrio un error vuelva a intentarlo");
                            $("#btn-c").html("ENVIAR");
                        }
                    },
                    error: function(e){
                        /*alert("Ocurio un error");*/
                        alert(e);
                        $("#btn-c").html("ENVIAR");
                    }
                });

            });

            //Trabajo
            $("#formulario-T").on("submit", function (e){
                e.preventDefault();

                $.ajax({
                    url: "/trabajo",
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    beforeSend: function (){
                        $("#btn-c").append(`
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    `);
                    },
                    success: function(response){
                        if(response['ok']==true){
                            alert(response['msg']);
                            $("#btn-c").html("ENVIAR");
                        }else{
                            alert("Ocurrio un error vuelva a intentarlo");
                            $("#btn-c").html("ENVIAR");
                        }
                    },
                    error: function(e){
                        /*alert("Ocurio un error");*/
                        alert(e['msg']);
                        $("#btn-c").html("ENVIAR");
                    }
                });

            });
        });
    </script>
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/contactanos.css') }}">
@endpush
