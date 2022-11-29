@extends('layouts.app')

@section('title', 'Accounting for non-Accountants')

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
            <h1>@lang('courses.Accounting_for_nonAccountants')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">@lang('domains.Financial_Admin_Courses')</a>
                </li>
                <li><a
                        href="{{ route('routeName', ['id' => 'accounting-for-nonaccountants']) }}">@lang('courses.Accounting_for_nonAccountants')</a>
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
                            <p>إكتساب المشاركين المهارات اللازمة في فهم الأساليب والمفاهيم المالية الأساسية وكيفية استخدامها
                                في قراءة وتحليل وتفسير البيانات المالية والحسابات.
                            </p>
                            <h4>مخرجات الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>إكتشاف ماهية المحاسبة وأهدافها وإفتراضيتها الأساسية.
                                </li>
                                <li><i class="fa fa-check-square-o"></i>التعرف على أنواع الحسابات وإكتشاف نظرية القيد
                                    المزدوج.</li>
                                <li><i class="fa fa-check-square-o"></i>التعرف على عناصر النظام المحاسبي وكيفية تحديد
                                    العمليات المالية.</li>
                                <li><i class="fa fa-check-square-o"></i>إكتشاف أنواع ميزان المراجعة وطرق إعداده.</li>
                                <li><i class="fa fa-check-square-o"></i>كيفية اعداد قائمة المركز المالي.</li>
                                <li><i class="fa fa-check-square-o"></i>كيفية اعداد قائمة التدفقات النقدية وأهميتها
                                    ومكونتها.</li>
                                <li><i class="fa fa-check-square-o"></i>كيفية اعداد أنواع قيود التسويات.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>تعريف المحاسبة.</li>
                                <li><i class="fa fa-check-square-o"></i>أهداف المحاسبة.</li>
                                <li><i class="fa fa-check-square-o"></i>الخصائص الأساسية.</li>
                                <li><i class="fa fa-check-square-o"></i>الافتراضات المحاسبية.</li>
                                <li><i class="fa fa-check-square-o"></i>الوحدة المحاسبية.</li>
                                <li><i class="fa fa-check-square-o"></i>الفترة المحاسبية.</li>
                                <li><i class="fa fa-check-square-o"></i>الوحدة النقدية.</li>
                                <li><i class="fa fa-check-square-o"></i>المبادئ المحاسبية.</li>
                                <li><i class="fa fa-check-square-o"></i>التكلفة التاريخية.</li>
                                <li><i class="fa fa-check-square-o"></i>المقابلة.</li>
                                <li><i class="fa fa-check-square-o"></i>الثبات.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211662131</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>3 أيام / 15 ساعة</li>
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
