@extends('layouts.admin')
@section('title')
    @lang('site.delete')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.statistics.index') }}">@lang('site.statistics')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.delete')</li>
@endsection
@section('content')
<div class="card h-100">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{ route('admin.statistics.delete') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="date_end">@lang('site.delete_statistic_before_this_date')</label>
                        <input type="date" name="date_end" class="form-control" value="{{ old('date_end') }}">
                        @error('date_end')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">@lang('site.send')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection