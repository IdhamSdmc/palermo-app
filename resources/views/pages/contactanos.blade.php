@extends('layouts.app')
@section('content')
    <section class="form-contacto">
        <div class="container">
            <div class="row">
                <div class="col" style="margin-top:100px" >
                    <h2>A solo un clic<br>
                        de la transformación<br>
                        tecnológica</h2>
                    <p>Llena el formulario y conoce las soluciones<br>
                        que tenemos para tu organización.</p>
                </div>
                <div class="col" style="margin-top:50px" >
                    <h2 class="titulo">Contáctanos</h2>
                    <form action="#">
                        <div class="wrap-input3 validate-input" data-validate="Name is required">
                            <input class="input3" type="text" name="name" placeholder="NOMBRE Y APELLIDO">
                            <span class="focus-input3" data-placeholder="NAME"></span>
                        </div>
                        <div class="wrap-input3 validate-input" data-validate="empresa is required">
                            <input class="input3" type="text" name="empresa" placeholder="EMPRESA">
                            <span class="focus-input3" data-placeholder="NAME"></span>
                        </div>
                        <div class="wrap-input3 validate-input" data-validate="Correo is required">
                            <input class="input3" type="email" name="name" placeholder="CORREO">
                            <span class="focus-input3" data-placeholder="CORREO"></span>
                        </div>
                        <div class="wrap-input3 validate-input" data-validate="Teléfono is required">
                            <input class="input3" type="text" name="telefono_contacto" placeholder="TELÉFONO DE CONTACTO">
                            <span class="focus-input3" data-placeholder="TELEFONO"></span>
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
            <h2>TRABAJA CON NOSOTROS</h2>
            <form action="#" class="formulario">
                <div class="wrap-input4 validate-input" data-validate="Name is required">
                    <input class="input4" type="text" name="name" placeholder="NOMBRE Y APELLIDO">
                    <span class="focus-input4" data-placeholder="NAME"></span>
                </div>
                <div class="wrap-input4 validate-input" data-validate="empresa is required">
                    <input class="input4" type="text" name="area" placeholder="AREA DONDE TRABAJAR">
                    <span class="focus-input4" data-placeholder="NAME"></span>
                </div>
                <div class="wrap-input4 validate-input" data-validate="Correo is required">
                    <input class="input4" type="email" name="correo" placeholder="CORREO">
                    <span class="focus-input4" data-placeholder="CORREO"></span>
                </div>
                <div class="wrap-input4 validate-input" data-validate="Teléfono is required">
                    <input class="input4" type="text" name="numero_contacto" placeholder="NÚMERO DE CONTACTO">
                    <span class="focus-input4" data-placeholder="NÚMERO DE CONTACTO"></span>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn-curiculum">SUBIR CURRICULUM  VITAE</button>
                   
                    <button class="btn-enviar">ENVIAR</button>

                </div>
                <label><input class="term" type="checkbox" name="term_cond" id="term_cond"> Acepto términos y condiciones</label>
            
            </form>
        </div>
    </section>
@endsection
