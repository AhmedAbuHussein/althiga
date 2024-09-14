@extends('layouts.app')

@section('title', 'Virtual Tour')

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
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/1.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/2.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/3.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/4.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/5.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/6.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/7.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/8.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/9.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/10.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/11.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/12.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/13.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/14.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/15.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/16.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/17.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/18.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/19.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/20.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/21.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/22.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/23.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/24.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/virtual-tour/25.JPG') }})"></div>
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
