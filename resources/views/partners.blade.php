  @extends('layouts.app')


  @section('title', 'Valuable Customers')


  @section('app')
      @parent
  @endsection

  @php
  $dir = app()->isLocale('en') ? 'left' : 'right';
  @endphp

  @section('content')

      <!-- Page Title START -->
      <div class="page-title-section" style="background-image: url({{ Storage::url($panners->where('key', 'partner_panner')->pluck('value')->first()) }})">
          <div class="container">
              <h1>@lang('Valuable_Customers')</h1>
              <ul class="fa">
                  <li><a href="{{ route('index') }}">@lang('Home')</a></li>
                  <li><a href="">@lang('Valuable_Customers')</a>
                  </li>
              </ul>
          </div>
      </div>
      <!-- Page Title END -->

      <!-- Clients Carousel START -->
      <div class="section-clients border-top">
          <div class="container">
              <div class="owl-carousel owl-theme clients" id="clients">
                @foreach ($items as $item)
                <div class="item">
                    @if ($item->link)
                        <a href="{{ $item->link }}">
                    @endif
                        <img alt="{{ $item->title }}" title="{{ $item->title }}" loading="lazy" src="{{ $item->url }}">
                    @if ($item->link)        
                    </a>
                    @endif
                </div>
            @endforeach
              </div>
          </div>
      </div>
      <!-- Clients Carousel END -->

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
            color: {{ $panners->where('key', 'partner_panner_color')->pluck('value')->first() ?? '#FFF' }} !important;
        }

    </style>

@endpush
