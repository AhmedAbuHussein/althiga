@extends('layouts.admin')
@section('title')
    {{ $extra->title }}
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
        href="{{ route('admin.about.index') }}">@lang('site.about')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.extra.index') }}">@lang('site.extra')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">{{ $extra->title }}</li>
@endsection
@section('content')
    <div class="card h-100">
        <div class="card-header align-items-center">
            <h4 class="mb-0">@lang('site.show info')</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.english title') :</span>
                            <span>{{ $extra->getTranslation("title", 'en') }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-block">@lang('site.english details') :</span>
                            <span>{{ $extra->getTranslation("text", "en") }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.arabic title') :</span>
                            <span>{{ $extra->getTranslation("title", 'ar') }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-block">@lang('site.arabic details') :</span>
                            <span>{{ $extra->getTranslation("text", "ar") }}</span>    
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="preview">
                        <img src="{{ $extra->url }}" class="" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
      
@endsection
