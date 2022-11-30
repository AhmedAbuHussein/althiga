@extends('layouts.admin')
@section('title')
    {{ $category->title }}
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('items.categories.index') }}">@lang('site.categories')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">{{ $category->title }}</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 ms-auto me-auto">
            <div class="card h-100">
                <div class="card-header align-items-center">
                    <h4 class="mb-0">@lang('site.main_information')</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.title') :</span>
                            <span>{{ $category->title }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-block">@lang('site.notes') :</span>
                            <span>{{ $category->details }}</span>    
                        </li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>
@endsection
