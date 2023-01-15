@extends('layouts.app')

@section('title', 'Our Services')

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
                <li><a href="#">@lang('Services')</a></li>
            </ul>
        </div>
    </div>
    <!-- Page Title END -->


    <!-- Service Single START -->
    <div class="section-block">
        <div class="container">
            <div class="row">
                <!-- Left Side START -->
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="services-single-left-box">

                        <!-- Vertical Menu START -->
                        <div class="services-single-left-heading">
                            <h5>@lang('Domains_Courses')</h5>
                        </div>
                        <div class="services-single-menu mt-10">
                            <ul>
                                @foreach ($items as $i=>$item)
                                    <li><a data-opener="#{{ $item->slug }}" class="taber @if($i == 0) services-active @endif" href="#{{ $item->slug }}">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Vertical Menu END -->
                    </div>
                </div>
                <!-- Left Side END -->

                <!-- Right Side START -->
                <div class="col-md-9 col-sm-8 col-12">
                    @foreach ($items as $i=>$item)
                    <div class="services-single-right @if($i > 0) d-none @endif" id="{{ $item->slug }}">
                        <div class="text-content-big mt-20">
                            <p>{{ $item->text }}</p>
                        </div>

                        @if ($item->targets_training->count() || $item->targets_advisory->count())
                        <div class="row mt-30">
                            @if ($item->targets_training->count())
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="pr-15-md">
                                        <div class="section-single-heading">
                                            <h4>@lang('Training_Services')</h4>
                                        </div>
                                        <ul class="primary-list mt-35">
                                            @foreach ($item->targets_training as $training)
                                            <li class="d-flex align-items-center">
                                                <i class="fa fa-check"></i>
                                                <p class="m-0">{!! detectURL($training->title) !!}</p>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            @if ($item->targets_advisory->count())
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="section-single-heading">
                                        <h4>@lang('Consultation_Services')</h4>
                                    </div>
                                    <ul class="primary-list mt-35">
                                        @foreach ($item->targets_advisory as $training)
                                        <li class="d-flex align-items-center">
                                            <i class="fa fa-check"></i>
                                            <p class="m-0">{!! detectURL($training->title) !!}</p>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        @endif
                    </div>
                    @endforeach
                    
                </div>
                <!-- Right Side END -->
            </div>
        </div>
    </div>
    <!-- Service Single END -->

@endsection

@section('footer')
    @parent
@endsection

@push('css')
    <style>
        .taber.active{

        }
    </style>
@endpush

@push('js')
    <script>
        $('.services-single-menu').on('click', '.taber', function(event){
            event.preventDefault();
            $(this).addClass('services-active').parent().siblings('li').children('a').removeClass('services-active')

            let tab = $(this).data('opener');
            $(tab).removeClass('d-none').siblings('').addClass('d-none');
        })
    </script>
@endpush