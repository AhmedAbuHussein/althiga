@extends('layouts.app')

@section('title', 'The Art of Dealing With Customer Complaints and Objections')

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
            <h1>@lang('courses.The_Art_of_Dealing_With_Customer_Complaints_and_Objections')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">@lang('domains.Financial_Admin_Courses')</a>
                </li>
                <li><a
                        href="{{ route('routeName', ['id' => 'the-art-of-dealing-with-customer-complaints-and-objections']) }}">@lang('courses.The_Art_of_Dealing_With_Customer_Complaints_and_Objections')</a>
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
                            <p>تهدف الدورة الى اكتساب مهارات التميز فى خدمة العملاء والتعامل مع شكاوى واعتراضات العملاء
                                المنزعجين وكسب رضاهم.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>العاملين في مجال خدمة العملاء.</li>
                                <li><i class="fa fa-check-square-o"></i>العاملين في مجال التسويق والمبيعات.</li>
                                <li><i class="fa fa-check-square-o"></i>العاملين في مجال السياحة والفنادق.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>تعريف العميل.</li>
                                <li><i class="fa fa-check-square-o"></i>اهمية خدمة العملاء.</li>
                                <li><i class="fa fa-check-square-o"></i>معرفة عملائك.</li>
                                <li><i class="fa fa-check-square-o"></i>ماذا يريد العميل؟.</li>
                                <li><i class="fa fa-check-square-o"></i>أهمية تطوير مهارات التواصل.</li>
                                <li><i class="fa fa-check-square-o"></i>التواصل غير اللفظى.</li>
                                <li><i class="fa fa-check-square-o"></i>الانصات.</li>
                                <li><i class="fa fa-check-square-o"></i>التواصل اللفظى.</li>
                                <li><i class="fa fa-check-square-o"></i>اختيار الكلمات.</li>
                                <li><i class="fa fa-check-square-o"></i>نبره الصوت.</li>
                                <li><i class="fa fa-check-square-o"></i>المظهر الاحترافى اللائق.</li>
                                <li><i class="fa fa-check-square-o"></i>الانطباع الأول.</li>
                                <li><i class="fa fa-check-square-o"></i>مقابلة العميل بإحترافية.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211634330</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>3 ايام  / 16 ساعة</li>
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
