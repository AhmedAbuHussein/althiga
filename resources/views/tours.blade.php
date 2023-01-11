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
            @foreach ($items as $item)
                <div class="swiper-slide" style="background-image:url({{ $item->url }})">
                    @if ($item->title)
                    <div class="medium-overlay"></div>
                    <div class="container">
                        <div class="slider-content {{ $dir }}-holder">
                            <h2 class="animated fadeInDown">
                                {{ $item->title }}
                            </h2>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-12">
                                    <p class="animated fadeInDown">{!! $item->text !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endif
                </div>
            @endforeach
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
