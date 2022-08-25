@extends('layouts.app')
@section('content')
    <section class="form-contacto">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>A solo un clic
                        de la transformación
                        tecnológica</h2>
                    <p>Llena el formulario y conoce las soluciones
                        que tenemos para tu organización.</p>
                </div>
                <div class="col">
                    <h2>Contáctanos</h2>
                    <form action="#">
                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <input class="input2" type="text" name="name" placeholder="NOMBRE Y APELLIDO">
                            <span class="focus-input2" data-placeholder="NAME"></span>
                        </div>
                        <div class="wrap-input2 validate-input" data-validate="empresa is required">
                            <input class="input2" type="text" name="empresa" placeholder="EMPRESA">
                            <span class="focus-input2" data-placeholder="NAME"></span>
                        </div>
                        <div class="wrap-input2 validate-input" data-validate="Correo is required">
                            <input class="input2" type="email" name="name" placeholder="CORREO">
                            <span class="focus-input2" data-placeholder="CORREO"></span>
                        </div>
                        <div class="wrap-input2 validate-input" data-validate="Teléfono is required">
                            <input class="input2" type="text" name="telefono_contacto" placeholder="TELÉFONO DE CONTACTO">
                            <span class="focus-input2" data-placeholder="TELEFONO"></span>
                        </div>
                        <button class="btn-enviar">ENVIAR</button>
                        <br><br>
                        <input class="term" type="checkbox" name="term_cond" id="term_cond">
                        <label class="term" for="term_cond">Acepto términos y condiciones</label>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="laboral" class="form-trabajo">
        <div class="container">
            <form action="#">
                <div class="wrap-input2 validate-input" data-validate="Name is required">
                    <input class="input2" type="text" name="name" placeholder="NOMBRE Y APELLIDO">
                    <span class="focus-input2" data-placeholder="NAME"></span>
                </div>
                <div class="wrap-input2 validate-input" data-validate="empresa is required">
                    <input class="input2" type="text" name="empresa" placeholder="EMPRESA">
                    <span class="focus-input2" data-placeholder="NAME"></span>
                </div>
                <div class="wrap-input2 validate-input" data-validate="Correo is required">
                    <input class="input2" type="email" name="name" placeholder="CORREO">
                    <span class="focus-input2" data-placeholder="CORREO"></span>
                </div>
                <div class="wrap-input2 validate-input" data-validate="Teléfono is required">
                    <input class="input2" type="text" name="telefono_contacto" placeholder="TELÉFONO DE CONTACTO">
                    <span class="focus-input2" data-placeholder="TELEFONO"></span>
                </div>
                <button class="btn-enviar">ENVIAR</button>
                <br><br>
                <input class="term" type="checkbox" name="term_cond" id="term_cond">
                <label class="term" for="term_cond">Acepto términos y condiciones</label>
            </form>
        </div>
    </section>
@endsection
