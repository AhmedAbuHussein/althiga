<!doctype html>
<html lang="{{ app()->getLocale('en') }}" dir="{{ app()->isLocale('en') ? 'ltr': 'rtl' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" />

    <style>
        *{
            
            padding: 0;
            margin: 0;
        }
    </style>
    

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/css/main.css')}}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        body,*{
            direction: rtl;
            text-align: start;
            
            
        }
        html{
            font-size: 16px;
        }
        /**:not(.fileuploader):not([class^=fa]):not([class^=vj]):not([class^=tie-]) {
            font-family: dubai, sans-serif;
        }*/
        .start-head {
            height: 20px;
            width: 12px;
            display: inline-block;
            background: #0194fe;
            position: relative;
            top: 5px;
            margin-left: 5px;
        }
        .main-box-stylex{
            box-shadow: 0 8px 16px 0 rgb(10 14 29 / 2%), 0 8px 64px 0 rgb(119 119 119 / 8%);
        }
    </style>
    @yield('styles')
</head>
<body>
    @yield('after-body')
    <div id="app">
        <main class="p-0">
            @yield('content')
        </main>
    </div>

</body>
</html>
