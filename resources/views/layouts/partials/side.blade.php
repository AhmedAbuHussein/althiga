<div class="aside-menu flex-column-fluid">
    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
        data-kt-scroll-offset="0">
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
            id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
            <div class="menu-item">
                <a class="menu-link {{ active('home') }}" href="#">
                    <span class="menu-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </span>
                    <span class="menu-title">@lang('site.dashboard')</span>
                </a>
            </div>


            <div class="menu-item">
                <a class="menu-link {{ active('dimensions') }}" href="#">
                    <span class="menu-icon">
                        <i class="fa fa-box"></i>
                    </span>
                    <span class="menu-title">@lang('site.dimension')</span>
                </a>
            </div>
           

            {{--  <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ active('cms', 'show') }}">
                <span class="menu-link {{ active('cms') }}">
                    <span class="menu-icon">
                        <i class="fa fa-code"></i>
                    </span>
                    <span class="menu-title">@lang('site.cms')</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion menu-active-bg {{ active('cms', 'show') }} ">

                    <div class="menu-item">
                        <a class="menu-link {{ active('cms.contact') }}" href="{{ route('cms.contact.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-phone"></i>
                            </span>
                            <span class="menu-title">@lang('site.contact us')</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link {{ active('cms.privacy') }}" href="{{ route('cms.privacy.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <span class="menu-title">@lang('site.privacy')</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link {{ active('cms.settings') }}" href="{{ route('cms.settings.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-cogs"></i>
                            </span>
                            <span class="menu-title">@lang('site.setting')</span>
                        </a>
                    </div>

                </div>
            </div>  --}}

            

            <div class="menu-item">
                <a class="menu-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                    <span class="menu-icon">
                        <i class="fa fa-arrow-left"></i>
                    </span>
                    <span class="menu-title">@lang('site.logout')</span>
                </a>
            </div>


        </div>
    </div>
</div>
