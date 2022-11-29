@extends('layouts.app')

@section('title', 'HR Management')

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
            <h1>@lang('courses.HR_Management')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">@lang('domains.Financial_Admin_Courses')</a>
                </li>
                <li><a href="{{ route('routeName', ['id' => 'hr-management']) }}">@lang('courses.HR_Management')</a>
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
                            <p>إلمام المتدرب بالمفاهيم الأساسية الأولية في إدارة الموارد البشرية وكيفية تدريب وتنمية الموارد
                                البشرية العاملة داخل المنظمة.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>المهتمين في إدارة الموارد البشرية من الممارسين
                                    والأكاديميين.</li>
                                <li><i class="fa fa-check-square-o"></i>العاملين في القطاعين العام والخاص في ادارة الموارد
                                    البشرية وشئون الموظفين.</li>
                                <li><i class="fa fa-check-square-o"></i>الدارسين في مختلف التخصصات الإدارية.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>الاختبار القبلي.</li>
                                <li><i class="fa fa-check-square-o"></i>ماهية إدارة المواد البشرية.</li>
                                <li><i class="fa fa-check-square-o"></i>تحليل وتوصيف الوظائف.</li>
                                <li><i class="fa fa-check-square-o"></i>تخطيط الموارد البشرية.</li>
                                <li><i class="fa fa-check-square-o"></i>استقطاب واختيار الموارد البشرية.</li>
                                <li><i class="fa fa-check-square-o"></i>تدريب وتنمية الموارد البشرية.</li>
                                <li><i class="fa fa-check-square-o"></i>أجور العاملين.</li>
                                <li><i class="fa fa-check-square-o"></i>تحفيز العاملين.</li>
                                <li><i class="fa fa-check-square-o"></i>نقل وترقية العاملين.</li>
                                <li><i class="fa fa-check-square-o"></i>تقييم أداء العاملين.</li>
                                <li><i class="fa fa-check-square-o"></i>الاختبار البعدي.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211644233</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>4 أيام / 18 ساعة</li>
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
