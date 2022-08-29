<!-- ======= Footer ======= -->
<footer id="footer" >
    <div class="footer-top " style="background-image: url('assets/imgs/resources/patron derecho.svg'); background-repeat: no-repeat;background-position: right center; background-size: 20%; background-position-y: 100%">
        <div class="container-fluid" style="background-image: url('assets/imgs/resources/patron izquierdo.svg'); background-repeat: no-repeat;background-position-x: 5%; background-size: contain">
            <div class="row justify-content-center">

                <div class="col-lg-5 col-md-5" >
                    <div class="footer-info ">
                        <img src="{{asset('assets/imgs/logo_white.svg')}}" class="img-fluid w-50 mb-2" alt="">
                        <h3 class="f-left">EL SIGUIENTE PASO HACIA LA TRANSFORMACIÓN DIGITAL</h3>
                        <h4 class="col-6">Llena el formulario y nos pondremos en contacto</h4>
                    </div>

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

                <div class="col-lg-3 col-md-3 col-sm-12 col-12 d-flex align-items-center justify-content-right flex-column">
                    <div class="footer-info2 text-right m-auto">
                        <div class="redes">
                            <h3>REDES SOCIALES</h3>
                            <div class=" mt-3 mb-5">
                                <a href="https://www.facebook.com/grupopalermope" class="facebook ml-2"><img src="assets/imgs/resources/facebook.svg" alt=""></a>
                                <a href="https://www.linkedin.com/company/grupo-palermo-peru/" class="linkedin"><img
                                        src="assets/imgs/resources/in.svg" alt=""></a>
                            </div>
                        </div>

                        <div class="footer-flex">
                            <h3>ENLACES DE INTERÉS</h3>
                            <div>
                                <a href="/contactanos/#work" target="_blank">Oportunidad Laboral</a>
                                <a href="">contacto@grupopalermo.pe</a>
                                <a href="">(01) 620 6025</a>
                            </div>
                            <div>
                                <a href="">Terminos y condiciones</a>
                                <a href="">Política de cookies</a>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright der">
            <p>Grupo Palermo</p>
            <p>Todos los derechos reservados &copy; 2022</p>
        </div>
    </div>
</footer><!-- End Footer -->
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
@endpush
