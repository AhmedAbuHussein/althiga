@extends('layouts.app')

@section('title', 'OSH Management in Work Environment')

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
            <h1>@lang('courses.OSH_Management_in_Work_Environment')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'osh-management-in-work-environment']) }}">@lang('courses.OSH_Management_in_Work_Environment')</a>
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
                            <p>تهدف هذه الدورة الى تزويد المتدربين بالمهارات اللازمة للتعرف على المخاطر في بيئة العمل وكيفية
                                السيطرة عليها فضلا عن طرق التفتيش على المواقع في مختلف المجالات وتركز على ضرورة وضع نظام
                                لادارة السلامة لتقليل اصابات العمل والحوادث والتي سيتم تحليلها والتركيز عليها خلال الدورة
                                لمعرفة الاسباب الجذرية للحوادث وطرق الوقاية منها.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مشرفي السلامة والصحة المهنية والبيئة.</li>
                                <li><i class="fa fa-check-square-o"></i>مراقب السلامة.</li>
                                <li><i class="fa fa-check-square-o"></i>ضابط السلامة.</li>
                                <li><i class="fa fa-check-square-o"></i>ضابط السلامة.</li>
                                <li><i class="fa fa-check-square-o"></i>المسؤولين عن منع الخسائر، الحرائق، والأمن.</li>
                                <li><i class="fa fa-check-square-o"></i>المسئولين عن السلامة في الوزارات والجهات الحكومية.</li>
                                <li><i class="fa fa-check-square-o"></i>مسئولي / مختصي السلامة والصحة المهنية في المصانع والشركات بأنواعها.</li>
                                <li><i class="fa fa-check-square-o"></i>المؤهلين لمنصب مدير السلامة في القطاعين الحكومي والخاص.</li>
                                <li><i class="fa fa-check-square-o"></i>.</li>
                                <li><i class="fa fa-check-square-o"></i>.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>التعرف على المفهوم العام للسلامة والصحة المهنية.</li>
                                <li><i class="fa fa-check-square-o"></i>التعرف على المخاطر في أماكن العمل وكيفية السيطرة عليها.</li>
                                <li><i class="fa fa-check-square-o"></i>التفتيش على مواقع العمل.</li>
                                <li><i class="fa fa-check-square-o"></i>تحليل مخاطر الوظائف.</li>
                                <li><i class="fa fa-check-square-o"></i>أسس إدارة السلامة.</li>
                                <li><i class="fa fa-check-square-o"></i>الحوادث وإصابات العمل، إحصائيات الحوادث.</li>
                                <li><i class="fa fa-check-square-o"></i>التحقيق في الحوادث.</li>
                                <li><i class="fa fa-check-square-o"></i>تحليل وتقييم المخاطر.</li>
                                <li><i class="fa fa-check-square-o"></i>.</li>
                                <li><i class="fa fa-check-square-o"></i>.</li>
                                <li><i class="fa fa-check-square-o"></i>.</li>
                                <li><i class="fa fa-check-square-o"></i>.</li>
                                <li><i class="fa fa-check-square-o"></i>.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>21169959</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>•	5 أيام / 25 ساعة – 5 ساعات يوميا</li>
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
