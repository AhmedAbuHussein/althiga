@extends('layouts.admin')
@section('title')
    @lang('site.show')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.team.index') }}">@lang('site.team')</a></li>

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
                            <span class="d-inline-block" style="width: 30%">@lang('site.english name') :</span>
                            <span>{{ $team->getTranslation("name", 'en') }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.arabic name') :</span>
                            <span>{{ $team->getTranslation("name", 'ar') }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.english title') :</span>
                            <span>{{ $team->getTranslation("title", 'en') }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.arabic title') :</span>
                            <span>{{ $team->getTranslation("title", 'ar') }}</span>    
                        </li>

                        <li class="list-group-item">
                            <span class="d-block">@lang('site.english bio') :</span>
                            <span>{{ $team->getTranslation("bio", "en") }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-block">@lang('site.arabic bio') :</span>
                            <span>{{ $team->getTranslation("bio", "ar") }}</span>    
                        </li>
                       
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="preview">
                        <img src="{{ $team->url }}" class="" alt="">
                    </div>
                    <div class="mt-4 text-center">
                        @if ($team->facebook)
                                <a class="m-3" href="{{ $team->facebook }}"><i style="font-size: 17pt" class="la la-facebook"></i></a>
                            @endif
                            @if ($team->twitter)
                                <a class="m-3" href="{{ $team->twitter }}"><i style="font-size: 17pt" class="la la-twitter"></i></a>
                            @endif
                            @if ($team->instagram)
                                <a class="m-3" href="{{ $team->instagram }}"><i style="font-size: 17pt" class="la la-instagram"></i></a>
                            @endif
                            @if ($team->youtube)
                                <a class="m-3" href="{{ $team->youtube }}"><i style="font-size: 17pt" class="la la-youtube"></i></a>
                            @endif
                    </div>
                </div>
            </div>
            
        </div>
    </div>
      
@endsection
