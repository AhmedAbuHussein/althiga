@extends('layouts.admin')
@section('title')
    @lang('site.edit')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.terms.index') }}">@lang('site.terms')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.edit')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.terms.update', $term->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="form-group">
                            <label for="">@lang('site.arabic title')</label>
                            <input type="text" name="title[ar]" class="form-control" value="{{ old('title.ar', $term->getTranslation('title', 'ar')) }}">
                            @error('title.ar')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">@lang('site.arabic details')</label>
                            <textarea name="details[ar]" class="form-control summernote_ar" rows="5">{{ old('details.ar', $term->getTranslation('details', 'ar')) }}</textarea>
                            @error('details.ar')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">@lang('site.english title')</label>
                            <input type="text" name="title[en]" class="form-control" value="{{ old('title.en', $term->getTranslation('title', 'en')) }}">
                            @error('title.en')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">@lang('site.english details')</label>
                            <textarea name="details[en]" class="form-control summernote_en" rows="5">{{ old('details.en', $term->getTranslation('details', 'en')) }}</textarea>
                            @error('details.en')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mt-4">
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary d-block w-100">@lang('site.send')</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
@endsection
