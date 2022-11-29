@extends('layouts.app')

@section('title', 'Occupational Safety Officer Safety Manager')

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
            <h1>@lang('courses.Occupational_Safety_Officer_Safety_Manager')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'occupational-safety-officer-safety-manager']) }}">@lang('courses.Occupational_Safety_Officer_Safety_Manager')</a>
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
                            <p>تعتبر واجبات ومهام مدير ومسئول السلامة من المهن التي تتطلبها مختلف القطاعات الخاصة والحكومية
                                حيث يتولى القائم بهذه المهنة العمل على ادارة وسياسات وخطط السلامة المهنية في المنشآت ومعرفة
                                المعاير الدولية وانظمة الجودة الخاصة بالسلامة المهنية وانواع مخاطر بيئة العمل وتقيمها و طرق
                                الوقاية وتحديد اسباب الحرائق و طرق الوقاية والمكافحة و انظمة الانذار والتخطيط للطوارئ
                                (الاطفاء ؛الاخلاء؛ الانقاذ) ومعرفة متطلبات ومعدات واجراءات الاسعافات الاولية ومتطلباتها في
                                المنشآت والتحقيق في حوادث العمل ومعرفة التشريعات الوطنية الخاصة بالسلامة وحالات الطوارئ.
                                والتفتيش على امور السلامة في المنشآت و كتابة التقارير و حماية البيئة من النفايات الصناعية
                                الخطرة ... إلخ ليصبح المتخصص بمهنة " مدير ومسئول السلامة " قادر على القيام بمتطلبات هذه
                                المهنة.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مدراء السلامة.</li>
                                <li><i class="fa fa-check-square-o"></i>مسئولي السلامة.</li>
                                <li><i class="fa fa-check-square-o"></i>اخصائي السلامة.</li>
                                <li><i class="fa fa-check-square-o"></i>خبراء السلامة.</li>
                                <li><i class="fa fa-check-square-o"></i>مشرفي السلامة المطلوب تأهيلهم لشغل منصب مدير السلامة.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>ادارة وسياسات وخطط السلامة المهنية وفي المنشآت.</li>
                                <li><i class="fa fa-check-square-o"></i>المعاير الدولية وانظمة الجودة الخاصة بالسلامة المهنية.</li>
                                <li><i class="fa fa-check-square-o"></i>انواع مخاطر بيئة العمل وتقيمها وطرق الوقاية.</li>
                                <li><i class="fa fa-check-square-o"></i>اسباب الحرائق وطرق الوقاية والمكافحة وانظمة الانذار.</li>
                                <li><i class="fa fa-check-square-o"></i>التخطيط للطوارئ (الاطفاء؛ الاخلاء؛ الانقاذ).</li>
                                <li><i class="fa fa-check-square-o"></i>متطلبات ومعدات واجراءات الاسعافات الاولية.</li>
                                <li><i class="fa fa-check-square-o"></i>واجبات ومتطلبات في المنشآت.</li>
                                <li><i class="fa fa-check-square-o"></i>التحقيق في حوادث العمل.</li>
                                <li><i class="fa fa-check-square-o"></i>التشريعات الوطنية الخاصة بالسلامة وحالات الطوارئ.</li>
                                <li><i class="fa fa-check-square-o"></i>التفتيش على امور السلامة في المنشآت وكتابة التقارير.</li>
                                <li><i class="fa fa-check-square-o"></i>حماية البيئة من النفايات الصناعية الخطرة.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211643518</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>120 ساعة / 45 يوم</li>
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
