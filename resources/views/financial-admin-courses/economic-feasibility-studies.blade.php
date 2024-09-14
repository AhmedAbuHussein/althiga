@extends('layouts.app')

@section('title', 'Economic Feasibility Studies')

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
            <h1>@lang('courses.Economic_Feasibility_Studies')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">@lang('domains.Financial_Admin_Courses')</a>
                </li>
                <li><a
                        href="{{ route('routeName', ['id' => 'economic-feasibility-studies']) }}">@lang('courses.Economic_Feasibility_Studies')</a>
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
                                <li><i class="fa fa-check-square-o"></i>أصحاب المشاريع ومدراء الأعمال.</li>
                                <li><i class="fa fa-check-square-o"></i>الموظفون في المؤسسات التجارية وفي القطاع العام.</li>
                                <li><i class="fa fa-check-square-o"></i>الطلبة في المعاهد والجامعات.</li>
                                <li><i class="fa fa-check-square-o"></i>المهتمون من مختلف الشرائح.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>ان يتعرف المتدرب على مفهوم دراسة الجدوى.</li>
                                <li><i class="fa fa-check-square-o"></i>ان يكتسب المتدرب مهارات اختيار فكرة مشروعه.</li>
                                <li><i class="fa fa-check-square-o"></i>ان يتعرف المتدرب على الخطة التسويقية وعلاقاتها
                                    بدراسة الجدوى.</li>
                                <li><i class="fa fa-check-square-o"></i>ان يدرك المتدرب اهمية استراتيجيات السعر ودراسة
                                    الجدوى التسويقية.</li>
                                <li><i class="fa fa-check-square-o"></i>ان يتعرف المتدرب على مصادر التمويل الاستثماري وطريقة
                                    حساب مقاييس دراسة الجدوى المالية.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211678836</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>4 أيام / 12 ساعة</li>
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
