@extends('layouts.app')

@section('title', 'About Us')

@section('app')
    @parent
@endsection

@php
$dir = app()->isLocale('en') ? 'left' : 'right';
@endphp

@section('content')

    <!-- Page Title START -->
    <div class="page-title-section" style="background-image: url({{ asset('web/img/sub-pages-background.png') }});">
        <div class="container">
            <h1>@lang('About')</h1>
            <ul class="fa">
                <li><a href="{{ route('index') }}">@lang('Home')</a></li>
                <li><a href="#">@lang('AboutUs')</a></li>
            </ul>
        </div>
    </div>
    <!-- Page Title END -->


    <!-- Info & Feature Section START -->
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <img loading="lazy" src="{{ $about->url }}" class="mt-15-xs" alt="img">
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="pl-30-md">
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

                <!-- Feature Boxes START -->
                <div class="row mt-35">
                    @foreach ($extra as $item)    
                        <div class="col-md-4 col-sm-4 col-12">
                            <div class="feature-flex-square">
                                <div class="clearfix">
                                    <div class="feature-flex-square-icon">
                                        <img src="{{ $item->url }}" alt="icon">
                                    </div>
                                    <div class="feature-flex-square-content">
                                        <h4><a href="#">{{ $item->title }}</a></h4>
                                        <p>{{ $item->text }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Feature Boxes END -->
            </div>
        </div>
        <!-- Info & Feature Section END -->


        <!-- Counters Section START -->
        <div class="section-block-parallax section-md"
            style="background-image: url({{ asset('web/img/sub-pages-mid-background.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-12">
                        <div class="section-heading white-color mt-15">
                            <span>@lang('ATI_Succuess')</span>
                            <h3>@lang('Achieve_Your_Successes_With_Us')</h3>
                            <div class="section-heading-line-right"></div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-12">
                                <div class="counter-box white-color">
                                    <h4 class="countup">{{ $settings->where('key', 'trainers_count')->pluck('value')->first() ?? 0 }}</h4>
                                    <p>@lang('Trainees_Count')</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-12">
                                <div class="counter-box white-color">
                                    <h4 class="countup">{{ $settings->where('key', 'courses_count')->pluck('value')->first() ?? 0 }}</h4>
                                    <p>@lang('Held_Courses_Count')</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-12">
                                <div class="counter-box white-color">
                                    <h4 class="countup">{{ $settings->where('key', 'contracts_count')->pluck('value')->first() ?? 0 }}</h4>
                                    <p>@lang('Contracted_Comp_Count')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counters Section END -->


        <!-- Team Members START -->
        <div class="section-block-grey">
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
    </div>
@endsection

@section('footer')
    @parent
@endsection

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