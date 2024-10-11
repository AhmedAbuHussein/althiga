@extends('layouts.app')

@section('title', __('Aramco Registration Course'))

@section('app')
@parent
@endsection

@section('content')
<main class="main">

    <div class="stars">
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
    </div>

    <aside class="responsive-banner first">
        <div class="container-envelope">
            <svg class="cirle-a" height="150" width="150">
                <circle cx="60" cy="60" r="60" />
            </svg>
            <svg class="cirle-b" height="150" width="150">
                <circle cx="60" cy="60" r="60" />
            </svg>
            <svg class="cirle-c small-hidden" height="200" width="200">
                <circle cx="100" cy="100" r="100" />
            </svg>
            <svg class="cirle-d small-hidden" height="150" width="150">
                <circle cx="60" cy="60" r="60" />
            </svg>
            <svg class="cirle-e small-hidden" height="150" width="150">
                <circle cx="60" cy="60" r="60" />
            </svg>

            <svg class="cirle-f small-hidden" height="150" width="150">
                <circle cx="60" cy="60" r="60" />
            </svg>

            <svg class="cirle-g" height="150" width="150">
                <circle cx="60" cy="60" r="60" />
            </svg>

            <svg class="cirle-h small-hidden" height="150" width="150">
                <circle cx="60" cy="60" r="60" />
            </svg>
            <img class="hide-sm" src="{{asset('images/aramco.png')}}" />
            <div class="box">
                <h1>{!! $settings->where('key', 'aramco_banner_title_'.app()->getLocale())->pluck('value')->first() !!}</h1>
                <p> {!! $settings->where('key', 'aramco_banner_details_'.app()->getLocale())->pluck('value')->first() !!}</p>
            </div>
        </div>
    </aside>

    <div class="container">

        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="card main-card my-4">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ !request()->has('company') ? 'active' : '' }}" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">@lang('Individual/Group')</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ request()->has('company') ? 'active' : '' }}" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">@lang('Company')</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade {{ !request()->has('company') ? 'show active' : '' }} pt-4" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="my-3">
                                    <div class="alert alert-info" role="alert">
                                        <p><strong>@lang('Alert')!! </strong></p>
                                        {!! $settings->where('key', 'single_regestration_msg_'.app()->getLocale())->pluck('value')->first() !!}
                                    </div>
                                </div>
                                <form action="{{route('aramco.register.single')}}" id="contact_form" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-muted" for="fname">@lang('First Name') <span class="required">*</span> </label>
                                                <input type="text" name="fname" class="form-control" value="{{old('fname')}}" id="fname" placeholder="@lang('First Name')" required>
                                                @error('fname')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-muted" for="lname">@lang('Last Name') <span class="required">*</span> </label>
                                                <input type="text" name="lname" class="form-control" value="{{old('lname')}}" id="lname" placeholder="@lang('Last Name')" required>
                                                @error('lname')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="text-muted" for="national_id">@lang('National ID / Passport') <span class="required">*</span> </label>
                                        <input type="text" name="national_id" class="form-control" value="{{old('national_id')}}" id="national_id" placeholder="@lang('National ID / Passport')" required>
                                        @error('national_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted" for="email">@lang('Email Address') <span class="required">*</span> </label>
                                        <input type="email" name="email" class="form-control" value="{{old('email')}}" id="email" placeholder="@lang('Email Address')" required>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="phone">@lang('Phone Number') <span class="required">*</span> </label>
                                        <input type="number" pattern="/^(\+)?(05|9665|009665)([0-9]{8})$/" name="phone" class="form-control" value="{{old('phone')}}" id="phone" placeholder="@lang('Phone Number')" required>
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="group_number">@lang('Group Number') <span class="required">*</span> </label>
                                        <input type="number" step="1" min="1" value="{{old('group_number', 1)}}" name="group_number" class="form-control" id="group_number" placeholder="@lang('Group Number')" required>
                                        @error('group_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="image">@lang('Personal Image')</label>
                                        <input type="file" accept="image/*" name="image" class="form-control" id="image" >
                                        @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" required value="1" {{ old('terms_institute', 0) == '1' ? 'checked' : '' }} type="checkbox" name="terms_institute" id="terms_institute">
                                            <label class="form-check-label text-muted" for="terms_institute">
                                            @lang("Acceptance of the Institute's Terms and Conditions", ['href'=> route('aramco.register.terms')])
                                             <span class="required">*</span> </label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" required value="1" {{ old('terms_course', 0) == '1' ? 'checked' : '' }} type="checkbox" name="terms_course" id="terms_course">
                                            <label class="form-check-label text-muted" for="terms_course">
                                            @lang("Accept the course terms and conditions", ['href'=> route('aramco.register.privacy')])
                                             <span class="required">*</span> </label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div id="recaptcha1"></div>
                                        @error('g-recaptcha-response')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-primary w-100">@lang('Submit')</button>
                                    </div>

                                </form>
                            </div>
                            <div class="tab-pane fade {{ request()->has('company') ? 'show active' : '' }} pt-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="my-3">
                                    <div class="alert alert-info" role="alert">
                                        <p><strong>@lang('Alert')!! </strong></p>
                                        {!! $settings->where('key', 'company_regestration_msg_'.app()->getLocale())->pluck('value')->first() !!}
                                    </div>
                                </div>
                                <form action="{{route('aramco.register.company')}}" id="contact_form2" method="POST">
                                    @csrf
                                  
                                    <div class="form-group">
                                        <label class="text-muted" for="c_name">@lang('Company Name') <span class="required">*</span> </label>
                                        <input type="text" name="c_name" class="form-control" value="{{old('c_name')}}" id="c_name" placeholder="@lang('Company Name')" required>
                                        @error('c_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="c_city">@lang('Company City') <span class="required">*</span> </label>
                                        <select name="c_city" class="form-control select_two" id="c_city" required>
                                            <option value="">@lang('--select--')</option>
                                            @foreach ($cities ?? [] as $item)
                                                <option {{old('c_city') == $item['id'] ? 'selected' : '' }} value="{{ $item['id'] }}">{{ $item['name'][app()->getLocale('en')] }}</option>
                                            @endforeach
                                        </select>
                                        @error('c_city')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="text-muted" for="c_employee_number">@lang('Company Employee Number') <span class="required">*</span> </label>
                                        <select name="c_employee_number" class="form-control select_two" id="c_employee_number" required>
                                            <option value="">@lang('--select--')</option>
                                            @foreach ($employees ??[] as $item)
                                                <option {{old('c_employee_number') == $item['id'] ? 'selected' : '' }} value="{{ $item['id'] }}">{{$item['range']}}</option>
                                            @endforeach
                                        </select>
                                        @error('c_employee_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted" for="c_email">@lang('Email Address') <span class="required">*</span> </label>
                                        <input type="email" name="c_email" class="form-control" value="{{old('c_email')}}" id="c_email" placeholder="@lang('Email Address')" required>
                                        @error('c_email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="c_phone">@lang('Phone Number') <span class="required">*</span> </label>
                                        <input type="number" name="c_phone" class="form-control" value="{{old('c_phone')}}" id="c_phone" placeholder="@lang('Phone Number')" required>
                                        @error('c_phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                                                        
                                    <div class="form-group mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" required value="1" {{ old('terms_institute', 0) == '1' ? 'checked' : '' }} type="checkbox" name="terms_institute" id="terms_institute_company">
                                            <label class="form-check-label text-muted" for="terms_institute_company">
                                                @lang("Acceptance of the Institute's Terms and Conditions", ['href'=> route('aramco.register.terms')])
                                             <span class="required">*</span> </label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" required value="1" {{ old('terms_course', 0) == '1' ? 'checked' : '' }} type="checkbox" name="terms_course" id="terms_course_company">
                                            <label class="form-check-label text-muted" for="terms_course_company">
                                            @lang("Accept the course terms and conditions", ['href'=> route('aramco.register.privacy')])
                                             <span class="required">*</span> </label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div id="recaptcha2"></div>
                                        @error('g-recaptcha-response')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-primary w-100">@lang('Submit')</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">@lang('Terms And Conditions')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" @if (app()->isLocale('ar')) style="margin-right: auto;margin-left: 0;" @endif>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="loading">
                    <div class="text-center" style="min-height: 250px;min-width: 500px">
                        <img src="{{ asset('assets/loading.webp') }}" alt="">
                    </div>
                </div>
                <div class="content d-none">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('close')</button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('footer')
@parent
@endsection

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/aramco-registration.css') }}">
    <style>
        .grecaptcha-badge{
            z-index: 1;
        }
        .required{
            color: #ff7171
        }
    </style>
@endpush

@push('js')
   
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function(){
            $('.open-model').on('click', function(){
                let url = $(this).attr('href');
                $('#staticBackdrop').modal('show');
                $.ajax({
                    url: url,
                    dataType: "html"
                }).done(function(result){
                    $('#staticBackdrop .loading').addClass('d-none');
                    $('#staticBackdrop .content').html(result)
                    .removeClass('d-none');
                });
            });

            $('#staticBackdrop').on('hidden.bs.modal', function (event) {
                $('#staticBackdrop .loading').removeClass('d-none');
                $('#staticBackdrop .content').html("")
                .addClass('d-none');
            });

            $('.select_two').select2();
        });

        var recaptcha1;
        var recaptcha2;
        var myCallBack = function() {
            recaptcha1 = grecaptcha.render('recaptcha1', {
                'sitekey' : '{{ env('RECAPTHA2_KEY') }}'
            });
            recaptcha2 = grecaptcha.render('recaptcha2', {
                'sitekey' : '{{ env('RECAPTHA2_KEY') }}'
            });
        }
        
    </script>

    <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async></script>


@endpush
