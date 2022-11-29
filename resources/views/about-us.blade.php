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
            <h1>@lang('app.About')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'about-us']) }}">@lang('app.AboutUs')</a></li>
            </ul>
        </div>
    </div>
    <!-- Page Title END -->


    <!-- Info & Feature Section START -->
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <img src="{{ asset('web/img/Althiga_hand.png') }}" alt="img">
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="pl-30-md">
                        <div class="section-heading">
                            <h4>@lang('app.WelcomeTo')</h4>
                        </div>
                        <div class="section-heading-line-right"></div>
                        <div class="text-content-big mt-20">
                            <p>@lang('app.About_Long_Desc')</p>
                        </div>
                        <div class="row mt-20">
                            <div class="col-md-6">
                                <ul class="primary-list">
                                    <li><i class="fa fa-caret-left"></i>@lang('domains.OSH')</li>
                                    <li><i class="fa fa-caret-left"></i>@lang('domains.Env_FoodSafety')</li>
                                    <li><i class="fa fa-caret-left"></i>@lang('domains.Tourism_Hospitality')</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="primary-list">
                                    <li><i class="fa fa-caret-left"></i>@lang('domains.Financial_Admin')</li>
                                    <li><i class="fa fa-caret-left"></i>@lang('domains.Social_SelfDev')</li>
                                    <li><i class="fa fa-caret-left"></i>@lang('domains.Legal')</li>
                                </ul>
                            </div>
                            <div class="mt-35">
                                <a href="#" class="primary-button button-sm mb-15-xs">@lang('app.ContactUs')</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Boxes START -->
                <div class="row mt-35">
                    <div class="col-md-4 col-sm-4 col-12">
                        <div class="feature-flex-square">
                            <div class="clearfix">
                                <div class="feature-flex-square-icon">
                                    <i class="fa fa-history"></i>
                                </div>
                                <div class="feature-flex-square-content">
                                    <h4><a href="#">@lang('about.Our_History')</a></h4>
                                    <p>@lang('about.Our_History_Text')</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-12">
                        <div class="feature-flex-square">
                            <div class="clearfix">
                                <div class="feature-flex-square-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <div class="feature-flex-square-content">
                                    <h4><a href="#">@lang('about.Our_Vision')</a></h4>
                                    <p>@lang('about.Our_Vision_Text')</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-12">
                        <div class="feature-flex-square">
                            <div class="clearfix">
                                <div class="feature-flex-square-icon">
                                    {{-- <i class="icon-clock"></i>
                                    --}}
                                    <i class="fa fa-bullseye"></i>
                                </div>
                                <div class="feature-flex-square-content">
                                    <h4><a href="#">@lang('about.Our_Message')</a></h4>
                                    <p>@lang('about.Our_Message_Text')</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <span>@lang('about.ATI_Succuess')</span>
                            <h3>@lang('about.Achieve_Your_Successes_With_Us')</h3>
                            <div class="section-heading-line-right"></div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-12">
                                <div class="counter-box white-color">
                                    <h4 class="countup">350164</h4>
                                    <p>@lang('about.Trainees_Count')</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-12">
                                <div class="counter-box white-color">
                                    <h4 class="countup">12040</h4>
                                    <p>@lang('about.Held_Courses_Count')</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-12">
                                <div class="counter-box white-color">
                                    <h4 class="countup">1386</h4>
                                    <p>@lang('about.Contracted_Comp_Count')</p>
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
                                    الاستراتيجي في معالجة مشكلات انفصال الملكية عن الإدارة للشركات العائلية" دراسة تطبيقية
                                    علي
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
                                <p style="font-size: 13px;">مدرب معتمد في كلاً من: وزارة التربية والتعليم، هيئة الهلال
                                    الأحمر
                                    السعودي، برنامج إسفير لإدارة الكوارث، الصحة العامة في الطوارئ والكوارث معتمد من المنظمة
                                    العالمية للصليب والهلال الاحمر الدولي. متخصص طب الطوارئ وإدارة الكوارث، الإسعاف الجوي،
                                    دعم
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
                                <h4>م. رفعت بن عبد الله بن عبد الشك ور باسروان</h4>
                                <span>خبير في السلامة والامن وإدارة الكوارث وإدارة التغيير</span>
                                <p style="font-size: 13px;">أكثر من 28 سنة خبرة عملية في قطاعات حكومية وشركات ومؤسسات
                                    ومجموعة
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

        <!-- Testmonials START -->
        {{-- <div class="section-block">
            <div class="container">
                <div class="section-heading center-holder">
                    <span>@lang('about.ATI_Cust_Loyalty_Prog')</span>
                    <h4>@lang('about.What_Our_Clients_Say')</h4>
                    <div class="section-heading-line"></div>
                </div>
                <div class="row mt-50">
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="testmonial-box">
                            <div class="row">
                                <div class="col-2 pr-0">
                                    <i class="fa fa-user-circle fa-4x"></i>
                                </div>
                                <div class="col-10">
                                    <h5>سعيد الغامدي</h5>
                                    <span>مسؤول أمن وسلامة</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="testmonial-box">
                            <div class="row">
                                <div class="col-2 pr-0">
                                    <i class="fa fa-user-circle fa-4x"></i>
                                </div>
                                <div class="col-10">
                                    <h5>محمد عيد</h5>
                                    <span>مدير السلامة والصحة المهنية</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="testmonial-box">
                            <div class="row">
                                <div class="col-2 pr-0">
                                    <i class="fa fa-user-circle fa-4x"></i>
                                </div>
                                <div class="col-10">
                                    <h5>سعيد صالح</h5>
                                    <span>رئيس إدارة الجودة والبيئة والسلامة</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="testmonial-box">
                            <div class="row">
                                <div class="col-2 pr-0">
                                    <i class="fa fa-user-circle fa-4x"></i>
                                </div>
                                <div class="col-10">
                                    <h5>أنس العتيبي</h5>
                                    <span>إستشاري أول بيئة وسلامة غذاء</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Testmonials END -->

    </div>
@endsection

@section('footer')
    @parent
@endsection
