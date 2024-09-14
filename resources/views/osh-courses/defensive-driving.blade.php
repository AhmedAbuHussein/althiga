@extends('layouts.app')

@section('title', 'Defensive Driving')

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
            <h1>@lang('courses.Defensive_Driving')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'defensive-driving']) }}">@lang('courses.Defensive_Driving')</a>
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
                            <p>يهتم نظام ادارة السلامة بالقدرة على تحديد وتحليل وتقييم السلامة الخاصة بالمنشآت وبرامج
                                الصحلقد أصبحت الحوادث المرورية تمثل وبشكل كبير هاجساً وقلقاً لكافة أفراد المجتمع وأصبحت
                                واحدة من أهم المشكلات التي تستنزف الموارد المادية والطاقات البشرية وتستهدف المجتمعات في أهم
                                مقومات الحياة والذي هو العنصر البشري إضافة إلى ما تكبده من مشاكل اجتماعية ونفسية وخسائر
                                مادية ضخمة. والهدف من الدورة هو زيادة وعى السائقين وتدريبهم على أسس القيادة الآمنة هذا
                                بالإضافة إلى تزويدهم بعدة نصائح ومهارات متنوعة لتفادي الحوادث.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>كل من لديه رخصة قيادة.</li>
                                <li><i class="fa fa-check-square-o"></i>سائقي المركبات والشاحنات بالشركات والمصانع.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>عناصر منظومة القيادة الدفاعية.</li>
                                <li><i class="fa fa-check-square-o"></i>السمات الأساسية التي يجب أن يتمتع بها السائق (السلوك الآمن).</li>
                                <li><i class="fa fa-check-square-o"></i>الأسباب الرئيسية لحوادث المرور.</li>
                                <li><i class="fa fa-check-square-o"></i>الأخطاء والانتهاكات الشائع حدوثها أثناء القيادة.</li>
                                <li><i class="fa fa-check-square-o"></i>الظروف البيئية المصاحبة للقيادة.</li>
                                <li><i class="fa fa-check-square-o"></i>الخطة المتبعة أثناء القيادة.</li>
                                <li><i class="fa fa-check-square-o"></i>التحكم في السيارة خارج الطريق.</li>
                                <li><i class="fa fa-check-square-o"></i>قائمة تفتيش اشتراطات السلامة وسلامة الاطارات.</li>
                                <li><i class="fa fa-check-square-o"></i>تجهيزات الأمان داخل السيارة.</li>
                                <li><i class="fa fa-check-square-o"></i>أنواع حوادث التصادم.</li>
                                <li><i class="fa fa-check-square-o"></i>مقدمة عن سلامة الإطارات.</li>
                                <li><i class="fa fa-check-square-o"></i>أسباب تلف الاطارات.</li>
                                <li><i class="fa fa-check-square-o"></i>أنواع الاطارات وكيفية صيانتها ومشاكلها.</li>
                                <li><i class="fa fa-check-square-o"></i>التصرف الأمثل في الحالات الطارئة المختلفة.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211637711</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>2 يوم / 10 ساعات – 5 ساعات يوميا</li>
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
