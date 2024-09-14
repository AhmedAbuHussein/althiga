@extends('layouts.app')

@section('title', 'Environment and Food Safety Courses')

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
            <h1>@lang('domains.Env_FoodSafety')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'food-management-and-safety-system-first-reviewer-iso22000-courses']) }}">@lang('domains.Env_FoodSafety_Courses')</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Page Title END -->

    <!-- Service Boxes START -->
    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder">
                <span>الدورات المتاحة في</span>
                <h3>@lang('domains.OSH')</h3>
                <div class="section-heading-line"></div>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore
                    et dolore magna aliqua.</p> --}}
            </div>

            <div class="row mt-50">

                <div class="col-md-12 col-sm-12 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number-1">
                                <h5>@lang('no.1')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'food-management-and-safety-system-first-reviewer-iso22000']) }}">@lang('courses.Food_Management_and_Safety_System_First_Reviewer_ISO22000')</a>
                                </h4>
                            </div>
                        </div>
                        <p>يتضمن هذا البرنامج التدريب على كيفية انشاء نظام لإدارة سلامة الغذاء و مراجعات الطرف الاول والطرف
                            الثاني والطرف الثالث لنظام إدارة سلامة الغذاء طبقاً للمواصفة الدولية أيزو 22000 التي يجب أن
                            تلتزم بتطبيقها أي منشأة في سلسلة الغذاء لضمان سلامة ما تقوم بإنتاجه من منتجات غذائية وصلاحيتها
                            للاستهلاك الآدمي.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'food-management-and-safety-system-first-reviewer-iso22000']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Boxes END -->

@endsection

@section('footer')
    @parent
@endsection
