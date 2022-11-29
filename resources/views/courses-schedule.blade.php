@extends('layouts.app')

@section('title', 'Courses Schedule')

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
            <h1>@lang('app.Courses_Schedule')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'courses-schedule']) }}">@lang('app.Courses_Schedule')</a></li>
            </ul>
        </div>
    </div>
    <!-- Page Title END -->

    <!-- Blog Grid START -->
    <div class="section-block-grey">
        <div class="container">
            <div class="section-heading">
                <h4>@lang('app.Courses_Schedule')</h4>
                <div class="section-heading-line-right"></div>
            </div>
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="blog-grid-simple">
                        <h4><a href="{{ route('routeName', ['id' => 'aramco-wpr']) }}"><i class="fa"></i>&nbsp;@lang('courses.Aramco_WPR')</a></h4>
                        <p dir="ltr" style="font-size: 14px; text-align: justify">Work permit receivers and designated
                            representatives shall have sufficient knowledge and experience, be capable of recognizing
                            hazards and be competent in the requirements of this instruction.</p>
                        <div class="blog-grid-simple-content">
                            <div class="row blog-grid-simple-date">
                                <div class="col-2 pr-0">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="col-5 pl-0">
                                    <h5 style="font-size: 12px;">@lang('course-det.EverySunday')</h5>
                                </div>
                                <div class="col-5 left-holder">
                                    <a href="{{ route('routeName', ['id' => 'aramco-wpr']) }}" style="font-size: 12px;">@lang('app.Learn_More')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="blog-grid-simple">
                        <h4><a
                                href="{{ route('routeName', ['id' => 'safety-observer-in-accordance-with-approved-regulations']) }}"><i class="fa"></i>&nbsp;@lang('courses.Safety_Observer_in_Accordance_with_Approved_Regulations')</a>
                        </h4>
                        <p style="font-size: 14px; text-align: justify">توي البرنامج التدريبي على اهم المواضيع التي يجب ان
                            يتعرف عليها مراقب السلامة والمهارات التي يجب ان يكتسبها المتدرب. والتي تضمن تصرفه السليم وتقديم
                            المساعدة في حالات الحرائق او حالات الطوارئ او وقوع حوادث العمل.</p>
                        <div class="blog-grid-simple-content">
                            <div class="row blog-grid-simple-date">
                                <div class="col-2 pr-0">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="col-5 pl-0">
                                    <h5 style="font-size: 12px;">@lang('course-det.EveryWednesday')</h5>
                                </div>
                                <div class="col-5 left-holder">
                                    <a href="{{ route('routeName', ['id' => 'safety-observer-in-accordance-with-approved-regulations']) }}"
                                        style="font-size: 12px;">@lang('app.Learn_More')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="blog-grid-simple">
                        <h4><a
                                href="{{ route('routeName', ['id' => 'osh-principles-general-industries']) }}"><i class="fa"></i>&nbsp;@lang('courses.OSH_Principles_General_Industries')</a>
                        </h4>
                        <p style="font-size: 14px; text-align: justify">تهدف هذه الدورة الى تحديد مسئوليات صاحب العمل
                            والعمال المعنيين بالسلامة والصحة المهنية،
                            التعرف على المخاطر المختلفة الناتجة من الاعمال وكيفية تجنبها والسيطرة عليها.</p>
                        <div class="blog-grid-simple-content">
                            <div class="row blog-grid-simple-date">
                                <div class="col-2 pr-0">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="col-5 pl-0">
                                    <h5 style="font-size: 12px;">@lang('course-det.EverySunday')</h5>
                                </div>
                                <div class="col-5 left-holder">
                                    <a href="{{ route('routeName', ['id' => 'osh-principles-general-industries']) }}"
                                        style="font-size: 13px;">@lang('app.Learn_More')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="blog-grid-simple">
                        <h4><a
                                href="{{ route('routeName', ['id' => 'strategic-planning']) }}"><i class="fa"></i>&nbsp;@lang('courses.Strategic_Planning')</a>
                        </h4>
                        <p style="font-size: 14px; text-align: justify">العالم حولنا يتغير بدرجة كبيرة جدا فهناك دول ظهرت
                            علي السطح وأصبحت لها مكانة كبيرة بينما
                            بالأمس القريب لم يكن لها هذا الدور واذا تتبعنا تلك الدول نجد انها بنيت تطورها علي مفهوم
                            التخطيط طويل الاجل.</p>
                        <div class="blog-grid-simple-content">
                            <div class="row blog-grid-simple-date">
                                <div class="col-2 pr-0">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="col-5 pl-0">
                                    <h5 style="font-size: 12px;">@lang('course-det.EveryTuesday')</h5>
                                </div>
                                <div class="col-5 left-holder">
                                    <a href="{{ route('routeName', ['id' => 'strategic-planning']) }}"
                                        style="font-size: 13px;">@lang('app.Learn_More')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="blog-grid-simple">
                        <h4><a
                                href="{{ route('routeName', ['id' => 'economic-feasibility-studies']) }}"><i class="fa"></i>&nbsp;@lang('courses.Economic_Feasibility_Studies')</a>
                        </h4>
                        <p style="font-size: 14px; text-align: justify">إلمام المتدرب بالمفاهيم الأساسية الأولية في إدارة
                            الموارد البشرية وكيفية تدريب وتنمية الموارد
                            البشرية العاملة داخل المنظمة.</p>
                        <div class="blog-grid-simple-content">
                            <div class="row blog-grid-simple-date">
                                <div class="col-2 pr-0">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="col-5 pl-0">
                                    <h5 style="font-size: 12px;">@lang('course-det.EveryMonday')</h5>
                                </div>
                                <div class="col-5 left-holder">
                                    <a href="{{ route('routeName', ['id' => 'economic-feasibility-studies']) }}"
                                        style="font-size: 13px;">@lang('app.Learn_More')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog Grid END -->

@endsection

@section('footer')
    @parent
@endsection
