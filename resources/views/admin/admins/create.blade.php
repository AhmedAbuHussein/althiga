@extends('layouts.admin')
@section('title')
    @lang('site.create')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.admins.index') }}">@lang('site.admin')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.create')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.admins.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8 mx-auto">

                        <div class="form-group">
                            <label for="">@lang('site.name')</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">@lang('site.email')</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="">@lang('site.password')</label>
                            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">@lang('site.password_confirmation')</label>
                            <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                            @error('password_confirmation')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                       
                        <div class="mt-4">
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary d-block w-100">حفظ</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
@endsection
