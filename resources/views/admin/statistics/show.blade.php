@extends('layouts.admin')
@section('title')
    @lang('site.show')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.statistics.index') }}">@lang('site.statistics')</a></li>

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
                <div class="col-md-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.ip') :</span>
                            <span>{{ $statistic->ip }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.domain') :</span>
                            <a href="{{ $statistic->domain }}">{{ $statistic->domain }}</a>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.prev') :</span>
                            <a href="{{ $statistic->prev_link }}">{{ $statistic->prev_link }}</a>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.current') :</span>
                            <a href="{{ $statistic->current_link }}">{{ $statistic->current_link }}</a>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.agent_name') :</span>
                            <span>{{ $statistic->agent_name }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.browsers') :</span>
                            <span>{{ $statistic->browser }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.device_family') :</span>
                            <span>{{ $statistic->device_family }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.device_name') :</span>
                            <span>{{ $statistic->device_name }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.os') :</span>
                            <span>{{ $statistic->os_type }} - {{ $statistic->os }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.country_code') :</span>
                            <span>{{ $statistic->country_code }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.country_name') :</span>
                            <span>{{ $statistic->country_name }}</span>    
                        </li>

                        @if ($statistic->seenable)
                            <li class="list-group-item">
                                <span class="d-inline-block" style="width: 30%">@lang('site.courses') :</span>
                                <span>{{ optional($statistic->seenable)->title }}</span>    
                            </li>
                        @endif
                       
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
      
@endsection
