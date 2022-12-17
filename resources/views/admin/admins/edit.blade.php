@extends('layouts.admin')
@section('title')
    @lang('site.edit')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.admins.index') }}">@lang('site.admin')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.edit')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.admins.update', ['admin'=> $admin->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8 mx-auto">

                        <div class="form-group">
                            <label for="">@lang('site.name')</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $admin->name) }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">@lang('site.email')</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email', $admin->email) }}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="roles">@lang('site.roles') <span class="required"></span></label>
                            <select name="roles[]" multiple  class="form-control select2" required>
                                <option value="">@lang('site.select')</option>
                                @foreach ($roles as $item)
                                <option {{ in_array($item->id, old('roles', $admin->roles->pluck('id')->toArray())) ? 'selected': '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('roles')
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
