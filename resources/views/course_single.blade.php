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
    <div class="page-title-section" style="background-image: url({{ Storage::url($panners->where('key', 'course_panner')->pluck('value')->first()) }})">
        <div class="container">
            <h1>{{ $course->title }}</h1>
            <ul class="fa">
                <li><a href="{{ route('index') }}">@lang('Home')</a></li>
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
                @if ($course->image)
                    <div class="project-single-img">
                        <img loading="lazy" src="{{ $course->url }}" class="rounded-border" alt="ARAMCO">
                    </div>
                @endif
                <div class="project-single-text">
                    <div class="row">
                        <!-- Left Side Start -->
                        <div class="col-md-8 col-sm-8 col-12">
                            <h4>@lang('course_title')</h4>
                            <p>{{ $course->details }}</p>

                            @if ($course->title2)
                                <h4>{{ $course->title2 }}</h4>
                            @endif

                            @if ($course->details2)
                                <p>{{ $course->details2 }}</p>
                            @endif

                            @if ($course->targets->count())
                                <h4>@lang('target_peopel')</h4>
                                <ul>
                                    @foreach ($course->targets as $item)
                                        <li><i class="fa fa-check-square-o"></i>{{ $item->title }}</li>
                                    @endforeach
                                </ul>
                                <br />
                            @endif
                            
                            <h4>@lang('course_content')</h4>
                            <ul>
                                @foreach ($course->contents as $item)
                                    <li><i class="fa fa-check-square-o"></i>{{ $item->title }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>@lang('course_info')</h4>
                            <div class="project-single-info">
                                <ul>
                                    @if ($course->accreditation_num)
                                    <li><i style="font-weight: 500">@lang('tvtc')</i>{{ $course->accreditation_num }}</li>
                                    @endif

                                    @if ($course->audience)
                                    <li><i style="font-weight: 500">@lang('Audience')</i>{{ $course->audience }}</li>
                                    @endif

                                    @if ($course->hour_per_day || $course->duration)
                                    <li><i style="font-weight: 500">@lang('course_duration')</i>
                                        @if ($course->duration)
                                            {{ __('day', ['num'=> $course->duration]) }}
                                        @endif
                                        @if ($course->hour_per_day)     
                                        / 
                                        {{ __('hours', ['num'=> $course->hour_per_day * $course->duration]) }}</li>
                                        @endif
                                    @endif
                                    @if ($course->certification)
                                    <li><i style="font-weight: 500">@lang('certification'):</i>{{ $course->certification }}</li>
                                    @endif
                                    @if ($course->languages)
                                    <li><i style="font-weight: 500">@lang('languages'):</i>{{ __(''.$course->languages) }}</li>
                                    @endif

                                    @if ($course->show_single_price == "0")
                                        <li><i style="font-weight: 500">@lang('show_single_price'):</i>{{ $course->price_role }}</li>
                                    @else
                                        <li>
                                            <i style="font-weight: 500">@lang('show_single_price'):</i>
                                            @if ($course->discount_price)
                                                <del>{{ $course->price }} @lang('SAR')</del>
                                                <span>{{ $course->discount_price }} @lang('SAR')</span>
                                            @else
                                                <span>{{ $course->price }} @lang('SAR')</span>
                                            @endif
                                        </li>
                                    @endif

                                    @if ($course->show_group_price == "0")
                                        <li><i style="font-weight: 500">@lang('show_group_price'):</i>{{ $course->group_price_role }}</li>
                                    @else
                                        <li>
                                            <i style="font-weight: 500">@lang('show_group_price'):</i>
                                            @if ($course->discount_group_price)
                                                <del>{{ $course->group_price }} @lang('SAR')</del>
                                                <span>{{ $course->discount_group_price }} @lang('SAR')</span>
                                            @else
                                                <span>{{ $course->group_price }} @lang('SAR')</span>
                                            @endif
                                        </li>
                                    @endif
                                    @if ($course->tags->count())
                                    <li><i style="font-weight: 500">@lang('tags'):</i>{{ implode(", ", $course->tags->pluck('title')->toArray()) }}</li>
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
                                <h5>@lang('Download the Registration Form')
                                    <span>(.{{ Str::after(substr($course->register_form_file, -6), ".") }})</span>
                                </h5>
                                <i class="fa fa-file-word-o"></i>
                            </div>
                        </a>
                        <!-- Download Button END -->
                        <br />
                    @endif

                    @if ($course->requirements)
                    <br>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="ul-container">
                                    <h4>@lang('Registration requirements')</h4>
                                    {!! $course->requirements !!}
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($course->policy)
                    <br>
                        <div class="row mt-3">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="ul-container">
                                    <h4>@lang('WPR Pre-Requisite Course and Institute Policy')</h4>
                                    {!! $course->policy !!}
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($course->copyright)
                    <br>
                        <div class="row mt-3">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="ul-container">
                                    <h4>@lang('Copyright Intellectual Property Rights')</h4>
                                    {!! $course->copyright !!}
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
@if (app()->isLocale('ar'))
<style>
    .download-file-button-aramco i{
        float: left;
    }
    .ul-container ul li{
        list-style-type: none;
        padding-right: 20px;
        position: relative;
        text-align: justify;
    }
    .ul-container  ul li:before{
        font-family: "Font Awesome 5 Free";
        font-weight: 400;
        color: #f2a43a;
        font-size: 15px;
        padding-left: 10px;
        display: inline-block;
        position: absolute;
        right: 0;
        top: 5px;
    }

    .ul-container > ul > li:before{
        content: "\f14a";
    }
    .ul-container > ul li ul li:before{
        content: "\f192";
    }

    .page-title-section h1,
    .page-title-section ul li:after,
    .page-title-section ul li a
    {
        color: {{ $panners->where('key', 'course_panner_color')->pluck('value')->first() ?? '#FFF' }} !important;
    }

</style>
@else
<style>
    .download-file-button-aramco i{
        float: right;
    }
    .ul-container ul li{
        list-style-type: none;
        padding-left: 20px;
        position: relative;
        text-align: justify;
    }
    .ul-container  ul li:before{
        font-family: "Font Awesome 5 Free";
        font-weight: 400;
        color: #f2a43a;
        font-size: 15px;
        padding-right: 10px;
        display: inline-block;
        position: absolute;
        left: 0;
        top: 5px;
    }

    .ul-container > ul > li:before{
        content: "\f14a";
    }
    .ul-container > ul li ul li:before{
        content: "\f192";
    }

    .page-title-section h1,
    .page-title-section ul li:after,
    .page-title-section ul li a
    {
        color: {{ $panners->where('key', 'course_panner_color')->pluck('value')->first() ?? '#FFF' }} !important;
    }

</style>
@endif
    
@endpush