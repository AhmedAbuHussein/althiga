@extends('layouts.admin')
@section('title')
    @lang('site.show')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.roles.index') }}">@lang('site.roles')</a></li>

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
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="d-inline-block" style="width: 30%">@lang('site.title') :</span>
                            <span>{{ $role->name }}</span>    
                        </li>
                        <li class="list-group-item">
                            <span class="d-block">@lang('site.permissions') :</span>
                            <span>{{ implode(", ", $role->permissions->pluck('name')->toArray()) }}</span>    
                        </li>
                    </ul>
                </div>
        
            </div>
            
        </div>
    </div>
      
@endsection
