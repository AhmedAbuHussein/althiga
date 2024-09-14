@extends('layouts.app')

@section('title', 'Safety Team Member Refreshment')

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
            <h1>@lang('courses.Safety_Team_Member_Refreshment')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'safety-team-member-refreshment']) }}">@lang('courses.Safety_Team_Member_Refreshment')</a>
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
                            <p>الهدف من الدورة هو تنشيط المعلومات والمهارات لدى فريق السلامة وحيث انه هو الاداة الفعالة
                                للمحافظة على نشر وتأكيد مفهوم وثقافة السلامة والعمل على تطبيق الشروط والتعليمات المتعلقة
                                بسلامة العاملين للمحافظة على الارواح وتقليل الاصابات ومنع الخسائر وتطبيق نظام ادارة السلامة
                                في جميع المنشآت.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>عضو فريق السلامة / فني السلامة / رجل السلامة /
                                    ضابط السلامة / مشرف السلامة والحاصل على
                                    دورة عضو فريق السلامة.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>خطط السلامة المهنية في المنشآت بعد تطويرها.</li>
                                <li><i class="fa fa-check-square-o"></i>ادارة وتقييم المخاطر.</li>
                                <li><i class="fa fa-check-square-o"></i>عمل نظام للسلامة خاص بالمقاولين والموردين وغيرهم.</li>
                                <li><i class="fa fa-check-square-o"></i>التحسين المستمر لعناصر نظام ادارة السلامة.</li>
                                <li><i class="fa fa-check-square-o"></i>انواع مخاطر بيئة العمل وتقيمها والطرق الحديثة للوقاية.</li>
                                <li><i class="fa fa-check-square-o"></i>انواع المخاطر الفيزيائية وتقيمها وطرق الوقاية.</li>
                                <li><i class="fa fa-check-square-o"></i>المخاطر الكيماوية وتقيمها وتحديد طرق الوقاية.</li>
                                <li><i class="fa fa-check-square-o"></i>المخاطر الميكانيكية وتقيمها وتحديد طرق الوقاية المناسبة.</li>
                                <li><i class="fa fa-check-square-o"></i>المخاطر البيولوجية وتقيمها وتحديد طرق الوقاية.</li>
                                <li><i class="fa fa-check-square-o"></i>توعية خطة الطوارئ بالمبنى وتأمين بيئة العمل.</li>
                                <li><i class="fa fa-check-square-o"></i>الانذار الالي والاطفاء التلقائي.</li>
                                <li><i class="fa fa-check-square-o"></i>تأمين بيئة العمل للمبانى الادارة.</li>
                                <li><i class="fa fa-check-square-o"></i>التحقيق في الحوادث بفاعلية.</li>
                                <li><i class="fa fa-check-square-o"></i>معدات الوقاية الشخصية PPE.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211653818</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>15 ساعة / 3 أيام</li>
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
