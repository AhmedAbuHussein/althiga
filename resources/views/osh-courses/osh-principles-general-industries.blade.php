@extends('layouts.app')

@section('title', 'OSH Principles General Industries')

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
            <h1>@lang('courses.OSH_Principles_General_Industries')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'osh-principles-general-industries']) }}">@lang('courses.OSH_Principles_General_Industries')</a>
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
                            <p>تهدف هذه الدورة الى تحديد مسئوليات صاحب العمل والعمال المعنيين بالسلامة والصحة المهنية،
                                التعرف على المخاطر المختلفة الناتجة من الاعمال وكيفية تجنبها والسيطرة عليها، حيث تغطي هذه
                                الدورة جميع المخاطر المتعلقة بمجال الصناعات العامة طبقا لمعايير الاوشا الامريكية.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>من يرغب العمل في مجال السلامة والصحة المهنية.
                                </li>
                                <li><i class="fa fa-check-square-o"></i>من يرغب العمل في مجال الحراسات الأمنية للمنشأت
                                    بمختلف
                                    أنشطتها.</li>
                                <li><i class="fa fa-check-square-o"></i>أخصائي السلامة والصحة المهنية والصيانة في جميع
                                    المنشآت ذات
                                    العلاقة بالمخاطر المذكورة.</li>
                                <li><i class="fa fa-check-square-o"></i>المهندسين بجميع تخصصاتهم والمعنيين بالعمل في مجال
                                    السلامة
                                    والصحة المهنية.</li>
                                <li><i class="fa fa-check-square-o"></i>المسؤولين عن منع الخسائر، الحرائق، والأمن.</li>
                                <li><i class="fa fa-check-square-o"></i>العمال والفنيين المسئولين عن تنفيذ اعمال تتضمن
                                    بالمخاطر
                                    المذكورة.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مقدمة عن الاوشا.</li>
                                <li><i class="fa fa-check-square-o"></i>إدارة السلامة والصحة المهنية.</li>
                                <li><i class="fa fa-check-square-o"></i>أسطح العمل والحماية من مخاطر السقوط.</li>
                                <li><i class="fa fa-check-square-o"></i>مخارج الطوارئ، خطط الطوارئ والإخلاء.</li>
                                <li><i class="fa fa-check-square-o"></i>الوقاية والحماية من الحرائق.</li>
                                <li><i class="fa fa-check-square-o"></i>مخاطر الكهرباء.</li>
                                <li><i class="fa fa-check-square-o"></i>معدات الوقاية الشخصية.</li>
                                <li><i class="fa fa-check-square-o"></i>مناولة المواد.</li>
                                <li><i class="fa fa-check-square-o"></i>توصيل المعلومات عن المواد الخطرة.</li>
                                <li><i class="fa fa-check-square-o"></i>التعامل مع المواد الكيميائية والخطرة.</li>
                                <li><i class="fa fa-check-square-o"></i>شروط العمل في الأماكن المحصورة.</li>
                                <li><i class="fa fa-check-square-o"></i>عزل مصادر الطاقة ووضع لافتات عليها.</li>
                                <li><i class="fa fa-check-square-o"></i>الحماية من مخاطر المعدات والآلات.</li>
                                <li><i class="fa fa-check-square-o"></i>السلامة في أعمال اللحام والقطع.</li>
                                <li><i class="fa fa-check-square-o"></i>مقدمة عن الصحة المهنية.</li>
                                <li><i class="fa fa-check-square-o"></i>الحماية من الأمراض التي تنقل عن طريق الدم.</li>
                                <li><i class="fa fa-check-square-o"></i>مقدمة عن علم الارجنومكس.</li>
                                <li><i class="fa fa-check-square-o"></i>برامج السلامة والصحة المهنية.</li>
                                <li><i class="fa fa-check-square-o"></i>المركبات الصناعية المزودة بالطاقة.</li>
                                <li><i class="fa fa-check-square-o"></i>مخاطر أخرى في مجال الصناعات العامة.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i> 21165997</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>5 أيام / 30 ساعة – 6 ساعات يوميا</li>
                                    <li><i style="font-weight: 500">الشهادة:</i>شهادة من المؤسسة العامة للتدريب التقني
                                        والمهني</li>
                                    <li><i style="font-weight: 500">لغة الدورة:</i>العربية أو الإنجليزية</li>
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
