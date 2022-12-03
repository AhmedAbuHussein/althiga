@extends('layouts.admin')
@section('title')
    @lang('site.show')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.accreditations.index') }}">@lang('site.credits')</a></li>

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
                <div class="col-md-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="d-block">@lang('site.english title') :</span>
                            <span>{{ $accreditation->getTranslation("title", 'en') }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-block">@lang('site.arabic title') :</span>
                            <span>{{ $accreditation->getTranslation("title", 'ar') }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.type') :</span>
                            <span>@lang('site.'.$accreditation->type)</span>    
                        </li>

                        @if ($accreditation->type == 'national')
                            <li class="list-group-item">
                                <span class="d-block">@lang('site.english extra data') :</span>
                                <span>{{ $accreditation->getTranslation("text", "en") }}</span>    
                            </li>
                        
                            <li class="list-group-item">
                                <span class="d-block">@lang('site.arabic extra data') :</span>
                                <span>{{ $accreditation->getTranslation("text", "ar") }}</span>    
                            </li>
                        @else
                            <li class="list-group-item">
                                <span class="d-block">@lang('site.arabic file title') :</span>
                                <span>{{ $accreditation->getTranslation('file_title', 'ar') }}</span>    
                            </li>
                            <li class="list-group-item">
                                <span class="d-block">@lang('site.english file title') :</span>
                                <span>{{ $accreditation->getTranslation('file_title', 'en') }}</span>    
                            </li>

                            <li class="list-group-item">
                                <span class="d-block">@lang('site.file') :</span>
                                <span><a href="{{ $accreditation->fileUrl }}" download="">@lang('site.download file')</a></span>    
                            </li>
                        @endif
                        
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="preview">
                        <img src="{{ $accreditation->url }}" class="" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
      
@endsection
