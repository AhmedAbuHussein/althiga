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
            <h1>@lang('courses.OSH_Principles_Constructions')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'osh-principles-constructions']) }}">@lang('courses.OSH_Principles_Constructions')</a>
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
                            <p>تتوافق هذه الدورة التدريبية مع الاحتياجات التدريبية للأفراد والشركات الذين يرغبون في معرفة
                                معايير وقواعد السلامة والصحة المهنية الواجب إتباعها في مواقع الإنشاءات للحد من المخاطر التي
                                قد تواجهم أثناء العمل مثل مخاطر (السقوط والحفر والسقالات والرافعات والسلالم والاعمال
                                الكهربائية والاماكن المغلقة ومناولة المواد واعمال اللحام والقطع وغيرها) وذلك طبقا لتشريعات
                                وقوانين ادارة السلامة والصحة المهنية بوزارة العمل الامريكية
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>من يرغب العمل في مجال السلامة والصحة المهنية في مجال الإنشاءات أو المقاولات.</li>
                                <li><i class="fa fa-check-square-o"></i>مسئولي وأخصائي السلامة والصحة المهنية والصيانة  في جميع شركات المقاولات بمختلف مجالاتها.</li>
                                <li><i class="fa fa-check-square-o"></i>ومسئولي السلامة بالجهات الحكومية ذات العلاقة بالاشراف على المشاريع.</li>
                                <li><i class="fa fa-check-square-o"></i>المهندسين بجميع تخصصاتهم.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مقدمة الأوشا وتشريعات السلامة والصحة المهنية.</li>
                                <li><i class="fa fa-check-square-o"></i>إدارة السلامة والصحة المهنية – المسئوليات والمهام.</li>
                                <li><i class="fa fa-check-square-o"></i>الحماية من مخاطر السقوط.</li>
                                <li><i class="fa fa-check-square-o"></i>مهمات الوقاية الشخصية.</li>
                                <li><i class="fa fa-check-square-o"></i>الصحة المهنية والمخاطر المختلفة في المواقع الإنشائية.</li>
                                <li><i class="fa fa-check-square-o"></i>إجراءات السلامة للعمل داخل الأماكن المغلقة او المحصورة.</li>
                                <li><i class="fa fa-check-square-o"></i>مناولة المواد وإجراءات التخزين الآمنة.</li>
                                <li><i class="fa fa-check-square-o"></i>قواعد وتعليمات السلامة وسبل الحماية الواجب إتباعها في مواقع الإنشاءات.</li>
                                <li><i class="fa fa-check-square-o"></i>اشتراطات السلامة والوقاية للعمل على السقالات.</li>
                                <li><i class="fa fa-check-square-o"></i>الوقاية من الحريق – مقدمة عن الحرائق وانواعها واسبابها.</li>
                                <li><i class="fa fa-check-square-o"></i>مكافحة الحريق.</li>
                                <li><i class="fa fa-check-square-o"></i>السلامة في أعمال الحفريات.</li>
                                <li><i class="fa fa-check-square-o"></i>شروط السلامة المتعلقة باستخدام الروافع وملحقاتها.</li>
                                <li><i class="fa fa-check-square-o"></i>إجراءات السلامة للمركبات الصناعية.</li>
                                <li><i class="fa fa-check-square-o"></i>إجراءات عزل الطاقة Lock out / Tag out .</li>
                                <li><i class="fa fa-check-square-o"></i>السلامة من الكهرباء.</li>
                                <li><i class="fa fa-check-square-o"></i>إدارة خطط الطوارئ.</li>
                                <li><i class="fa fa-check-square-o"></i>خطط الوقاية من الحريق.</li>
                                <li><i class="fa fa-check-square-o"></i>إدارة السلامة الإنشائية.</li>
                            </ul>
                        </div>
                        <!-- Left Side End -->

                        <!-- Right Side Start -->
                        <div class="col-md-4 col-sm-4 col-12">
                            <h4>معلومات عن الدورة</h4>
                            <div class="project-single-info">
                                <ul>
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i> 211673725</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>30 ساعة / 5  أيام</li>
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
