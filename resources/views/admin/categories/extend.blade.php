<div class="form-group">
    <label for="type">@lang('site.type')</label>
    <select name="type" id="type" class="form-control">
        <option value="">@lang('site.select')</option>
        <option {{ old('type', isset($target) ? $target->type : '') == 'training' ? 'selected':'' }} value="training">@lang('site.training_services')</option>
        <option {{ old('type', isset($target) ? $target->type : '') == 'advisory' ? 'selected':'' }} value="advisory">@lang('site.advisory_services')</option>
    </select>
    @error('type')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>