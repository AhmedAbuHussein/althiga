<div class="tab-pane fade" id="{{ $id }}" role="tabpanel" aria-labelledby="{{ $id }}-tab">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">@lang('site.english extra title')</label>
                <input type="text" name="title2[en]" class="form-control"
                    value="{{ old('title2.en') }}">
                @error('title2.en')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">@lang('site.arabic extra title')</label>
                <input type="text" name="title2[ar]" class="form-control"
                    value="{{ old('title2.ar') }}">
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