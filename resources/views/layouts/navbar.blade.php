<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{url('/')}}" class="logo me-auto"><img src="{{asset('assets/imgs/logo_color.svg')}}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{url('/nosotros')}}" class="active">NOSOTROS</a></li>

                <!-- <li class="dropdown"><a href="#"><span>SERVICIOS</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>

                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                      <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                      </ul>
                    </li>
                  </ul>
                </li> -->
                <!-- <li><a href="services.html">NOSOTROS</a></li>
                <li><a href="services.html">PRODUCTOS</a></li>
                <li><a href="portfolio.html">BLOG</a></li> -->
                <li><a href="{{url('/servicios')}}">SERVICIOS</a></li>
                <li><a href="{{url('/productos')}}">PRODUCTOS</a></li>
                <li><a href="{{url('/blog')}}">BLOG</a></li>
                <!-- <li><a href="pricing.html">Pricing</a></li>
                <li><a href="blog.html">Blog</a></li>

                <li><a href="contact.html">Contact</a></li> -->
                <li><a href="{{url('/contactanos')}}" class="getstarted">CONTÁCTANOS</a></li>
                <li><a href="#"><img src="{{asset('assets/imgs/soporte técnico.svg')}}"  alt=""></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
