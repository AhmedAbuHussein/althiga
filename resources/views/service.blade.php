@extends('layouts.app')

@section('title', 'Course')

@section('app')
    @parent
@endsection

@php
$dir = app()->isLocale('en') ? 'left' : 'right';
@endphp

@section('content')

    <!-- Page Title START -->
    <div class="page-title-section" style="background-image: url({{ Storage::url($panners->where('key', 'service_panner')->pluck('value')->first()) }})">
        <div class="container">
            <h1>{{ $category->title }}</h1>
            <ul class="fa">
                <li><a href="{{ route('index') }}">@lang('Home')</a></li>
                <li><a href="#">{{ $category->title }}</a></li>
            </ul>
        </div>
    </div>
    <!-- Page Title END -->

    <!-- Service Boxes START -->
    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder">
                <span>الدورات المتاحة في</span>
                <h3>{{ $category->title }}</h3>
                <div class="section-heading-line"></div>
            </div>

            <div class="row mt-50">

                @foreach ($items as $i=>$item)
                    <div class="col-12 col-sm-7 col-md-4">
                        <div class="service-block">
                            <div class="clearfix">
                                {{--  <div class="service-block-number-1">
                                    <h5>@lang(''.($i+1)) </h5> 
                                </div>  --}}
                                <div class="service-block-title">
                                    <h4>
                                        <a  href="{{ route('courses.show', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                                    </h4>
                                </div>
                            </div>
                            <p>{{ Str::words($item->details, 45) }}</p>
                            <div class="service-simple-button">
                                <a
                                    href="{{ route('courses.show', ['slug' => $item->slug]) }}">@lang('Course_Details')</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
            <div class="d-flex mt-4">
                {!! $items->links() !!}
            </div>
        </div>
    </div>
    <!-- Service Boxes END -->

@endsection

@section('footer')
    @parent
@endsection
@push('css')
    <style>
        .service-block p{
            height: 160px;
            overflow: hidden;
        }
        .service-block-number-1{
            width: 6%;
        }
        .page-title-section h1,
        .page-title-section ul li:after,
        .page-title-section ul li a
        {
            color: {{ $panners->where('key', 'service_panner_color')->pluck('value')->first() ?? '#FFF' }} !important;
        }
    
    </style>
@endpush