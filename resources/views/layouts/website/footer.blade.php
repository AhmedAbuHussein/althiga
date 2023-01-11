<!-- Footer START -->
<footer>
    <div class="container">
        <div class="row">
            <!-- Column 1 Start -->
            <div class="col-12 col-sm-6 col-md-4">
                <h3>@lang('app.About')</h3>
                <div class="mt-25">
                    <img loading="lazy" src="{{ optional($settings->first())->website_wide_logo() }}" alt="footer-logo">
                    <p class="mt-25" style="text-align: justify">
                        {{ optional(\App\Models\About::first())->description }}
                    </p>
                </div>
            </div>
            <!-- Column 1 End -->

            <!-- Column 2 Start -->
            <div class="col-12 col-sm-6 col-md-3">
                <h3>@lang('app.Quick_Links')</h3>
                <ul class="footer-list">
                    @foreach ($_courses as $item)
                        <li><a href="{{ route('courses.show', ['slug' => $item->slug]) }}">{{ $item->title }}</a></li>
                    @endforeach
                    <li><a href="{{ route('courses.index') }}">@lang('app.Courses_Schedule')</a></li>
                    <li><a href="{{ route('tours') }}">@lang('app.Virtual_Tour')</a></li>
                    <li><a href="{{ route('gallery') }}">@lang('app.Pictures_for_Courses')</a></li>
                    <li><a href="{{ route('services') }}">@lang('app.Services')</a></li>
                    <li><a href="{{ route('partners') }}">@lang('app.Valuable_Customers')</a></li>
                    <li><a href="{{ route('about') }}">@lang('app.About')</a></li>
                    <li><a href="{{ route('contact') }}">@lang('app.ContactUs')</a></li>
                   
                </ul>
            </div>
            <!-- Column 2 End -->

            <!-- Column 3 Start -->
            <div class="col-12 col-sm-6 col-md-3">
                <h3>@lang('welcome.Popular_Courses')</h3>
                <div class="mt-25">
                    @foreach ($_popular as $item)
                        <!-- Post Start -->
                        <div class="footer-recent-post clearfix">
                            <div class="footer-recent-post-thumb">
                                <i class="fa fa-calendar"></i>
                                {{--  <img loading="lazy" src="{{ $item->url }}" alt="img">  --}}
                            </div>
                            <div class="footer-recent-post-content">
                                <span>
                                    @foreach ($item->days ?? [] as $day)
                                        @lang('app.'.$day)
                                    @endforeach
                                    @lang('app.every week')
                                </span>
                                <a
                                    href="{{ route('courses.show', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                            </div>
                        </div>
                        <!-- Post End -->
                    @endforeach
                    
                </div>
            </div>
            <!-- Column 3 End -->

            <!-- Column 4 Start -->
            <div class="col-md-2 col-sm-6 col-12">
                <h3>@lang('app.Services')</h3>
                <div class="footer-tags mt-25">
                    @foreach (_random_chunks($_categories, 7) as $item)
                        <a href="{{ route('services.show', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                    @endforeach
                </div>
            </div>
            <!-- Column 4 End -->
        </div>

        <!-- Footer Bar Start -->
        <div class="footer-bar">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        {{ now()->year }} &copy; @lang('app.All_Rights_Reserved')&nbsp;
                        <span class="primary-color">@lang('app.ATI')</span>
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="footer-social-icons">
                        <ul>
                            @if (!is_null($fcb = $settings->where('key', 'facebook_link')->pluck('value')->first()))<li><a href="{{ $fcb }}"><i class="fa fa-facebook-f"></i></a></li> @endif
                            @if (!is_null($twit = $settings->where('key', 'twitter_link')->pluck('value')->first()))<li><a href="{{ $twit }}"><i class="fa fa-twitter"></i></a></li> @endif
                            @if (!is_null($inst = $settings->where('key', 'instagram_link')->pluck('value')->first()))<li><a href="{{ $inst }}"><i class="fa fa-instagram"></i></a></li> @endif
                            @if (!is_null($yout = $settings->where('key', 'youtube_link')->pluck('value')->first()))<li><a href="{{ $yout }}"><i class="fa fa-youtube"></i></a></li> @endif
                            @if (!is_null($yout = $settings->where('key', 'github_link')->pluck('value')->first()))<li><a href="{{ $yout }}"><i class="fa fa-github"></i></a></li> @endif
                            @if (!is_null($yout = $settings->where('key', 'linkedin_link')->pluck('value')->first()))<li><a href="{{ $yout }}"><i class="fa fa-linkedin"></i></a></li> @endif
                            @if (!is_null($yout = $settings->where('key', 'whatsapp_link')->pluck('value')->first()))<li><a href="{{ $yout }}"><i class="fa fa-whatsapp"></i></a></li> @endif
                            @if (!is_null($yout = $settings->where('key', 'telegram_link')->pluck('value')->first()))<li><a href="{{ $yout }}"><i class="fa fa-telegram"></i></a></li> @endif
                            @if (!is_null($yout = $settings->where('key', 'another_link1')->pluck('value')->first()))<li><a href="{{ $yout }}"><i class="fa fa-globe"></i></a></li> @endif
                            @if (!is_null($yout = $settings->where('key', 'another_link2')->pluck('value')->first()))<li><a href="{{ $yout }}"><i class="fa fa-globe"></i></a></li> @endif
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Footer Bar End -->
    </div>
</footer>
<!-- Footer END -->