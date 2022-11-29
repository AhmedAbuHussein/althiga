  @extends('layouts.app')


  @section('title', 'Gov Registrations')


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
                  <li><a href="{{ route('routeName', ['id' => 'governmental-registrations']) }}">@lang('app.Governmental_Registrations')</a></li>
              </ul>
          </div>
      </div>
      <!-- Page Title END -->

      <!-- Shop Grid START -->
      <div class="section-block">
          <div class="container">
              <div class="section-heading">
                  <h5>@lang('app.Governmental_Registrations')</h5>
                  <div class="section-heading-line-left"></div>
              </div>
              <div class="row mt-30">
                  <!-- Product Start -->
                  <div class="col-md-3 col-sm-6 col-12">
                      <div class="classic-shop">
                          <div class="classic-shop-img">
                              <img src="{{ asset('web/img/governmental-registrations/cr.jpg') }}" alt="Commercial Registration">
                              <div class="shop-box-overlay">
                                  <div class="row">
                                      <div class="col-md-12 col-sm-12 col-12 pr-0">
                                          <a href="{{ asset('web/img/governmental-registrations/cr.jpg') }}" target='_blank'>
                                              <div class="shop-to-card">
                                                  <h4><span class="fa fa-eye"></span>@lang('app.View')</h4>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="classic-shop-text">
                              <h4><a href="{{ asset('web/img/governmental-registrations/cr.jpg') }}"
                                      target='_blank'>@lang('gov-reg.Commercial_Registration')</a></h4>
                          </div>
                      </div>
                  </div>
                  <!-- Product End -->

                  <!-- Product Start -->
                  <div class="col-md-3 col-sm-6 col-12">
                      <div class="classic-shop">
                          <div class="classic-shop-img">
                              <img src="{{ asset('web/img/governmental-registrations/tvtc.jpg') }}" alt="TVTC">
                              <div class="shop-box-overlay">
                                  <div class="row">
                                      <div class="col-md-12 col-sm-12 col-12 pr-0">
                                          <a href="{{ asset('web/img/governmental-registrations/tvtc.jpg') }}" target='_blank'>
                                              <div class="shop-to-card">
                                                  <h4><span class="fa fa-eye"></span>@lang('app.View')</h4>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="classic-shop-text">
                              <h4><a href="{{ asset('web/img/governmental-registrations/tvtc.jpg') }}"
                                      target='_blank'>@lang('gov-reg.Technical_and_Vocational_Training_Corporation')</a>
                              </h4>
                          </div>
                      </div>
                  </div>
                  <!-- Product End -->

                  <!-- Product Start -->
                  <div class="col-md-3 col-sm-6 col-12">
                      <div class="classic-shop">
                          <div class="classic-shop-img">
                              <img src="{{ asset('web/img/governmental-registrations/gdcd.jpg') }}" alt="GDCD">
                              <div class="shop-box-overlay">
                                  <div class="row">
                                      <div class="col-md-12 col-sm-12 col-12 pr-0">
                                          <a href="{{ asset('web/img/governmental-registrations/gdcd.jpg') }}" target='_blank'>
                                              <div class="shop-to-card">
                                                  <h4><span class="fa fa-eye"></span>@lang('app.View')</h4>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="classic-shop-text">
                              <h4><a href="{{ asset('web/img/governmental-registrations/gdcd.jpg') }}"
                                      target='_blank'>@lang('gov-reg.General_Directorate_of_Civil_Defense')</a></h4>
                          </div>
                      </div>
                  </div>
                  <!-- Product End -->

                  <!-- Product Start -->
                  <div class="col-md-3 col-sm-6 col-12">
                      <div class="classic-shop">
                          <div class="classic-shop-img">
                              <img src="{{ asset('web/img/governmental-registrations/gosi.jpg') }}" alt="GOSI">
                              <div class="shop-box-overlay">
                                  <div class="row">
                                      <div class="col-md-12 col-sm-12 col-12 pr-0">
                                          <a href="{{ asset('web/img/governmental-registrations/gosi.jpg') }}" target='_blank'>
                                              <div class="shop-to-card">
                                                  <h4><span class="fa fa-eye"></span>@lang('app.View')</h4>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="classic-shop-text">
                              <h4><a href="{{ asset('web/img/governmental-registrations/gosi.jpg') }}"
                                      target='_blank'>@lang('gov-reg.GOSI')</a></h4>
                          </div>
                      </div>
                  </div>
                  <!-- Product End -->

                  <!-- Product Start -->
                  <div class="col-md-3 col-sm-6 col-12">
                      <div class="classic-shop">
                          <div class="classic-shop-img">
                              <img src="{{ asset('web/img/governmental-registrations/gazt.jpg') }}" alt="GAZT">
                              <div class="shop-box-overlay">
                                  <div class="row">
                                      <div class="col-md-12 col-sm-12 col-12 pr-0">
                                          <a href="{{ asset('web/img/governmental-registrations/gazt.jpg') }}" target='_blank'>
                                              <div class="shop-to-card">
                                                  <h4><span class="fa fa-eye"></span>@lang('app.View')</h4>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="classic-shop-text">
                              <h4><a href="{{ asset('web/img/governmental-registrations/gazt.jpg') }}"
                                      target='_blank'>@lang('gov-reg.General_Authority_of_Zakat_Tax')</a></h4>
                          </div>
                      </div>
                  </div>
                  <!-- Product End -->

                  <!-- Product Start -->
                  <div class="col-md-3 col-sm-6 col-12">
                      <div class="classic-shop">
                          <div class="classic-shop-img">
                              <img src="{{ asset('web/img/governmental-registrations/gazt-branches.jpg') }}" alt="GAZT">
                              <div class="shop-box-overlay">
                                  <div class="row">
                                      <div class="col-md-12 col-sm-12 col-12 pr-0">
                                          <a href="{{ asset('web/img/governmental-registrations/gazt-branches.jpg') }}"
                                              target='_blank'>
                                              <div class="shop-to-card">
                                                  <h4><span class="fa fa-eye"></span>@lang('app.View')</h4>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="classic-shop-text">
                              <h4><a href="{{ asset('web/img/governmental-registrations/gazt-branches.jpg') }}"
                                      target='_blank'>@lang('gov-reg.General_Authority_of_Zakat_Tax_Branches')</a></h4>
                          </div>
                      </div>
                  </div>
                  <!-- Product End -->

                  <!-- Product Start -->
                  <div class="col-md-3 col-sm-6 col-12">
                      <div class="classic-shop">
                          <div class="classic-shop-img">
                              <img src="{{ asset('web/img/governmental-registrations/coc.jpg') }}"
                                  alt="Jeddah_Chamber_of_Commerce">
                              <div class="shop-box-overlay">
                                  <div class="row">
                                      <div class="col-md-12 col-sm-12 col-12 pr-0">
                                          <a href="{{ asset('web/img/governmental-registrations/coc.jpg') }}" target='_blank'>
                                              <div class="shop-to-card">
                                                  <h4><span class="fa fa-eye"></span>@lang('app.View')</h4>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="classic-shop-text">
                              <h4><a href="{{ asset('web/img/governmental-registrations/coc.jpg') }}"
                                      target='_blank'>@lang('gov-reg.Jeddah_Chamber_of_Commerce')</a></h4>
                          </div>
                      </div>
                  </div>
                  <!-- Product End -->

                  <!-- Product Start -->
                  <div class="col-md-3 col-sm-6 col-12">
                      <div class="classic-shop">
                          <div class="classic-shop-img">
                              <img src="{{ asset('web/img/governmental-registrations/vat.jpg') }}" alt="VAT">
                              <div class="shop-box-overlay">
                                  <div class="row">
                                      <div class="col-md-12 col-sm-12 col-12 pr-0">
                                          <a href="{{ asset('web/img/governmental-registrations/vat.jpg') }}" target='_blank'>
                                              <div class="shop-to-card">
                                                  <h4><span class="fa fa-eye"></span>@lang('app.View')</h4>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="classic-shop-text">
                              <h4><a href="{{ asset('web/img/governmental-registrations/vat.jpg') }}"
                                      target='_blank'>@lang('gov-reg.VAT_Registration_Certificate')</a></h4>
                          </div>
                      </div>
                  </div>
                  <!-- Product End -->

              </div>
          </div>
      </div>
      <!-- Shop Grid END -->

  @endsection

  @section('footer')
      @parent
  @endsection
