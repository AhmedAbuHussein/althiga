@extends('layouts.admin')
@section('title')
    @lang('site.home')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"> @lang('site.dashboard')</li>
@endsection

@section('content')

<div class="row ">
    <div class="col-sm-12 col-md-6 col-xl-4 mb-4">
        <div class="card" style="height: 200px;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p style="font-size: 60px;" class="text-muted" data-kt-countup="true" data-kt-countup-value="{{ \App\Models\Course::count() }}">0</p>
                    <i class="fa fa-book" style="font-size: 80px;"></i> 
                </div>
                <div class="footer">
                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">@lang('site.courses')</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-xl-4 mb-4">
        <div class="card" style="height: 200px;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p style="font-size: 60px;" class="text-muted" data-kt-countup="true" data-kt-countup-value="{{ \App\Models\Category::count() }}">0</p>
                    <i class="fa fa-list-alt" style="font-size: 80px;"></i> 
                </div>
                <div class="footer">
                    <a href="{{ route('admin.categories.index') }}" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">@lang('site.categories')</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-xl-4 mb-4">
        <div class="card" style="height: 200px;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p style="font-size: 60px;" class="text-muted" data-kt-countup="true" data-kt-countup-value="{{ \App\Models\Contact::count() }}">0</p>
                    <i class="fa fa-phone" style="font-size: 80px;"></i> 
                </div>
                <div class="footer">
                    <a href="{{ route('admin.contacts.index') }}" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">@lang('site.contacts')</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-xl-4 mb-4">
        <div class="card" style="height: 200px;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p style="font-size: 60px;" class="text-muted" data-kt-countup="true" data-kt-countup-value="{{ \App\Models\Gallery::count() }}">0</p>
                    <i class="fa fa-image" style="font-size: 80px;"></i> 
                </div>
                <div class="footer">
                    <a href="{{ route('admin.galleries.index') }}" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">@lang('site.gallery')</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-xl-4 mb-4">
        <div class="card" style="height: 200px;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p style="font-size: 60px;" class="text-muted" data-kt-countup="true" data-kt-countup-value="{{ \App\Models\Subscribe::count() }}">0</p>
                    <i class="fa fa-play" style="font-size: 80px;"></i> 
                </div>
                <div class="footer">
                    <a href="{{ route('admin.subscribes.index') }}" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">@lang('site.subscribe')</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-xl-4 mb-4">
        <div class="card" style="height: 200px;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p style="font-size: 60px;" class="text-muted" data-kt-countup="true" data-kt-countup-value="{{ \App\Models\Partner::count() }}">0</p>
                    <i class="fa fa-handshake" style="font-size: 80px;"></i> 
                </div>
                <div class="footer">
                    <a href="{{ route('admin.partners.index') }}" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">@lang('site.partners')</a>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection
@push('css')
    <style>
        .card-body .footer{
            position: absolute;
            bottom: 0;
            text-align: center;
            box-sizing: border-box;
            width: 100%;
            background: #1e1e2d;
            left: 0;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .card-body .footer a{
            width: 100%;
            display: block;
            padding: 15px 0;
        }
        .board .card .card-body {
            transition: 0.8s ease-in-out;
        }
        .board .card .card-body div i{
            font-size: 80px;
        }
        .board .card:hover  .card-body i {
            transform: scale(1.3);
            transition-duration: 0.8s;
        }
    </style>
@endpush
