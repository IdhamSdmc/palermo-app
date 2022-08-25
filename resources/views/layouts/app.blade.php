<!doctype html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T7GN4GQ');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Grupo Palermo</title>
    <meta name="description" content="PlaniSoft." />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/imgs/resources/favicon.ico')}}">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- Vendor CSS Files -->

    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    @stack('css')
</head>
<body>
    <div class="layout-inner">
        <div class="layout-container">
            @include('layouts.navbar')

            <div class="layout-content">
                <div class="container-fluid  flex-grow-1 container-p-y pt-5 " style="padding-left: 0; padding-right: 0">
                    @yield('content')
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>

    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    @stack('js')
</body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7GN4GQ"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</html>
