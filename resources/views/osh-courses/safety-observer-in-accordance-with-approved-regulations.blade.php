@extends('layouts.app')

@section('title', 'Safety Observer in Accordance with Approved Regulations')

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
            <h1>@lang('courses.Safety_Observer_in_Accordance_with_Approved_Regulations')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'safety-observer-in-accordance-with-approved-regulations']) }}">@lang('courses.Safety_Observer_in_Accordance_with_Approved_Regulations')</a>
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
                            <p>يحتوي البرنامج التدريبي على اهم المواضيع التي يجب ان يتعرف عليها مراقب السلامة والمهارات التي
                                يجب ان يكتسبها المتدرب. والتي تضمن تصرفه السليم وتقديم المساعدة في حالات الحرائق او حالات
                                الطوارئ او وقوع حوادث العمل. بالاضافة الى تحديد موقع الخطر في المنشآت وكيفية نقل المعلومة
                                الى الجهات المختصة لاتخاذ الاجراءات المناسبة المتعلقة بسلامة العاملين للمحافظة على الارواح
                                وتقليل الاصابات ومنع الخسائر في جميع المنشآت.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>الموظفين الجدد العاملين في مجال يتعلق بالسلامة.</li>
                                <li><i class="fa fa-check-square-o"></i>مراقب السلامة.</li>
                                <li><i class="fa fa-check-square-o"></i>جميع العاملين الاداريين في المنشآت ولا يعملوا في قسم السلامة.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مكامن الخطر في المنشآت وكيفية تقييمها والابلاغ عنها.</li>
                                <li><i class="fa fa-check-square-o"></i>اسباب الحرائق وانواع الطفايات وكيفية استخدامها لمكافحة الحرائق.</li>
                                <li><i class="fa fa-check-square-o"></i>كيفية التصرف في حالات الحرائق وحالات الطوارئ المختلفة (الاخلاء و الانقاذ و...).</li>
                                <li><i class="fa fa-check-square-o"></i>اسس الاسعافات الأولية.</li>
                                <li><i class="fa fa-check-square-o"></i>كيفية المحافظة على سلامة المنشآت.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211614420</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>يوم 1 لمدة 5 ساعات</li>
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
