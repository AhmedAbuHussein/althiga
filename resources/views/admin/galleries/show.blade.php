@extends('layouts.admin')
@section('title')
    @lang('site.show')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.galleries.index') }}">@lang('site.galleries')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.show')</li>
@endsection
@section('content')
    <div class="card h-100">
        <div class="card-header align-items-center">
            <h4 class="mb-0">@lang('site.show info')</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="preview" style="height: 50vh">
                        <img loading="lazy" src="{{ $gallery->url }}" class="" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
      
@endsection
