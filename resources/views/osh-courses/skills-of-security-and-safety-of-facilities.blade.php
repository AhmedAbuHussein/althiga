@extends('layouts.app')

@section('title', 'Skills of Security and Safety of Facilities')

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
            <h1>@lang('courses.Skills_of_Security_and_Safety_of_Facilities')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'skills-of-security-and-safety-of-facilities']) }}">@lang('courses.Skills_of_Security_and_Safety_of_Facilities')</a>
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
                            <p>برنامج تدريبي لمختص الأمن والسلامة في المنشأت بأنواعها يوضح مهام ومسئوليات مختص الأمن
                                والسلامة للمحافظة على الأرواح والممتلكات من المخاطر المحتملة، كما يوضح للمتدربين الطريقة
                                العلمية والعملية لأداء العمل والتعامل مع الحالات الأمنية ومتابعة تنفيذ إجراءات الأمن
                                والسلامة داخل المنشأة مع شرح مفصل لاستخدام نماذج تنظيم العمل.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>أفراد إدارة الأمن والسلامة بكل مستوياتهم الوظيفية.
                                </li>
                                <li><i class="fa fa-check-square-o"></i>المسؤولين عن منع الخسائر، الحرائق، والأمن.</li>
                                <li><i class="fa fa-check-square-o"></i>مسئولي / مختصي الأمن والسلامة والصحة المهنية في
                                    القطاعين الحكومي والخاص.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>التعريف بالأمن والسلامة.
                                    <ul style="padding-right: 20px;">
                                        <li><i class="fa fa-dot-circle-o"></i>أهمية العمل والمهام التي يقوم بها المتدرب.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>صفات ومهارات رجل الأمن والسلامة – الشكل العام – المظهر.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>اكتمال التجهيزات – الاهتمام بالملابس بعد العمل.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>مسئوليات رجل الأمن والسلامة.</li>
                                    </ul>
                                </li>
                            </ul>

                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مهام وواجبات العاملين في الأمن والسلامة.
                                    <ul style="padding-right: 20px;">
                                        <li><i class="fa fa-dot-circle-o"></i>واجبات مدير الأمن.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>واجبات المشرف.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>واجبات رجل الأمن والسلامة.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>واجبات قبل العمل.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>واجبات أثناء العمل.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>واجبات بعد العمل.</li>
                                    </ul>
                                </li>
                            </ul>

                            <ul>
                                <li><i class="fa fa-check-square-o"></i>العلاقة والتنسيق بين إدارة الأمن والسلامة والإدارات الأخرى.
                                    <ul style="padding-right: 20px;">
                                        <li><i class="fa fa-dot-circle-o"></i>الصيانة – النظافة – الاتصالات الثابتة والمتحركة.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>التعامل الأمن.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>الإداريين: نماذج العمل.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>العمال: الدخول والخروج.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>الزوار: التنظيم، الاستقبال.</li>
                                    </ul>
                                </li>
                            </ul>

                            <ul>
                                <li><i class="fa fa-check-square-o"></i>أمن المنشأة.
                                    <ul style="padding-right: 20px;">
                                        <li><i class="fa fa-dot-circle-o"></i>تعريف المنشأة – أنواعها – تصنيفها – درجة الخطورة.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>امن المنشأة من الداخل – أمن المنشأة من الخارج.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>نماذج العمل الآمن.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>نقاط التفتيش.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>أنواع التفتيش.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>حدود المسؤولية.</li>
                                    </ul>
                                </li>
                            </ul>

                            <ul>
                                <li><i class="fa fa-check-square-o"></i>وسائل وأدوات الأمن والسلامة داخل المنشاة.
                                    <ul style="padding-right: 20px;">
                                        <li><i class="fa fa-dot-circle-o"></i>الوقاية من الحريق – أنواع مكافحة الحريق – طفايات الحريق وطرق استخدامها.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>وسائل الإنذار – مخارج الطوارئ.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>التخطيط للطوارئ.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>خطط الأخلاء.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>كاميرات المراقبة – أنواعها – أهميتها.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>مهام وواجبات العاملين في غرفة المراقبة.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>مصادر الخطورة في المنشأة وطرق السيطرة.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>إصابات وحوادث العمل وكيفية التصرف.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>21168872</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>5 أيام / 25 ساعة – 5 ساعات يوميا</li>
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
