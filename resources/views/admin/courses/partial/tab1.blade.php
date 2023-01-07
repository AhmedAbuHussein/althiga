<div class="tab-pane fade show active" id="{{ $id }}" role="tabpanel" aria-labelledby="{{ $id }}-tab">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">@lang('site.english title') <span class="required"></span></label>
                <input type="text" name="title[en]" class="form-control" required
                    value="{{ old('title.en', isset($course) ? $course->getTranslation('title', 'en'): '') }}">
                @error('title.en')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">@lang('site.arabic title') <span class="required"></span></label>
                <input type="text" name="title[ar]" class="form-control" required
                    value="{{ old('title.ar', isset($course) ? $course->getTranslation('title', 'ar'): '') }}">
                @error('title.ar')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="accreditation_num">@lang('site.accreditation number') <span class="required"></span></label>
                <input type="text" name="accreditation_num" value="{{ old('accreditation_num', isset($course) ? $course->accreditation_num : '') }}"
                    required class="form-control" min="1">
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
                        <option {{ old('category_id', isset($course) ? $course->category_id : '') == $item->id ? 'selected' : '' }}
                            value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="is_popular">@lang('site.is_popular') <span class="required"></span></label>
                <select name="is_popular" id="is_popular" class="form-control" required>
                    <option value="">@lang('site.select')</option>
                    <option {{ old('is_popular', isset($course) ? $course->is_popular : '') == '1' ? 'selected' : '' }} value="1">
                        @lang('site.yes')</option>
                    <option {{ old('is_popular', isset($course) ? $course->is_popular : '') == '0' ? 'selected' : '' }} value="0">
                        @lang('site.no')</option>
                </select>
                @error('is_popular')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="show_in_menu">@lang('site.show in menu') <span class="required"></span></label>
                <select name="show_in_menu" id="show_in_menu" class="form-control" required>
                    <option value="">@lang('site.select')</option>
                    <option {{ old('show_in_menu', isset($course) ? $course->show_in_menu : '') == '1' ? 'selected' : '' }} value="1">
                        @lang('site.yes')</option>
                    <option {{ old('show_in_menu', isset($course) ? $course->show_in_menu : '') == '0' ? 'selected' : '' }} value="0">
                        @lang('site.no')</option>
                </select>
                @error('show_in_menu')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="main_header">@lang('site.set_main_header') <span class="required"></span></label>
                <select name="main_header" id="main_header" class="form-control" required>
                    <option value="">@lang('site.select')</option>
                    <option {{ old('main_header', isset($course) ? $course->main_header : '') == '1' ? 'selected' : '' }} value="1">
                        @lang('site.yes')</option>
                    <option {{ old('main_header', isset($course) ? $course->main_header : '') == '0' ? 'selected' : '' }} value="0">
                        @lang('site.no')</option>
                </select>
                @error('main_header')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="">@lang('site.english details') <span class="required"></span></label>
                <textarea name="details[en]" class="form-control" required rows="5">{{ old('details.en', isset($course) ? $course->getTranslation('details', 'en') : '') }}</textarea>
                @error('details.en')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">@lang('site.arabic details') <span class="required"></span></label>
                <textarea name="details[ar]" class="form-control" required rows="5">{{ old('details.ar', isset($course) ? $course->getTranslation('details', 'ar') : '') }}</textarea>
                @error('details.ar')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group d-flex @if(isset($prev) && (isset($next) || isset($submit))) justify-content-between @else justify-content-end @endif" style="margin-top: 40px">
       
        @if (isset($prev))
            <button type="button" onclick="goTo('{{ $prev }}')" class="btn btn-info">@lang('site.prev')</button>
        @endif

        @if (isset($next))
            <button type="button" onclick="goTo('{{ $next }}')" class="btn btn-primary">@lang('site.next')</button>
        @endif

        @if (isset($submit))
        <button type="submit" class="btn btn-primary">@lang('site.send')</button>
    @endif
    </div>
</div>