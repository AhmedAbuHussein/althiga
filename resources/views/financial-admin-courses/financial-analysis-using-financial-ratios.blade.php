@extends('layouts.app')

@section('title', 'Financial Analysis Using Financial Ratios')

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
            <h1>@lang('courses.Financial_Analysis_Using_Financial_Ratios')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">@lang('domains.Financial_Admin_Courses')</a>
                </li>
                <li><a
                        href="{{ route('routeName', ['id' => 'financial-analysis-using-financial-ratios']) }}">@lang('courses.Financial_Analysis_Using_Financial_Ratios')</a>
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
                            <p>إن التحليل المالي بمفهومه المعاصر يمتد ليشمل المساعدة في تخطيط أوجه النشاط المستقبلي. وتخطيط
                                عملية الاستثمار، والعمل على تقييم الأداء المخطط واتخاذ الإجراءات الوقائية التي تؤدي إلى
                                إخضاع ظروف عدم التأكد حتى يمكن الرقابة عليها، وبالتالي يمكن أن يكون عوناً لكل مستثمر ولكل
                                مدير ولكل مقرض ولكل طائفة من الطوائف المعنية وبالتالي يكون "العين" التي يرى بها هؤلاء، وبهذا
                                يمكن أن يكون التحليل المالي أداة فعالة وبناءة في خدمة المجتمع. يهدف التحليل المالي بشكل عام
                                إلى تقييم أداء المشروع من زوايا متعددة وبكيفية تخدم أهداف مستخدمي المعلومات ممن لهم مصالح
                                مالية في المشروع وذلك بقصد تجديد جوانب القوة ومواطن الضعف ومن ثم الاستفادة من المعلومات التي
                                يوفرها التحليل المالي لهم في ترشيد قراراتهم المالية ذات
                                العلاقة بالمشروع.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>العاملين في مكاتب المحاسبة والمراجعة.</li>
                                <li><i class="fa fa-check-square-o"></i>العاملين في مكتب الاستشارات المالية والادارية.</li>
                                <li><i class="fa fa-check-square-o"></i>المحاسبون والمدراء الماليين للشركات والمؤسسات.</li>
                                <li><i class="fa fa-check-square-o"></i>العاملون في القطاع المصرفي (البنوك).</li>
                                <li><i class="fa fa-check-square-o"></i>المستثمرون – أصحاب رؤوس الاموال.</li>
                                <li><i class="fa fa-check-square-o"></i>العاملون في تداول الاسهم والسندات.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>تحليل نسب التداول.</li>
                                <li><i class="fa fa-check-square-o"></i>تحليل كفاءة النشاط.</li>
                                <li><i class="fa fa-check-square-o"></i>تحليل الرفع المالي.</li>
                                <li><i class="fa fa-check-square-o"></i>تحليل ربحية المشروع.</li>
                                <li><i class="fa fa-check-square-o"></i>تحليل قيمة المنشأة.</li>
                                <li><i class="fa fa-check-square-o"></i>تطبيقات على كل موضوع.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>21165835</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>3 أيام / 15 ساعة</li>
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
