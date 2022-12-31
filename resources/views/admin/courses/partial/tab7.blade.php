<div class="tab-pane fade" id="{{ $id }}" role="tabpanel" aria-labelledby="{{ $id }}-tab">
    <div class="row">
        <div class="col-md-6">
            <div class="mx-auto" style="max-width: 350px">
                <label for="file" class="d-block mb-3">@lang('site.image')</label>
                <label for="image" class="preview">
                    <img loading="lazy" src="{{ isset($course) ? $course->url  : asset('web/img/Althiga_hand.png') }}" alt="">
                </label>
                <input type="file" id="image" name="image" accept="image/*"
                    class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mx-auto" style="max-width: 350px">
                <div class="d-flex justify-content-between">
                    <label for="file" class="d-block mb-3">@lang('site.register_form_file')</label>
                    
                    @if (isset($course) && $course->file_url)
                        <a href="{{ $course->file_url }}" download>@lang('site.download file')</a>
                    @endif
                </div>
                <label for="file" class="preview">
                    
                    <img loading="lazy" src="{{ asset('images/doc.png') }}" alt="">
                </label>
                <input type="file" id="file" name="file" class="form-control file">
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