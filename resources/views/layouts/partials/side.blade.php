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


            <div class="menu-item">
                <a class="menu-link {{ active('admin.categories') }}" href="{{ route('admin.categories.index') }}">
                    <span class="menu-icon">
                        <i class="la la-list-alt"></i>
                    </span>
                    <span class="menu-title">@lang('site.categories')</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ active('admin.subscribes') }}" href="{{ route('admin.subscribes.index') }}">
                    <span class="menu-icon">
                        <i class="la la-play"></i>
                    </span>
                    <span class="menu-title">@lang('site.subscribes')</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ active('admin.courses') }}" href="#">
                    <span class="menu-icon">
                        <i class="la la-book"></i>
                    </span>
                    <span class="menu-title">@lang('site.courses')</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ active('admin.contacts') }}" href="{{ route('admin.contacts.index') }}">
                    <span class="menu-icon">
                        <i class="la la-phone"></i>
                    </span>
                    <span class="menu-title">@lang('site.contact')</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ active('admin.partners') }}" href="{{ route('admin.partners.index') }}">
                    <span class="menu-icon">
                        <i class="la la-users"></i>
                    </span>
                    <span class="menu-title">@lang('site.partners')</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ active('admin.galleries') }}" href="{{ route('admin.galleries.index') }}">
                    <span class="menu-icon">
                        <i class="la la-images"></i>
                    </span>
                    <span class="menu-title">@lang('site.gallery')</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ active('admin.sliders') }}" href="{{ route('admin.sliders.index') }}">
                    <span class="menu-icon">
                        <i class="la la-sliders-h"></i>
                    </span>
                    <span class="menu-title">@lang('site.sliders')</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ active('admin.tours') }}" href="{{ route('admin.tours.index') }}">
                    <span class="menu-icon">
                        <i class="la la-bus"></i>
                    </span>
                    <span class="menu-title">@lang('site.tour')</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ active('admin.accreditations') }}" href="{{ route('admin.accreditations.index') }}">
                    <span class="menu-icon">
                        <i class="la la-certificate"></i>
                    </span>
                    <span class="menu-title">@lang('site.credits')</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ active('admin.teams') }}" href="#">
                    <span class="menu-icon">
                        <i class="la la-users-cog"></i>
                    </span>
                    <span class="menu-title">@lang('site.team')</span>
                </a>
            </div>

            

            <div class="menu-item">
                <a class="menu-link {{ active('admin.admins') }}" href="#">
                    <span class="menu-icon">
                        <i class="la la-user"></i>
                    </span>
                    <span class="menu-title">@lang('site.admin')</span>
                </a>
            </div>

            

            <div class="menu-item">
                <a class="menu-link {{ active('admin.about') }}" href="#">
                    <span class="menu-icon">
                        <i class="la la-id-card"></i>
                    </span>
                    <span class="menu-title">@lang('site.about')</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{ active('admin.setting') }}" href="#">
                    <span class="menu-icon">
                        <i class="la la-cogs"></i>
                    </span>
                    <span class="menu-title">@lang('site.setting')</span>
                </a>
            </div>
           

            {{--  <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ active('cms', 'show') }}">
                <span class="menu-link {{ active('cms') }}">
                    <span class="menu-icon">
                        <i class="la la-code"></i>
                    </span>
                    <span class="menu-title">@lang('site.cms')</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion menu-active-bg {{ active('cms', 'show') }} ">

                    <div class="menu-item">
                        <a class="menu-link {{ active('cms.contact') }}" href="{{ route('cms.contact.index') }}">
                            <span class="menu-icon">
                                <i class="la la-phone"></i>
                            </span>
                            <span class="menu-title">@lang('site.contact us')</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link {{ active('cms.privacy') }}" href="{{ route('cms.privacy.index') }}">
                            <span class="menu-icon">
                                <i class="la la-lock"></i>
                            </span>
                            <span class="menu-title">@lang('site.privacy')</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link {{ active('cms.settings') }}" href="{{ route('cms.settings.index') }}">
                            <span class="menu-icon">
                                <i class="la la-cogs"></i>
                            </span>
                            <span class="menu-title">@lang('site.setting')</span>
                        </a>
                    </div>

                </div>
            </div>  --}}

            

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
