@extends('layouts.admin')
@section('title')
    @lang('site.edit')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.roles.index') }}">@lang('site.roles')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.edit')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.roles.update', $role->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="row">
                            <div class="form-group">
                                <label for="name">@lang('site.title')</label>
                                <input type="text" name="name" value="{{ $role->name }}" class="form-control" >
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <hr>
                            @foreach ($items as $item)
                                <div class="col-md-3 mb-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" {{ in_array($item->id, old('permissions', $role->permissions->pluck('id')->toArray())) ? 'checked' :'' }}  name="permissions[]" value="{{ $item->id }}"  type="checkbox" id="check{{ $item->name }}">
                                        <label class="form-check-label" for="check{{ $item->name }}">{{ $item->name }}</label>
                                    </div>
                                </div>
                            @endforeach
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
