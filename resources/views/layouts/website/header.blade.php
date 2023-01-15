
<!-- Top-Bar START -->
<div id="top-bar" class="hidden-sm-down">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-12">
                <div class="top-bar-welcome">
                    <ul>
                        @php
                            $local = app()->getLocale('en') ?? 'en';
                            $welcome = $settings->where('key', "website_welcome_$local")->first();
                        @endphp
                        @if (optional($welcome)->value)
                        <li>{{ optional($welcome)->value }}</li>
                        @endif
                    </ul>
                </div>
                <div class="top-bar-info">
                    <ul dir="ltr">
                        @if (optional($settings->where("key", "phone")->first())->value)    
                            <li>
                                <i class="fa fa-phone"></i>&nbsp;{{ optional($settings->where("key", "phone")->first())->phone() }}
                            <li>
                        @endif
                            @if (optional($settings->where("key", "contact_email")->first())->value)    
                                <li><i class="fa fa-envelope"></i>&nbsp;<a
                                        href="mailto:info@althiga.net?subject=Wesbite%20Contact"
                                        style="color: white; text-decoration: underline;"
                                        onMouseOver="this.style.color='#00F'"
                                        onMouseOut="this.style.color='#ffffff'">{{ optional($settings->where("key", "contact_email")->first())->value }}</a>
                                <li>
                            @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <ul class="social-icons hidden-md-down">
                    @if (optional($settings->where("key", 'facebook_link')->first())->value) 
                        <li><a href="{{ $settings->where("key", 'facebook_link')->first()->value }}"><i class="fa fa-facebook"></i></a></li>
                    @endif
                    @if (optional($settings->where("key", 'twitter_link')->first())->value) 
                        <li><a href="{{ $settings->where("key", 'twitter_link')->first()->value }}"><i class="fa fa-twitter"></i></a></li>
                    @endif
                    @if (optional($settings->where("key", 'instagram_link')->first())->value) 
                        <li><a href="{{ $settings->where("key", 'instagram_link')->first()->value }}"><i class="fa fa-instagram"></i></a></li>
                    @endif
                    @if (optional($settings->where("key", 'youtube_link')->first())->value) 
                        <li><a href="{{ $settings->where("key", 'youtube_link')->first()->value }}"><i class="fa fa-youtube"></i></a></li>
                    @endif
                    @if (optional($settings->where("key", 'telegram_link')->first())->value) 
                        <li><a href="{{ $settings->where("key", 'telegram_link')->first()->value }}"><i class="fa fa-telegram"></i></a></li>
                    @endif
                    @if (optional($settings->where("key", 'whatsapp_link')->first())->value) 
                        <li><a href="{{ $settings->where("key", 'whatsapp_link')->first()->value }}"><i class="fa fa-whatsapp"></i></a></li>
                    @endif
                    @if (optional($settings->where("key", 'linkedin_link')->first())->value) 
                        <li><a href="{{ $settings->where("key", 'linkedin_link')->first()->value }}"><i class="fa fa-linkedin"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Top-Bar END -->

@php
    $mega_menu_leng = optional($settings->where('key', 'menu_column_count')->first())->value ?? 14; 
    $categories_in_menu = optional($settings->where('key', 'categories_in_menu')->first())->value ?? 3 ; 
@endphp

<!-- Navbar START -->
<header>
    <nav id="navigation4" class="container navigation">
        <div class="nav-header">
            <a class="nav-brand" href="{{ route('index') }}">
                @php
                    $logo = $settings->first()->website_wide_logo();
                @endphp
                <img loading="lazy" src="{{ $logo ?? asset('web/img/logos/logo.png') }}" class="main-logo" style="max-height: 65px;" alt="logo" id="main_logo">
            </a>
            <div class="nav-toggle"></div>
        </div>
        <div class="nav-menus-wrapper">
            <ul class="nav-menu align-to-left">
                <li><a href="{{ route('index') }}">@lang('Home')</a></li>
                <li>
                    <a href="#">@lang('About')</a>
                    <ul class="nav-dropdown">
                        <li><a href="{{ route('about') }}">@lang('AboutUs')</a></li>
                        <li><a href="{{ route('tours') }}">@lang('Virtual_Tour')</a></li>
                        <li><a href="{{ route('services') }}">@lang('Services')</a></li>
                        <li><a href="{{ route('accreditations') }}">@lang('Local_International_Accreditations_Partnerships')</a></li>
                        <li><a href="{{ route('partners') }}">@lang('Valuable_Customers')</a></li>
                        <li><a href="{{ route('gallery') }}">@lang('Pictures_for_Courses')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">@lang('Domains_Courses')</a>
                    <div class="megamenu-panel">
                        <div class="megamenu-lists">
                            @php
                                $divider = 0;
                            @endphp
                            @foreach ($_categories->slice(0, $categories_in_menu) as $index=>$category)
                                @for ($i = 0; $i < ceil($category->courses->count() / $mega_menu_leng); $i++)
                                @php $divider++; @endphp
                                    <ul class="megamenu-list list-col-4">    
                                        @if ($i == 0)
                                            <li class="megamenu-list-title">
                                                <h6>
                                                    <a href="{{ route('services.show', ['slug' => $category->slug]) }}">
                                                        {{ $category->title }}
                                                    </a>
                                                </h6>
                                            </li>
                                        @endif
                                    
                                        @foreach (_splite_by_items($category->courses, $mega_menu_leng, $i) as $course)
                                        <li>
                                            <a  href="{{ route('courses.show', ['slug' => $course->slug]) }}">{{ $course->title }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @if ($divider%4 == 0)
                                        <hr style="clear: both; margin: 15px 0;">
                                    @endif
                                @endfor
                            @endforeach
                       
                            @php
                                $categories = $_categories->slice($categories_in_menu);
                            @endphp
                            @if ($categories->count() > 0)
                                <ul class="megamenu-list list-col-4">
                                    <li class="megamenu-list-title">
                                        <h6>
                                            <a href="{{ route('services') }}">
                                                @lang('other services')
                                            </a>
                                        </h6>
                                    </li>
                                    @foreach ($categories->all() as $index=>$category)
                                        <li>
                                            <a href="{{ route('services.show', ['slug' => $category->slug]) }}">
                                                {{ $category->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            
                        </div>
                    </div>
                </li>
                @foreach ($_courses as $course)
                    <li><a href="{{ route('courses.show', ['slug' => $course->slug]) }}">{{ $course->title }}</a></li>
                @endforeach

                <li><a href="{{ route('courses.index') }}">@lang('Courses_Schedule')</a> </li>

                <li><a href="{{ route('contact') }}">@lang('ContactUs')</a></li>

                @php
                    $invers = app()->isLocale('en') ? 'ar' : 'en';
                @endphp
                <li>
                    <a href="{{ route('change.lang', ['lang'=> $invers]) }}">
                        <img loading="lazy" src="{{ asset('web/img/logos/'.$invers.'.png') }}" alt="ar">
                    </a>
                </li>
               
            </ul>
        </div>
    </nav>
</header>
<!-- Navbar END -->