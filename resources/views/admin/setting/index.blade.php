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


            <div class="col-12 p-3 row">
                <div class="col-12 p-2 p-lg-4 main-box" style="min-height: 80vh;border-radius:10px">
                    <div class="col-12 px-3 pb-3 pt-2">
                        <h4 class="font-4">@lang('site.setting')</h4>
                    </div>
                    <div class="col-12 row">
                        <div class="d-flex justify-content-center align-items-center p-0 settings-tab-opener active"
                            data-opentab="general-tab">
                            <span class="la la-wrench me-2"></span> @lang('site.main')
                        </div>
                        <div class="d-flex justify-content-center align-items-center p-0 settings-tab-opener"
                            data-opentab="images-tab">
                            <span class="la la-images me-2"></span> @lang('site.image')
                        </div>
                        <div class="d-flex justify-content-center align-items-center p-0 settings-tab-opener"
                            data-opentab="links-tab">
                            <span class="la la-link me-2"></span> @lang('site.links')
                        </div>
                        <div class="d-flex justify-content-center align-items-center p-0 settings-tab-opener"
                            data-opentab="codes-tab">
                            <span class="la la-code me-2"></span> @lang('site.codes')
                        </div>
                    </div>
                    <form class="col-12 row " id="validate-form" method="POST" action="{{ route('admin.setting.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-12 px-3 py-5">

                            <div class="row p-0 taber active" id="general-tab">
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label>
                                            @lang('site.arabic site title')
                                        </label>
                                        <input type="" name="settings[website_name_ar]" class="form-control"
                                            value="{{ $settings->where('key', 'website_name_ar')->pluck('value')->first() }}"
                                            maxlength="190">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label>
                                            @lang('site.english site title')
                                        </label>
                                        <input type="" name="settings[website_name_en]" class="form-control"
                                            value="{{ $settings->where('key', 'website_name_en')->pluck('value')->first() }}"
                                            maxlength="190">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label>
                                            @lang('site.arabic site welcome')
                                        </label>
                                        <input type="" name="settings[website_welcome_ar]" class="form-control"
                                            value="{{ $settings->where('key', 'website_welcome_ar')->pluck('value')->first() }}"
                                            maxlength="255">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label>
                                            @lang('site.english site welcome')
                                        </label>
                                        <input type="" name="settings[website_welcome_en]" class="form-control"
                                            value="{{ $settings->where('key', 'website_welcome_en')->pluck('value')->first() }}"
                                            maxlength="255">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label>
                                            @lang('site.email')
                                        </label>
                                        <input type="email" name="settings[contact_email]" class="form-control"
                                            value="{{ $settings->where('key', 'contact_email')->pluck('value')->first() }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label>
                                            @lang('site.menu_column_count')
                                        </label>
                                        <input type="number" name="settings[menu_column_count]" class="form-control" min="5" max="20"
                                            value="{{ $settings->where('key', 'menu_column_count')->pluck('value')->first() ?? 8 }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label>
                                            @lang('site.arabic address')
                                        </label>
                                        <textarea name="settings[address_ar]" class="form-control">{{ $settings->where('key', 'address_ar')->pluck('value')->first() }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group pb-3">
                                        <label>
                                            @lang('site.english address')
                                        </label>
                                        <textarea name="settings[address_en]" class="form-control">{{ $settings->where('key', 'address_en')->pluck('value')->first() }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group pb-3">
                                        <label>
                                            @lang('site.search Keywords')
                                        </label>
                                        <textarea name="settings[website_seo]" class="form-control">{{ $settings->where('key', 'website_seo')->pluck('value')->first() }}</textarea>
                                    </div>
                                </div>

                               

                            </div>

                            <div class="col-12 row p-0 taber" id="images-tab">
                                <div class="form-group pb-3">
                                    <label>
                                        @lang('site.logo') (200*200)
                                    </label>
                                    <input type="file" name="settings[website_logo]" class="form-control">
                                    <label for="" class="preview" style="width:200px;max-height: 200px;">
                                        <img src="{{ $settings->first()->website_logo() }}">
                                    </label>

                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        @lang('site.wide logo')(500*200)
                                    </label>
                                    <input type="file" name="settings[website_wide_logo]" class="form-control">
                                    <label for="" class="preview" style="width:500px;height: 200px;">
                                        <img src="{{ $settings->first()->website_wide_logo() }}">
                                    </label>
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        @lang('site.icon') (50*50)
                                    </label>
                                    <input type="file" name="settings[website_icon]" class="form-control">
                                    <label for="" class="preview" style="width:100px;max-height: 100px;">
                                        <img src="{{ $settings->first()->website_icon() }}">
                                    </label>
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        @lang('site.cover')  (800*500)
                                    </label>
                                    <input type="file" name="settings[website_cover]" class="form-control">
                                    <label for="" class="preview" style="width:800px;height: 500px;">
                                        <img src="{{ $settings->first()->website_cover() }}">
                                    </label>
                                </div>

                            </div>

                            <div class="col-12 row p-0 taber" id="links-tab">
                                <div class="form-group pb-3">
                                    <label>
                                        رقم الهاتف
                                    </label>
                                    <input type="" name="settings[phone]" class="form-control"
                                        value="{{ $settings->where('key', 'phone')->pluck('value')->first() }}"
                                        maxlength="190">
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        رقم الهاتف 2
                                    </label>
                                    <input type="" name="settings[phone2]" class="form-control"
                                        value="{{ $settings->where('key', 'phone2')->pluck('value')->first() }}"
                                        maxlength="190">
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        رقم واتس آب
                                    </label>
                                    <input type="" name="settings[whatsapp_phone]" class="form-control"
                                        value="{{ $settings->where('key', 'whatsapp_phone')->pluck('value')->first() }}">
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        رابط فيس بوك
                                    </label>
                                    <input type="url" name="settings[facebook_link]" class="form-control"
                                        value="{{ $settings->where('key', 'facebook_link')->pluck('value')->first() }}">
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        رابط تويتر
                                    </label>
                                    <input type="url" name="settings[twitter_link]" class="form-control"
                                        value="{{ $settings->where('key', 'twitter_link')->pluck('value')->first() }}">
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        رابط انستجرام
                                    </label>
                                    <input type="url" name="settings[instagram_link]" class="form-control"
                                        value="{{ $settings->where('key', 'instagram_link')->pluck('value')->first() }}">
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        رابط يوتيوب
                                    </label>
                                    <input type="url" name="settings[youtube_link]" class="form-control"
                                        value="{{ $settings->where('key', 'youtube_link')->pluck('value')->first() }}">
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        رابط تيلي جرام
                                    </label>
                                    <input type="url" name="settings[telegram_link]" class="form-control"
                                        value="{{ $settings->where('key', 'telegram_link')->pluck('value')->first() }}">
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        رابط واتس أب
                                    </label>
                                    <input type="url" name="settings[whatsapp_link]" class="form-control"
                                        value="{{ $settings->where('key', 'whatsapp_link')->pluck('value')->first() }}">
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        رابط لينكد ان
                                    </label>
                                    <input type="url" name="settings[linkedin_link]" class="form-control"
                                        value="{{ $settings->where('key', 'linkedin_link')->pluck('value')->first() }}">
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        رابط جيت هب
                                    </label>
                                    <input type="url" name="settings[github_link]" class="form-control"
                                        value="{{ $settings->where('key', 'github_link')->pluck('value')->first() }}">
                                </div>
                                <div class="form-group pb-3">
                                    <br>
                                    <hr>
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        رابط مخصص 1
                                    </label>
                                    <input type="url" name="settings[another_link1]" class="form-control"
                                        value="{{ $settings->where('key', 'another_link1')->pluck('value')->first() }}">
                                </div>
                                <div class="form-group pb-3">
                                    <label>
                                        رابط مخصص 2
                                    </label>
                                    <input type="url" name="settings[another_link2]" class="form-control"
                                        value="{{ $settings->where('key', 'another_link2')->pluck('value')->first() }}">
                                </div>
                            </div>
                            <div class="col-12 row p-0 taber" id="codes-tab">
                                <div class="form-group pb-3">
                                    <label>
                                        ملف robots
                                    </label>
                                    <textarea name="settings[robots_txt]" class="form-control"
                                        style="min-height: 200px;text-align: left;direction: ltr;">{{ $settings->where('key', 'robots_txt')->pluck('value')->first() }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group pb-3">

                            <div class="form-group pb-3">
                                <button class="btn pb-2 px-4 btn-primary">@lang('site.send')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

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
@push('css')
    <style type="text/css">
        .settings-tab-opener {
            /*box-shadow: 0px 6px 12px #ebebeb;*/
            border-radius: 0px;
            cursor: pointer;
            width: 80px;
            height: 45px;
            border-left: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }

        .settings-tab-opener.active {
            box-shadow: 0px 6px 12px #c8e0ff;
            color: #fff;
            background: #2196f3;
        }

        .taber:not(.active) {
            display: none;
        }
    </style>
@endpush
