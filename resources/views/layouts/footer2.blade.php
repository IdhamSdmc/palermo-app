<footer class="footer-container" id="footer">
    <div class="footer">
        <div class="content">
            <form class="footer-form" id="formulario">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="logo">
                    <img src="{{ asset('assets/imgs/logo_white.svg') }}" alt="palermo-logo">
                </div>
                <h2>EL SIGUIENTE PASO HACIA LA TRANSFORMACIÓN DIGITAL</h2>
                <p>Llena el formulario y nos pondremos en contacto</p>
                <div class="form">
                    <input type="text" name="cliente" placeholder="NOMBRE Y APELLIDO" autocomplete="none">
                    <input type="text" name="empresa" placeholder="EMPRESA" autocomplete="none">
                    <input type="email" name="correo" placeholder="CORREO" autocomplete="none">
                    <input type="number" name="telefono" placeholder="TELÉFONO DE CONTACTO" autocomplete="none">
                    <button type="submit" id="btn-enviar">ENVIAR</button>
                    <div class="input-check">
                        <input type="checkbox" class="w-auto" id="check" required>
                        <label for="check">Acepto términos y condiciones</label>
                    </div>
                </div>
            </form>
            <div class="footer-links">
                <div class="content">
                    <div class="redes">
                        <h5>REDES SOCIALES</h5>
                        <div>
                            <a href="https://www.facebook.com/grupopalermope" class="facebook ml-2" target="_blank">
                                <img src="assets/imgs/resources/facebook.svg" alt="">
                            </a>
                            <a href="https://www.linkedin.com/company/grupo-palermo-peru/" class="linkedin" target="_blank">
                                <img src="assets/imgs/resources/in.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="enlaces-container">
                        <h5>ENLACES DE INTERÉS</h5>
                        <div class="grupo-enlaces">
                            <div class="enlaces">
                                <a href="/contactanos/#work" target="_blank">Oportunidad Laboral</a>
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
@push("js")
<script !src="">
    $(document).ready(function () {
        $("#formulario").on("submit", function (e){
            e.preventDefault();
            console.log($(this).serialize());
            $.ajax({
                url: "/mail",
                method: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function(response){
                    alert(response['msg']);
                },
                error: function(e){
                    /*alert("Ocurio un error");*/
                    alert(e);
                }
            });

        });
    });
</script>
@endpush

