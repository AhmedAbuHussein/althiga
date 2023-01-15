@php
    $website_settings = [
        'website_url' => env('APP_URL'),
        'website_name_en' => $settings
            ->where('key', 'website_name_en')
            ->pluck('value')
            ->first(),
        'website_name_ar' => $settings
            ->where('key', 'website_name_ar')
            ->pluck('value')
            ->first(),
        'website_seo' => $settings
            ->where('key', 'website_seo')
            ->pluck('value')
            ->first(),
        'main_color' => $settings
            ->where('key', 'main_color')
            ->pluck('value')
            ->first(),
        'second_color' => $settings
            ->where('key', 'second_color')
            ->pluck('value')
            ->first(),
        'social_links' => [
            'facebook_link' => $settings
                ->where('key', 'facebook_link')
                ->pluck('value')
                ->first(),
            'twitter_link' => $settings
                ->where('key', 'twitter_link')
                ->pluck('value')
                ->first(),
            'instagram_link' => $settings
                ->where('key', 'instagram_link')
                ->pluck('value')
                ->first(),
            'youtube_link' => $settings
                ->where('key', 'youtube_link')
                ->pluck('value')
                ->first(),
            'telegram_link' => $settings
                ->where('key', 'telegram_link')
                ->pluck('value')
                ->first(),
            'linkedin_link' => $settings
                ->where('key', 'linkedin_link')
                ->pluck('value')
                ->first(),
            'whatsapp_link' => $settings
                ->where('key', 'whatsapp_link')
                ->pluck('value')
                ->first(),
        ],
        'website_icon' => $settings->first()->website_icon(),
        'website_icon_url' => $settings->first()->website_icon(),
        'website_logo' => $settings->first()->website_logo(),
        'website_cover' => $settings->first()->website_cover(),
        'phone' => $settings->first()->phone(),
        'search_url' => env('APP_URL') . '/',
        'services_url' => env('APP_URL') . '/services',
        'feed_url' => env('APP_URL') . '/feed',
        'feed_title' => 'خدماتنا',
        'cache_pages' => 1,
        'canonical' => str_replace('/index.php', '', request()->url()),
        'twitter_author' => 'Althiga',
    ];
    $website_settings = collect($website_settings);
    if (request()->url() == env('APP_URL')) {
        $page_title = isset($page_title) && $page_title != null ? $website_settings['website_name_ar'] . ' | ' . $page_title : $website_settings['website_name_ar'];
    } else {
        $page_title = isset($page_title) && $page_title != null ? $page_title . ' | ' . $website_settings['website_name_ar'] : $website_settings['website_name_ar'];
    }
    $page_description = isset($seo_meta_description) && $seo_meta_description != null ? $seo_meta_description : $website_settings['website_seo'];
    $page_image = isset($page_image) && $page_image != null ? $page_image : $website_settings['website_cover'];
    $page_keywords = isset($seo_key_words) && $seo_key_words != null ? $seo_key_words : '';
    $website_settings['canonical'] = isset($canonical) && $canonical != null ? $canonical : $website_settings['canonical'];
@endphp
<title>{{ $page_title }} | @yield('title')</title>
<meta name="title" content="{{ $page_title }}">

<link rel="icon" type="image/png"
    href="{{ $website_settings['website_icon'] != null ? $website_settings['website_icon'] : $website_settings['website_icon_url'] }}" />
<link rel="icon" type="image/png" sizes="512x512"
    href="{{ $website_settings['website_icon'] != null ? $website_settings['website_icon'] : $website_settings['website_icon_url'] }}" />
<link rel="manifest" href="{{ url('mix-manifest.json') }}">
<meta name="mobile-web-app-capable" content="no">
<meta name="application-name" content="{{ $website_settings['website_name_en'] }}">

<link rel="shortcut icon" href="{{ $website_settings['website_icon'] }}" />


<meta name="facebook-domain-verification" content="vymdke86bl9vdcyleijy0r173c6k7c" />
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="{{ $website_settings['website_name_ar'] }}">
<link rel="apple-touch-icon" href="{{ $website_settings['website_icon_url'] }}?v=2">

<link href="{{ $website_settings['website_icon_url'] }}"
    media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />
<link href="{{ $website_settings['website_icon_url'] }}"
    media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />
<link href="{{ $website_settings['website_icon_url'] }}"
    media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)"
    rel="apple-touch-startup-image" />
<link href="{{ $website_settings['website_icon_url'] }}"
    media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)"
    rel="apple-touch-startup-image" />
<link href="{{ $website_settings['website_icon_url'] }}"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />
<link href="{{ $website_settings['website_icon_url'] }}"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)"
    rel="apple-touch-startup-image" />
<link href="{{ $website_settings['website_icon_url'] }}"
    media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />
<link href="{{ $website_settings['website_icon_url'] }}"
    media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />
<link href="{{ $website_settings['website_icon_url'] }}"
    media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />
<link href="{{ $website_settings['website_icon_url'] }}"
    media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image" />

<link rel='alternate' href="{{ request()->url() }}" hreflang='x-default' />

<meta name="author" content="{{ $website_settings['website_name_ar'] }}" />
<meta name="description" content="{{ $page_description }}">
<link rel="canonical" href="{{ $website_settings['canonical'] }}">

@if ($page_keywords)
    <meta name="keywords" content="{{ $page_keywords }}">
@endif

<meta name="msapplication-TileColor" content="{{ $website_settings['main_color'] }}">
<meta name="msapplication-TileImage" content="{{ $website_settings['website_icon_url'] }}">
<meta name="msapplication-square70x70logo" content="{{ $website_settings['website_cover'] }}" />
<meta name="msapplication-square150x150logo" content="{{ $website_settings['website_cover'] }}" />
<meta name="msapplication-wide310x150logo" content="{{ $website_settings['website_cover'] }}" />
<meta name="msapplication-square310x310logo" content="{{ $website_settings['website_cover'] }}" />
<link rel="apple-touch-icon-precomposed" href="{{ $website_settings['website_cover'] }}" />

<meta property="og:type" content="website" />
<meta property="og:site_name" content="{{ $website_settings['website_name_en'] }}" />
<meta property="og:locale" content="ar_AR" />
<meta property="og:locale:alternate" content="ar_AR" />
<meta property="og:url" content="{{ request()->url() }}" />
<meta property="og:title" content="{{ $page_title }}" />
<meta property="og:description" content="{{ $page_description }}" />
<meta property="og:image" content="{{ $page_image }}" />

<meta itemprop="name" content="{{ $page_title }}" />
<meta itemprop="url" content="{{ $website_settings['website_url'] }}" />
<meta itemprop="author" content="{{ $website_settings['website_name_en'] }}" />
<meta itemprop="image" content="{{ $page_image }}" />
<meta itemprop="description" content="{{ $page_description }}" />

<meta name="twitter:image" content="{{ $page_image }}" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="{{ '@' . $website_settings['twitter_author'] }}" />
<meta name="twitter:creator" content="{{ '@' . $website_settings['twitter_author'] }}" />
<meta name="twitter:title" content="{{ $page_title }}" />
<meta name="twitter:image:src" content="{{ $page_image }}" />
<meta name="twitter:description" content="{{ $page_description }}" />


@if ($website_settings['services_url'] != null)
    <link rel='help' title='FAQ' href="{{ $website_settings['services_url'] }}" />
@endif
@if ($website_settings['feed_title'] != null && $website_settings['feed_url'] != null)
    <link rel="alternate" type="application/rss+xml" title="{{ $website_settings['feed_title'] }}"
        href="{{ $website_settings['feed_url'] }}">
@endif
@if ($website_settings['cache_pages'] == 0)
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, no-transform">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
@endif
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "{{$website_settings['website_name_en']}}",
    "url": "{{$website_settings['website_url']}}",
    "logo": "{{$website_settings['website_icon_url']}}",
    @php
    $social_links=[];
    foreach($website_settings['social_links'] as $key => $link){
        if($link!=null)array_push($social_links, $link);
    }
    @endphp
    @if(count($social_links))
    "sameAs": [
       
        @foreach($social_links as $link)
            @if($link!="")
                "{{$link}}" 
                @if(!$loop->last),@endif
            @endif
        @endforeach
    ],
    @endif
    "contactPoint": [
        @if($website_settings['phone']!=null)
        {
            "@type": "ContactPoint",
            "telephone": "{{$website_settings['phone']}}",
            "contactType": "customer support"
        },
        {
            "@type": "ContactPoint",
            "telephone": "{{$website_settings['phone']}}",
            "contactType": "technical support"
        }, {
            "@type": "ContactPoint",
            "telephone": "{{$website_settings['phone']}}",
            "contactType": "billing support"
        }
        @endif
    ]
}
{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "url": "{{$website_settings['website_url']}}",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "{{$website_settings['search_url']}}?key={search_term_string}",
        "query-input": "required name=search_term_string"
    }
}
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "{{$page_title}}",
    "description": "{{$page_description}}",
    "publisher": {
        "@type": "Organization",
        "name": "{{$website_settings['website_name_en']}}"
    }
}
</script>

