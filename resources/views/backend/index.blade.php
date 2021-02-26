<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/icon/shield.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

    @yield('css')

    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    @yield('extra_css')

    <!-- modernizr css -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloader area start -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- preloader area end -->
        <!-- page container area start -->
        <div class="page-container">
            <!-- sidebar menu area start -->
            <x-backend.sidebar/>
            <!-- sidebar menu area end -->
            <!-- main content area start -->
            <div class="main-content">
                <!-- header area start -->
                <x-backend.header/>
                <!-- header area end -->
                <!-- page title area start -->
                @yield('content')
            </div>
            <!-- main content area end -->
            <!-- footer area start-->
            <x-backend.footer/>
            <!-- footer area end-->
        </div>
        <!-- page container area end -->

        <!-- jquery latest version -->
        <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
        <!-- bootstrap 4 js -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

        @yield('js')
        <!-- others plugins -->
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>

        @yield('extra_js')
    </body>

    </html>
