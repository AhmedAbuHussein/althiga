<div class="tab-pane fade" id="{{ $id }}" role="tabpanel" aria-labelledby="{{ $id }}-tab">
    <div class="row">

        <div class="col-md-6">
            <div class="form-group">
                <label for="days">@lang('site.days')</label>
                <select name="days[]" id="days" class="form-control select2" multiple>
                    @foreach ($days as $day)
                        <option {{ in_array($day, old('days', isset($course) ? $course->days : []) ?? []) ? 'selected' : '' }}
                            value="{{ $day }}">@lang("site.$day")</option>
                    @endforeach
                </select>
                @error('days')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="tags">@lang('site.tags')</label>
                <select name="tags[]" id="tags" class="form-control select2" multiple>
                    @foreach ($tags as $tag)
                        <option {{ in_array($tag->id, old('tags', isset($course) ? $course->tags->pluck('id')->toArray() : []) ?? []) ? 'selected' : '' }}
                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
                @error('tags')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="duration">@lang('site.duration (days)') <span class="required"></span></label>
                <input type="number" name="duration" value="{{ old('duration', isset($course) ? $course->duration : '') }}" required
                    class="form-control" min="1">
                @error('duration')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="hour_per_day">@lang('site.hour per day')</label>
                <input type="number" step="0.5" name="hour_per_day"
                    value="{{ old('hour_per_day', isset($course) ? $course->hour_per_day : '') }}"  class="form-control" min="1">
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
                    <option {{ old('languages', isset($course) ? $course->languages : '') == 'arabic' ? 'selected' : '' }} value="arabic">
                        @lang('site.arabic')</option>
                    <option {{ old('languages', isset($course) ? $course->languages : '') == 'english' ? 'selected' : '' }} value="english">
                        @lang('site.english')</option>
                    <option {{ old('languages', isset($course) ? $course->languages : '') == 'both' ? 'selected' : '' }} value="both">
                        @lang('site.both')</option>
                </select>
                @error('languages')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="certification_en">@lang('site.english certification') <span
                        class="required"></span></label>
                <input type="text" step="0.5" name="certification[en]"
                    value="{{ old('certification.en', isset($course) ? $course->getTranslation('certification', 'en') : '') }}" required class="form-control"
                    min="1">
                @error('certification.en')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="certification_ar">@lang('site.arabic certification') <span
                        class="required"></span></label>
                <input type="text" step="0.5" name="certification[ar]"
                    value="{{ old('certification.ar', isset($course) ? $course->getTranslation('certification', 'ar') : '') }}" required class="form-control"
                    min="1">
                @error('certification.ar')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="">@lang('site.english audience')</label>
                <input type="text" name="audience[en]" class="form-control"
                    value="{{ old('audience.en', isset($course) ? $course->getTranslation('audience', 'en'): '') }}">
                @error('audience.en')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">@lang('site.arabic audience')</label>
                <input type="text" name="audience[ar]" class="form-control"
                    value="{{ old('audience.ar', isset($course) ? $course->getTranslation('audience', 'ar'): '') }}">
                @error('audience.ar')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="">@lang('site.course_register_url')</label>
                <input type="url" name="register_url" class="form-control"
                    value="{{ old('register_url', isset($course) ? $course->register_url: '') }}">
                @error('register_url')
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