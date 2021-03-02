<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/icon/shield.png') }}">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/metisMenu.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/typography.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/default-css.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/styles.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="{{ asset('/') }}assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="{{ route('admin.login') }}" method="POST">
                    @csrf
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="inputEmail">Email address</label>
                            <input type="text" id="inputEmail" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                            <i class="ti-email"></i>
                            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-gp">
                            <label for="inputPassword">Password</label>
                            <input type="password" id="inputPassword" class="@error('email') is-invalid @enderror" name="password" required>
                            <i class="ti-lock"></i>
                            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Login <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->
</body>
<script src="{{ asset('/') }}assets/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="{{ asset('/') }}assets/js/popper.min.js"></script>
<script src="{{ asset('/') }}assets/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}assets/js/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}assets/js/metisMenu.min.js"></script>
<script src="{{ asset('/') }}assets/js/jquery.slimscroll.min.js"></script>
<script src="{{ asset('/') }}assets/js/jquery.slicknav.min.js"></script>

{{-- noty v2 alert --}}
<script src="{{ asset('assets/js/jquery.noty.packaged.js') }}"></script>
<!-- others plugins -->
<script src="{{ asset('/') }}assets/js/plugins.js"></script>
<script src="{{ asset('/') }}assets/js/scripts.js"></script>
<script>
    @if (session()->has('message'))
    noty({
        layout: 'topRight',
        theme: 'metroui', // or relax
        type: '{{ session('type') }}', // success, error, warning, information, notification
        text: '{{ session('message') }}', // [string|html] can be HTML or STRING

        dismissQueue: true, // [boolean] If you want to use queue feature set this true
        force: false, // [boolean] adds notification to the beginning of queue when set to true
        maxVisible: 5, // [integer] you can set max visible notification count for dismissQueue true option,

        template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',

        timeout: 3000, // [integer|boolean] delay for closing event in milliseconds. Set false for sticky notifications
        progressBar: true, // [boolean] - displays a progress bar

        animation: {
            open: {height: 'toggle'}, // or Animate.css class names like: 'animated bounceInLeft'
            close: {height: 'toggle'}, // or Animate.css class names like: 'animated bounceOutLeft'
            easing: 'swing',
            speed: 500 // opening & closing animation speed
        },
        closeWith: ['click'], // ['click', 'button', 'hover', 'backdrop'] // backdrop click will close all notifications

        modal: false, // [boolean] if true adds an overlay
        killer: false, // [boolean] if true closes all notifications and shows itself

        callback: {
            onShow: function() {},
            afterShow: function() {},
            onClose: function() {},
            afterClose: function() {},
            onCloseClick: function() {},
        },

        buttons: false // [boolean|array] an array of buttons, for creating confirmation dialogs.
    });
    @endif
</script>
</html>
