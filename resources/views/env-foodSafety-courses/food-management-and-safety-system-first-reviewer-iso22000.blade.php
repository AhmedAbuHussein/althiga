@extends('layouts.app')

@section('title', 'Food Management and Safety System First Reviewer ISO(22000)')

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
            <h1>@lang('courses.Food_Management_and_Safety_System_First_Reviewer_ISO22000')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'env-foodSafety-courses']) }}">@lang('domains.Env_FoodSafety_Courses')</a>
                </li>
                <li><a
                        href="{{ route('routeName', ['id' => 'food-management-and-safety-system-first-reviewer-iso22000']) }}">@lang('courses.Food_Management_and_Safety_System_First_Reviewer_ISO22000')</a>
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
                            <p>يتضمن هذا البرنامج التدريب على كيفية انشاء نظام لإدارة سلامة الغذاء و مراجعات الطرف الاول
                                والطرف الثاني والطرف الثالث لنظام إدارة سلامة الغذاء طبقاً للمواصفة الدولية أيزو 22000 التي
                                يجب أن تلتزم بتطبيقها أي منشأة في سلسلة الغذاء لضمان سلامة ما تقوم بإنتاجه من منتجات غذائية
                                وصلاحيتها للاستهلاك الآدمي.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>المراجعين الداخليين لنظام ادارة سلامة الغذاء.</li>
                                <li><i class="fa fa-check-square-o"></i>مدراء سلامة الغذاء في الشركات والمؤسسات الغذائية.
                                </li>
                                <li><i class="fa fa-check-square-o"></i>مدراء الجودة والانتاج.</li>
                                <li><i class="fa fa-check-square-o"></i>مشرفي الجودة وسلامة الغذاء.</li>
                                <li><i class="fa fa-check-square-o"></i>العاملين في مجال سلامة الغذاء.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مقدمة لنظم إدارة سلامة الغذاء.</li>
                                <li><i class="fa fa-check-square-o"></i>مبادئ نظام تحليل مصادر الخطر ونقاط التحكم الحرجة
                                    HACCP System.</li>
                                <li><i class="fa fa-check-square-o"></i>العلاقة بين الايزو 22000 والايزو 9001 والهاسب.</li>
                                <li><i class="fa fa-check-square-o"></i>متطلبات مواصفة نظام إدارة سلامة الغذاء.</li>
                                <li><i class="fa fa-check-square-o"></i>انشاء النظام الوثائقي.</li>
                                <li><i class="fa fa-check-square-o"></i>تحقيق المنتج.</li>
                                <li><i class="fa fa-check-square-o"></i>الاتصال الفعال.</li>
                                <li><i class="fa fa-check-square-o"></i>التحسين المستمر.</li>
                                <li><i class="fa fa-check-square-o"></i>عمليات مراجعات نظم إدارة سلامة الغذاء.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>21161511</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>40 ساعة / 5 أيام</li>
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
