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
                    <input type="email" name="correo" placeholder="CORREO" autocomplete="none" required>
                    <input type="number" name="telefono" placeholder="TELÉFONO DE CONTACTO" required autocomplete="none">
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
                            @foreach( $footers["redes"] as $red )
                            <a href="{{$red["url"]}}" ><img data-src="" {!! (($red["path"]) ? "src='".url($red["path"].$red["name"]) ."'" : null) !!} alt=""></a>

                            @endforeach
                        </div>
                    </div>
                    <div class="enlaces-container">
                        <h5>ENLACES DE INTERÉS</h5>
                        <div class="grupo-enlaces">
                            <div class="enlaces">
                                <a href="/contactanos/#work" target="_blank">Oportunidad Laboral</a>                                
                                <a href="">{!! $footers['correo']!!}</a>
                                <a href="tel:016206025">{!! $footers['telefono']!!}</a>
                            </div>
                            <div class="enlaces">
                                <a href="/terminos-condiciones" target="_blank">Terminos y condiciones</a>
                                <a href="/politicas-cookies" target="_blank">Política de cookies</a>
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
                beforeSend: function (){
                    $("#btn-enviar").append(`
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    `);
                },
                success: function(response){
                    if(response['ok']==true){
                        alert(response['msg']);
                        $("#btn-enviar").html("ENVIAR");
                    }else{
                        alert("Ocurrio un error vuelva a intentarlo");
                        $("#btn-enviar").html("ENVIAR");
                    }
                },
                error: function(e){
                    /*alert("Ocurio un error");*/
                    alert(e);
                    $("#btn-enviar").html("ENVIAR");
                }
            });

        });
    });
</script>
@endpush

