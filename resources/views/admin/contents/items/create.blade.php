@extends('layouts.admin')
@section('title')
@lang('site.create')
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted">
    <a class="text-muted text-hover-primary" href="{{ route('admin.courses.index') }}">@lang('site.courses')</a>
</li>

<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted">
    <a class="text-muted text-hover-primary" href="{{ route('admin.contents.index', ['course'=> $course]) }}">@lang('site.contents')</a>
</li>

<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted">
    <a class="text-muted text-hover-primary" href="{{ route('admin.items.index', ['course'=> $course, 'content'=> $content]) }}">@lang('site.items')</a>
</li>

<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted">@lang('site.create')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.items.store', ['course'=> $course, 'content'=> $content]) }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-8 mx-auto">

                    <div class="form-group">
                        <label for="">@lang('site.english title')</label>
                        <input type="text" name="title[en]" class="form-control" value="{{ old('title.en') }}">
                        @error('title.en')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">@lang('site.arabic title')</label>
                        <input type="text" name="title[ar]" class="form-control" value="{{ old('title.ar') }}">
                        @error('title.ar')
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