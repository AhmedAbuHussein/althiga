@extends('layouts.admin')
@section('title')
    @lang('site.extra')
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
        href="{{ route('admin.about.index') }}">@lang('site.about')</a></li>
        
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.extra')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            {!! $dataTable->table(['class'=> 'table table-row-dashed table-row-gray-300 text-center table-striped']) !!}
            <input type="hidden" id="create-btn" value="{{ route('admin.extra.create') }}">
        </div>
    </div>
@endsection

@push('js')
{!! $dataTable->scripts() !!}
@endpush
@push('css')
    <style>
        .btn i{
            padding: 0 !important
        }
        td{
            line-height: 60px;
        }
    </style>
@endpush