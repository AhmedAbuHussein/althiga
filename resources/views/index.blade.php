@extends('layouts.app')

@section('title', 'Home')

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
            @foreach ($slider as $i => $item)
                <!-- Slide {{ $i }} Start -->
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
                                @if ($item->link)
                                    <div class="animated fadeInUp mt-25">
                                        <a href="{{ $item->link }}" class="primary-button button-md">
                                            <i class="fa fa-cloud-download"></i> @lang('show')
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
                <!-- Slide {{ $i }} End -->
            @endforeach
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- Slider END -->

    <!-- Feature Boxes Section START -->
    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder">
                <span>@lang('ATI')</span>
                <h3>@lang('Explore_Our_Training_Domains')</h3>
                <div class="section-heading-line"></div>
            </div>
            <div class="row mt-60">
                @foreach ($categories as $item)
                    <div class="col-12 col-sm-4 col-md-4">
                        <div class="feature-flex-square">
                            <div class="clearfix">
                                <div class="feature-flex-square-icon">
                                    <img style="max-width: 85%" src="{{ $item->url }}" alt="icon">
                                </div>
                                <div class="feature-flex-square-content">
                                    <h4>
                                        <a
                                            href="{{ route('services.show', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                                    </h4>
                                    <p>{{ Str::words($item->text, 8) }}</p>
                                    <a href="{{ route('services.show', ['slug' => $item->slug]) }}"
                                        class="feature-flex-square-content-button fa">@lang('Learn_More')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Feature Boxes Section END -->

    <!-- Info Section START -->
    <div class="section-block-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-12">
                    <div class="pr-30-md">
                        <div class="section-heading">
                            <h4>{{ $about->title }}</h4>
                        </div>
                        <div class="section-heading-line-right"></div>
                        <div class="text-content-big mt-20">
                            <p style="text-align: justify">
                                {{ $about->description }}
                            </p>
                            <p style="text-align: justify">
                                {{ $about->details }}
                            </p>
                        </div>
                        <div class="row mt-20">
                            <div class="col-md-6">
                                <ul class="primary-list">
                                    @foreach (_splite_by_chuncks($about->targets, 2, 0) as $item)
                                        <li><i class="fa fa-check-square"></i>{{ $item->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="primary-list">
                                    @foreach (_splite_by_chuncks($about->targets, 2, 1) as $item)
                                        <li><i class="fa fa-check-square"></i>{{ $item->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-12">
                    <img loading="lazy" src="{{ $about->url }}" class="mt-15-xs" alt="img">
                </div>
            </div>
        </div>
    </div>
    <!-- Info Section END -->

    <!-- Team Members START -->
    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder">
                <span>@lang('Meet_Our_Team')</span>
                <h3>@lang('We_Are_Team_Of_Professionals')</h3>
                <div class="section-heading-line"></div>
                <p>@lang('Team_Description')</p>
            </div>
            <div class="row mt-50">
                <div class="owl-carousel owl-theme" id="team-grid">
                    @foreach ($team as $item)
                        <div class="team-member p-0 m-3 min-h-625px">
                            <div class="team-member-img">
                                <img loading="lazy" src="{{ $item->url }}">
                            </div>
                            <div class="team-member-text">
                                <h4>{{ $item->name }}</h4>
                                <span>{{ $item->title }}</span>
                                <p style="font-size: 15px;">{{ Str::words($item->bio, 35, '') }}</p>
                                <div class="d-flex justify-content-center">
                                    <ul>
                                        @if (!is_null($item->facebook))<li><a href="{{ $item->facebook }}"><i class="fa fa-facebook-f"></i></a></li> @endif
                                        @if (!is_null($item->twitter))<li><a href="{{ $item->twitter }}"><i class="fa fa-twitter"></i></a></li> @endif
                                        @if (!is_null($item->instagram))<li><a href="{{ $item->instagram }}"><i class="fa fa-instagram"></i></a></li> @endif
                                        @if (!is_null($item->youtube))<li><a href="{{ $item->youtube }}"><i class="fa fa-youtube"></i></a></li> @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- Team Members END -->

    <!-- Video Section START -->
    <div class="video-section">
        <div class="video-area" id="video-area">
            <div class="player" id="video-play"
                data-property="{videoURL:'https://www.youtube.com/watch?v=buBvqw6G3WU', containment:'#video-area', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:55, opacity:1, quality:'low',}">
            </div>
            <div class="video-overlay">
                <div class="video-content">
                    <div class="section-heading center-holder white-color">
                        <h2><strong>@lang('Our_Values')</strong></h2>
                        <h4>{{ optional($settings->where('key', 'our_values_' . app()->getLocale('en'))->first())->value }}
                        </h4>

                        <button data-toggle="modal" data-target="#subscribeModal"
                            class="primary-button button-md mt-10">@lang('subscribe')</button>


                        <!-- Modal -->
                        <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog"
                            aria-labelledby="subscribeModalLabel" aria-hidden="true">
                            <div class="modal-dialog" style="width: 500px;" role="document">
                                <div class="modal-content"
                                    style="background: url('{{ asset('web/img/bg.jpg') }}') center; border-radius: 30px;">
                                    <div class="modal-body">
                                        <form action="{{ route('subscribe') }}" method="POST">
                                            @csrf
                                            <div class="form-group pt-2">
                                                <input type="email" name="email" required placeholder="@lang('email')" class="form-control"
                                                    style="border-radius: 20px; padding:5px 10px;">
                                            </div>
                                            <div class="form-group">
                                                <select name="course_id" required class="form-control"
                                                    style="border-radius: 20px; padding:5px 10px;">
                                                    <option value="0">@lang('subscribe all')</option>
                                                    @foreach ($subscribtes as $item)
                                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn btn-warning btn-icon ml-2"
                                                    data-dismiss="modal"><i class="fa fa-times"></i>
                                                </button>
                                                <button type="submit" class="btn btn-success btn-icon">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Video Section END -->



    <!-- Latest News Section START -->
    <div class="section-block-grey">
        <div class="container">
            <div class="section-heading">
                <h4>@lang('Popular_Courses')</h4>
                <div class="section-heading-line-right"></div>
            </div>
            <div class="row mt-40">
                <div class="owl-carousel owl-theme" id="blog-grid">
                    @foreach ($courses as $item)
                        <div class="blog-grid-simple h-100">
                            <h4>
                                <a href="{{ route('courses.show', ['slug' => $item->slug]) }}">
                                    <i class="fa"></i>&nbsp; {{ $item->title }}
                                </a>
                            </h4>
                            <p dir="{{ $dir }}" style="font-size: 14px; text-align: justify">
                                {{ Str::words($item->details, 45) }}
                            </p>
                            <div class="blog-grid-simple-content">
                                <div class="row blog-grid-simple-date">
                                    <div class="col-2 pr-0">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="col-5 pl-0">
                                        @if (count($item->days ?? []))
                                            <h5 style="font-size: 12px;">
                                                @foreach ($item->days ?? [] as $day)
                                                    @lang('' . $day)
                                                @endforeach
                                                @lang('every week')
                                            </h5>
                                        @endif
                                    </div>
                                    <div class="col-5 left-holder">
                                        <a href="{{ route('courses.show', ['slug' => $item->slug]) }}"
                                            style="font-size: 12px;">@lang('Learn_More')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Latest News Section END -->

    <!-- Clients Carousel START -->
    <div class="section-clients border-top">
        <div class="container">
            <div class="section-heading center-holder">
                <h3>@lang('Valuable_Customers')</h3>
                <div class="section-heading-line"></div>
            </div>
            <div class="owl-carousel owl-theme clients" id="clients">
                @foreach ($partners as $item)
                    <div class="item">
                        @if ($item->link)
                            <a href="{{ $item->link }}">
                        @endif
                        <img alt="{{ $item->title }}" title="{{ $item->title }}" loading="lazy"
                            src="{{ $item->url }}">
                        @if ($item->link)
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Clients Carousel END -->
@endsection

@section('footer')
    @parent
@endsection

@push('js')
    <!-- Yotube Video Player -->
    <script src="{{ asset('web/js/jquery.mb.YTPlayer.min.js') }}"></script>
@endpush
@push('css')
    <style>
        .min-h-625px{
            min-height: 625px !important;
        }
        .team-member-text h4{
            font-size: 13pt;
        }
    </style>
@endpush