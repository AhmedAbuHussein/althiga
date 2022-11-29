@extends('layouts.app')

@section('title', 'Safety in Enclosed or Confined Spaces')

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
            <h1>@lang('courses.Safety_in_Enclosed_or_Confined_Spaces')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'safety-in-enclosed-or-confined-spaces']) }}">@lang('courses.Safety_in_Enclosed_or_Confined_Spaces')</a>
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
                            <p>يهدف البرنامج الى توعية وتدريب جميع العاملين في الاماكن المغلقة أو المحصورة في جميع أنواع
                                الاعمال سواء الإنشائية أو الصناعية مثل المقاولات والحفريات والصرف الصحي والتنقيب وغيرها من
                                الاعمال التي تتطلب الدخول في الاماكن المحصورة على التعرف على المخاطر وكيفية السيطرة عليها.
                                تعريف الأوشا (OSHA) للأماكن المحصورة أو المغلقة بأنها الأماكن التي تكون مغلقة باستمرار وهي
                                كبيرة الحجم ولها وسائل دخول محددة وغير مصممة للعمل أو التواجد بها بصفة مستمرة. الهدف من
                                تدريب العاملين في الأماكن المغلقة هو تفادي وتقليل تعرضهم للمخاطر الموجودة في هذه الاماكن.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>المشرفون والموظفين المسؤولين عن تنفيذ أعمال في
                                    الأماكن المغلقة أو المحصورة.</li>
                                <li><i class="fa fa-check-square-o"></i>أخصائي ومسئولي السلامة في شركات المقاولات والصرف
                                    الصحي والحفريات.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>تعريف الاماكن المغلقة وأنواعها وأسباب العمل بها.</li>
                                <li><i class="fa fa-check-square-o"></i>معرفة المخاطر المحتمل وجودها بالأماكن المغلقة أو المحصورة.</li>
                                <li><i class="fa fa-check-square-o"></i>طرق التحكم في مخاطر الأماكن المغلقة.</li>
                                <li><i class="fa fa-check-square-o"></i>إجراءات العمل الآمنة داخل الأماكن المغلقة.</li>
                                <li><i class="fa fa-check-square-o"></i>الإجراءات الواجب إتباعها قبل نزول العاملين.</li>
                                <li><i class="fa fa-check-square-o"></i>الإجراءات الواجب إتباعها أثناء نزول العمال وعند تنفيذ الأعمال.</li>
                                <li><i class="fa fa-check-square-o"></i>إجراءات خاصة بالشخص المكلف بالمراقبة Standby Worker.</li>
                                <li><i class="fa fa-check-square-o"></i>الإجراءات الواجب عملها بعد الانتهاء من العمل .</li>
                                <li><i class="fa fa-check-square-o"></i>تنبيهات وتحذيرات بخصوص الاماكن المغلقة.</li>
                                <li><i class="fa fa-check-square-o"></i>تصريح الدخول.</li>
                                <li><i class="fa fa-check-square-o"></i>اختبار جو العمل.</li>
                                <li><i class="fa fa-check-square-o"></i>التهوية الميكانيكية.</li>
                                <li><i class="fa fa-check-square-o"></i>وسائل الحماية الشخصية.</li>
                                <li><i class="fa fa-check-square-o"></i>خطط الطوارئ والانقاذ بالأماكن المغلقة او المحصورة.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>21163774</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>24 ساعة / 4 أيام</li>
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
