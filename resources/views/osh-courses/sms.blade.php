@extends('layouts.app')

@section('title', 'SMS')

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
            <h1>@lang('courses.SMS')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'sms']) }}">@lang('courses.SMS')</a>
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
                            <p>يهتم نظام ادارة السلامة بالقدرة على تحديد وتحليل وتقييم السلامة الخاصة بالمنشآت وبرامج الصحة
                                المهنية. ومع ظهور منهج نظام ادارة السلامة والأمان المهنيتين أصبحت المنشآت مطالبة بشكل متزايد
                                لوجود برنامج شامل للسلامة والصحة المهنية (نظام إدارة السلامة -SMS).
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مدراء ومستشاري وأخصائي وخبراء هندسة السلامة والصحة المهنية والبيئة.</li>
                                <li><i class="fa fa-check-square-o"></i>مدراء وأخصائي البيئة والتقنية والجودة والتدريب والموارد البشرية.</li>
                                <li><i class="fa fa-check-square-o"></i>جعين الداخليين لنظام ادارة السلامة والصحة المهنية ISO45001.</li>
                                <li><i class="fa fa-check-square-o"></i>المهندسين بجميع تخصصاتهم.</li>
                                <li><i class="fa fa-check-square-o"></i>المسؤولين عن منع الخسائر، الحرائق، والأمن، والحد من خطر المسؤولية عن المنتجات.</li>
                                <li><i class="fa fa-check-square-o"></i>مسئولي وأخصائي التأمين في الشركات.</li>
                                <li><i class="fa fa-check-square-o"></i>المسئولين عن السلامة في الوزارات والجهات الحكومية.</li>
                                <li><i class="fa fa-check-square-o"></i>مسئولي / مختصي السلامة والصحة المهنية في المصانع والشركات بأنواعها.</li>
                                <li><i class="fa fa-check-square-o"></i>مسئولي ومختصي السلامة في شركات المقاولات والتشغيل والصيانة.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>القيادة والمسئولية.</li>
                                <li><i class="fa fa-check-square-o"></i>ادارة وتقييم المخاطر.</li>
                                <li><i class="fa fa-check-square-o"></i>الكفاءة والتدريب.</li>
                                <li><i class="fa fa-check-square-o"></i>سلامة الاساسيات والاصول.</li>
                                <li><i class="fa fa-check-square-o"></i>الابلاغ عن الحوادث وتحليلها.</li>
                                <li><i class="fa fa-check-square-o"></i>المقاولون والموردون وغيرهم.</li>
                                <li><i class="fa fa-check-square-o"></i>التشغيل الآمن.</li>
                                <li><i class="fa fa-check-square-o"></i>الاتصالات.</li>
                                <li><i class="fa fa-check-square-o"></i>التأهب لحالات الطوارئ.</li>
                                <li><i class="fa fa-check-square-o"></i>توعية المجتمع المحلي والسلامة خارج العمل.</li>
                                <li><i class="fa fa-check-square-o"></i>التحسين المستمر.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>21163446</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>30 ساعة / 5 أيام</li>
                                    <li><i style="font-weight: 500">الشهادة:</i>شهادة من المؤسسة العامة للتدريب التقني
                                        والمهني</li>
                                    <li><i style="font-weight: 500">لغة الدورة:</i>العربية والإنجليزية</li>
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
