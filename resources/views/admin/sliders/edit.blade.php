@extends('layouts.admin')
@section('title')
    @lang('site.edit')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.sliders.index') }}">@lang('site.sliders')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.edit')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.sliders.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.english title')</label>
                                    <input type="text" name="title[en]" class="form-control" value="{{ old('title.en', $slider->getTranslation('title', 'en')) }}">
                                    @error('title.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.arabic title')</label>
                                    <input type="text" name="title[ar]" class="form-control" value="{{ old('title.ar', $slider->getTranslation('title', 'ar')) }}">
                                    @error('title.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">@lang('site.external_link')</label>
                            <input name="link" type="url" class="form-control" placeholder="@lang('site.external_link')" value="{{ old('link', $slider->link) }}">
                            @error('text.en')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">@lang('site.english details')</label>
                            <textarea name="text[en]" class="form-control" rows="5">{{ old('text.en', $slider->getTranslation('text', 'en')) }}</textarea>
                            @error('text.en')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">@lang('site.arabic details')</label>
                            <textarea name="text[ar]" class="form-control" rows="5">{{ old('text.ar', $slider->getTranslation('text', 'ar')) }}</textarea>
                            @error('text.ar')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="image" class="preview">
                                <img src="{{ $slider->url }}" alt="">
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
