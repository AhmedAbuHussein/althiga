@extends('layouts.admin')
@section('title')
    @lang('site.create')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.accreditations.index') }}">@lang('site.credits')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.create')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.accreditations.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.english title')</label>
                                    <input type="text" name="title[en]" class="form-control" value="{{ old('title.en') }}">
                                    @error('title.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">@lang('site.arabic title')</label>
                                    <input type="text" name="title[ar]" class="form-control" value="{{ old('title.ar') }}">
                                    @error('title.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">@lang('site.type')</label>
                            <select name="type" class="form-control" id="type">
                                <option value="">@lang('site.select')</option>
                                <option {{ old('type') == 'national' ? 'selected': '' }} value="national">@lang('site.national')</option>
                                <option {{ old('type') == 'international' ? 'selected': '' }} value="international">@lang('site.international')</option>
                            </select>
                            @error('type')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div id="text">
                            <div class="form-group">
                                <label for="">@lang('site.english extra data')</label>
                                <input type="text" name="text[en]" class="form-control" placeholder="@lang('site.en_extra_ex')" value="{{ old('text.en') }}" >
                                @error('text.en')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">@lang('site.arabic extra data')</label>
                                <input type="text" name="text[ar]" class="form-control" placeholder="@lang('site.ar_extra_ex')" value="{{ old('text.ar') }}" >                               
                                @error('text.ar')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div  id="file_type">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('site.english file title')</label>
                                        <input type="text" name="file_title[en]" class="form-control" value="{{ old('file_title.en') }}">
                                        @error('file_title.en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('site.arabic file title')</label>
                                        <input type="text" name="file_title[ar]" class="form-control" value="{{ old('file_title.ar') }}">
                                        @error('file_title.ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file">@lang('site.file')</label>
                                <input type="file" id="file" name="file"  class="form-control">
                            </div>

                        </div>
   
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="image" class="preview">
                                <img loading="lazy" src="{{ asset('images/icon.png') }}" alt="">
                            </label>
                            <input type="file" id="image" name="image" accept="image/*" class="form-control">
                            <p class="text-danger">@lang('site.perfect_size', ['width'=> 250, 'height'=> 250])</p>
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
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
@push('js')
    <script>
    /*
        $(()=> {
            let item = $("#type").val();
            handleInputs(item);
            $(document).on('change', "#type", function(){
                let value = $(this).val();
                handleInputs(value);
            });
        });

        function handleInputs (value){
            if(value == 'national'){
                $("#text").removeClass('d-none');
                $("#file_type input").val("");
                $("#file_type #file").attr('type', "text");
                $("#file_type #file").attr('type', "file");
                $("#file_type").addClass('d-none');
            }else if(value == "international"){
                $("#text").addClass('d-none');
                $("#text input").val('');
                
                $("#file_type input").val("");
                $("#file_type #file").attr('type', "text");
                $("#file_type #file").attr('type', "file");
                $("#file_type").removeClass('d-none');
            }else{
                $("#file_type").addClass('d-none');
                $("#text").addClass('d-none');
                $("#file_type input").val("");
                $("#file_type #file").attr('type', "text");
                $("#file_type #file").attr('type', "file");
                $("#text input").val('');
            }
        }
        */
    </script>
@endpush