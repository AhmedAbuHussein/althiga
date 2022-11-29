@extends('layouts.app')

@section('title', 'Traits of Successful Leadership')

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
            <h1>@lang('courses.Traits_of_Successful_Leadership')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">@lang('domains.Financial_Admin_Courses')</a>
                </li>
                <li><a
                        href="{{ route('routeName', ['id' => 'traits-of-successful-leadership']) }}">@lang('courses.Traits_of_Successful_Leadership')</a>
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
                            <p>تهدف الدورة الى اكتساب المهارات القيادية اللازمة للقائد الناجح من خلال التميز بين القيادة
                                والإدارة ، والتعرف على نظريات وأنماط القيادة واكتشاف كيفية صناعة القائد.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>العاملين في مجال خدمة العملاء.</li>
                                <li><i class="fa fa-check-square-o"></i>العاملين في مجال التسويق والمبيعات.</li>
                                <li><i class="fa fa-check-square-o"></i>كل من يعمل في مجال البيع أو خدمات العملاء.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مقدمات حول القيادة والقادة.</li>
                                <li><i class="fa fa-check-square-o"></i>خصائص ومهارات القائد الفعال.</li>
                                <li><i class="fa fa-check-square-o"></i>الفرق بين القيادة والادارة.</li>
                                <li><i class="fa fa-check-square-o"></i>نظريات وأنماط القيادة.</li>
                                <li><i class="fa fa-check-square-o"></i>مهام واعمال القائد الفعال.</li>
                                <li><i class="fa fa-check-square-o"></i>صناعة القائد.</li>
                                <li><i class="fa fa-check-square-o"></i>ثلاثة اساسيات للقائد.</li>
                                <li><i class="fa fa-check-square-o"></i>ما هى ملامح قادة المستقبل؟</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211674935</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>يومين / 6 ساعات</li>
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
