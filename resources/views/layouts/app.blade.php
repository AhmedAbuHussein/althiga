<!DOCTYPE html>
<html lang="{{ app()->getLocale('en') }}">
<head>
    @include('layouts.website.head')

    <style>
        .footer-recent-post-thumb{
            width: auto;
        }
        .footer-recent-post-thumb i{
            color: #ddd;
            font-size: 15pt
        }
    </style>
</head>

<body dir="{{ app()->isLocale('en') ? 'ltr' : 'rtl' }}">

    <!-- Preloader Start-->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- Preloader End -->

    @section('app') @include('layouts.website.header') @show

    @yield('content')

    @section('footer')
        @include('layouts.website.footer')
    @show
    <!-- Scroll to top button Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <!-- Scroll to top button End -->

    @include('layouts.website.scripts')

</body>

</html>
