@extends('layouts.app')

@section('title', 'Contact Us')

@section('app')
    @parent
@endsection

@php
$dir = app()->isLocale('en') ? 'left' : 'right';
@endphp

@section('content')

    <!-- Page Title START -->
    <div class="page-title-section" style="background-image: url({{ asset('web/img/sub-pages-background.png') }});">
        <div class="container">
            <h1>@lang('ContactUs')</h1>
            <ul class="fa">
                <li><a href="{{ route('index') }}">@lang('Home')</a></li>
                <li><a href="#">@lang('ContactUs')</a></li>
            </ul>
        </div>
    </div>
    <!-- Page Title END -->

    <!-- Contact Boxes START -->
    <div class="section-block-grey">
        <div class="container">
            <div class="row">

                @if ($ticket)
                    <div class="col-md-12 mb-3">
                        <div class="alert alert-info text-center">
                            {!! __('ticket id', ['id'=> $ticket]) !!}
                        </div>
                    </div>
                @endif
                
                <div class="col-md-6">
                    <img src="{{ $settings->first()->website_wide_logo() }}" alt="">
                    <div class="contact-information mt-3">
                        @if ($settings->where('key', 'address_'.app()->getLocale('en'))->pluck('value')->first())     
                        <p>
                            <span>@lang('address') :</span>
                            {{ $settings->where('key', 'address_'.app()->getLocale('en'))->pluck('value')->first() }}
                        </p>
                        @endif
                        @if ($settings->where('key', 'phone')->pluck('value')->first()) 
                        <p>
                            <span>@lang('phone') :</span>
                            {{ $settings->where('key', 'phone')->pluck('value')->first() }}
                        </p>
                        @endif
                        @if ($settings->where('key', 'contact_email')->pluck('value')->first())    
                        <p>
                            <span>@lang('email') :</span>
                            {{ $settings->where('key', 'contact_email')->pluck('value')->first() }}
                        </p>
                        @endif

                    </div>
                    <div class="footer-social-icons mt-2">
                        <ul>
                            @if (!is_null($fcb = $settings->where('key', 'facebook_link')->pluck('value')->first()))<li><a href="{{ $fcb }}"><i class="fa fa-facebook-f"></i></a></li> @endif
                            @if (!is_null($twit = $settings->where('key', 'twitter_link')->pluck('value')->first()))<li><a href="{{ $twit }}"><i class="fa fa-twitter"></i></a></li> @endif
                            @if (!is_null($inst = $settings->where('key', 'instagram_link')->pluck('value')->first()))<li><a href="{{ $inst }}"><i class="fa fa-instagram"></i></a></li> @endif
                            @if (!is_null($yout = $settings->where('key', 'youtube_link')->pluck('value')->first()))<li><a href="{{ $yout }}"><i class="fa fa-youtube"></i></a></li> @endif
                            @if (!is_null($yout = $settings->where('key', 'github_link')->pluck('value')->first()))<li><a href="{{ $yout }}"><i class="fa fa-github"></i></a></li> @endif
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <form action="{{ route('contact') }}" id="contact_form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="@lang('name')" autocomplete="off" value="{{ old('name') }}" required class="form-control">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" placeholder="@lang('email')" name="email" autocomplete="off" value="{{ old('email') }}" required class="form-control">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="@lang('title')" name="title" autocomplete="off" value="{{ old('title') }}" required class="form-control">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea rows="8" name="message" placeholder="@lang('message')" autocomplete="off" required class="form-control">{{ old('message') }}</textarea>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div>
                                <button 
                                    class="g-recaptcha btn btn-success"
                                    style="width: 150px;" 
                                    data-sitekey="{{ env('RECAPTHA_KEY') }}" 
                                    data-callback='onSubmit' 
                                    data-action='submit'
                                >@lang('send')</button>
                            </div>

                            <a class="btn btn-primary" href="{{ route('chat') }}">@lang('conversation')</a>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="map" style="line-height: 0">
        {!! $settings->where('key','map')->pluck('value')->first() !!}
    </div>
    <!-- Contact Boxes END -->

@endsection

@section('footer')
    @parent
@endsection
@push('js')
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
        function onSubmit(token) {
            document.getElementById("contact_form").submit();
        }
    </script>

@endpush


@push('css')
    <style>
        .grecaptcha-badge{
            z-index: 1;
        }
        .map iframe{
            width: 100%;
            height: 500px;
            border: 0;
        }
        .contact-information p {
            line-height: 1.3;
            color: #707070;
            margin-bottom: 13px;
        }
        .contact-information p span {
            color: #303030;
        }
    </style>
@endpush