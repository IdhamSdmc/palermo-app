<header id="header" class="fixed-top d-flex align-items-center topbar-container">
    <nav class="topbar">
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('assets/imgs/logo_color.svg') }}" alt="palermo-logo">
        </a>
        <div id="navbar" class="navbar">
            <ul class="topbar-menu">
                <li class="topbar-item"><a href="{{ url('/nosotros') }}" class="active">NOSOTROS</a></li>
                <li class="topbar-item"><a href="{{ url('/soluciones') }}">SOLUCIONES</a></li>
                <li class="topbar-item"><a href="{{ url('/productos') }}">PRODUCTOS</a></li>
                <li class="topbar-item"><a href="{{ url('/articulos') }}">BLOG</a></li>

                <li class="topbar-item">
                    <a href="{{ url('/contactanos') }}" class="btn-topbar">CONTÁCTANOS</a>
                </li>
                <li class="topbar-item">
                    <a target="_blank" href="{{ url('https://soporte.grupopalermo.pe') }}" class="btn-soporte">
                        <img src="{{ asset('assets/imgs/soporte técnico.svg') }}" alt="">
                    </a>
                </li>
                {{-- <i class="bi bi-x close"></i> --}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            {{-- <i class="bi bi-list mobile-nav-toggle"></i> --}}
        </div>
    </nav>
</header>
