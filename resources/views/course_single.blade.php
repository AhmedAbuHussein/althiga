@extends('layouts.app')

@section('title', $course->title)

@section('app')
    @parent
@endsection

@php
$dir = app()->isLocale('en') ? 'left' : 'right';
@endphp

@section('content')

    <!-- Page Title START -->
    <div class="page-title-section" style="background-image: url({{ asset('web/img/sub-pages-background.jpg') }});">
        <div class="container">
            <h1>{{ $course->title }}</h1>
            <ul class="fa">
                <li><a href="{{ route('index') }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('services.show', ['slug' => optional($course->category)->slug]) }}">{{ optional($course->category)->title }}</a></li>
                <li><a
                        href="#">{{ $course->title }}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Page Title END -->

    <div class="section-block">
        <div class="container">
            <div class="project-single">
                <div class="project-single-text">
                    <div class="row">
                        <!-- Left Side Start -->
                        <div class="col-md-8 col-sm-8 col-12">
                            <h4>@lang('app.course_title')</h4>
                            <p>{{ $course->details }}</p>

                            @if ($course->title2)
                                <h4>{{ $course->title2 }}</h4>
                            @endif

                            @if ($course->details2)
                                <p>{{ $course->details2 }}</p>
                            @endif

                            @if ($course->targets->count())
                                <h4>@lang('app.target_peopel')</h4>
                                <ul>
                                    @foreach ($course->targets as $item)
                                        <li><i class="fa fa-check-square-o"></i>{{ $item->title }}</li>
                                    @endforeach
                                </ul>
                                <br />
                            @endif
                            
                            <h4>@lang('app.course_content')</h4>
                            <ul>
                                @foreach ($course->contents as $item)
                                    <li><i class="fa fa-check-square-o"></i>{{ $item->title }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>@lang('app.course_info')</h4>
                            <div class="project-single-info">
                                <ul>
                                    @if ($course->accreditation_num)
                                    <li><i style="font-weight: 500">@lang('app.tvtc')</i>{{ $course->accreditation_num }}</li>
                                    @endif

                                    @if ($course->audience)
                                    <li><i style="font-weight: 500">@lang('app.Audience')</i>{{ $course->audience }}</li>
                                    @endif

                                    @if ($course->hour_per_day || $course->duration)
                                    <li><i style="font-weight: 500">@lang('app.course_duration')</i>
                                        @if ($course->duration)
                                            {{ __('app.day', ['num'=> $course->duration]) }}
                                        @endif
                                        @if ($course->hour_per_day)     
                                        / 
                                        {{ __('app.hours', ['num'=> $course->hour_per_day * $course->duration]) }}</li>
                                        @endif
                                    @endif
                                    @if ($course->certification)
                                    <li><i style="font-weight: 500">@lang('app.certification'):</i>{{ $course->certification }}</li>
                                    @endif
                                    @if ($course->languages)
                                    <li><i style="font-weight: 500">@lang('app.languages'):</i>{{ __('app.'.$course->languages) }}</li>
                                    @endif

                                    @if ($course->show_single_price == "0")
                                        <li><i style="font-weight: 500">@lang('app.show_single_price'):</i>{{ $course->price_role }}</li>
                                    @else
                                        <li>
                                            <i style="font-weight: 500">@lang('app.show_single_price'):</i>
                                            @if ($course->discount_price)
                                                <del>{{ $course->price }} @lang('app.SAR')</del>
                                                <span>{{ $course->discount_price }} @lang('app.SAR')</span>
                                            @else
                                                <span>{{ $course->price }} @lang('app.SAR')</span>
                                            @endif
                                        </li>
                                    @endif

                                    @if ($course->show_group_price == "0")
                                        <li><i style="font-weight: 500">@lang('app.show_group_price'):</i>{{ $course->group_price_role }}</li>
                                    @else
                                        <li>
                                            <i style="font-weight: 500">@lang('app.show_group_price'):</i>
                                            @if ($course->discount_group_price)
                                                <del>{{ $course->group_price }} @lang('app.SAR')</del>
                                                <span>{{ $course->discount_group_price }} @lang('app.SAR')</span>
                                            @else
                                                <span>{{ $course->group_price }} @lang('app.SAR')</span>
                                            @endif
                                        </li>
                                    @endif
                                    @if ($course->tags->count())
                                    <li><i style="font-weight: 500">@lang('app.tags'):</i>{{ implode(", ", $course->tags->pluck('title')->toArray()) }}</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <!-- Right Side End -->
                    </div>
                    @if ($course->fileUrl)
                        <!-- Download Button START -->
                        <a href="{{ $course->fileUrl }}" download>
                            <div class="download-file-button download-file-button-aramco clearfix">
                                <h5>@lang('app.Download the Registration Form')
                                    <span>(.{{ Str::after(substr($course->register_form_file, -6), ".") }})</span>
                                </h5>
                                <i class="fa fa-file-word-o"></i>
                            </div>
                        </a>
                        <!-- Download Button END -->
                        <br />
                    @endif

                    @if ($course->requirements)
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="ul-container">
                                    <h4>@lang('app.Registration requirements')</h4>
                                    {!! $course->requirements !!}
                                </div>
                            </div>
                        </div>
                    @endif
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
        .download-file-button-aramco i{
            float: left;
        }
        .ul-container ul li{
            padding: 0;
            list-style-type: none;
            padding-right: 20px;
            position: relative;
            text-align: justify;
        }
        .ul-container > ul > li:before{
            content: "";
            display: inline-block;
            position: absolute;
            right: 0;
            top: 5px;
        }
    </style>
@endpush