<div class="tab-pane fade" id="{{ $id }}" role="tabpanel" aria-labelledby="{{ $id }}-tab">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">@lang('site.english policy')</label>
                <textarea name="policy[en]" class="form-control summernote_en" rows="5">{{ old('policy.en', isset($course) ? $course->getTranslation('policy', 'en') : '') }}</textarea>
                @error('policy.en')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">@lang('site.arabic policy')</label>
                <textarea name="policy[ar]" class="form-control summernote_ar" rows="5">{{ old('policy.ar', isset($course) ? $course->getTranslation('policy', 'ar') : '') }}</textarea>
                @error('policy.ar')
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