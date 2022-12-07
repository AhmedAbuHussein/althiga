@extends('layouts.admin')
@section('title')
@lang('site.create')
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary" href="{{ route('admin.courses.index') }}">@lang('site.courses')</a></li>

<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted">@lang('site.create')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.courses.store') }}" method="post" enctype="multipart/form-data">
            @csrf
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
                    <button class="nav-link" id="image-uploader-tab" data-bs-toggle="tab" data-bs-target="#image-uploader" type="button" role="tab" aria-controls="image-uploader" aria-selected="false">@lang('site.files')</button>
                </li>
            </ul>

            <div class="tab-content pt-5" id="myTabContent">
                {{--  start tab 1  --}}
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.english title') <span class="required"></span></label>
                                <input type="text" name="title[en]" class="form-control" required value="{{ old('title.en') }}">
                                @error('title.en')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.arabic title') <span class="required"></span></label>
                                <input type="text" name="title[ar]" class="form-control" required value="{{ old('title.ar') }}">
                                @error('title.ar')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.english details') <span class="required"></span></label>
                                <textarea name="details[en]" class="form-control" required rows="5">{{ old('details.en') }}</textarea>
                                @error('details.en')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.arabic details') <span class="required"></span></label>
                                <textarea name="details[ar]" class="form-control" required rows="5">{{ old('details.ar') }}</textarea>
                                @error('details.ar')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end" style="margin-top: 40px">
                        <button type="button" class="btn btn-primary">@lang('site.next')</button>
                    </div>
                </div>
                {{--  end tab 1  --}}

                {{--  start tab 2  --}}
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.english extra title')</label>
                                <input type="text" name="title2[en]" class="form-control" value="{{ old('title2.en') }}">
                                @error('title2.en')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.arabic extra title')</label>
                                <input type="text" name="title2[ar]" class="form-control" value="{{ old('title2.ar') }}">
                                @error('title2.ar')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.english extra details')</label>
                                <textarea name="details2[en]" class="form-control" rows="5">{{ old('details2.en') }}</textarea>
                                @error('details2.en')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('site.arabic extra details')</label>
                                <textarea name="details2[ar]" class="form-control" rows="5">{{ old('details2.ar') }}</textarea>
                                @error('details2.ar')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-between" style="margin-top: 40px">
                        <button type="button" class="btn btn-info">@lang('site.prev')</button>
                        <button type="button" class="btn btn-primary">@lang('site.next')</button>
                    </div>
                </div>
                {{--  end tab 2  --}}

                {{--  start tab 3  --}}
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="days">@lang('site.days') <span class="required"></span></label>
                                <select name="days" id="days[]" required class="form-control select2" multiple>
                                    @foreach ($days as $day)
                                        <option {{ in_array($day, old('days') ?? []) ? 'selected': '' }} value="{{ $day }}">@lang("site.$day")</option>
                                    @endforeach
                                </select>
                                @error('days')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="duration">@lang('site.duration (days)') <span class="required"></span></label>
                                <input type="number" name="duration" value="{{ old('duration') }}" required class="form-control" min="1"> 
                                @error('duration')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="hour_per_day">@lang('site.hour per day') <span class="required"></span></label>
                                <input type="number" step="0.5" name="hour_per_day" value="{{ old('hour_per_day') }}" required class="form-control" min="1"> 
                                @error('hour_per_day')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="language">@lang('site.course language') <span class="required"></span></label>
                                <select name="language" id="language" class="form-control" required>
                                    <option value="">@lang('site.select')</option>
                                    <option {{ old('language') == 'arabic'? 'selected': '' }} value="arabic">@lang('site.arabic')</option>
                                    <option {{ old('language') == 'english'? 'selected': '' }} value="english">@lang('site.english')</option>
                                    <option {{ old('language') == 'both'? 'selected': '' }} value="both">@lang('site.both')</option>
                                </select>
                                @error('language')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="is_popular">@lang('site.is_popular') <span class="required"></span></label>
                                <select name="is_popular" id="is_popular" class="form-control" required>
                                    <option value="">@lang('site.select')</option>
                                    <option {{ old('is_popular') == '1'? 'selected': '' }} value="1">@lang('site.yes')</option>
                                    <option {{ old('is_popular') == '0'? 'selected': '' }} value="0">@lang('site.no')</option>
                                </select>
                                @error('is_popular')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="category_id">@lang('site.categories') <span class="required"></span></label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="">@lang('site.select')</option>
                                    @foreach ($categories as $item)
                                    <option {{ old('category_id') ==  $item->id ? 'selected': '' }} value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                                               
                    </div>
                    <div class="form-group d-flex justify-content-between" style="margin-top: 40px">
                        <button type="button" class="btn btn-info">@lang('site.prev')</button>
                        <button type="button" class="btn btn-primary">@lang('site.next')</button>
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
                                    <option {{ old('show_single_price') == '1'? 'selected': '' }} value="1">@lang('site.yes')</option>
                                    <option {{ old('show_single_price') == '0'? 'selected': '' }} value="0">@lang('site.no')</option>
                                </select>
                                @error('show_single_price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div id="show-single-price" class="d-none">
                                <div class="form-group">
                                    <label for="price">@lang('site.price')</label>
                                    <input type="number" name="price" value="{{ old('price') }}" class="form-control">
                                    @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="discount_price">@lang('site.discount_price')</label>
                                    <input type="number" min="0" step="0.5" max="100" name="discount_price" value="{{ old('discount_price') }}" class="form-control">
                                    @error('discount_price')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-none" id="role-single">
                                <label for="price_role">@lang('site.price_role')</label>
                                    <input type="text" name="price_role" value="{{ old('price_role') }}" class="form-control">
                                    @error('price_role')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="show_group_price">@lang('site.show group price') <span class="required"></span></label>
                                <select name="show_group_price" id="show_group_price" class="form-control" required onChange="changeDisplayPrice('#show_group_price','#show-group-price', '#role-group')">
                                    <option value="">@lang('site.select')</option>
                                    <option {{ old('show_group_price') == '1'? 'selected': '' }} value="1">@lang('site.yes')</option>
                                    <option {{ old('show_group_price') == '0'? 'selected': '' }} value="0">@lang('site.no')</option>
                                </select>
                                @error('show_group_price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div id="show-group-price" class="d-none">
                                <div class="form-group">
                                    <label for="group_price">@lang('site.price for group')</label>
                                    <input type="number" name="group_price" value="{{ old('group_price') }}" class="form-control">
                                    @error('group_price')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="discount_group_price">@lang('site.discount_price')</label>
                                    <input type="number" min="0" step="0.5" max="100" name="discount_group_price" value="{{ old('discount_group_price') }}" class="form-control">
                                    @error('discount_group_price')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-none" id="role-group">
                                <label for="group_price_role">@lang('site.price_role')</label>
                                    <input type="text" name="group_price_role" value="{{ old('group_price_role') }}" class="form-control">
                                    @error('group_price_role')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>

                        </div>


                    </div>
                    <div class="form-group d-flex justify-content-between" style="margin-top: 40px">
                        <button type="button" class="btn btn-info">@lang('site.prev')</button>
                        <button type="button" class="btn btn-primary">@lang('site.next')</button>
                    </div>
                </div>
                {{--  end tab 4  --}}

                
                <div class="tab-pane fade" id="image-uploader" role="tabpanel" aria-labelledby="image-uploader-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mx-auto" style="max-width: 350px">
                                <label for="file" class="d-block mb-3">@lang('site.image')</label>
                                <label for="image" class="preview">
                                    <img src="{{ asset('web/img/Althiga_hand.png') }}" alt="">
                                </label>
                                <input type="file" id="image" name="image" accept="image/*" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mx-auto" style="max-width: 350px">
                                <label for="file" class="d-block mb-3">@lang('site.register_form_file')</label>
                                <label for="file" class="preview">
                                    <img src="{{ asset('images/doc.png') }}" alt="">
                                </label>
                                <input type="file" id="file" name="file"  class="form-control file">
                            </div>
                        </div>

                    </div>

                    <div class="form-group d-flex justify-content-between " style="margin-top: 40px">
                        <button type="button" class="btn btn-info">@lang('site.prev')</button>
                        <button type="button" class="btn btn-primary">@lang('site.next')</button>
                    </div>
                </div>

            </div>

        </form>
    </div>
</div>
@endsection

@push('js')
    <script>

        function changeDisplayPrice(triger, price, role){
            let val = $(triger).val();
            if(val == "1"){
                $(`${role} input`).val("");
                $(price).removeClass('d-none');
                $(role).addClass('d-none');
            }else if(val == "0"){
                $(`${price} input`).val("");
                $(role).removeClass('d-none');
                $(price).addClass('d-none');
            }else{
                $(`${price} input`).val("");
                $(`${role} input`).val("");
                $(role).addClass('d-none');
                $(price).addClass('d-none');
            }
        }
    </script>
@endpush