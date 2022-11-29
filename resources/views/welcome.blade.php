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

            <!-- Slide 1 Start -->
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider1.png') }})">
                <div class="medium-overlay"></div>
                <div class="container">
                    <div class="slider-content {{ $dir }}-holder">
                        <h2 class="animated fadeInDown">
                            @lang('courses.Aramco_WPR')
                        </h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-12">
                                <p class="animated fadeInDown">@lang('course-det.WPR_Target') <br />
                                    @lang('course-det.WPR_Short')</p>
                            </div>
                        </div>
                        <div class="animated fadeInUp mt-25">
                            <a href="{{ route('WPRRegistrationDownload') }}" class="primary-button button-md"><i
                                    class="fa fa-cloud-download">
                                    @lang('course-det.WPR_Registration_Form')</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 1 End -->

            <!-- Slide 2 Start -->
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider2_.png') }})">
                <div class="medium-overlay"></div>
                <div class="container">
                    <div class="slider-content {{ $dir }}-holder">
                        <h2 class="animated fadeInDown">
                            @lang('app.ATI')
                        </h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-12">
                                <p class="animated fadeInDown">@lang('app.About_Desc')</p>
                            </div>
                        </div>
                        <div class="animated fadeInUp mt-30">
                            <a href="#contact" class="primary-button button-md">@lang('app.ContactUs')</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 End -->

            <!-- Slide 3 Start -->
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider2.png') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider3.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider4.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider5.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider6.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider7.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider8.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider9.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider10.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider11.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider12.JPG') }})"></div>
            <div class="swiper-slide" style="background-image:url({{ asset('web/img/slider13.JPG') }})"></div>
            <!-- Slide 4 End -->

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
                <span>@lang('app.ATI')</span>
                <h3>@lang('welcome.Explore_Our_Training_Domains')</h3>
                <div class="section-heading-line"></div>
            </div>
            <div class="row mt-60">
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-flex-square">
                        <div class="clearfix">
                            <div class="feature-flex-square-icon">
                                <i class="fa fa-hard-hat"></i>
                            </div>
                            <div class="feature-flex-square-content">
                                <h4><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH')</a>
                                </h4>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus bibendum, nunc ut
                                    hendrerit tempus.
                                </p> --}}
                                <a href="{{ route('routeName', ['id' => 'osh-courses']) }}"
                                    class="feature-flex-square-content-button fa">@lang('app.Learn_More')</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-flex-square">
                        <div class="clearfix">
                            <div class="feature-flex-square-icon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <div class="feature-flex-square-content">
                                <h4><a href="#">@lang('domains.Financial_Admin')</a></h4>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus bibendum, nunc ut
                                    hendrerit tempus.
                                </p> --}}
                                <a href="#" class="feature-flex-square-content-button fa">@lang('app.Learn_More')</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-flex-square">
                        <div class="clearfix">
                            <div class="feature-flex-square-icon">
                                <i class="fa fa-seedling"></i>
                            </div>
                            <div class="feature-flex-square-content">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'env-foodSafety-courses']) }}">@lang('domains.Env_FoodSafety_Courses')</a>
                                </h4>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus bibendum, nunc ut
                                    hendrerit tempus.
                                </p> --}}
                                <a href="{{ route('routeName', ['id' => 'env-foodSafety-courses']) }}"
                                    class="feature-flex-square-content-button fa">@lang('app.Learn_More')</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-flex-square">
                        <div class="clearfix">
                            <div class="feature-flex-square-icon">
                                <i class="fa fa-hotel"></i>
                            </div>
                            <div class="feature-flex-square-content">
                                <h4><a href="#">@lang('domains.Tourism_Hospitality')</a></h4>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus bibendum, nunc ut
                                    hendrerit tempus.
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-flex-square">
                        <div class="clearfix">
                            <div class="feature-flex-square-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="feature-flex-square-content">
                                <h4><a href="#">@lang('domains.Social_SelfDev')</a></h4>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus bibendum, nunc ut
                                    hendrerit tempus.
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-flex-square">
                        <div class="clearfix">
                            <div class="feature-flex-square-icon">
                                <i class="fa fa-balance-scale"></i>
                            </div>
                            <div class="feature-flex-square-content">
                                <h4><a href="#">@lang('domains.Legal')</a></h4>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus bibendum, nunc ut
                                    hendrerit tempus.
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Boxes Section END -->

    <!-- Info Section START -->
    <div class="section-block-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="pr-30-md">
                        <div class="section-heading">
                            <h4>@lang('app.Why_ATI')</h4>
                        </div>
                        <div class="section-heading-line-right"></div>
                        <div class="text-content-big mt-20">
                            <p style="text-align: justify">@lang('welcome.Why_ATI_Text')</p>
                        </div>
                        <div class="mt-20">
                            <ul class="primary-list">
                                <li><i class="fa fa-check-square"></i>@lang('welcome.Reason1')</li>
                                <li><i class="fa fa-check-square"></i>@lang('welcome.Reason2')</li>
                                <li><i class="fa fa-check-square"></i>@lang('welcome.Reason3')</li>
                                <li><i class="fa fa-check-square"></i>@lang('welcome.Reason4')</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <img src="{{ asset('web/img/Althiga_hand.png') }}" class="mt-15-xs" alt="img">
                </div>
            </div>
        </div>
    </div>
    <!-- Info Section END -->

    <!-- Team Members START -->
    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder">
                <span>@lang('welcome.Meet_Our_Team')</span>
                <h3>@lang('welcome.We_Are_Team_Of_Professionals')</h3>
                <div class="section-heading-line"></div>
                <p>@lang('welcome.Team_Description')</p>
            </div>
            <div class="row mt-50">
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="{{ asset('web/img/trainers/dr-yahya.bmp') }}">
                        </div>
                        <div class="team-member-text">
                            <h4>د . يحيي زكريا قناوي</h4>
                            <span>المجال المالي والإداري</span>
                            <p style="font-size: 15px;">دكتوراه إدارة الأعمال – التخصص "حوكمة الشركات" رسالة بعنوان "دور
                                الاليات الخمس في الحوكمة
                                لدعم التخطيط
                                الاستراتيجي في معالجة مشكلات انفصال الملكية عن الإدارة للشركات العائلية" دراسة تطبيقية علي
                                الشركات العائلية في المملكة
                                العربية السعودية.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-12">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="{{ asset('web/img/trainers/dr-bandar.jpg') }}">
                        </div>
                        <div class="team-member-text">
                            <h4>د. بندر عبد الله بارحيم</h4>
                            <span>مدرب الصحة والسلامة المهنية وخبير إدارة الكوارث والأزمات</span>
                            <p style="font-size: 13px;">مدرب معتمد في كلاً من: وزارة التربية والتعليم، هيئة الهلال الأحمر
                                السعودي، برنامج إسفير لإدارة الكوارث، الصحة العامة في الطوارئ والكوارث معتمد من المنظمة
                                العالمية للصليب والهلال الاحمر الدولي. متخصص طب الطوارئ وإدارة الكوارث، الإسعاف الجوي، دعم
                                الحياة المتقدم الجوي والعناية القلبية المتقدمة في الطوارئ.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-12">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="{{ asset('web/img/trainers/refaat.jpg') }}">
                        </div>
                        <div class="team-member-text">
                            <h4>م. رفعت بن عبد الله بن عبد الشكور باسروان</h4>
                            <span>خبير في السلامة والامن وإدارة الكوارث وإدارة التغيير</span>
                            <p style="font-size: 13px;">أكثر من 28 سنة خبرة عملية في قطاعات حكومية وشركات ومؤسسات ومجموعة
                                منوعة من الخبرات والقدرات التخطيطية والتطبيقية والاستشارية في عدة
                                مجالات مثل: إدارة الكوارث والأزمات، السلامة والصحة المهنية، استشارات التدريب والتطوير،
                                إدارة التغيير في المنظمات.</p>
                        </div>
                    </div>
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
                        <h2><strong>@lang('welcome.Our_Values')</strong></h2>
                        <h4>@lang('welcome.Our_Values_Text')</h4>
                        <a href="#" class="primary-button button-md mt-10">@lang('welcome.Register_Today')</a>
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
                <h4>@lang('welcome.Popular_Courses')</h4>
                <div class="section-heading-line-right"></div>
            </div>
            <div class="row mt-40">
                <div class="owl-carousel owl-theme" id="blog-grid">
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
    <!-- Latest News Section END -->

    <!-- Clients Carousel START -->
    <div class="section-clients border-top">
        <div class="container">
            <div class="section-heading center-holder">
                <h3>@lang('app.Valuable_Customers')</h3>
                <div class="section-heading-line"></div>
            </div>
            <div class="owl-carousel owl-theme clients" id="clients">
                <div class="item"><img src="{{ asset('web/img/clients/1.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/2.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/3.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/4.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/5.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/6.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/7.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/8.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/9.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/10.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/11.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/12.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/13.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/14.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/15.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/16.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/17.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/18.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/19.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/20.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/21.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/22.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/23.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/24.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/25.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/26.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/27.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/28.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/29.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/30.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/31.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/32.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/33.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/34.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/35.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/36.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/37.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/38.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/39.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/40.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/41.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/42.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/43.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/44.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/45.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/46.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/47.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/48.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/49.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/50.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/51.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/52.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/53.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/54.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/55.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/56.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/57.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/58.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/59.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/60.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/61.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/62.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/63.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/64.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/65.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/66.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/67.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/68.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/69.png') }}"></div>
                <div class="item"><img src="{{ asset('web/img/clients/70.png') }}"></div>
            </div>
        </div>
    </div>
    <!-- Clients Carousel END -->
@endsection

@section('footer')
    @parent
@endsection
