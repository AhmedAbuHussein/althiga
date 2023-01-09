<meta charset="utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('SEO.index')


    <?php $lang = app()->isLocale('en') ? '' : '_rtl'; ?>

    <link rel="stylesheet" href="{{ asset('web/css/bootstrap' . $lang . '.min.css') }}">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="{{ asset('web/css/font-awesome' . $lang . '.css') }}">

    <!-- Icomoon -->
    <link rel="stylesheet" href="{{ asset('web/css/icomoon' . $lang . '.css') }}">

    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('web/css/swiper' . $lang . '.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/slider' . $lang . '.css') }}">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('web/css/animate' . $lang . '.css') }}">

    <!-- Color Switcher -->
    <link rel="stylesheet" href="{{ asset('web/css/switcher' . $lang . '.css') }}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel' . $lang . '.css') }}">

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('web/css/default' . $lang . '.css') }}">
    <link rel="stylesheet" id="colors" href="{{ asset('web/css/styles' . $lang . '.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>

    <script src="https://kit.fontawesome.com/c013fd8535.js" crossorigin="anonymous"></script>

    @stack('css')