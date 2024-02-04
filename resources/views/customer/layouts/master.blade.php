<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>Bufe</title>
    <link rel="icon" type="image/png" href="{{ asset('customer/assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/jquery.exzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/assets/css/responsive.css') }}">
    <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>

<body>

    <!--=============================
        TOPBAR START
    ==============================-->
    <section class="fp__topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8">
                    <ul class="fp__topbar_info d-flex flex-wrap">
                        <li><a href="mailto:example@gmail.com"><i class="fas fa-envelope"></i> leulsolm7@gmail.com</a>
                        </li>
                        <li><a href="callto:123456789"><i class="fas fa-phone-alt"></i> +251932599064</a></li>
                    </ul>
                </div>
                <div class="col-xl-6 col-md-4 d-none d-md-block">
                    <ul class="topbar_icon d-flex flex-wrap">
                        <li><a href="https://github.com/leulsm"><i class="fab fa-github"></i></a> </li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                        <li><a href="https://twitter.com/leulsolm"><i class="fab fa-twitter"></i></a> </li>
                        <li><a href="https://www.linkedin.com/in/leul-solomon-link/"><i
                                    class="fab fa-linkedin-in"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TOPBAR END
    ==============================-->


    <!--=============================
        MENU START
    ==============================-->
    @include('customer.layouts.menu')
    <!--=============================
        MENU END
    ==============================-->

    @yield('content')

    <!--=============================
        FOOTER START
    ==============================-->
    @include('customer.layouts.footer')
    <!--=============================
        FOOTER END
    ==============================-->

    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="fp__scroll_btn">
        go to top
    </div>
    <!--=============================
        SCROLL BUTTON END
    ==============================-->


    <!--jquery library js-->
    <script src="{{ asset('customer/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('customer/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('customer/assets/js/Font-Awesome.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('customer/assets/js/slick.min.js') }}"></script>
    <!-- isotop js -->
    <script src="{{ asset('customer/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- simplyCountdownjs -->
    <script src="{{ asset('customer/assets/js/simplyCountdown.js') }}"></script>
    <!-- counter up js -->
    <script src="{{ asset('customer/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('customer/assets/js/jquery.countup.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('customer/assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- venobox js -->
    <script src="{{ asset('customer/assets/js/venobox.min.js') }}"></script>
    <!-- sticky sidebar js -->
    <script src="{{ asset('customer/assets/js/sticky_sidebar.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('customer/assets/js/wow.min.js') }}"></script>
    <!-- ex zoom js -->
    <script src="{{ asset('customer/assets/js/jquery.exzoom.js') }}"></script>
    <script src="{{ asset('customer/assets/js/toastr.min.js') }}"></script>

    <!--main/custom js-->
    <script src="{{ asset('customer/assets/js/main.js') }}"></script>
    <script>
        toastr.options.progressBar = true;
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script>
</body>

</html>
