@extends('layouts.admin')
@section('title')
    {{ $course->title }}
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.courses.index') }}">@lang('site.courses')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">{{ $course->title }}</li>
@endsection
@section('content')
    <div class="card h-100">
        <div class="card-header align-items-center">
            <h4 class="mb-0">@lang('site.show info')</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            {{ $course->getTranslation("title", 'en') }}
                        </li>
                        <li class="list-group-item">
                            {{ $course->getTranslation("details", "en") }} 
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.accreditation number', [],'en') :</span>
                            <span>{{ $course->accreditation_num }}</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.categories', [],'en') :</span>
                            <span>{{ $course->category->getTranslation("title", 'en') }}</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.is_popular', [],'en') :</span>
                            <span>{{ $course->is_popular == '1' ? __('site.yes', [],'en') : __('site.no', [],'en') }}</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.set_main_header', [], 'en') :</span>
                            <span>{{ $course->is_popular == '1' ? __('site.yes', [],'en') : __('site.no', [],'en') }}</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.course language', [],'en') :</span>
                            <span>{{ __('site.'.$course->languages, [],'en') }}</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.english certification', [],'en') :</span>
                            <span>{{ $course->getTranslation('certification', 'en') }}</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.duration (days)', [],'en') :</span>
                            <span>@lang('site.duration', ['num'=> $course->duration],'en')</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.hour per day', [],'en') :</span>
                            <span>@lang('site.per day', ['num'=> $course->hour_per_day] ,'en')</span>    
                        </li>

                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            {{ $course->getTranslation("title", 'ar') }}
                        </li>
                        <li class="list-group-item">
                            {{ $course->getTranslation("details", "ar") }} 
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.accreditation number', [],'ar') :</span>
                            <span>{{ $course->accreditation_num }}</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.categories', [],'ar') :</span>
                            <span>{{ $course->category->getTranslation("title", 'ar') }}</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.is_popular', [],'ar') :</span>
                            <span>{{ $course->is_popular == '1' ? __('site.yes', [],'ar') : __('site.no', [],'ar') }}</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.set_main_header', [], 'ar') :</span>
                            <span>{{ $course->is_popular == '1' ? __('site.yes', [],'ar') : __('site.no', [],'ar') }}</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.course language', [],'ar') :</span>
                            <span>{{ __('site.'.$course->languages, [],'ar') }}</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.english certification', [],'ar') :</span>
                            <span>{{ $course->getTranslation('certification', 'ar') }}</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.duration (days)', [],'ar') :</span>
                            <span>@lang('site.duration', ['num'=> $course->duration],'ar')</span>    
                        </li>

                        <li class="list-group-item d-flex justify-content-start align-items-center" style="gap: 15px;">
                            <span class="d-inline-block" style="width: 35%">@lang('site.hour per day', [],'ar') :</span>
                            <span>@lang('site.per day', ['num'=> $course->hour_per_day] ,'ar')</span>    
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
      
@endsection
