@extends('layouts.admin')
@section('title')
@lang('site.edit')
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary" href="{{ route('admin.courses.index') }}">@lang('site.courses')</a></li>

<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted">@lang('site.edit')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.courses.update', ['course'=> $course->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">@lang('site.main')</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">@lang('site.extra data')</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">@lang('site.meta')</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="false">@lang('site.cost')</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="false">@lang('site.files')</button>
                </li>
            </ul>

            <div class="tab-content pt-5" id="myTabContent">
                {{--  start tab 1  --}}
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.english title') <span class="required"></span></label>
                                <input type="text" name="title[en]" class="form-control" required value="{{ old('title.en', $course->getTranslation('title', 'en')) }}">
                                @error('title.en')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.arabic title') <span class="required"></span></label>
                                <input type="text" name="title[ar]" class="form-control" required value="{{ old('title.ar', $course->getTranslation('title', 'ar')) }}">
                                @error('title.ar')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="accreditation_num">@lang('site.accreditation number') <span class="required"></span></label>
                                <input type="text" name="accreditation_num" value="{{ old('accreditation_num', $course->accreditation_num) }}" required class="form-control" min="1"> 
                                @error('accreditation_num')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">@lang('site.categories') <span class="required"></span></label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="">@lang('site.select')</option>
                                    @foreach ($categories as $item)
                                    <option {{ old('category_id', $course->category_id) ==  $item->id ? 'selected': '' }} value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="is_popular">@lang('site.is_popular') <span class="required"></span></label>
                                <select name="is_popular" id="is_popular" class="form-control" required>
                                    <option value="">@lang('site.select')</option>
                                    <option {{ old('is_popular', $course->is_popular) == '1'? 'selected': '' }} value="1">@lang('site.yes')</option>
                                    <option {{ old('is_popular', $course->is_popular) == '0'? 'selected': '' }} value="0">@lang('site.no')</option>
                                </select>
                                @error('is_popular')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="main_header">@lang('site.set_main_header') <span class="required"></span></label>
                                <select name="main_header" id="main_header" class="form-control" required>
                                    <option value="">@lang('site.select')</option>
                                    <option {{ old('main_header', $course->main_header) == '1'? 'selected': '' }} value="1">@lang('site.yes')</option>
                                    <option {{ old('main_header', $course->main_header) == '0'? 'selected': '' }} value="0">@lang('site.no')</option>
                                </select>
                                @error('main_header')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.english details') <span class="required"></span></label>
                                <textarea name="details[en]" class="form-control" required rows="5">{{ old('details.en', $course->getTranslation('details', 'en')) }}</textarea>
                                @error('details.en')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.arabic details') <span class="required"></span></label>
                                <textarea name="details[ar]" class="form-control" required rows="5">{{ old('details.ar', $course->getTranslation('details', 'ar')) }}</textarea>
                                @error('details.ar')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end" style="margin-top: 40px">
                        <button type="button" onclick="goTo('#tab2-tab')" class="btn btn-primary">@lang('site.next')</button>
                    </div>
                </div>
                {{--  end tab 1  --}}

                {{--  start tab 2  --}}
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.english extra title')</label>
                                <input type="text" name="title2[en]" class="form-control" value="{{ old('title2.en', $course->getTranslation('title2', 'en')) }}">
                                @error('title2.en')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.arabic extra title')</label>
                                <input type="text" name="title2[ar]" class="form-control" value="{{ old('title2.ar', $course->getTranslation('title2', 'ar')) }}">
                                @error('title2.ar')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.english extra details')</label>
                                <textarea name="details2[en]" class="form-control" rows="5">{{ old('details2.en', $course->getTranslation('details2', 'en')) }}</textarea>
                                @error('details2.en')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.arabic extra details')</label>
                                <textarea name="details2[ar]" class="form-control" rows="5">{{ old('details2.ar', $course->getTranslation('details2', 'ar')) }}</textarea>
                                @error('details2.ar')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-between" style="margin-top: 40px">
                        <button type="button" onclick="goTo('#tab1-tab')" class="btn btn-info">@lang('site.prev')</button>
                        <button type="button" onclick="goTo('#tab3-tab')" class="btn btn-primary">@lang('site.next')</button>
                    </div>
                </div>
                {{--  end tab 2  --}}

                {{--  start tab 3  --}}
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="days">@lang('site.days') <span class="required"></span></label>
                                <select name="days[]" id="days" required class="form-control select2" multiple>
                                    @foreach ($days as $day)
                                        <option {{ in_array($day, old('days', $course->days ?? []) ?? []) ? 'selected': '' }} value="{{ $day }}">@lang("site.$day")</option>
                                    @endforeach
                                </select>
                                @error('days')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="duration">@lang('site.duration (days)') <span class="required"></span></label>
                                <input type="number" name="duration" value="{{ old('duration', $course->duration) }}" required class="form-control" min="1"> 
                                @error('duration')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hour_per_day">@lang('site.hour per day') <span class="required"></span></label>
                                <input type="number" step="0.5" name="hour_per_day" value="{{ old('hour_per_day', $course->hour_per_day) }}" required class="form-control" min="1"> 
                                @error('hour_per_day')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="languages">@lang('site.course language') <span class="required"></span></label>
                                <select name="languages" id="languages" class="form-control" required>
                                    <option value="">@lang('site.select')</option>
                                    <option {{ old('languages', $course->languages) == 'arabic'? 'selected': '' }} value="arabic">@lang('site.arabic')</option>
                                    <option {{ old('languages', $course->languages) == 'english'? 'selected': '' }} value="english">@lang('site.english')</option>
                                    <option {{ old('languages', $course->languages) == 'both'? 'selected': '' }} value="both">@lang('site.both')</option>
                                </select>
                                @error('languages')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="certification_en">@lang('site.english certification') <span class="required"></span></label>
                                <input type="text" step="0.5" name="certification[en]" value="{{ old('certification.en', $course->getTranslation('certification', 'en')) }}" required class="form-control" min="1"> 
                                @error('certification.en')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="certification_ar">@lang('site.arabic certification') <span class="required"></span></label>
                                <input type="text" step="0.5" name="certification[ar]" value="{{ old('certification.ar', $course->getTranslation('certification', 'ar')) }}" required class="form-control" min="1"> 
                                @error('certification.ar')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                                               
                    </div>
                    <div class="form-group d-flex justify-content-between" style="margin-top: 40px">
                        <button type="button" onclick="goTo('#tab2-tab')" class="btn btn-info">@lang('site.prev')</button>
                        <button type="button" onclick="goTo('#tab4-tab')" class="btn btn-primary">@lang('site.next')</button>
                    </div>
                </div>
                {{--  end tab 3  --}}

                {{--  start tab 4  --}}
                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="show_single_price">@lang('site.show single price') <span class="required"></span></label>
                                <select name="show_single_price" id="show_single_price" class="form-control" required onChange="changeDisplayPrice('#show_single_price','#show-single-price', '#role-single')">
                                    <option value="">@lang('site.select')</option>
                                    <option {{ old('show_single_price', $course->show_single_price) == '1'? 'selected': '' }} value="1">@lang('site.yes')</option>
                                    <option {{ old('show_single_price', $course->show_single_price) == '0'? 'selected': '' }} value="0">@lang('site.no')</option>
                                </select>
                                @error('show_single_price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div id="show-single-price" class="d-none">
                                <div class="form-group">
                                    <label for="price">@lang('site.price')</label>
                                    <input type="number" name="price" value="{{ old('price', $course->price) }}" class="form-control">
                                    @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="discount_price">@lang('site.discount_price')</label>
                                    <input type="number" min="0" step="0.5" max="100" name="discount_price" value="{{ old('discount_price', $course->discount_price) }}" class="form-control">
                                    @error('discount_price')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-none" id="role-single">
                                <div class="form-group">
                                    <label for="price_role_en">@lang('site.english_price_role')</label>
                                    <input type="text" name="price_role[en]" value="{{ old('price_role.en', $course->getTranslation('price_role', 'en')) }}"
                                        class="form-control">
                                    @error('price_role.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="price_role_ar">@lang('site.arabic_price_role')</label>
                                    <input type="text" name="price_role[ar]" value="{{ old('price_role.ar', $course->getTranslation('price_role', 'ar')) }}"
                                        class="form-control">
                                    @error('price_role.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="show_group_price">@lang('site.show group price') <span class="required"></span></label>
                                <select name="show_group_price" id="show_group_price" class="form-control" required onChange="changeDisplayPrice('#show_group_price','#show-group-price', '#role-group')">
                                    <option value="">@lang('site.select')</option>
                                    <option {{ old('show_group_price', $course->show_group_price) == '1'? 'selected': '' }} value="1">@lang('site.yes')</option>
                                    <option {{ old('show_group_price', $course->show_group_price) == '0'? 'selected': '' }} value="0">@lang('site.no')</option>
                                </select>
                                @error('show_group_price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div id="show-group-price" class="d-none">
                                <div class="form-group">
                                    <label for="group_price">@lang('site.price for group')</label>
                                    <input type="number" name="group_price" value="{{ old('group_price', $course->group_price) }}" class="form-control">
                                    @error('group_price')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="discount_group_price">@lang('site.discount_price')</label>
                                    <input type="number" min="0" step="0.5" max="100" name="discount_group_price" value="{{ old('discount_group_price', $course->discount_group_price) }}" class="form-control">
                                    @error('discount_group_price')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-none" id="role-group">
                                <div class="form-group">
                                    <label for="group_price_role_en">@lang('site.english_price_role')</label>
                                    <input type="text" name="group_price_role[en]"
                                        value="{{ old('group_price_role.en', $course->getTranslation('group_price_role', 'en')) }}" class="form-control">
                                    @error('group_price_role.en')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="group_price_role_ar">@lang('site.arabic_price_role')</label>
                                    <input type="text" name="group_price_role[ar]"
                                        value="{{ old('group_price_role.ar', $course->getTranslation('group_price_role', 'ar')) }}" class="form-control">
                                    @error('group_price_role.ar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="form-group d-flex justify-content-between" style="margin-top: 40px">
                        <button type="button" onclick="goTo('#tab3-tab')" class="btn btn-info">@lang('site.prev')</button>
                        <button type="button" onclick="goTo('#tab5-tab')" class="btn btn-primary">@lang('site.next')</button>
                    </div>
                </div>
                {{--  end tab 4  --}}

                <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mx-auto" style="max-width: 350px">
                                <label for="file" class="d-block mb-3">@lang('site.image')</label>
                                <label for="image" class="preview">
                                    <img loading="lazy" src="{{ $course->url }}" alt="">
                                </label>
                                <input type="file" id="image" name="image" accept="image/*" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mx-auto" style="max-width: 350px">
                                <label for="file" class="d-block mb-3">@lang('site.register_form_file')</label>
                                <label for="file" class="preview">
                                    <img loading="lazy" src="{{ asset('images/doc.png') }}" alt="">
                                </label>
                                <input type="file" id="file" name="file"  class="form-control file">
                                @if ($course->register_form_file)
                                <a class="d-block my-3" href="{{ $course->fileUrl }}">@lang('site.download file')</a>
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="form-group d-flex justify-content-between " style="margin-top: 40px">
                        <button type="button" onclick="goTo('#tab4-tab')" class="btn btn-info">@lang('site.prev')</button>
                        <button type="submit" class="btn btn-primary">@lang('site.send')</button>
                    </div>
                </div>

            </div>

        </form>
    </div>
</div>
@endsection

@push('js')
    <script>

        let val = $('#show_single_price').val();
        if(val == '1' || val == '0'){
            changeDisplayPrice('#show_single_price','#show-single-price', '#role-single')
        }

        let show = $('#show_group_price').val();
        if(show == '1' || show == '0'){
            changeDisplayPrice('#show_group_price','#show-group-price', '#role-group')
        }

        function changeDisplayPrice(triger, price, role){
            let val = $(triger).val();
            if(val == "1"){
                $(price).removeClass('d-none');
                $(role).addClass('d-none');
            }else if(val == "0"){
                $(role).removeClass('d-none');
                $(price).addClass('d-none');
            }else{
                $(role).addClass('d-none');
                $(price).addClass('d-none');
            }
        }

        function goTo(id){
            $(id).trigger('click');
        }
    </script>
@endpush