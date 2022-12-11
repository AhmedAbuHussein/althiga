<div class="tab-pane fade" id="{{ $id }}" role="tabpanel" aria-labelledby="{{ $id }}-tab">
    <div class="row">

        <div class="col-md-12">
            <div class="form-group">
                <label for="days">@lang('site.days') <span class="required"></span></label>
                <select name="days[]" id="days" required class="form-control select2" multiple>
                    @foreach ($days as $day)
                        <option {{ in_array($day, old('days') ?? []) ? 'selected' : '' }}
                            value="{{ $day }}">@lang("site.$day")</option>
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
                <input type="number" name="duration" value="{{ old('duration') }}" required
                    class="form-control" min="1">
                @error('duration')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="hour_per_day">@lang('site.hour per day') <span class="required"></span></label>
                <input type="number" step="0.5" name="hour_per_day"
                    value="{{ old('hour_per_day') }}" required class="form-control" min="1">
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
                    <option {{ old('languages') == 'arabic' ? 'selected' : '' }} value="arabic">
                        @lang('site.arabic')</option>
                    <option {{ old('languages') == 'english' ? 'selected' : '' }} value="english">
                        @lang('site.english')</option>
                    <option {{ old('languages') == 'both' ? 'selected' : '' }} value="both">
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
                    value="{{ old('certification.en') }}" required class="form-control"
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
                    value="{{ old('certification.ar') }}" required class="form-control"
                    min="1">
                @error('certification.ar')
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