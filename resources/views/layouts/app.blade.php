<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('web/img/logos/Althiga_hand.png') }}" />

    <title>{{ config('app.name', 'ATI') }} - @yield('title')</title>

    <?php $lang = app()->isLocale('en') ? '' : '_rtl'; ?>
    <?php $dir = app()->isLocale('en') ? 'ltr' : 'rtl'; ?>

    <link rel="stylesheet" href="{{ asset('web/css/bootstrap' . $lang . '.min.css') }}">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="{{ asset('web/css/font-awesome' . $lang . '.css') }}">

    <!-- Icomoon -->
    <link rel="stylesheet" href="{{ asset('web/css/icomoon' . $lang . '.css') }}">

    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('web/css/swiper' . $lang . '.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/slider' . $lang . '.css') }}">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('web/css/animate' . $lang . '.css') }}">

    <!-- Color Switcher -->
    <link rel="stylesheet" href="{{ asset('web/css/switcher' . $lang . '.css') }}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel' . $lang . '.css') }}">

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('web/css/default' . $lang . '.css') }}">
    <link rel="stylesheet" id="colors" href="{{ asset('web/css/styles' . $lang . '.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>

    <script src="https://kit.fontawesome.com/c013fd8535.js" crossorigin="anonymous"></script>
</head>

<body dir="{{ $dir }}">
    @section('app')
        <!-- Preloader Start-->
        <div id="preloader">
            <div class="row loader">
                <div class="loader-icon"></div>
            </div>
        </div>
        <!-- Preloader End -->


        <!-- Top-Bar START -->
        <div id="top-bar" class="hidden-sm-down">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-12">
                        <div class="top-bar-welcome">
                            <ul>
                                <li>@lang('app.WelcomeTo')</li>
                            </ul>
                        </div>
                        <div class="top-bar-info">
                            <ul dir="ltr">
                                <li><i class="fa fa-phone"></i>&nbsp;(+966) 9200 26 1 26
                                <li>
                                <li><i class="fa fa-envelope"></i>&nbsp;<a
                                        href="mailto:info@althiga.net?subject=Wesbite%20Contact"
                                        style="color: white; text-decoration: underline;"
                                        onMouseOver="this.style.color='#00F'"
                                        onMouseOut="this.style.color='#ffffff'">info@althiga.net</a>
                                <li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <ul class="social-icons hidden-md-down">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top-Bar END -->


        <!-- Navbar START -->
        <header>
            <nav id="navigation4" class="container navigation">
                <div class="nav-header">
                    <a class="nav-brand" href="{{ route('routeName', ['id' => '']) }}">
                        <img loading="lazy" src="{{ asset('web/img/logos/logo.png') }}" class="main-logo" alt="logo" id="main_logo">
                    </a>
                    <div class="nav-toggle"></div>
                </div>
                <div class="nav-menus-wrapper">
                    <ul class="nav-menu align-to-left">
                        <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>

                        <li><a href="#">@lang('app.About')</a>
                            <ul class="nav-dropdown">
                                <li><a href="{{ route('routeName', ['id' => 'about-us']) }}">@lang('app.AboutUs')</a></li>
                                <li><a
                                        href="{{ route('routeName', ['id' => 'virtual-tour']) }}">@lang('app.Virtual_Tour')</a>
                                </li>
                                <li><a href="{{ route('routeName', ['id' => 'services']) }}">@lang('app.Services')</a></li>
                                <li><a
                                        href="{{ route('routeName', ['id' => 'accreditations-partnerships']) }}">@lang('app.Local_International_Accreditations_Partnerships')</a>
                                </li>
                                <li><a
                                        href="{{ route('routeName', ['id' => 'valuable-customers']) }}">@lang('app.Valuable_Customers')</a>
                                </li>
                                <li><a
                                        href="{{ route('routeName', ['id' => 'pictures-for-courses']) }}">@lang('app.Pictures_for_Courses')</a>
                                </li>
                            </ul>
                        </li>

                        <li><a href="#">@lang('app.Domains_Courses')</a>
                            <div class="megamenu-panel">
                                <div class="megamenu-lists">
                                    <ul class="megamenu-list list-col-5">
                                        <li class="megamenu-list-title">
                                            <h6>
                                                <a href="{{ route('routeName', ['id' => 'osh-courses']) }}">
                                                    @lang('domains.OSH')
                                                </a>
                                            </h6>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'osh-principles-general-industries']) }}">@lang('courses.OSH_Principles_General_Industries')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'osh-principles-constructions']) }}">@lang('courses.OSH_Principles_Constructions')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'safety-in-administrative-buildings']) }}">@lang('courses.Safety_in_Administrative_Buildings')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'managing-emergency-and-crisis-plans']) }}">@lang('courses.Managing_Emergency_and_Crisis_Plans')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'osh-management-in-work-environment']) }}">@lang('courses.OSH_Management_in_Work_Environment')</a>
                                        </li>
                                        <li><a href="{{ route('routeName', ['id' => 'sms']) }}">@lang('courses.SMS')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'safety-in-enclosed-or-confined-spaces']) }}">@lang('courses.Safety_in_Enclosed_or_Confined_Spaces')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'safety-and-protection-in-hospitals']) }}">@lang('courses.Safety_and_Protection_in_Hospitals')</a>
                                        </li>
                                    </ul>
                                    <ul class="megamenu-list list-col-5">
                                        <li><a href="#">@lang('courses.Using_Scaffolding_Efficiently')</a></li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'defensive-driving']) }}">@lang('courses.Defensive_Driving')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'safety-observer-in-accordance-with-approved-regulations']) }}">@lang('courses.Safety_Observer_in_Accordance_with_Approved_Regulations')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'safety-team-member-refreshment']) }}">@lang('courses.Safety_Team_Member_Refreshment')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'safety-team-manager-refreshment']) }}">@lang('courses.Safety_Team_Manager_Refreshment')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'occupational-safety-officer-safety-manager']) }}">@lang('courses.Occupational_Safety_Officer_Safety_Manager')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'skills-of-security-and-safety-of-facilities']) }}">@lang('courses.Skills_of_Security_and_Safety_of_Facilities')</a>
                                        </li>
                                        <li><a href="#">@lang('courses.OSH_Officer_Skills_Development_Level1')</a></li>
                                        <li><a href="#">@lang('courses.OSH_Officer_Skills_Development_Level2')</a></li>
                                    </ul>
                                    <ul class="megamenu-list list-col-5">
                                        <li class="megamenu-list-title">
                                            <h6>
                                                <a href="{{ route('routeName', ['id' => 'financial-admin-courses']) }}">
                                                    @lang('domains.Financial_Admin')
                                                </a>
                                            </h6>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'strategic-planning']) }}">@lang('courses.Strategic_Planning')</a>
                                        </li>
                                        <li><a href="#">@lang('courses.Social_Responsibility')</a></li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'how-to-write-your-project']) }}">@lang('courses.How_to_Write_Your_Project')</a>
                                        </li>
                                        <li><a href="#">@lang('courses.QHSE')</a></li>
                                        <li><a
                                                href="#">@lang('courses.Social_Responsibility_Programs_Specialist_Skills_Development')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'managing-human-crowds']) }}">@lang('courses.Managing_Human_Crowds')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'crisis-management']) }}">@lang('courses.Crisis_Management')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'time-management']) }}">@lang('courses.Time_Management')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'the-art-of-dealing-with-customer-complaints-and-objections']) }}">@lang('courses.The_Art_of_Dealing_With_Customer_Complaints_and_Objections')</a>
                                        </li>
                                    </ul>
                                    <ul class="megamenu-list list-col-5">
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'sales-and-marketing']) }}">@lang('courses.Sales_and_Marketing')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'hr-management']) }}">@lang('courses.HR_Management')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'the-art-of-customer-service']) }}">@lang('courses.The_Art_of_Customer_Service')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'traits-of-successful-leadership']) }}">@lang('courses.Traits_of_Successful_Leadership')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'economic-feasibility-studies']) }}">@lang('courses.Economic_Feasibility_Studies')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'financial-analysis-using-financial-ratios']) }}">@lang('courses.Financial_Analysis_Using_Financial_Ratios')</a>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'accounting-for-nonaccountants']) }}">@lang('courses.Accounting_for_nonAccountants')</a>
                                        </li>
                                    </ul>
                                    <ul class="megamenu-list list-col-5">
                                        <li class="megamenu-list-title">
                                            <h6>
                                                <a href="{{ route('routeName', ['id' => 'env-foodSafety-courses']) }}">
                                                    @lang('domains.Env_FoodSafety')
                                                </a>
                                            </h6>
                                        </li>
                                        <li><a
                                                href="{{ route('routeName', ['id' => 'food-management-and-safety-system-first-reviewer-iso22000']) }}">@lang('courses.Food_Management_and_Safety_System_First_Reviewer_ISO22000')</a>
                                        </li>
                                        <br />
                                        <li class="megamenu-list-title">
                                            <h6>@lang('domains.Others')</h6>
                                        </li>
                                        <li><a href="#">@lang('domains.Tourism_Hospitality')</a>
                                        </li>
                                        <li><a href="#">@lang('domains.Social_SelfDev')</a>
                                        </li>
                                        <li><a href="#">@lang('domains.Legal')</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li><a
                                href="{{ route('routeName', ['id' => 'aramco-wpr']) }}">@lang('app.Aramco_Contractors_Courses')</a>
                        </li>

                        <li><a
                                href="{{ route('routeName', ['id' => 'courses-schedule']) }}">@lang('app.Courses_Schedule')</a>
                        </li>

                        <li><a href="{{ route('routeName', ['id' => 'contact-us']) }}">@lang('app.ContactUs')</a></li>

                        @if (App::isLocale('en'))
                            <li>
                                <img loading="lazy" src="{{ asset('web/img/logos/ar.png') }}" alt="ar">
                            </li>
                        @elseif (App::isLocale('ar'))
                            <li>
                                <a href="{{ url('locale/en') }}">
                                    <img loading="lazy" src="{{ asset('web/img/logos/en.png') }}" alt="ar">
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Navbar END -->
    @show

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

    <!-- Jquery -->
    <script src="{{ asset('web/js/jquery.min.js') }}"></script>

    <!--Popper JS-->
    <script src="{{ asset('web/js/popper.min.js') }}"></script>

    <!-- Bootstrap JS-->
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>

    <!-- Owl Carousel-->
    <script src="{{ asset('web/js/owl.carousel' . $lang . '.js') }}"></script>

    <!-- Navbar JS -->
    <script src="{{ asset('web/js/navigation.js') }}"></script>
    <script src="{{ asset('web/js/navigation.fixed.js') }}"></script>

    <!-- Wow JS -->
    <script src="{{ asset('web/js/wow.min.js') }}"></script>

    <!-- Countup -->
    <script src="{{ asset('web/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('web/js/waypoints.min.js') }}"></script>

    <!-- Tabs -->
    <script src="{{ asset('web/js/tabs.min.js') }}"></script>

    <!-- Yotube Video Player -->
    <script src="{{ asset('web/js/jquery.mb.YTPlayer.min.js') }}"></script>

    <!-- Swiper Slider -->
    <script src="{{ asset('web/js/swiper.min.js') }}"></script>

    <!-- Isotop -->
    <script src="{{ asset('web/js/isotope.pkgd.min.js') }}"></script>

    <!- - Modernizr -->
        <script src="{{ asset('web/js/modernizr.js') }}"></script>

        <!-- Switcher JS -->
        <script src="{{ asset('web/js/switcher.js') }}"></script>

        <!-- Google Map -->
        <script src="{{ asset('web/js/map.js') }}"></script>

        <!-- Main JS -->
        <script src="{{ asset('web/js/main.js') }}"></script>

</body>

</html>
