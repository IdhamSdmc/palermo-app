<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{url('/')}}" class="logo me-auto"><img src="{{ url($settings['path_logo'].$settings['file_name_logo']) }}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{url('/nosotros')}}" class="active">NOSOTROS</a></li>
                <li><a href="{{url('/soluciones')}}">SOLUCIONES</a></li>
                <li><a href="{{url('/productos')}}">PRODUCTOS</a></li>
                <li><a href="{{url('/articulos')}}">BLOG</a></li>

                <li><a href="{{url('/contactanos')}}" class="getstarted">CONTÁCTANOS</a></li>
                <li><a target="_blank" href="{{url('https://soporte.grupopalermo.pe')}}" class="soporte"><img src="{{asset('assets/imgs/soporte técnico.svg')}}" class="img-soporte"  alt=""></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
