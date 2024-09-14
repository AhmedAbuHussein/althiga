<div class="aside-menu flex-column-fluid">
    <div class="hover-scroll-overlay-y my-5 my-lg-5 mt-lg-0" id="kt_aside_menu_wrapper" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
        data-kt-scroll-offset="0">
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
            id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
            <div class="menu-item">
                <a class="menu-link {{ active('admin.home') }}" href="{{ route('admin.home') }}">
                    <span class="menu-icon">
                        <i class="la la-tachometer-alt"></i>
                    </span>
                    <span class="menu-title">@lang('site.dashboard')</span>
                </a>
            </div>
            
            @if (auth()->user()->can("categories_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.categories') }}" href="{{ route('admin.categories.index') }}">
                    <span class="menu-icon">
                        <i class="la la-list-alt"></i>
                    </span>
                    <span class="menu-title">@lang('site.categories')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can("subscribes_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.subscribes') }}" href="{{ route('admin.subscribes.index') }}">
                    <span class="menu-icon">
                        <i class="la la-play"></i>
                    </span>
                    <span class="menu-title">@lang('site.subscribes')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can("courses_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.courses') }}" href="{{ route('admin.courses.index') }}">
                    <span class="menu-icon">
                        <i class="la la-book"></i>
                    </span>
                    <span class="menu-title">@lang('site.courses')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can("contact_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.contacts') }}" href="{{ route('admin.contacts.index') }}">
                    <span class="menu-icon">
                        <i class="la la-phone"></i>
                    </span>
                    <span class="menu-title">@lang('site.contact')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can("partners_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.partners') }}" href="{{ route('admin.partners.index') }}">
                    <span class="menu-icon">
                        <i class="la la-users"></i>
                    </span>
                    <span class="menu-title">@lang('site.partners')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can("gallery_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.galleries') }}" href="{{ route('admin.galleries.index') }}">
                    <span class="menu-icon">
                        <i class="la la-images"></i>
                    </span>
                    <span class="menu-title">@lang('site.gallery')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can("slider_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.sliders') }}" href="{{ route('admin.sliders.index') }}">
                    <span class="menu-icon">
                        <i class="la la-sliders-h"></i>
                    </span>
                    <span class="menu-title">@lang('site.sliders')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can("tour_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.tours') }}" href="{{ route('admin.tours.index') }}">
                    <span class="menu-icon">
                        <i class="la la-bus"></i>
                    </span>
                    <span class="menu-title">@lang('site.tour')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can("credits_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.accreditations') }}" href="{{ route('admin.accreditations.index') }}">
                    <span class="menu-icon">
                        <i class="la la-certificate"></i>
                    </span>
                    <span class="menu-title">@lang('site.credits')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can("team_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.team') }}" href="{{ route('admin.team.index') }}">
                    <span class="menu-icon">
                        <i class="la la-users-cog"></i>
                    </span>
                    <span class="menu-title">@lang('site.team')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can("tags_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.tags') }}" href="{{ route('admin.tags.index') }}">
                    <span class="menu-icon">
                        <i class="la la-certificate"></i>
                    </span>
                    <span class="menu-title">@lang('site.tags')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can("admin_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.admins') }}" href="{{ route('admin.admins.index') }}">
                    <span class="menu-icon">
                        <i class="la la-user"></i>
                    </span>
                    <span class="menu-title">@lang('site.admin')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can("about_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.about') }}" href="{{ route('admin.about.index') }}">
                    <span class="menu-icon">
                        <i class="la la-id-card"></i>
                    </span>
                    <span class="menu-title">@lang('site.about')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can("roles_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.roles') }}" href="{{ route('admin.roles.index') }}">
                    <span class="menu-icon">
                        <i class="la la-user-lock"></i>
                    </span>
                    <span class="menu-title">@lang('site.roles')</span>
                </a>
            </div>
            @endif

            @if (auth()->user()->can('statistics_show'))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.statistics') }}" href="{{ route('admin.statistics.index') }}">
                    <span class="menu-icon">
                        <i class="la la-user-lock"></i>
                    </span>
                    <span class="menu-title">@lang('site.statistics')</span>
                </a>
            </div>
            @endif
            @if (auth()->user()->can("institute_terms_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.terms') }}" href="{{ route('admin.terms.index') }}">
                    <span class="menu-icon">
                        <i class="la la-lock"></i>
                    </span>
                    <span class="menu-title">@lang('site.terms')</span>
                </a>
            </div>
            @endif
            @if (auth()->user()->can("course_terms_show"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.privacies') }}" href="{{ route('admin.privacies.index') }}">
                    <span class="menu-icon">
                        <i class="la la-lock"></i>
                    </span>
                    <span class="menu-title">@lang('site.privacies')</span>
                </a>
            </div>
            @endif
            @if (auth()->user()->can("setting"))
            <div class="menu-item">
                <a class="menu-link {{ active('admin.setting') }}" href="{{ route('admin.setting.index') }}">
                    <span class="menu-icon">
                        <i class="la la-cogs"></i>
                    </span>
                    <span class="menu-title">@lang('site.setting')</span>
                </a>
            </div>
            @endif
            <div class="menu-item">
                <a class="menu-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                    <span class="menu-icon">
                        <i class="la la-arrow-left"></i>
                    </span>
                    <span class="menu-title">@lang('site.logout')</span>
                </a>
            </div>


        </div>
    </div>
</div>
