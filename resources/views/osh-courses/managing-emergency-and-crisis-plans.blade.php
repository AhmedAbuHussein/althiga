@extends('layouts.app')

@section('title', 'Managing Emergency and Crisis Plans')

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
            <h1>@lang('courses.Managing_Emergency_and_Crisis_Plans')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'managing-emergency-and-crisis-plans']) }}">@lang('courses.Managing_Emergency_and_Crisis_Plans')</a>
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
                            <p>الهدف من هذه الدورة هو تطوير مهارات المتدربين وزيادة قدراتهم لتنفيذ السياسات والخطط
                                والإجراءات اللازمة لإدارة خطط الطوارئ والإخلاء والاستعداد لمواجهة الأزمات والكوارث لتوفير
                                بيئة عمل آمنة ولحماية الأرواح والممتلكات. وكذلك التأكد من معرفة جميع العاملين وتدريبهم على
                                الإجراءات المتبعة في حالات الطوارئ والأزمات بأنواعها المختلفة.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>المسئولين عن ادارة الطوارئ في الجهات الحكومية والخاصة.</li>
                                <li><i class="fa fa-check-square-o"></i>مدراء وأخصائي البيئة والتقنية والجودة والتدريب والموارد البشرية المعنيين بسلامة المنشآت والأفراد في جميع المنشآت.</li>
                                <li><i class="fa fa-check-square-o"></i>المسؤولين عن منع الخسائر، الحرائق، والأمن.</li>
                                <li><i class="fa fa-check-square-o"></i>المسئولين عن السلامة في الوزارات والجهات الحكومية والقطاع الخاص.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مقدمة عن خطط الطوارئ وأهميتها وأهدافها.</li>
                                <li><i class="fa fa-check-square-o"></i>حالات الطوارئ وأنواعها ومستوياتها.</li>
                                <li><i class="fa fa-check-square-o"></i>الاستعـدادات لمواجهة حـالات للطوارئ.</li>
                                <li><i class="fa fa-check-square-o"></i>المتطلبات الأساسية لعناصر خطة الطوارئ.</li>
                                <li><i class="fa fa-check-square-o"></i>واجبات ومسئوليات جميع العاملين في المنشآة في حالات الطوارئ.</li>
                                <li><i class="fa fa-check-square-o"></i>إجراء التجارب الوهمية والفرضيات.</li>
                                <li><i class="fa fa-check-square-o"></i>مفهوم الأزمة وأنواعها وأسبابها.</li>
                                <li><i class="fa fa-check-square-o"></i>أدارة الازمات والاستعداد لها.</li>
                                <li><i class="fa fa-check-square-o"></i>دور منظمات ومؤسسات المجتمع المدني في إدارة الأزمات.</li>
                                <li><i class="fa fa-check-square-o"></i>دور القيادة في إدارة الأزمات.</li>
                                <li><i class="fa fa-check-square-o"></i>التخطيط الإعلامي ودوره في مواجهة الكوارث والازمات.</li>
                                <li><i class="fa fa-check-square-o"></i>الإخلاء والإيواء في حالات الطوارئ والأزمات والكوارث.</li>
                                <li><i class="fa fa-check-square-o"></i>مقدمة عن الإخلاء: أنواع الإخلاء، وسائل الإخلاء، مراحل الإخلاء.</li>
                                <li><i class="fa fa-check-square-o"></i>إجراءات خطة الإخلاء.</li>
                                <li><i class="fa fa-check-square-o"></i>المهام والمسئوليات لجميع العاملين في حالات الإخلاء والتدريب على تنفيذ خطط الإخلاء.</li>
                                <li><i class="fa fa-check-square-o"></i>حالات للدراسة وتقييم الأزمات والكوارث.</li>
                                <li><i class="fa fa-check-square-o"></i>دور الجهات والسلطات المعنية في إدارة عمليات الإخلاء والإيواء في حالات الأزمات والكوارث.</li>
                                <li><i class="fa fa-check-square-o"></i>الدروس المستفادة وكيفية إنشاء إدارة مستقلة لإدارة الطوارئ والأزمات في المنشآت.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>21168872</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>5 أيام / 25 ساعة</li>
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
