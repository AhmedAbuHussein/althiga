@extends('layouts.app')

@section('title', 'Crisis Management')

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
            <h1>@lang('courses.Crisis_Management')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">@lang('domains.Financial_Admin_Courses')</a>
                </li>
                <li><a href="{{ route('routeName', ['id' => 'crisis-management']) }}">@lang('courses.Crisis_Management')</a>
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
                            <p>إكساب المشاركين المعلومات والمهارات الأساسية اللازمة التى تمكنهم من إدارة الازمات بكفاءة و
                                فعالية ليتمكنوا من النجاح في تحقيق أهدافهم على مستوى الفرد والمؤسسة وتنمية قدراتهم ومهاراتهم
                                استقبال وإدارة الأزمات بالفكر العلمي والخبرات العلمية وكذلك توضيح اتجاهات المسارات المخنلفة
                                ومحاذيرها أمام صانعي ومتخذي القرارات وكذلك تنمية قدراتهم على التفكير الدقيق لإدراك بوادر
                                الازمات قبل حدوثها.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>العاملين في الإرشاد لقوافل الحج.</li>
                                <li><i class="fa fa-check-square-o"></i>العاملين في مجال الإشراف والإدارة الفندقية.</li>
                                <li><i class="fa fa-check-square-o"></i>المراقبين والمفتشين في كبرى الفنادق السياحية التي
                                    تستقبل الحجاج والسياح.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>معني الازمة.</li>
                                <li><i class="fa fa-check-square-o"></i>أسباب نشوء الأزمة.</li>
                                <li><i class="fa fa-check-square-o"></i>المراحل السابقة للأزمة.</li>
                                <li><i class="fa fa-check-square-o"></i>دورة حياة الأزمة.</li>
                                <li><i class="fa fa-check-square-o"></i>ردود أفعال الناس للأزمات.</li>
                                <li><i class="fa fa-check-square-o"></i>هل الازمات نقمة أم نعمة.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211656927</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>يومين  / 10 ساعات</li>
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
