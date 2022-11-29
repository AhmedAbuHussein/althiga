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
            <h1>@lang('app.About')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'services']) }}">@lang('app.Services')</a></li>
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
                            <h5>@lang('app.Domains_Courses')</h5>
                        </div>
                        <div class="services-single-menu mt-10">
                            <ul>
                                <li><a href="#">@lang('domains.OSH')</a></li>
                                <li><a href="#">@lang('domains.Financial_Admin')</a></li>
                                <li><a href="#">@lang('domains.Env_FoodSafety')</a></li>
                                <li><a href="#">@lang('domains.Tourism_Hospitality')</a></li>
                                <li><a href="#">@lang('domains.Legal')</a></li>
                                <li><a href="#">@lang('domains.Social_SelfDev')</a></li>
                            </ul>
                        </div>
                        <!-- Vertical Menu END -->

                        <div class="services-single-left-heading mt-40">
                            <h4>@lang('contacts.Have_Any_Inquiries')</h4>
                        </div>
                        <ul class="primary-list mt-30">
                            <li><i class="fa fa-globe"></i>
                                <a style="text-decoration: underline; color: blue" target="_blank"
                                    href="https://www.google.com/maps/place/Al+Thiga+Training+Institute/@21.6014207,39.1506358,15z/data=!4m5!3m4!1s0x0:0xa5d3b3c924aa53c1!8m2!3d21.6014207!4d39.1506358">
                                    @lang('contacts.Locate_us')
                                </a>
                            </li>
                            <li dir="ltr">(+966) 9200 26 1 26<i class="fa fa-phone"></i></li>
                            <li><i class="fa fa-envelope-open"></i><a
                                    href="mailto:info@althiga.net?subject=Wesbite%20Contact"
                                    style="text-decoration: underline; color: blue">info@althiga.net</a>
                            <li>
                        </ul>
                    </div>
                </div>
                <!-- Left Side END -->

                <!-- Right Side START -->
                <div class="col-md-9 col-sm-8 col-12">
                    <div class="services-single-right">
                        <div class="text-content-big mt-20">
                            <p>@lang('services.Intro_Text')</p>
                        </div>

                        <div class="row mt-30">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="pr-15-md">
                                    <div class="section-single-heading">
                                        <h4>@lang('services.Training_Services')</h4>
                                    </div>
                                    <ul class="primary-list mt-35">
                                        <li><i class="fa fa-check"></i>@lang('services.Training_Needs_Analysis')</li>
                                        <li><i class="fa fa-check"></i>@lang('services.Job_Risk_Analysis')</li>
                                        <li><i class="fa fa-check"></i>@lang('services.Training_Solutions')</li>
                                        <li><i class="fa fa-check"></i>@lang('services.After_Training_Services')</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="section-single-heading">
                                    <h4>@lang('services.Consultation_Services')</h4>
                                </div>
                                <ul class="primary-list mt-35">
                                    <li><i class="fa fa-check"></i>@lang('services.Consultation_Services_Website')</li>
                                    <li style="text-align: center; text-decoration: underline;"><a style="color: blue"
                                            href="http://www.althiga.com">FAIZ ALTHIGA CONSULTING GROUP</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Download Button START -->
                        {{-- <a href="#">
                            <div class="download-file-button clearfix">
                                <h5>Download Our Services file <span>(zip)</span></h5>
                                <i class="fa fa-file-word-o"></i>
                            </div>
                        </a> --}}
                        <!-- Download Button END -->

                    </div>
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
