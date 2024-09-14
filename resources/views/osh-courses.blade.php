@extends('layouts.app')

@section('title', 'OSH Courses')

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
            <h1>@lang('domains.OSH')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
            </ul>
        </div>
    </div>
    <!-- Page Title END -->

    <!-- Service Boxes START -->
    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder">
                <span>الدورات المتاحة في</span>
                <h3>@lang('domains.OSH')</h3>
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
                                        href="{{ route('routeName', ['id' => 'osh-principles-general-industries']) }}">@lang('courses.OSH_Principles_General_Industries')</a>
                                </h4>
                            </div>
                        </div>
                        <p>تهدف هذه الدورة الى تحديد مسئوليات صاحب العمل والعمال المعنيين
                            بالسلامة والصحة المهنية،
                            التعرف على المخاطر المختلفة الناتجة من الاعمال وكيفية تجنبها والسيطرة عليها.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'osh-principles-general-industries']) }}">@lang('course-det.Course_Details')</a>
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
                                        href="{{ route('routeName', ['id' => 'osh-principles-constructions']) }}">@lang('courses.OSH_Principles_Constructions')</a>
                                </h4>
                            </div>
                        </div>
                        <p>توافق هذه الدورة التدريبية مع الاحتياجات التدريبية للأفراد والشركات
                            الذين يرغبون في معرفة
                            معايير وقواعد السلامة والصحة المهنية الواجب إتباعها في مواقع الإنشاءات للحد من المخاطر التي
                            قد تواجهم أثناء العمل.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'osh-principles-constructions']) }}">@lang('course-det.Course_Details')</a>
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
                                        href="{{ route('routeName', ['id' => 'managing-emergency-and-crisis-plans']) }}">@lang('courses.Managing_Emergency_and_Crisis_Plans')</a>
                                </h4>
                            </div>
                        </div>
                        <p>الهدف من هذه الدورة هو تطوير مهارات المتدربين وزيادة قدراتهم لتنفيذ
                            السياسات والخطط
                            والإجراءات اللازمة لإدارة خطط الطوارئ والإخلاء والاستعداد لمواجهة الأزمات والكوارث.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'managing-emergency-and-crisis-plans']) }}">@lang('course-det.Course_Details')</a>
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
                                        href="{{ route('routeName', ['id' => 'safety-team-member-refreshment']) }}">@lang('courses.Safety_Team_Member_Refreshment')</a>
                                </h4>
                            </div>
                        </div>
                        <p>الهدف من الدورة هو تنشيط المعلومات والمهارات لدى فريق السلامة وحيث
                            انه هو الاداة الفعالة
                            للمحافظة على نشر وتأكيد مفهوم وثقافة السلامة والعمل على تطبيق الشروط والتعليمات المتعلقة
                            بسلامة العاملين .</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'safety-team-member-refreshment']) }}">@lang('course-det.Course_Details')</a>
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
                                        href="{{ route('routeName', ['id' => 'osh-management-in-work-environment']) }}">@lang('courses.OSH_Management_in_Work_Environment')</a>
                                </h4>
                            </div>
                        </div>
                        <p>هدف هذه الدورة الى تزويد المتدربين بالمهارات اللازمة للتعرف على
                            المخاطر في بيئة العمل وكيفية
                            السيطرة عليها فضلا عن طرق التفتيش على المواقع في مختلف المجالات.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'osh-management-in-work-environment']) }}">@lang('course-det.Course_Details')</a>
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
                                        href="{{ route('routeName', ['id' => 'safety-in-enclosed-or-confined-spaces']) }}">@lang('courses.Safety_in_Enclosed_or_Confined_Spaces')</a>
                                </h4>
                            </div>
                        </div>
                        <p>هدف البرنامج الى توعية وتدريب جميع العاملين في الاماكن المغلقة أو
                            المحصورة في جميع أنواع
                            الاعمال سواء الإنشائية أو الصناعية مثل المقاولات والحفريات والصرف الصحي والتنقيب وغيرها من
                            الاعمال.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'safety-in-enclosed-or-confined-spaces']) }}">@lang('course-det.Course_Details')</a>
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
                                        href="{{ route('routeName', ['id' => 'safety-and-protection-in-hospitals']) }}">@lang('courses.Safety_and_Protection_in_Hospitals')</a>
                                </h4>
                            </div>
                        </div>
                        <p>عتبر المخاطر الموجودة في المستشفيات حقيقة لا يمكن تجاهلها حيث يتم
                            التعامل مع مواد خطرة
                            وغازات متعددة وسوائل قابلة للاشتعال ، لذلك فإن العمل في المستشفيات من أكثر الاماكن خطورة حسب
                            معايير الاوشا الامريكية.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'safety-and-protection-in-hospitals']) }}">@lang('course-det.Course_Details')</a>
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
                                        href="{{ route('routeName', ['id' => 'safety-observer-in-accordance-with-approved-regulations']) }}">@lang('courses.Safety_Observer_in_Accordance_with_Approved_Regulations')</a>
                                </h4>
                            </div>
                        </div>
                        <p>توي البرنامج التدريبي على اهم المواضيع التي يجب ان يتعرف عليها مراقب
                            السلامة والمهارات التي
                            يجب ان يكتسبها المتدرب. والتي تضمن تصرفه السليم وتقديم المساعدة في حالات الحرائق او حالات
                            الطوارئ او وقوع حوادث العمل.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'safety-observer-in-accordance-with-approved-regulations']) }}">@lang('course-det.Course_Details')</a>
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
                                <h4><a href="{{ route('routeName', ['id' => 'sms']) }}">@lang('courses.SMS')</a></h4>
                            </div>
                        </div>
                        <p>تم نظام ادارة السلامة بالقدرة على تحديد وتحليل وتقييم السلامة الخاصة
                            بالمنشآت وبرامج الصحة
                            المهنية. ومع ظهور منهج نظام ادارة السلامة والأمان المهنيتين أصبحت المنشآت مطالبة بشكل متزايد
                            لوجود برنامج شامل للسلامة والصحة المهنية (نظام إدارة السلامة -SMS).</p>
                        <div class="service-simple-button">
                            <a href="{{ route('routeName', ['id' => 'sms']) }}">@lang('course-det.Course_Details')</a>
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
                                        href="{{ route('routeName', ['id' => 'skills-of-security-and-safety-of-facilities']) }}">@lang('courses.Skills_of_Security_and_Safety_of_Facilities')</a>
                                </h4>
                            </div>
                        </div>
                        <p>برنامج تدريبي لمختص الأمن والسلامة في المنشأت بأنواعها يوضح مهام
                            ومسئوليات مختص الأمن
                            والسلامة للمحافظة على الأرواح والممتلكات من المخاطر المحتملة، كما يوضح للمتدربين الطريقة
                            العلمية والعملية لأداء العمل والتعامل مع الحالات الأمنية.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'skills-of-security-and-safety-of-facilities']) }}">@lang('course-det.Course_Details')</a>
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
                                        href="{{ route('routeName', ['id' => 'defensive-driving']) }}">@lang('courses.Defensive_Driving')</a>
                                </h4>
                            </div>
                        </div>
                        <p>يهتم نظام ادارة السلامة بالقدرة على تحديد وتحليل وتقييم السلامة
                            الخاصة بالمنشآت وبرامج
                            الصحلقد أصبحت الحوادث المرورية تمثل وبشكل كبير هاجساً وقلقاً لكافة أفراد المجتمع وأصبحت
                            واحدة من أهم المشكلات التي تستنزف الموارد المادية والطاقات البشرية.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'defensive-driving']) }}">@lang('course-det.Course_Details')</a>
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
                                        href="{{ route('routeName', ['id' => 'safety-in-administrative-buildings']) }}">@lang('courses.Safety_in_Administrative_Buildings')</a>
                                </h4>
                            </div>
                        </div>
                        <p>نظراً لزيادة الحوادث والحرائق في المنشآت بأنواعها ( سواء الخدمية او
                            التعليمية او الادارية )
                            والتي نراها بشكل متكرر ويكون السبب بشكل كبير هو قلة الوعي والاهمال و عدم التدريب على تطبيق
                            اشتراطات السلامة وإدارة خطط الطوارئ والازمات والكوارث.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'safety-in-administrative-buildings']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-9 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.13')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'safety-team-manager-refreshment']) }}">@lang('courses.Safety_Team_Manager_Refreshment')</a>
                                </h4>
                            </div>
                        </div>
                        <p>نظراً لمهام مدير السلامة المشار إليها بلائحة الدفاع المدني فقد تم
                            تصميم البرنامج بما يتوافق
                            مع تلك المهام والمسؤوليات لتضمن تنفيذها بالطريقة الصحيحة كما تضمن توحيد آليات التنفيذ وشكل
                            التقارير الناتجة عن هذه الأعمال.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'safety-team-manager-refreshment']) }}">@lang('course-det.Course_Details')</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-9 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.14')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a
                                        href="{{ route('routeName', ['id' => 'occupational-safety-officer-safety-manager']) }}">@lang('courses.Occupational_Safety_Officer_Safety_Manager')</a>
                                </h4>
                            </div>
                        </div>
                        <p>تعتبر واجبات ومهام مدير ومسئول السلامة من المهن التي تتطلبها مختلف
                            القطاعات الخاصة والحكومية
                            حيث يتولى القائم بهذه المهنة العمل على ادارة وسياسات وخطط السلامة المهنية في المنشآت.</p>
                        <div class="service-simple-button">
                            <a
                                href="{{ route('routeName', ['id' => 'occupational-safety-officer-safety-manager']) }}">@lang('course-det.Course_Details')</a>
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
                                <h4><a href="#">@lang('courses.OSH_Officer_Skills_Development_Level1')</a>
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
                                <h4><a href="#">@lang('courses.OSH_Officer_Skills_Development_Level2')</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-7 col-12">
                    <div class="service-block">
                        <div class="clearfix">
                            <div class="service-block-number">
                                <h5>@lang('no.17')</h5>
                            </div>
                            <div class="service-block-title">
                                <h4><a href="#">@lang('courses.Using_Scaffolding_Efficiently')</a></h4>
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
