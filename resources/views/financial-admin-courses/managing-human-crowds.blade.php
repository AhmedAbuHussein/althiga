@extends('layouts.app')

@section('title', 'Managing Human Crowds')

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
            <h1>@lang('courses.Managing_Human_Crowds')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">@lang('domains.Financial_Admin_Courses')</a>
                </li>
                <li><a
                        href="{{ route('routeName', ['id' => 'managing-human-crowds']) }}">@lang('courses.Managing_Human_Crowds')</a>
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
                            <p>تدريب المشاركين من المعنيين بأدارة الحشود البشرية على الاجراءات الصحيحة والوقائية وسيتم
                                التركيز على تقنيات ادارة الحشود، التخطيط وفرق العمل المعنية بادارة الحشود ومسئولية كل فرد
                                والمهام الموكله إليهم من اجل الوصول الى اقصى درجة من الانسيابية وضمان سلامتهم.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>للمهتمين في ادارة الموارد البشرية من الممارسين
                                    والأكاديميين.</li>
                                <li><i class="fa fa-check-square-o"></i>للعاملين في القطاعين العام والخاص.</li>
                                <li><i class="fa fa-check-square-o"></i>للدارسين في مختلف التخصصات الادارية.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مصطلحات ومفاهيم في إدارة الحشود.</li>
                                <li><i class="fa fa-check-square-o"></i>مفهوم الحشود.</li>
                                <li><i class="fa fa-check-square-o"></i>نظرة في إدارة الحشود.</li>
                                <li><i class="fa fa-check-square-o"></i>التجربة السعودية في إدارة الحشود.</li>
                                <li><i class="fa fa-check-square-o"></i>تعريف الحشود.</li>
                                <li><i class="fa fa-check-square-o"></i>التعريف على علم إدارة الحشود.</li>
                                <li><i class="fa fa-check-square-o"></i>التخطيط وفريق العمل في إدارة الحشود.</li>
                                <li><i class="fa fa-check-square-o"></i>التخطيط لمواجهة الأحداث الناتجة عن التجمعات البشرية.</li>
                                <li><i class="fa fa-check-square-o"></i>دور فريق العمل في إدارة الحشود و تنظيم التجمعات البشرية.</li>
                                <li><i class="fa fa-check-square-o"></i>تصنيف إدارة الحشود وتطبيقات نظرية وعملية.</li>
                                <li><i class="fa fa-check-square-o"></i>إدارة الحشود التنظيمية.</li>
                                <li><i class="fa fa-check-square-o"></i>معايير الصحة والسلامة في إدارة الحشود.</li>
                                <li><i class="fa fa-check-square-o"></i>إدارة الحشود الطبية.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211617926</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>3 أيام  / 15 ساعة</li>
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
