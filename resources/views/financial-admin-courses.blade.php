@extends('layouts.app')

@section('title', 'Financial Admin Courses Courses')

@section('app')
    @parent
@endsection

@php
$dir = app()->isLocale('en') ? 'left' : 'right';
@endphp

@section('content')

    <!-- Page Title START -->
    <div class="page-title-section" style="background-image: url({{ asset('web/img/sub-pages-background.png') }});">
        <div class="container">
            <h1>@lang('domains.Financial_Admin_Courses')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">@lang('domains.Financial_Admin_Courses')</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Page Title END -->

    <!-- Service Boxes START -->
    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder">
                <span>الدورات المتاحة في</span>
                <h3>@lang('domains.Financial_Admin')</h3>
                <div class="section-heading-line"></div>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore
                    et dolore magna aliqua.</p> --}}
            </div>

            <div class="row mt-50">

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number-1">
                                <h5>@lang('no.1')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'strategic-planning']) }}">@lang('courses.Strategic_Planning')</a>
                                </h4>
                            </div>
                        </div>
                        <p>العالم حولنا يتغير بدرجة كبيرة جدا فهناك دول ظهرت علي السطح وأصبحت لها مكانة كبيرة بينما
                            بالأمس القريب لم يكن لها هذا الدور .</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'strategic-planning']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.2')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'how-to-write-your-project']) }}">@lang('courses.How_to_Write_Your_Project')</a>
                                </h4>
                            </div>
                        </div>
                        <p>تنمية معارف واتجاهات ومهارات المشاركين في مجال كتابةخطط المشاريع ليتمكنوا من إدارة المشاريع
                            بكفاءة وفاعلية وتحقيق نتائج عالية ومتميزة.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'how-to-write-your-project']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.3')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'managing-human-crowds']) }}">@lang('courses.Managing_Human_Crowds')</a>
                                </h4>
                            </div>
                        </div>
                        <p>تدريب المشاركين من المعنيين بأدارة الحشود البشرية على الاجراءات الصحيحة والوقائية وسيتم
                            التركيز على تقنيات ادارة الحشود.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'managing-human-crowds']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.4')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'crisis-management']) }}">@lang('courses.Crisis_Management')</a>
                                </h4>
                            </div>
                        </div>
                        <p>إكساب المشاركين المعلومات والمهارات الأساسية اللازمة التى تمكنهم من إدارة الازمات بكفاءة و
                            فعالية ليتمكنوا من النجاح في تحقيق أهدافهم على مستوى الفرد والمؤسسة.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'crisis-management']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.5')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'time-management']) }}">@lang('courses.Time_Management')</a>
                                </h4>
                            </div>
                        </div>
                        <p>تهدف الدورة الى تنمية إحساس المشاركين بأهمية الاستثمار الأمثل للوقت، وكذلك مجالات عوامل ضياع
                            الوقت وكيفية تخطيط وتنظيم وإدارة الوقت.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'time-management']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.6')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'the-art-of-dealing-with-customer-complaints-and-objections']) }}">@lang('courses.The_Art_of_Dealing_With_Customer_Complaints_and_Objections')</a>
                                </h4>
                            </div>
                        </div>
                        <p>تهدف الدورة الى اكتساب مهارات التميز فى خدمة العملاء والتعامل مع شكاوى واعتراضات العملاء
                            المنزعجين وكسب رضاهم.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'the-art-of-dealing-with-customer-complaints-and-objections']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.7')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'sales-and-marketing']) }}">@lang('courses.Sales_and_Marketing')</a>
                                </h4>
                            </div>
                        </div>
                        <p>تهدف هذه الدورة إلى إكساب المتدربين بالمعارف والمهارات والسلوكيات الرئيسة الواجب توافرها لدى
                            العاملين بهذا القطاع.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'sales-and-marketing']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.8')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'hr-management']) }}">@lang('courses.HR_Management')</a>
                                </h4>
                            </div>
                        </div>
                        <p>إلمام المتدرب بالمفاهيم الأساسية الأولية في إدارة الموارد البشرية وكيفية تدريب وتنمية الموارد
                            البشرية العاملة داخل المنظمة.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'hr-management']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.9')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'the-art-of-customer-service']) }}">@lang('courses.The_Art_of_Customer_Service')</a>
                                </h4>
                            </div>
                        </div>
                        <p>هذا البرنامج التدريبي يعرض مهارات التعامل مع جمهور عملاء الشركات، والمؤسسات والهيئات وطرق
                            التعامل معهم.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'the-art-of-customer-service']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.10')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'traits-of-successful-leadership']) }}">@lang('courses.Traits_of_Successful_Leadership')</a>
                                </h4>
                            </div>
                        </div>
                        <p>تهدف الدورة الى اكتساب المهارات القيادية اللازمة للقائد الناجح من خلال التميز بين القيادة
                            والإدارة ، والتعرف على نظريات وأنماط القيادة واكتشاف كيفية صناعة القائد.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'traits-of-successful-leadership']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.11')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'economic-feasibility-studies']) }}">@lang('courses.Economic_Feasibility_Studies')</a>
                                </h4>
                            </div>
                        </div>
                        <p>إلمام المتدرب بالمفاهيم الأساسية الأولية في إدارة الموارد البشرية وكيفية تدريب وتنمية الموارد
                            البشرية العاملة داخل المنظمة.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'economic-feasibility-studies']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.12')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'financial-analysis-using-financial-ratios']) }}">@lang('courses.Financial_Analysis_Using_Financial_Ratios')</a>
                                </h4>
                            </div>
                        </div>
                        <p>إن التحليل المالي بمفهومه المعاصر يمتد ليشمل المساعدة في تخطيط أوجه النشاط المستقبلي. وتخطيط
                            عملية الاستثمار.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'financial-analysis-using-financial-ratios']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.13')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'accounting-for-nonaccountants']) }}">@lang('courses.Accounting_for_nonAccountants')</a>
                                </h4>
                            </div>
                        </div>
                        <p>إكتساب المشاركين المهارات اللازمة في فهم الأساليب والمفاهيم المالية الأساسية وكيفية استخدامها
                            في قراءة وتحليل وتفسير البيانات المالية والحسابات.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'accounting-for-nonaccountants']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12"></div>
                <div class="col-md-4 col-sm-7 col-12"></div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.14')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a href="#">@lang('courses.Social_Responsibility')</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.15')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a href="#">@lang('courses.QHSE')</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.16')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="#">@lang('courses.Social_Responsibility_Programs_Specialist_Skills_Development')</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service Boxes END -->

@endsection

@section('footer')
    @parent
@endsection
