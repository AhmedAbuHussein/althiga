@extends('layouts.app')

@section('title', 'Courses Schedule')

@section('app')
    @parent
@endsection

@php
$dir = app()->isLocale('en') ? 'ltr' : 'rtl';
@endphp

@section('content')

    <!-- Page Title START -->
    <div class="page-title-section" style="background-image: url({{ asset('web/img/sub-pages-background.png') }});">
        <div class="container">
            <h1>@lang('app.Courses_Schedule')</h1>
            <ul class="fa">
                <li><a href="{{ route('index') }}">@lang('app.Home')</a></li>
                <li><a href="#">@lang('app.Courses_Schedule')</a></li>
            </ul>
        </div>
    </div>
    <!-- Page Title END -->

    <!-- Blog Grid START -->
    <div class="section-block-grey">
        <div class="container">
            <div class="section-heading row">
                <div class="col-md-8">
                    <h4>@lang('app.Courses_Schedule')</h4>
                    <div class="section-heading-line-right"></div>
                </div>
                <div class="col-md-4">
                    <form action="{{ route('courses.index') }}" style="position: relative">
                        <input type="search" name="_q" value="{{ request()->get('_q') }}" class="form-control" style="padding-left: 45px;" placeholder="@lang('app.search')">
                        <button class="btn btn-sm bt-primary btn-search"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="row mt-30">
                @foreach ($items as $item)    
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="blog-grid-simple">
                            <h4><a href="{{ route('courses.show', ['slug' => $item->slug]) }}"><i class="fa"></i>&nbsp;{{ $item->title }}</a></h4>
                            <p style="font-size: 14px; text-align: justify">{{ Str::words($item->details, 40) }}</p>
                            <div class="blog-grid-simple-content">
                                <div class="row blog-grid-simple-date">
                                    <div class="col-2 pr-0"> <i class="fa fa-calendar"></i> </div>
                                    <div class="col-5 pl-0">
                                        @if(count($item->days ?? []))
                                        <h5 style="font-size: 12px;">
                                            @foreach ($item->days ?? [] as $day)
                                                @lang('app.'.$day)
                                            @endforeach
                                            @lang('app.every week')
                                        </h5>
                                        @endif
                                    </div>
                                    <div class="col-5 left-holder">
                                        <a href="{{ route('courses.show', ['slug' => $item->slug]) }}" style="font-size: 12px;">@lang('app.Learn_More')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flext justify-content-center mt-3">
                {!! $items->withQueryString()->links() !!}
            </div>
        </div>
    </div>
    <!-- Blog Grid END -->

@endsection

@section('footer')
    @parent
@endsection
@push('css')
    <style>
        .btn-search{
            position: absolute;
            top: 0;
            left: 1px;
            background: #f9a448;
            padding: 7px 10px;
            border-radius: 0;
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
            color: #fff;
        }
    </style>
@endpush