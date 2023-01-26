  @extends('layouts.app')


  @section('title', 'Accreditations & Partnerships')


  @section('app')
      @parent
  @endsection

  @php
  $dir = app()->isLocale('en') ? 'left' : 'right';
  @endphp

  @section('content')

      <!-- Page Title START -->
      <div class="page-title-section" style="background-image: url({{ Storage::url($panners->where('key', 'accreditation_panner')->pluck('value')->first()) }})">
          <div class="container">
              <h1>@lang('Local_International_Accreditations_Partnerships')</h1>
              <ul class="fa">
                  <li><a href="{{ route('index') }}">@lang('Home')</a></li>
                  <li><a href="#">@lang('Local_International_Accreditations_Partnerships')</a>
                  </li>
              </ul>
          </div>
      </div>
      <!-- Page Title END -->

      <!-- Cases START -->
      <div class="section-block-grey">
          <div class="container">
              <div class="section-heading">
                  <h5>@lang('Local_Accreditations')</h5>
                  <div class="section-heading-line-left"></div>
              </div>
              <div class="row mt-40">
                @foreach ($items->where('type', 'national') as $item)
                    <!-- Case Block Start -->
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="case-block">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-12 pr-0">
                                    <img style="width: auto;" loading="lazy" src="{{ $item->url }}" alt="TVTC">
                                </div>
                                <div class="col-md-8 col-sm-8 col-12">
                                    <div class="case-block-inner">
                                        <h4>{{ $item->title }}</h4>
                                        <p>{{ $item->text }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Case Block End -->
                @endforeach
                  

              </div>
          </div>
      </div>
      <!-- Cases END -->

      <!-- Cases START -->
      <div class="section-block">
          <div class="container">
              <div class="section-heading">
                  <h5>@lang('International_Partnerships')</h5>
                  <div class="section-heading-line-left"></div>
              </div>
              <div class="row mt-40">

                @foreach ($items->where('type', 'international') as $item)
                    <!-- Case Block Start -->
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="case-block">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-12 pr-0">
                                    <img style="width: auto;" loading="lazy" src="{{ $item->url }}" alt="TVTC">
                                </div>
                                <div class="col-md-8 col-sm-8 col-12">
                                    <div class="case-block-inner">
                                        <h4>{{ $item->title }}</h4>
                                        @if ($item->file)
                                            <a target="_blank" download="" href="{{ $item->file_url }}">{{ $item->file_title }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Case Block End -->
                @endforeach
              </div>
          </div>
      </div>
      <!-- Cases END -->

  @endsection

  @section('footer')
      @parent
  @endsection

  @push('css')
    <style>
        .page-title-section h1,
        .page-title-section ul li:after,
        .page-title-section ul li a
        {
            color: {{ $panners->where('key', 'accreditation_panner_color')->pluck('value')->first() ?? '#FFF' }} !important;
        }

    </style>

@endpush
