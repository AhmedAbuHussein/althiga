@extends('layouts.app')

@section('title', 'The Art of Customer Service')

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
            <h1>@lang('courses.The_Art_of_Customer_Service')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">@lang('domains.Financial_Admin_Courses')</a>
                </li>
                <li><a
                        href="{{ route('routeName', ['id' => 'the-art-of-customer-service']) }}">@lang('courses.The_Art_of_Customer_Service')</a>
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
                            <p>هذا البرنامج التدريبي يعرض مهارات التعامل مع جمهور عملاء الشركات، والمؤسسات والهيئات وطرق
                                التعامل معهم.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>العاملين في مجال خدمة العملاء.</li>
                                <li><i class="fa fa-check-square-o"></i>العاملين في مجال التسويق والمبيعات.</li>
                                <li><i class="fa fa-check-square-o"></i>كل من يعمل في مجال البيع أو خدمات العملاء.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>الذين يحققون النجاح في الخدمة.</li>
                                <li><i class="fa fa-check-square-o"></i>الذين يفشلون في خدمة العملاء.</li>
                                <li><i class="fa fa-check-square-o"></i>ماذا تعني العناية بالعملاء؟</li>
                                <li><i class="fa fa-check-square-o"></i>تعريف الخدمة المتميزة.</li>
                                <li><i class="fa fa-check-square-o"></i>متى يتوقف العميل بالتعامل مع المنشأة.</li>
                                <li><i class="fa fa-check-square-o"></i>كيف يكون العميل غير سعيد من التعامل معك.</li>
                                <li><i class="fa fa-check-square-o"></i>كيف تقاس جودة أداء الخدمة.</li>
                                <li><i class="fa fa-check-square-o"></i>مبادئ العناية بالعملاء.</li>
                                <li><i class="fa fa-check-square-o"></i>فن الاستقبال.</li>
                                <li><i class="fa fa-check-square-o"></i>متطلبات مهارات التعامل مع الآخرين.</li>
                                <li><i class="fa fa-check-square-o"></i>المفاهيم الأساسية للسلوك الإنساني.</li>
                                <li><i class="fa fa-check-square-o"></i>العوامل المؤثرة في السلوك الإنساني.</li>
                                <li><i class="fa fa-check-square-o"></i>الإدراك وأثره على عملية الاتصال.</li>
                                <li><i class="fa fa-check-square-o"></i>أركان وعناصر الاتصال.</li>
                                <li><i class="fa fa-check-square-o"></i>كيف تقوم بالاتصال الفعال مع العملاء.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211635134</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>3 ايام / 16 ساعة</li>
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
