@extends('layouts.admin')
@section('title')
    @lang('site.send emails')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.subscribes.index') }}">@lang('site.subscribes')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.send emails')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.subscribes.mails') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">@lang('site.title')</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">@lang('site.courses')</label>
                            <select name="course_id" id="course_id" class="form-control">
                                <option value="">@lang('site.select')</option>
                                <option {{ old('course_id') == "0" ? 'selected': '' }} value="0">@lang('site.all')</option>
                                @foreach ($courses as $item)
                                    <option {{ old('course_id') == $item->id ? 'selected': '' }} value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                            @error('course_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">@lang('site.subscribes')</label>
                    <select name="subscribes[]" multiple id="subscribes" class="form-control select2"></select>
                    @error('subscribes')
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
    </div>
@endsection
@push('css')
    
@endpush
@push('js')
    <script>
        $(()=> {
            $(document).on("change", "#course_id", function(){
                let val = $(this).val();
                if(val != null && val != "" && val >= 0){
                    let options = "";
                    $.ajax({
                        url: '{{ route("admin.subscribes.users") }}',
                        type: "POST",
                        data: {"_token": "{{ csrf_token() }}", 'course_id': val},
                        dataType: 'json',
                        success: function(data){
                            data.forEach(item => {
                                options += `<option value="${item.email}">${item.email}</option>`;
                            });
                            $('.select2').html(options);
                           
                            $(".select2").select2({
                                "placeholder": "{{ __('site.select') }}",
                            });
                        }
                    });
                }else{
                    $('.select2').html('');
                    $(".select2").select2({
                        "placeholder": "{{ __('site.select') }}",
                    });
                }
            });
        });

        
    </script>
@endpush
