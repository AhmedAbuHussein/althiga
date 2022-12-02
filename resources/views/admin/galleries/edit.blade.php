@extends('layouts.admin')
@section('title')
    @lang('site.edit')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.galleries.index') }}">@lang('site.galleries')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.edit')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.galleries.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div>
                            <label for="image" class="preview" style="height: 50vh">
                                <img src="{{ $gallery->url }}" alt="">
                            </label>
                            <input type="file" id="image" name="image" accept="image/*" class="form-control">
                            <p class="text-danger">@lang('site.perfect_size', ['width'=> 2048, 'height'=> 1024])</p>

                        </div>
                        <hr>
                        
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
