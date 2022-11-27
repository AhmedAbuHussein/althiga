<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-bold me-1">2022©</span>
            <a href="https://althiga.net/" target="_blank" class="text-gray-800 text-hover-primary">Althiga</a>
        </div>
        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
            <li class="menu-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();" class="menu-link px-2">@lang("site.logout")</a>
            </li>
            <li class="menu-item">
                <a href="/" target="_blank" class="menu-link px-2">@lang("site.home")</a>
            </li>
        </ul>
    </div>
</div>