@extends('layouts.admin')
@section('title')
    @lang('site.create')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.partners.index') }}">@lang('site.partners')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.create')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.partners.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">

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
                    
                        <div class="form-group">
                            <label for="">@lang('site.external_link')</label>
                            <input name="link" type="url" class="form-control" placeholder="@lang('site.external_link')" value="{{ old('link') }}">
                            @error('text.en')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="image" class="preview">
                                <img loading="lazy" src="{{ asset('images/icon.png') }}" alt="">
                            </label>
                            <input type="file" id="image" name="image" accept="image/*" class="form-control">
                            <p class="text-danger">@lang('site.perfect_size', ['width'=> 120, 'height'=> 120])</p>
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
