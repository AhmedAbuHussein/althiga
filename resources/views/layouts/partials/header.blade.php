<div id="kt_header" style="" class="header align-items-stretch">
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                id="kt_aside_mobile_toggle">
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                            fill="currentColor"></path>
                        <path opacity="0.3"
                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                            fill="currentColor"></path>
                    </svg>
                </span>
            </div>
        </div>
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="{{ route('admin.home') }}" class="d-lg-none">
                <img loading="lazy" alt="Logo" src="{{ asset('images/logo.png') }}" class="h-30px">
            </a>
        </div>
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <div class="d-flex align-items-stretch">
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end"
                    data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
                    data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                        id="#kt_header_menu" data-kt-menu="true">
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="{{ app()->isLocale('en') ? 'bottom-start' : 'bottom-end' }}"
                            class="menu-item here show menu-lg-down-accordion me-lg-1">
                            <span class="menu-link py-3">
                                <span class="menu-title">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                                fill="currentColor"></path>
                                            <path opacity="0.3"
                                                d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                                fill="currentColor"></path>
                                            <path opacity="0.3"
                                                d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4">
                                <div class="menu-item">
                                    <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                        style="background-image:url('{{ asset('assets/media/misc/pattern-1.jpg') }}')">
                                        <h3 class="text-white fw-bold px-9 mt-10 mb-6">
                                            @lang('site.notifications')
                                        </h3>
                                    </div>
                                    <div class="tab-content" style="max-width: 400px;">
                                        <div class="tab-pane fade show active" id="kt_topbar_notifications_1"
                                            role="tabpanel">
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                @forelse ($_notifys as $item)
                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                        <img loading="lazy" src="{{ asset('images/icon.png') }}" style="width: 40px;" alt="">
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="mb-0 me-2">
                                                                <a href="{{ $item->data['route'] }}"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bolder">{{ $item->data['title'][app()->getLocale('en')] }}</a>
                                                                <div class="text-gray-400 fs-7">{!! $item->data['message'][app()->getLocale('en')] !!}</div>
                                                            </div>
                                                        </div>
                                                        <span class="badge badge-light fs-8">{{ $item->created_at->diffForHumans() }}</span>
                                                    </div>
                                                @empty
                                                    <div class="d-flex flex-stack py-4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                        <img loading="lazy" src="{{ asset('images/icon.png') }}" style="width: 40px;" alt="">
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="mb-0 me-2">
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">
                                                                    لا يوجد اشعارات لعرضها 👏👏
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforelse                                                
                                            </div>
                                            <div class="py-3 text-center border-top">
                                                <a href="{{ route('admin.notifications.index') }}"
                                                    class="btn btn-color-gray-600 btn-active-color-primary">@lang('site.see all')
                                                    <span class="svg-icon svg-icon-5">
                                                        <i class="fa fa-chevron-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                
            </div>
            <div class="d-flex align-items-stretch flex-shrink-0">

                <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <img loading="lazy" src="{{ asset('images/icon.png') }}" alt="user">
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                        data-kt-menu="true" style="">
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <div class="symbol symbol-50px me-5">
                                    <img loading="lazy" alt="Logo" src="{{ asset('images/icon.png') }}">
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="fw-bolder d-flex align-items-center fs-5">{{ auth()->user()->name }}</div>
                                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ auth()->user()->email }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="separator my-2"></div>
                        <div class="menu-item px-5">
                            <a href="{{ route('admin.profile.index') }}" class="menu-link px-5">@lang('site.profile')</a>
                        </div>

                        <div class="separator my-2"></div>
                        <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title position-relative"> @lang('site.language')
                                    <span
                                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                        {{ app()->isLocale('en') ? __('site.English') : __('site.Arabic') }}
                                        <img loading="lazy" class="w-15px h-15px rounded-1 ms-2"
                                            src="{{ app()->isLocale('en') ? asset('assets/media/flags/united-states.svg') : asset('assets/media/flags/saudi-arabia.svg') }}"
                                            alt="">
                                    </span>
                                </span>
                            </a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                
                                <div class="menu-item px-3">
                                    <a href="{{ route('change.lang', ['lang' => 'en']) }}"
                                        class="menu-link d-flex px-5 {{ app()->isLocale('en') ? 'active' : '' }}">
                                        <span class="symbol symbol-20px me-4">
                                            <img loading="lazy" class="rounded-1" src="{{ asset('assets/media/flags/united-states.svg') }}"
                                                alt="">
                                        </span>@lang('site.English')</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="{{ route('change.lang', ['lang' => 'ar']) }}"
                                        class="menu-link d-flex px-5 {{ app()->isLocale('ar') ? 'active' : '' }}">
                                        <span class="symbol symbol-20px me-4">
                                            <img loading="lazy" class="rounded-1" src="{{ asset('assets/media/flags/saudi-arabia.svg') }}" alt="">
                                        </span>@lang('site.Arabic')</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item px-5">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout').submit();"
                                class="menu-link px-5">@lang('site.logout')</a>
                            <form action="{{ route('logout') }}" id="logout" method="post" class="d-none">
                                @csrf
                            </form>
                        </div>
                        <div class="separator my-2"></div>
                        <div class="menu-item px-5">
                            <div class="menu-content px-5">
                                <label
                                    class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
                                    for="night-mode">
                                    <input class="form-check-input w-30px h-20px"
                                        @if (session()->get("mode", 'light') == 'dark') checked @endif type="checkbox"
                                        id="night-mode">
                                    <span class="pulse-ring ms-n1"></span>
                                    <span class="form-check-label text-gray-600 fs-7">@lang('site.Dark Mode')</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
                    <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                        id="kt_header_menu_mobile_toggle">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                                    fill="currentColor"></path>
                                <path opacity="0.3"
                                    d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
