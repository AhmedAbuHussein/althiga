@extends('layouts.app')

@section('title', 'Pictures for Courses')

@section('app')
    @parent
@endsection

@php
$dir = app()->isLocale('en') ? 'left' : 'right';
@endphp

@section('content')

    <!-- Slider START -->
    <div class="swiper-main-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/1.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/2.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/3.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/4.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/5.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/6.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/7.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/8.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/9.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/10.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/11.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/12.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/13.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/14.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/15.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/16.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/17.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/18.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/19.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/20.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/21.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/22.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/23.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/24.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/25.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/26.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/27.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/28.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/29.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/30.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/31.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/32.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/33.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/34.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/35.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/36.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/37.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/38.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/39.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/40.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/41.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/42.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/43.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/44.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/45.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/46.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/47.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/48.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/49.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/50.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/51.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/52.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/53.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/54.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/55.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/56.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/57.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/58.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/pics-for-courses/59.JPG') }})"></div>

        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- Slider END -->

@endsection

@section('footer')
    @parent
@endsection
