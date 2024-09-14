@extends('layouts.app')

@section('title', 'Strategic Planning')

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
            <h1>@lang('courses.Strategic_Planning')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">@lang('domains.Financial_Admin_Courses')</a>
                </li>
                <li><a
                        href="{{ route('routeName', ['id' => 'strategic-planning']) }}">@lang('courses.Strategic_Planning')</a>
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
                            <p>العالم حولنا يتغير بدرجة كبيرة جدا فهناك دول ظهرت علي السطح وأصبحت لها مكانة كبيرة بينما
                                بالأمس القريب لم يكن لها هذا الدور واذا تتبعنا تلك الدول نجد انها بنيت تطورها علي مفهوم
                                التخطيط طويل الاجل التخطيط الذي يؤمن بالمستقبل ويري فيه احلامه وطموحاته التخطيط الذي يري فيه
                                القدرة علي الانتقال من حالة الي حالة افضل منها الانتقال من مستوي الي مستوي أفضل منه والدولة
                                ليست كيان مستقل بل هي مجموعة من المؤسسات والمنظمات التي محركها الاساسي هو الافراد العاملين
                                المنفذين المخططين الذين يحملون علي أعناقهم رؤية افضل لمستقبل قريب يتكاتفون معا للوصول الي
                                هذا المستقبل من اجل حياة افضل لهم ولأوطانهم. لذا كان من الضروري علينا أن نتفهم جيدا معني
                                التخطيط الاستراتيجي والادارة الاستراتيجية لكي نتمكن من استخدام التخطيط الاستراتيجي على
                                المستوي العملي في منظومة الأعمال تمهيدا للتطبيق الناجح للأسلوب العلمي على كافة القطاعات
                                الخاصة والحكومية الصغيرة منها والكبيرة.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>أعضاء مجالس ادارات الشركات.</li>
                                <li><i class="fa fa-check-square-o"></i>مديري عموم الشركات.</li>
                                <li><i class="fa fa-check-square-o"></i>مديري إدارات التخطيط والتطوير والمدراء الإداريين
                                    والماليين والموارد البشرية – التسويق-الإنتاج-السلامة. الخ).</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>ماهية التخطيط الاستراتيجي.</li>
                                <li><i class="fa fa-check-square-o"></i>تحديد رسالة المنشأة وغايتها وأهدافها.</li>
                                <li><i class="fa fa-check-square-o"></i>ترجمة الاهداف الي خطط عمل ذات معيار زمني.</li>
                                <li><i class="fa fa-check-square-o"></i>اعداد تحليل شامل لموقف المنشأة الحالي.</li>
                                <li><i class="fa fa-check-square-o"></i>دراسة نقاط القوة –الضعف –الفرص والتهديدات SWOT
                                    Analysis.</li>
                                <li><i class="fa fa-check-square-o"></i>دراسة المنافسة الداخلية والخارجية والية التغلب
                                    عليها.</li>
                                <li><i class="fa fa-check-square-o"></i>اعداد بدائل استراتيجية للتوسع الافقي والرأسي
                                    للمنشأة.</li>
                                <li><i class="fa fa-check-square-o"></i>استخدام ادوات التحليل الاستراتيجي في توجيه البديل
                                    الاستراتيجي للمنشأة.</li>
                                <li><i class="fa fa-check-square-o"></i>الربط بين المتغيرات البيئية المحيطة وتحويلها الي
                                    تحقيق.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>21169200</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>15 ساعة / 4 أيام</li>
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
