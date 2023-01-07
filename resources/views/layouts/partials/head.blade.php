<meta charset="utf-8" />

<meta name="csrf-token" content="{{ csrf_token() }}">

@include('SEO.index')


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

@if (app()->isLocale('en'))
    @if (session()->get("mode", 'light') == 'light')
        {{--  <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"/>  --}}
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet"/>
        <style>
            .preview{
                background: #d2d2d2;
            }
            .select2-container--bootstrap5 .select2-selection--multiple{
                background: #f5f5f5;
            }
        </style>
    @else
        {{--  <link href="{{ asset('assets/plugins/custom/datatables/datatables.dark.bundle.css') }}" rel="stylesheet"/>  --}}
        <link href="{{ asset('assets/plugins/global/plugins.dark.bundle.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/style.dark.bundle.css') }}" rel="stylesheet"/>
        <style>
            .preview{
                background: #15151d;
            }
            .select2-container--bootstrap5 .select2-selection--multiple{
                background: #282839;
            }
            .note-editor.note-frame .note-editing-area .note-editable{
                color: #aaa
            }
        </style>
    @endif
    
@else
    @if (session()->get("mode", 'light') == 'light')
        {{--  <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.rtl.css') }}" rel="stylesheet"/>  --}}
        <link href="{{ asset('assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet"/>
        <style>
            .preview{
                background: #d2d2d2;
            }
            .select2-container--bootstrap5 .select2-selection--multiple{
                background: #f5f5f5;
            }
        </style>
    @else
        {{--  <link href="{{ asset('assets/plugins/custom/datatables/datatables.dark.bundle.rtl.css') }}" rel="stylesheet"/>  --}}
        <link href="{{ asset('assets/plugins/global/plugins.dark.bundle.rtl.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/style.dark.bundle.rtl.css') }}" rel="stylesheet"/>
        <style>
            .preview{
                background: #15151d;
            }
            .select2-container--bootstrap5 .select2-selection--multiple{
                background: #282839;
            }
            .note-editor.note-frame .note-editing-area .note-editable{
                color: #aaa
            }
        </style>
    @endif
@endif

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('assets/summernote/summernote.min.css') }}">
<link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@livewireStyles
<style>
    * {
        font-family: 'Cairo', sans-serif;
    }
    .preview{
        width: 100%;
        height: 250px;
        border-radius: 5px;
        border: 1px solid #565656;
        overflow: hidden;
        text-align: center;
        justify-content: center;
        display: flex;
    }
    .preview img{
        max-width: 100%;
        max-height: 100%
    }
    .menu-title{
        font-weight: bold;
    }
    .note-editor .note-toolbar .note-color-all .note-dropdown-menu, .note-popover .popover-content .note-color-all .note-dropdown-menu{
        min-width: 345px;
    }
    .form-group{
        margin-bottom: 15px;
    }

    .textarea {
        /*border: 1px solid gray; */
        /* if you want Flexible textarea/div then give min-height instead of height */
        overflow: auto;
        
        resize: both;
        max-width: 100%;
        /*font-size: 15px;
        padding: 2px;
        color: #000; */
      }
</style>
@stack('css')