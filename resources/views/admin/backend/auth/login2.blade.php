<!DOCTYPE html>
<html lang="en">
<head>
    <title>Iniciar Sesion | Bienvenido</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{asset('assets/imgs/resources/favicon.ico')}}"/>
    <link href="{!! url('backend/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{!! url('backend/css/util.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! url('backend/css/main.css') !!}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="{{ route('signin') }}" autocomplete="off" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<span class="login100-form-title p-b-26">
						ADMINISTRACIÓN Web Palermo
					</span>
                    <span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Correo valido contiene: correo@dominio.com">
                    <input class="input100" type="text" id="email" name="email">
                    <span class="focus-input100" data-placeholder="Correo"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Ingresar contraseña">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="password" id="password">
                    <span class="focus-input100" data-placeholder="Contraseña"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            Iniciar Sesion
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115">
						<span class="txt1">
							Olvido su contraseña?
						</span>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>
<!-- jQuery 2.1.3 -->
<script src="{!! url('backend/plugins/jQuery/jQuery-2.1.3.min.js') !!}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{!! url('backend/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>

<script src="{!! url('backend/js/main.js') !!}"></script>

</body>
</html>
