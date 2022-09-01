<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesion | Bienvenido</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{!! url('backend/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{!! url('backend/css/AdminLTE.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{!! url('backend/plugins/iCheck/square/blue.css') !!}" rel="stylesheet" type="text/css" />
    {!! Html::style("assets/css/github-right.css") !!}
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form id="loginForm" action="{{ route('signin') }}" autocomplete="off" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="group form-group {{ $errors->first('email', 'has-error') }}">
                    <input onkeyup="this.value = this.value.replace(/[&$*<>]/g, '')" type="text" id="email" name="email" required value="{!! old('email') !!}">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="material">Correo</label>
                  </div>
                  <span class="help-block">{{ $errors->first('email', ':message') }}</span>

                  <div class="group form-group {{ $errors->first('password', 'has-error') }}">
                      <span id="icon-span" onclick="showPassword()" class="glyphicon glyphicon-eye-open icon-visibility" style="cursor: pointer;"></span>
                      <input id="password" type="password" name="password" required>
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label class="material">Contraseña</label>
                  </div>
                  <span class="help-block">{{ $errors->first('password', ':message') }}</span>

                  <input type="hidden" id="attemps" name="attemps" value="0">
                  <div id="captcha" class="form-group" style="display:none;text-align: center">
                    <div class="g-recaptcha" data-sitekey="6Lf5B0YUAAAAADoiUFizC-NMYd-OtAXgXEQqo9c-"></div>
                  </div>
                  {{$errors->first('email',':message')}}
                  <br>
                  <div class="row">
                    <div class="col-xs-5" style="padding-left:0px;padding-right:0px; font-size:14px;">
                      <input type="checkbox" class=""> Recordar Contraseña
                    </div>
                    <div class="col-xs-1">
                    </div>
                    <div class="col-xs-6" style="text-align:right;margin-left:20px;padding-left:0px; padding-right:0px; font-size:14px;">
                      <a href="{{ route('forgot-password') }}" class="text-link-color" id="forgot_pwd_title" style="margin-left:0px">
                        ¿Olvidaste tu Contraseña?
                      </a>
                    </div>

                  </div>
                  <br>
                  <input type="hidden" name="type_user" value="paciente">
                  <input type="submit"  class="btn btn-block btn-color" style="color: #e22715;border-radius: 4px !important; border: 1px solid; background-color: white" value="INICIAR SESIÓN">

        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div>

        <a href="#">I forgot my password</a><br>
        <a href="#" class="text-center">Register a new membership</a>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.3 -->
<script src="{!! url('backend/plugins/jQuery/jQuery-2.1.3.min.js') !!}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{!! url('backend/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{!! url('backend/plugins/iCheck/icheck.min.js') !!}" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
