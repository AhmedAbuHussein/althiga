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
      <div class="page-title-section" style="background-image: url({{ asset('web/img/sub-pages-background.png') }});">
          <div class="container">
              <h1>@lang('app.About')</h1>
              <ul class="fa">
                  <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                  <li><a href="{{ route('routeName', ['id' => 'valuable-customers']) }}">@lang('app.Valuable_Customers')</a>
                  </li>
              </ul>
          </div>
      </div>
      <!-- Page Title END -->

      <!-- Clients Carousel START -->
      <div class="section-clients border-top">
          <div class="container">
              <div class="owl-carousel owl-theme clients" id="clients">
                  <div class="item"><img src="{{ asset('web/img/clients/1.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/2.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/3.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/4.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/5.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/6.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/7.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/8.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/9.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/10.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/11.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/12.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/13.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/14.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/15.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/16.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/17.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/18.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/19.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/20.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/21.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/22.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/23.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/24.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/25.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/26.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/27.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/28.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/29.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/30.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/31.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/32.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/33.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/34.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/35.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/36.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/37.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/38.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/39.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/40.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/41.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/42.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/43.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/44.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/45.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/46.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/47.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/48.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/49.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/50.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/51.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/52.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/53.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/54.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/55.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/56.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/57.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/58.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/59.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/60.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/61.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/62.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/63.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/64.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/65.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/66.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/67.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/68.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/69.png') }}"></div>
                  <div class="item"><img src="{{ asset('web/img/clients/70.png') }}"></div>
              </div>
          </div>
      </div>
      <!-- Clients Carousel END -->

  @endsection

  @section('footer')
      @parent
  @endsection
