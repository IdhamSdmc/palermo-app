<footer class="footer-container" id="footer">
    <div class="footer">
        <div class="content">
            <form action="#" class="footer-form">
                <div class="logo">
                    <img src="{{ asset('assets/imgs/logo_white.svg') }}" alt="palermo-logo">
                </div>
                <h2>EL SIGUIENTE PASO HACIA LA TRANSFORMACIÓN DIGITAL</h2>
                <p>Llena el formulario y nos pondremos en contacto</p>
                <div class="form">
                    <input type="text" placeholder="NOMBRE Y APELLIDO" autocomplete="none">
                    <input type="text" placeholder="EMPRESA" autocomplete="none">
                    <input type="email" placeholder="CORREO" autocomplete="none">
                    <input type="text" placeholder="TELÉFONO DE CONTACTO" autocomplete="none">
                    <button type="submit">ENVIAR</button>
                    <div class="input-check">
                        <input type="checkbox" class="w-auto" id="check">
                        <label for="check">Acepto términos y condiciones</label>
                    </div>
                </div>
            </form>
            <div class="footer-links">
                <div class="content">
                    <div class="redes">
                        <h5>REDES SOCIALES</h5>
                        <div>
                            <a href="https://www.facebook.com/grupopalermope" class="facebook ml-2">
                                <img src="assets/imgs/resources/facebook.svg" alt="">
                            </a>
                            <a href="https://www.linkedin.com/company/grupo-palermo-peru/" class="linkedin">
                                <img src="assets/imgs/resources/in.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="enlaces-container">
                        <h5>ENLACES DE INTERÉS</h5>
                        <div class="grupo-enlaces">
                            <div class="enlaces">
                                <a href="">Oportunidad Laboral</a>
                                <a href="">contacto@grupopalermo.pe</a>
                                <a href="">(01) 620 6025</a>
                            </div>
                            <div class="enlaces">
                                <a href="">Terminos y condiciones</a>
                                <a href="">Política de cookies</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="subfooter d-flex flex-column justify-content-center align-items-center">
            <span class="">Grupo Palermo</span>
            <span class="">Todos los derechos reservados © {{ date('Y') }}</span>
        </div>
    </div>
</footer>
