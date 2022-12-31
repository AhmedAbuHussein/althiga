<div class="tab-pane fade" id="{{ $id }}" role="tabpanel" aria-labelledby="{{ $id }}-tab">
    <div class="row">

        <div class="col-md-6">
            <div class="form-group">
                <label for="show_single_price">@lang('site.show single price') <span
                        class="required"></span></label>
                <select name="show_single_price" id="show_single_price" class="form-control" required
                    onChange="changeDisplayPrice('#show_single_price','#show-single-price', '#role-single')">
                    <option value="">@lang('site.select')</option>
                    <option {{ old('show_single_price', isset($course) ? $course->show_single_price : '') == '1' ? 'selected' : '' }} value="1">
                        @lang('site.yes')</option>
                    <option {{ old('show_single_price', isset($course) ? $course->show_single_price : '') == '0' ? 'selected' : '' }} value="0">
                        @lang('site.no')</option>
                </select>
                @error('show_single_price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div id="show-single-price" class="d-none">
                <div class="form-group">
                    <label for="price">@lang('site.price')</label>
                    <input type="number" name="price" value="{{ old('price', isset($course) ? $course->price : '') }}"
                        class="form-control">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="discount_price">@lang('site.discount_price')</label>
                    <input type="number" min="0" step="0.5" max="100"
                        name="discount_price" value="{{ old('discount_price', isset($course) ? $course->discount_price : '') }}"
                        class="form-control">
                    @error('discount_price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="d-none" id="role-single">
                <div class="form-group">
                    <label for="price_role_en">@lang('site.english_price_role')</label>
                    <input type="text" name="price_role[en]" value="{{ old('price_role.en', isset($course) ? $course->getTranslation('price_role', 'en') : '') }}"
                        class="form-control">
                    @error('price_role.en')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price_role_ar">@lang('site.arabic_price_role')</label>
                    <input type="text" name="price_role[ar]" value="{{ old('price_role.ar', isset($course) ? $course->getTranslation('price_role', 'ar') : '') }}"
                        class="form-control">
                    @error('price_role.ar')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

            </div>

        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="show_group_price">@lang('site.show group price') <span
                        class="required"></span></label>
                <select name="show_group_price" id="show_group_price" class="form-control" required
                    onChange="changeDisplayPrice('#show_group_price','#show-group-price', '#role-group')">
                    <option value="">@lang('site.select')</option>
                    <option {{ old('show_group_price', isset($course) ? $course->show_group_price : '') == '1' ? 'selected' : '' }} value="1">
                        @lang('site.yes')</option>
                    <option {{ old('show_group_price', isset($course) ? $course->show_group_price : '') == '0' ? 'selected' : '' }} value="0">
                        @lang('site.no')</option>
                </select>
                @error('show_group_price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div id="show-group-price" class="d-none">
                <div class="form-group">
                    <label for="group_price">@lang('site.price for group')</label>
                    <input type="number" name="group_price" value="{{ old('group_price', isset($course) ? $course->group_price : '') }}"
                        class="form-control">
                    @error('group_price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="discount_group_price">@lang('site.discount_price')</label>
                    <input type="number" min="0" step="0.5" max="100"
                        name="discount_group_price" value="{{ old('discount_group_price', isset($course) ? $course->discount_group_price : '') }}"
                        class="form-control">
                    @error('discount_group_price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="d-none" id="role-group">
                <div class="form-group">
                    <label for="group_price_role_en">@lang('site.english_price_role')</label>
                    <input type="text" name="group_price_role[en]"
                        value="{{ old('group_price_role.en', isset($course) ? $course->getTranslation('group_price_role', 'en') : '') }}" class="form-control">
                    @error('group_price_role.en')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="group_price_role_ar">@lang('site.arabic_price_role')</label>
                    <input type="text" name="group_price_role[ar]"
                        value="{{ old('group_price_role.ar', isset($course) ? $course->getTranslation('group_price_role', 'ar') : '') }}" class="form-control">
                    @error('group_price_role.ar')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
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