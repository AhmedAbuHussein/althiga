@extends('layouts.admin')
@section('title')
    @lang('site.show')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.contacts.index') }}">@lang('site.contacts')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.show')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="mb-3 border">
                        <h4 class="py-4 px-2 border-bottom" style="background: #5f5f5f; color:#fff;">{{ $contact->title }}</h4>
                        <p class="p-3">{{ $contact->message }}</p>
                    </div>
                </div>
                @if (auth()->user()->can('contact_send_mail'))
                <div class="col-md-8 mx-auto">
                    <form action="{{ route('admin.contacts.mail', [$contact->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">@lang('site.title')</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">@lang('site.email')</label>
                            <input type="email" readonly class="form-control" value="{{ $contact->email }}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">@lang('site.body')</label>
                            <textarea name="body" class="form-control summernote" rows="5">{{ old('body') }}</textarea>
                            @error('body')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary d-block w-100">حفظ</button>
                            </div>
                        </div>
                    </form>
                </div>
                @endif
                
            </div>
        </div>
    </div>
@endsection