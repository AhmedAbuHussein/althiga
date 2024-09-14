@extends('layouts.app')

@section('title', 'Safety in Administrative Buildings')

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
            <h1>@lang('courses.Safety_in_Administrative_Buildings')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'safety-in-administrative-buildings']) }}">@lang('courses.Safety_in_Administrative_Buildings')</a>
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
                            <h4>مقدمة عن الدورة واهدافها</h4>
                            <p>نظراً لزيادة الحوادث والحرائق في المنشآت بأنواعها ( سواء الخدمية او التعليمية او الادارية )
                                والتي نراها بشكل متكرر ويكون السبب بشكل كبير هو قلة الوعي والاهمال و عدم التدريب على تطبيق
                                اشتراطات السلامة وإدارة خطط الطوارئ والازمات والكوارث وعدم وجود خطط للطوارئ فقد أصبح من
                                الضروري التدريب على هذه الامور والتعرف على أساسيات واشتراطات السلامة في المباني وكيفية
                                تطبيقها ووضع الخطط المناسبة ومعرفة أسباب الحوادث وإصابات العمل وكيفية تقليلها والحد منها
                                ومعرفة أخر إحصائيات الحوادث والكوارث وتحليلها والاستفادة منها.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>جميع الموظفين الإداريين والمعلمين في المنشآت
                                    التعليمية (الجامعات – الشركات - المصانع – المدارس).</li>
                                <li><i class="fa fa-check-square-o"></i>مدراء ومستشاري وأخصائي وخبراء هندسة السلامة والصحة
                                    المهنية.</li>
                                <li><i class="fa fa-check-square-o"></i>المهندسين بجميع تخصصاتهم -المسؤولين عن منع الخسائر،
                                    الحرائق، والأمن.</li>
                                <li><i class="fa fa-check-square-o"></i>مختصي الأمن والسلامة في الوزارات والجهات الحكومية
                                    والمنشآت الادارية.</li>
                                <li><i class="fa fa-check-square-o"></i>مختصي الأمن والسلامة في الفنادق والشقق المفروشة
                                    والمراكز التجارية والترفيهية والمستشفيات والمستودعات والشركات الإدارية والتجارية
                                    والمراكز الادارية والتجارية.</li>
                                <li><i class="fa fa-check-square-o"></i>المهندسين والاستشاريين في مكاتب الاستشارات الهندسية.
                                </li>
                                <li><i class="fa fa-check-square-o"></i>أفراد فريق مكافحة الحرائق.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مقدمة عن أهداف السلامة في المباني الإدارية.</li>
                                <li><i class="fa fa-check-square-o"></i>الاشتراطات الخاصة بالتجهيزات الإطفائية بالمبنى.</li>
                                <li><i class="fa fa-check-square-o"></i>التوعية والتدريب لشاغلي المبنى والتدريب على أجهزة
                                    الإطفاء (طفايات الحريق).</li>
                                <li><i class="fa fa-check-square-o"></i>التفتيش والمتابعة على اشتراطات وقاية المبنى من أخطار
                                    الحريق.</li>
                                <li><i class="fa fa-check-square-o"></i>التعريف بكيفية التصرف مع الإنذار الآلي والإطفاء
                                    التلقائي.</li>
                                <li><i class="fa fa-check-square-o"></i>تصميم وتنفيذ خطة الطوارئ والإخلاء بالمبنى.</li>
                                <li><i class="fa fa-check-square-o"></i>الاشتراطات الخاصة بتصميم وإنشاء المبنى.</li>
                                <li><i class="fa fa-check-square-o"></i>الاشتراطات الخاصة بمحتويات المبنى ومصادر الطاقة
                                    المستخدمة به.</li>
                                <li><i class="fa fa-check-square-o"></i>الاشتراطات العامة للتخزين.</li>
                                <li><i class="fa fa-check-square-o"></i>تأمين بيئة العمل للمباني الإدارية.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i> 21165823 </li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>4 أيام / 25 ساعة – 6 ساعات يوميا</li>
                                    <li><i style="font-weight: 500">الشهادة:</i>شهادة من المؤسسة العامة للتدريب التقني
                                        والمهني</li>
                                    <li><i style="font-weight: 500">لغة الدورة:</i>العربية</li>
                                    <li><i style="font-weight: 500">عرض السعر للأفراد</i>خصم التسجيل المبكر قبل موعد الدورة
                                        بمدة لا تقل عن 10 أيام</li>
                                    <li><i style="font-weight: 500">عرض السعر للمجموعات</i>خصم خاص للمجموعات والجهات حسب
                                        أعداد
                                        المشتركين</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Right Side End -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    @parent
@endsection
