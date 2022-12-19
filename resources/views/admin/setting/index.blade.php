@extends('layouts.admin')
@section('title')
@lang('site.edit')
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary" href="{{ route('admin.setting.index') }}">@lang('site.setting')</a></li>

<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted">@lang('site.edit')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-body">


        <div class="col-12 p-3 row">
            <div class="col-12 p-2 p-lg-4 main-box" style="min-height: 80vh;border-radius:10px">
                <div class="col-12 px-3 pb-3 pt-2">
                    <h4 class="font-4">إعدادات الموقع</h4>
                </div>
                <div class="col-12 row">
                    <div class="d-flex justify-content-center align-items-center p-0 settings-tab-opener active" data-opentab="general-tab">
                        <span class="fal fa-wrench me-2"></span> عام
                    </div>
                    <div class="d-flex justify-content-center align-items-center p-0 settings-tab-opener" data-opentab="appearance-tab">
                        <span class="fal fa-paint-roller me-2"></span> مظهر
                    </div>
                    <div class="d-flex justify-content-center align-items-center p-0 settings-tab-opener" data-opentab="links-tab">
                        <span class="fal fa-link me-2"></span> روابط
                    </div>
                    <div class="d-flex justify-content-center align-items-center p-0 settings-tab-opener" data-opentab="pages-tab">
                        <span class="fal fa-pager me-2"></span> صفحات
                    </div>
                    <div class="d-flex justify-content-center align-items-center p-0 settings-tab-opener" data-opentab="codes-tab">
                        <span class="fal fa-code me-2"></span> أكواد
                    </div>
                    <div class="d-flex justify-content-center align-items-center p-0 settings-tab-opener" data-opentab="others-tab">
                        <span class="fal fa-cogs me-2"></span> اخرى
                    </div>
                </div>
                <form class="col-12 row " id="validate-form" method="POST" action="{{route('admin.setting.update')}}" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="col-12 col-lg-8 px-3 py-5">

                        <div class="col-12 row p-0 taber active" id="general-tab">
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    اسم الموقع
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="" name="settings[website_name]" class="form-control" value="{{$settings->where('key','website_name')->pluck('value')->first()}}" maxlength="190">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    العنوان
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <textarea name="settings[address]" class="form-control">{{$settings->where('key','address')->pluck('value')->first()}}</textarea>
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    عن الموقع
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <textarea name="settings[website_bio]" class="form-control">{{$settings->where('key','website_bio')->pluck('value')->first()}}</textarea>
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    بريد التواصل
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="email" name="settings[contact_email]" class="form-control" value="{{$settings->where('key','contact_email')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    لوجو الموقع (200*200)
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="file" name="settings[website_logo]" class="form-control">
                                    <div class="col-12 p-2">
                                        <img src="{{$settings->website_logo()}}" style="width:100px;max-height: 100px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    اللوجو عريض (500*200)
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="file" name="settings[website_wide_logo]" class="form-control">
                                    <div class="col-12 p-2">
                                        <img src="{{$settings->website_wide_logo()}}" style="width:100px;max-height: 100px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    الصورة المصغرة (50*50)
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="file" name="settings[website_icon]" class="form-control">
                                    <div class="col-12 p-2">
                                        <img src="{{$settings->website_icon()}}" style="width:100px;max-height: 100px;">
                                    </div>
                                </div>
                            </div>
                        </div>






                        <div class="col-12 row p-0 taber" id="appearance-tab">
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    غلاف الموقع (800*500)
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="file" name="settings[website_cover]" class="form-control">
                                    <div class="col-12 p-2">
                                        <img src="{{$settings->website_cover()}}" style="width:100px;max-height: 100px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    اللون الرئيسي
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="color" name="settings[main_color]" value="{{$settings->where('key','main_color')->pluck('value')->first()}}" maxlength="190">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    اللون الفرعي
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="color" name="settings[hover_color]" value="{{$settings->where('key','hover_color')->pluck('value')->first()}}" maxlength="190">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    الوضع الليلي في لوحة التحكم
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <div class="form-check form-switch">
                                        <input type="hidden" name="settings[dashboard_dark_mode]" value="0">
                                        <input class="form-check-input" type="checkbox" id="DarkModeInput" name="settings[dashboard_dark_mode]" {{$settings->where('key','dashboard_dark_mode')->pluck('value')->first()==1?'checked':""}} value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 row p-0 taber" id="links-tab">
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رقم الهاتف
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="" name="settings[phone]" class="form-control" value="{{$settings->where('key','phone')->pluck('value')->first()}}" maxlength="190">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رقم الهاتف 2
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="" name="settings[phone2]" class="form-control" value="{{$settings->where('key','phone2')->pluck('value')->first()}}" maxlength="190">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رقم واتس آب
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="" name="settings[whatsapp_phone]" class="form-control" value="{{$settings->where('key','whatsapp_phone')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رابط فيس بوك
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="url" name="settings[facebook_link]" class="form-control" value="{{$settings->where('key','facebook_link')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رابط تويتر
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="url" name="settings[twitter_link]" class="form-control" value="{{$settings->where('key','twitter_link')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رابط انستجرام
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="url" name="settings[instagram_link]" class="form-control" value="{{$settings->where('key','instagram_link')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رابط يوتيوب
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="url" name="settings[youtube_link]" class="form-control" value="{{$settings->where('key','youtube_link')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رابط تيلي جرام
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="url" name="settings[telegram_link]" class="form-control" value="{{$settings->where('key','telegram_link')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رابط واتس أب
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="url" name="settings[whatsapp_link]" class="form-control" value="{{$settings->where('key','whatsapp_link')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رابط تيك توك
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="url" name="settings[tiktok_link]" class="form-control" value="{{$settings->where('key','tiktok_link')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رابط نفذلي
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="url" name="settings[nafezly_link]" class="form-control" value="{{$settings->where('key','nafezly_link')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رابط لينكد ان
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="url" name="settings[linkedin_link]" class="form-control" value="{{$settings->where('key','linkedin_link')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رابط جيت هب
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="url" name="settings[github_link]" class="form-control" value="{{$settings->where('key','github_link')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <br>
                                <hr>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رابط مخصص 1
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="url" name="settings[another_link1]" class="form-control" value="{{$settings->where('key','another_link1')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رابط مخصص 2
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="url" name="settings[another_link2]" class="form-control" value="{{$settings->where('key','another_link2')->pluck('value')->first()}}">
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    رابط مخصص 3
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <input type="url" name="settings[another_link3]" class="form-control" value="{{$settings->where('key','another_link3')->pluck('value')->first()}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 row p-0 taber" id="pages-tab">

                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    تواصل معنا
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <textarea name="settings[contact_page]" class="form-control editor with-file-explorer">{{$settings->where('key','contact_page')->pluck('value')->first()}}</textarea>
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <br>
                                <hr>
                            </div>
                        </div>
                        <div class="col-12 row p-0 taber" id="codes-tab">
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    كود الهيدر
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <textarea name="settings[header_code]" class="form-control" style="min-height: 200px;text-align: left;direction: ltr;">{{$settings->where('key','header_code')->pluck('value')->first()}}</textarea>
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    كود الفوتر
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <textarea name="settings[footer_code]" class="form-control" style="min-height: 200px;text-align: left;direction: ltr;">{{$settings->where('key','footer_code')->pluck('value')->first()}}</textarea>
                                </div>
                            </div>
                            <div class="col-12 px-0 d-flex mb-3 row pb-3">
                                <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">
                                    ملف robots
                                </div>
                                <div class="col-12 col-lg-9 px-2">
                                    <textarea name="settings[robots_txt]" class="form-control" style="min-height: 200px;text-align: left;direction: ltr;">{{$settings->where('key','robots_txt')->pluck('value')->first()}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 row p-0 taber" id="others-tab">
                        </div>

                    </div>

                    <div class="col-12 col-lg-8 px-0 d-flex mb-3 row pb-3">

                        <div class="col-12 px-0 d-flex mb-3 row pb-3">
                            <div class="col-12 col-lg-3 px-2 text-lg-end pt-1 pb-3 pb-lg-0">

                            </div>
                            <div class="col-12 col-lg-9 px-2">
                                <button class="btn pb-2 px-4" style="background: #ffa725;border-radius: 0px;color: #fff ">حفظ التغييرات</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>

        {{-- <form action="{{ route('admin.setting.update', $setting->id) }}" method="post" enctype="multipart/form-data">
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

        </form> --}}
    </div>
</div>
@endsection

@push('js')
<script type="text/javascript">
    $('.settings-tab-opener').on('click', function() {
        $('.settings-tab-opener').removeClass('active');
        $(this).addClass('active');
        var open_id = $(this).attr('data-opentab');
        $('.taber').removeClass('active');
        $('.taber#' + open_id).addClass('active');
    });

</script>
@endpush
