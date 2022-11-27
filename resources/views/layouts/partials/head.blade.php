<meta charset="utf-8" />

<meta name="description" content="courier app description" />
<meta name="keywords" content="courier, nuxxt, app, delivery" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Courier app" />
<meta property="og:url" content="https://keenthemes.com/metronic" />
<meta property="og:site_name" content="Keenthemes | Metronic" />

<link rel="shortcut icon" href="{{ asset('images/icon.png') }}" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

@if (app()->isLocale('en'))
    @if (true)
        {{--  <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"/>  --}}
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet"/>
    @else
        {{--  <link href="{{ asset('assets/plugins/custom/datatables/datatables.dark.bundle.css') }}" rel="stylesheet"/>  --}}
        <link href="{{ asset('assets/plugins/global/plugins.dark.bundle.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/style.dark.bundle.css') }}" rel="stylesheet"/>
    @endif
@else
    @if (true)
        {{--  <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.rtl.css') }}" rel="stylesheet"/>  --}}
        <link href="{{ asset('assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet"/>
    @else
        {{--  <link href="{{ asset('assets/plugins/custom/datatables/datatables.dark.bundle.rtl.css') }}" rel="stylesheet"/>  --}}
        <link href="{{ asset('assets/plugins/global/plugins.dark.bundle.rtl.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/style.dark.bundle.rtl.css') }}" rel="stylesheet"/>
    @endif
@endif
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@stack('css')