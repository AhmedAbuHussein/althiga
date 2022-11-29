@extends('layouts.app')

@section('title', 'Safety and Protection in Hospitals')

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
            <h1>@lang('courses.Safety_and_Protection_in_Hospitals')</h1>
            <ul class="fa">
                <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH_Courses')</a></li>
                <li><a
                        href="{{ route('routeName', ['id' => 'safety-and-protection-in-hospitals']) }}">@lang('courses.Safety_and_Protection_in_Hospitals')</a>
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
                            <p>تعتبر المخاطر الموجودة في المستشفيات حقيقة لا يمكن تجاهلها حيث يتم التعامل مع مواد خطرة
                                وغازات متعددة وسوائل قابلة للاشتعال ، لذلك فإن العمل في المستشفيات من أكثر الاماكن خطورة حسب
                                معايير الاوشا الامريكية ، كما تتعدد المخاطر في المستشفيات من ناحية تقديم الرعاية الصحية بدون
                                أخطاء للمحافظة على سلامة المرضى ومن ناحية أخرى لتطبيق اشترطات ومعايير السلامة والحماية من
                                الحريق الخاصة بالمستشفيات لحماية العاملين والمرضى من المخاطر المختلفة ، وتعتمد هذه الدورة
                                على التعريف بالمخاطر في المستشفيات وكيفية ادارتها بالشكل الصحيح من خلال معرفة اشتراطات
                                السلامة والحماية من الحريق حسب القوانين واللوائح والمعايير التي حددتها الجهات المعنية داخل
                                المملكة العربية السعودية وأيضا التعرف على أخر التحديثات للجهات الدولية المتخصصة في مجال
                                السلامة والصحة المهنية في المستشفيات.
                            </p>
                            <h4>الفئة المستهدفة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>من يرغب العمل في مجال السلامة والصحة المهنية في
                                    المستشفيات والمراكز الصحية والمدن الطبية في القطاع الحكومي والخاص.</li>
                                <li><i class="fa fa-check-square-o"></i>مسئولي وأخصائي السلامة والصحة المهنية في جميع
                                    المنشآت الطبية في القطاع الحكومي والخاص.</li>
                                <li><i class="fa fa-check-square-o"></i>مسؤولي الجودة والتدريب والموارد البشرية والأمن
                                    والإطفاء في جميع المنشات الطبية في القطاع الحكومي والخاص.</li>
                            </ul>
                            <br />
                            <h4>محاور الدورة</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>مقدمة عن السلامة في المستشفيات.
                                    <ul style="padding-right: 20px;">
                                        <li><i class="fa fa-dot-circle-o"></i>التعريف بأهمية السلامة في المستشفيات وأهدافها.
                                        </li>
                                        <li><i class="fa fa-dot-circle-o"></i>مهام ومسئوليات مختص السلامة في المستشفيات.
                                        </li>
                                        <li><i class="fa fa-dot-circle-o"></i>التعرف على المخاطر وأنواعها وتصنيفاتها.</li>
                                    </ul>
                                </li>

                                <li><i class="fa fa-check-square-o"></i>اللوائح والقوانين والمعايير الحكومية والدولية الخاصة
                                    بالسلامة والحماية من الحريق
                                    في المستشفيات.</li>

                                <li><i class="fa fa-check-square-o"></i>اشتراطات ومتطلبات السلامة والحماية من الحريق في
                                    المستشفيات.
                                    <ul style="padding-right: 20px;">
                                        <li><i class="fa fa-dot-circle-o"></i>انواع الحرائق وطرق الوقاية منها.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>أنواع طفايات الحريق وطرق الاستخدام والانواع
                                            المناسبة للاستخدام في المستشفيات.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>أنظمة مكافحة الحريق.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>أنظمة الانذار من الحريق.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>كيفية انشاء وتطوير خطة الطوارئء والاخلاء في
                                            المستشفيات.</li>
                                    </ul>
                                </li>

                                <li><i class="fa fa-check-square-o"></i>إدارة المخاطر في المستشفيات.
                                    <ul style="padding-right: 20px;">
                                        <li><i class="fa fa-dot-circle-o"></i>مخاطر المعدات والاجهزة وطرق التحكم بها.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>إدارة النفايات الطبية وطرق التخلص منها
                                            والتعامل مع المواد الخطرة وطرق التحكم بها.</li>
                                    </ul>
                                </li>

                                <li><i class="fa fa-check-square-o"></i>التفتيش والمتابعة على اشتراطات السلامة في
                                    المستشفيات.
                                    <ul style="padding-right: 20px;">
                                        <li><i class="fa fa-dot-circle-o"></i>الاشتراطات العامة للتخزين في المستودعات الطبية
                                            وطرق التفتيش والمتابعة.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>المعايير الدولية للتفتيش على المستشفيات.</li>
                                        <li><i class="fa fa-dot-circle-o"></i>التحقيق في حوادث المستشفيات.</li>
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
                                    <li><i style="font-weight: 500">رقم إعتماد الدورة</i>211663337</li>
                                    <li><i style="font-weight: 500">مدة الدورة:</i>15 ساعة / 3 أيام</li>
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
