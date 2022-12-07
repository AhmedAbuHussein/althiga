@extends('layouts.admin')
@section('title')
    @lang('site.edit')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.setting.index') }}">@lang('site.setting')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.edit')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.setting.update', $setting->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.email')</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email', $setting->email) }}">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.facebook')</label>
                                    <input type="url" name="facebook" class="form-control" value="{{ old('facebook', $setting->facebook) }}">
                                    @error('facebook')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.twitter')</label>
                                    <input type="url" name="twitter" class="form-control" value="{{ old('twitter', $setting->twitter) }}">
                                    @error('twitter')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.instagram')</label>
                                    <input type="url" name="instagram" class="form-control" value="{{ old('instagram', $setting->instagram) }}">
                                    @error('instagram')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.whatsapp')</label>
                                    <input type="number" name="phone" class="form-control" value="{{ old('phone', $setting->phone) }}">
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.register_phone')</label>
                                    <input type="number" name="register_phone" class="form-control" value="{{ old('register_phone', $setting->register_phone) }}">
                                    @error('register_phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">@lang('site.english values')</label>
                                    <input type="text" name="values[en]" class="form-control" value="{{ old('values.en', $setting->getTranslation('values', 'en')) }}">
                                    @error('values.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">@lang('site.arabic values')</label>
                                    <input type="text" name="values[ar]" class="form-control" value="{{ old('values.ar', $setting->getTranslation('values', 'ar')) }}">
                                    @error('values.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.lat')</label>
                                    <input type="text" name="lat" class="form-control" value="{{ old('lat', $setting->lat) ?? '21.598329592712165' }}">
                                    @error('lat')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.lng')</label>
                                    <input type="text" name="lng" class="form-control" value="{{ old('lng', $setting->lng) ?? '39.15056317058277' }}">
                                    @error('lng')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            
                           
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
