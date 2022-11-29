@extends('layouts.app')

@section('title', 'Safety Team Manager Refreshment')

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
            <h1>@lang('courses.Safety_Team_Manager_Refreshment')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'safety-team-manager-refreshment']) }}">@lang('courses.Safety_Team_Manager_Refreshment')</a>
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
                            <p>نظراً لمهام مدير السلامة المشار إليها بلائحة الدفاع المدني فقد تم تصميم البرنامج بما يتوافق
                                مع تلك المهام والمسؤوليات لتضمن تنفيذها بالطريقة الصحيحة كما تضمن توحيد آليات التنفيذ وشكل
                                التقارير الناتجة عن هذه الأعمال ويتضمن البرنامج التالي: تم تصميم الدورة التنشيطية من اجل
                                تزويد مدير السلامة بكل المعلومات والمستجدات التي حدث في السلامة على المستوى الوطني والدولي
                                والتي تساعده في تطوير ادارة السلامة في العمل وتساهم في المحافظة على سلامة العاملين
                                والممتلكات والبيئة.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مدراء السلامة / مسئولي السلامة / اخصائي السلامة
                                    والحاصلين على دورة مسئول السلامة المهنية.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>نظام ادارة السلامة والقيادة والمسئولية.</li>
                                <li><i class="fa fa-check-square-o"></i>التطورات التي حصلت على التشريعات الوطنية ولوائح
                                    الدفاع المدني والمعاير الدولية وانظمة الجودة الخاصة بالسلامة المهنية.</li>
                                <li><i class="fa fa-check-square-o"></i>التعرف على الطرق الحديثة في طرق الوقاية من مخاطر العمل.</li>
                                <li><i class="fa fa-check-square-o"></i>التعرف على أحدث الطرق والاساليب في طرق الوقاية والمكافحة وانظمة الانذار.</li>
                                <li><i class="fa fa-check-square-o"></i>تطوير خطط الطوارئ (الاطفاء؛ الإخلاء؛ الإنقاذ).</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211643518</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>25 ساعة / 5 أيام</li>
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
