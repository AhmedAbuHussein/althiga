@extends('layouts.app')

@section('title', 'Contact Us')

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
            <h1>@lang('app.ContactUs')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'contact-us']) }}">@lang('app.ContactUs')</a></li>
            </ul>
        </div>
    </div>
    <!-- Page Title END -->

    <!-- Contact Boxes START -->
    <div class="section-block-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="contact-box">
                        <i class="fa fa-phone-square"></i>
                        <h4>يسعدنا تواصلك</h4>
                        <span dir="ltr">(+966) 9200 26 1 26</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="contact-box">
                        <i class="fa fa-map"></i>
                        <h4><a target="_blank"
                                href="https://www.google.com/maps/place/Al+Thiga+Training+Institute/@21.6014207,39.1506358,15z/data=!4m5!3m4!1s0x0:0xa5d3b3c924aa53c1!8m2!3d21.6014207!4d39.1506358">
                                @lang('contacts.Locate_us')
                            </a>
                        </h4>
                        <span>جدة-حي السلامة2-قرية الراجحي النموذجية</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="contact-box">
                        <i class="fa fa-envelope"></i>
                        <h4>@lang('contacts.Have_Any_Inquiries')</h4>
                        <span><a style="text-decoration: underline" href="mailto:info@althiga.net?subject=Wesbite%20Contact">info@althiga.net</a></span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="contact-box">
                        <i class="fa fa-chalkboard-teacher"></i>
                        <h4>للتسجيل في الدورات</h4>
                        <span dir="ltr">(+966) 56 475 8140</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Boxes END -->

@endsection

@section('footer')
    @parent
@endsection
