@extends('layouts.admin')
@section('title')
    @lang('site.edit')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.team.index') }}">@lang('site.team')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.edit')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.team.update', $team->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.english name')</label>
                                    <input type="text" name="name[en]" class="form-control" value="{{ old('name.en', $team->getTranslation('name', 'en')) }}">
                                    @error('name.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.arabic name')</label>
                                    <input type="text" name="name[ar]" class="form-control" value="{{ old('name.ar', $team->getTranslation('name', 'ar')) }}">
                                    @error('name.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.english title')</label>
                                    <input type="text" name="title[en]" class="form-control" value="{{ old('title.en', $team->getTranslation('title', 'en')) }}">
                                    @error('title.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.arabic title')</label>
                                    <input type="text" name="title[ar]" class="form-control" value="{{ old('title.ar', $team->getTranslation('title', 'ar')) }}">
                                    @error('title.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.facebook')</label>
                                    <input type="url" name="facebook" class="form-control" value="{{ old('facebook', $team->facebook) }}">
                                    @error('facebook')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.twitter')</label>
                                    <input type="url" name="twitter" class="form-control" value="{{ old('twitter', $team->twitter) }}">
                                    @error('twitter')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="">@lang('site.english bio')</label>
                            <textarea name="bio[en]" class="form-control" rows="5">{{ old('bio.en', $team->getTranslation('bio', 'en')) }}</textarea>
                            @error('bio.en')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">@lang('site.arabic bio')</label>
                            <textarea name="bio[ar]" class="form-control" rows="5">{{ old('bio.ar', $team->getTranslation('bio', 'ar')) }}</textarea>
                            @error('bio.ar')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="image" class="preview">
                                <img src="{{ $team->url }}" alt="">
                            </label>
                            <input type="file" id="image" name="image" accept="image/*" class="form-control">
                            <p class="text-danger">@lang('site.perfect_size', ['width'=> 350, 'height'=> 280])</p>
                        </div>
                        <hr>

                        <div class="form-group">
                            <label for="">@lang('site.instagram')</label>
                            <input type="url" name="instagram" class="form-control" value="{{ old('instagram', $team->instagram) }}">
                            @error('instagram')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">@lang('site.youtube')</label>
                            <input type="url" name="youtube" class="form-control" value="{{ old('youtube', $team->youtube) }}">
                            @error('youtube')
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
