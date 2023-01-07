<!DOCTYPE html>
<html lang="{{ app()->getLocale('en') }}">
<head>
    @include('layouts.website.head')
</head>

<body dir="{{ app()->isLocale('en') ? 'ltr' : 'rtl' }}">

    <!-- Preloader Start-->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- Preloader End -->

    @section('app') @include('layouts.website.header') @show

    @yield('content')

    @section('footer')
        <!-- Footer START -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Column 1 Start -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <h3>@lang('app.About')</h3>
                        <div class="mt-25">
                            <img loading="lazy" src="{{ asset('web/img/logos/logo-footer.png') }}" alt="footer-logo">
                            <p class="mt-25" style="text-align: justify">@lang('app.About_Desc')</p>
                            <div class="footer-social-icons mt-25">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Column 1 End -->

                    <!-- Column 2 Start -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <h3>@lang('app.Quick_Links')</h3>
                        <ul class="footer-list">
                            <li><a href="{{ route('routeName', ['id' => 'aramco-wpr']) }}">@lang('courses.Aramco_WPR')</a>
                            </li>
                            <li><a
                                    href="{{ route('routeName', ['id' => 'courses-schedule']) }}">@lang('app.Courses_Schedule')</a>
                            </li>
                            <li><a href="{{ route('routeName', ['id' => 'osh-courses']) }}">@lang('domains.OSH')</a></li>
                            <li><a
                                    href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">@lang('domains.Financial_Admin')</a>
                            </li>
                            <li><a
                                    href="{{ route('routeName', ['id' => 'env-foodSafety-courses']) }}">@lang('domains.Env_FoodSafety')</a>
                            </li>
                            </li>
                            <li><a href="{{ route('routeName', ['id' => 'contact-us']) }}">@lang('app.ContactUs')</a></li>
                        </ul>
                    </div>
                    <!-- Column 2 End -->

                    <!-- Column 3 Start -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <h3>@lang('welcome.Popular_Courses')</h3>
                        <div class="mt-25">
                            <!-- Post Start -->
                            <div class="footer-recent-post clearfix">
                                <div class="footer-recent-post-thumb">
                                    <img loading="lazy" src="{{ asset('web/img/mini-logos/aramco.png') }}" alt="img">
                                </div>
                                <div class="footer-recent-post-content">
                                    <span>@lang('course-det.EverySunday')</span>
                                    <a
                                        href="{{ route('routeName', ['id' => 'aramco-wpr']) }}">@lang('courses.Aramco_WPR')</a>
                                </div>
                            </div>
                            <!-- Post End -->
                            <!-- Post Start -->
                            <div class="footer-recent-post clearfix">
                                <div class="footer-recent-post-thumb">
                                    <img loading="lazy" src="{{ asset('web/img/mini-logos/safety-observer.jpg') }}" alt="img">
                                </div>
                                <div class="footer-recent-post-content">
                                    <span>@lang('course-det.EveryWednesday')</span>
                                    <a
                                        href="{{ route('routeName', ['id' => 'safety-observer-in-accordance-with-approved-regulations']) }}">@lang('courses.Safety_Observer_in_Accordance_with_Approved_Regulations')</a>
                                </div>
                            </div>
                            <!-- Post End -->
                            <!-- Post Start -->
                            <div class="footer-recent-post clearfix">
                                <div class="footer-recent-post-thumb">
                                    <img loading="lazy" src="{{ asset('web/img/mini-logos/feasibility-study.png') }}" alt="img">
                                </div>
                                <div class="footer-recent-post-content">
                                    <span>@lang('course-det.EveryMonday')</span>
                                    <a
                                        href="{{ route('routeName', ['id' => 'economic-feasibility-studies']) }}">@lang('courses.Economic_Feasibility_Studies')</a>
                                </div>
                            </div>
                            <!-- Post End -->
                        </div>
                    </div>
                    <!-- Column 3 End -->

                    <!-- Column 4 Start -->
                    <div class="col-md-2 col-sm-6 col-12">
                        <h3>@lang('app.Services')</h3>
                        <div class="footer-tags mt-25">
                            <a
                                href="{{ route('routeName', ['id' => 'services']) }}">@lang('services.Training_Needs_Analysis')</a>
                            <a href="{{ route('routeName', ['id' => 'services']) }}">@lang('services.Job_Risk_Analysis')</a>
                            <a
                                href="{{ route('routeName', ['id' => 'services']) }}">@lang('services.Training_Solutions')</a>
                            <a
                                href="{{ route('routeName', ['id' => 'services']) }}">@lang('services.After_Training_Services')</a>
                            <a
                                href="{{ route('routeName', ['id' => 'services']) }}">@lang('services.Measure_the_Return_on_Training')</a>
                            <a
                                href="{{ route('routeName', ['id' => 'services']) }}">@lang('services.Consultation_Services')</a>
                        </div>
                    </div>
                    <!-- Column 4 End -->
                </div>

                <!-- Footer Bar Start -->
                <div class="footer-bar">
                    <p>{{ now()->year }} © @lang('app.All_Rights_Reserved')&nbsp;<span
                            class="primary-color">@lang('app.ATI')</span></p>
                </div>
                <!-- Footer Bar End -->
            </div>
        </footer>
        <!-- Footer END -->
    @show
    <!-- Scroll to top button Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <!-- Scroll to top button End -->

    @include('layouts.website.scripts')

</body>

</html>
