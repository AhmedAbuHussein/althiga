@extends('layouts.app')

@section('title', 'Sales and Marketing')

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
            <h1>@lang('courses.Sales_and_Marketing')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">@lang('domains.Financial_Admin_Courses')</a>
                </li>
                <li><a
                        href="{{ route('routeName', ['id' => 'sales-and-marketing']) }}">@lang('courses.Sales_and_Marketing')</a>
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
                            <p>تهدف هذه الدورة إلى إكساب المتدربين بالمعارف والمهارات والسلوكيات الرئيسة الواجب توافرها لدى
                                العاملين بهذا القطاع، وتدريبهم على مهارات عالية ومتخصصة لممارسة العمل في مجال التسويق والبيع
                                التطبيقي، وفق برامج حديثة ومناهج علمية وعملية.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>العاملين في مجال خدمة العملاء.</li>
                                <li><i class="fa fa-check-square-o"></i>العاملين في مجال التسويق والمبيعات.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مفهوم التسويق.</li>
                                <li><i class="fa fa-check-square-o"></i>عناصر المزيج التسويقي.</li>
                                <li><i class="fa fa-check-square-o"></i>خطوات إعداد الخطة التسويقية.</li>
                                <li><i class="fa fa-check-square-o"></i>ما هي أنواع الاستراتيجيات التسويقية؟</li>
                                <li><i class="fa fa-check-square-o"></i>تحديد احتياجات العملاء.</li>
                                <li><i class="fa fa-check-square-o"></i>كيف تحافظ على عملائك وتجذب عملاء آخرين.</li>
                                <li><i class="fa fa-check-square-o"></i>العناية بالعملاء.</li>
                                <li><i class="fa fa-check-square-o"></i>قاعده ذهبية: نحن أعظم من أنا.</li>
                                <li><i class="fa fa-check-square-o"></i>سلم خطوات البيع.</li>
                                <li><i class="fa fa-check-square-o"></i>قصة الاقناع – كيف تكون بائع مقنع.</li>
                                <li><i class="fa fa-check-square-o"></i>المسؤوليات الأساسية للبيع -طرق زيادة المبيعات.</li>
                                <li><i class="fa fa-check-square-o"></i>المحافظة على الزبائن.</li>
                                <li><i class="fa fa-check-square-o"></i>نموذج AIDA.</li>
                                <li><i class="fa fa-check-square-o"></i>كيف تكون بائعا مُميزاً.</li>
                                <li><i class="fa fa-check-square-o"></i>أفهم شخصية المشترين -أنماط المشترين.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211696832</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>3 أيام / 12 ساعة</li>
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
