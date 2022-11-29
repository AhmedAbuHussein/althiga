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
      <div class="page-title-section" style="background-image: url({{ asset('web/img/accreditations.jpg') }});">
          <div class="container">
              <h1>@lang('app.About')</h1>
              <ul class="fa">
                  <li><a href="{{ route('routeName', ['id' => '']) }}">@lang('app.Home')</a></li>
                  <li><a
                          href="{{ route('routeName', ['id' => 'accreditations-partnerships']) }}">@lang('app.Local_International_Accreditations_Partnerships')</a>
                  </li>
              </ul>
          </div>
      </div>
      <!-- Page Title END -->

      <!-- Cases START -->
      <div class="section-block-grey">
          <div class="container">
              <div class="section-heading">
                  <h5>@lang('app.Local_Accreditations')</h5>
                  <div class="section-heading-line-left"></div>
              </div>
              <div class="row mt-40">
                  <!-- Case Block Start -->
                  <div class="col-md-6 col-sm-12 col-12">
                      <div class="case-block">
                          <div class="row">
                              <div class="col-md-6 col-sm-6 col-12 pr-0">
                                  <img src="{{ asset('web/img/tvtc.jpg') }}" alt="TVTC">
                              </div>
                              <div class="col-md-6 col-sm-6 col-12">
                                  <div class="case-block-inner">
                                      <h4>@lang('gov-reg.Technical_and_Vocational_Training_Corporation')</h4>
                                      <p>رقم الاعتماد: 224211641479</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Case Block End -->

                  <!-- Case Block Start -->
                  <div class="col-md-6 col-sm-12 col-12">
                      <div class="case-block">
                          <div class="row">
                              <div class="col-md-6 col-sm-6 col-12 pr-0">
                                  <img src="{{ asset('web/img/gdcd.png') }}" alt="GDCD">
                              </div>
                              <div class="col-md-6 col-sm-6 col-12">
                                  <div class="case-block-inner">
                                      <h4>@lang('gov-reg.General_Directorate_of_Civil_Defense')</h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Case Block End -->

                  <!-- Case Block Start -->
                  <div class="col-md-12 col-sm-12 col-12">
                      <div class="case-block">
                          <div class="row">
                              <div class="col-md-6 col-sm-6 col-12 pr-0">
                                  <img src="{{ asset('web/img/aramco.png') }}" alt="ARAMCO">
                              </div>
                              <div class="col-md-6 col-sm-6 col-12">
                                  <div class="case-block-inner">
                                      <h4>@lang('gov-reg.Aramco')</h4>
                                      <p>رقم المقاول: 10050458</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Case Block End -->


              </div>
          </div>
      </div>
      <!-- Cases END -->

      <!-- Cases START -->
      <div class="section-block">
          <div class="container">
              <div class="section-heading">
                  <h5>@lang('app.International_Partnerships')</h5>
                  <div class="section-heading-line-left"></div>
              </div>
              <div class="row mt-40">

                  <!-- Case Block Start -->
                  <div class="col-md-6 col-sm-12 col-12">
                      <div class="case-block">
                          <div class="row">
                              <div class="col-md-6 col-sm-6 col-12 pr-0">
                                  <img src="{{ asset('web/img/highfield.jpg') }}" alt="Highfield">
                              </div>
                              <div class="col-md-6 col-sm-6 col-12">
                                  <div class="case-block-inner">
                                      <h4>Highfield</h4>
                                      <a href="{{ asset('web/img/int-accreditations/highfield.jpg') }}"
                                          target='_blank'>تحميل إعتماد جامعة Highfield</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Case Block End -->

                  <!-- Case Block Start -->
                  <div class="col-md-6 col-sm-12 col-12">
                      <div class="case-block">
                          <div class="row">
                              <div class="col-md-6 col-sm-6 col-12 pr-0">
                                  <img src="{{ asset('web/img/fsc.png') }}" alt="FSC">
                              </div>
                              <div class="col-md-6 col-sm-6 col-12">
                                  <div class="case-block-inner">
                                      <h4>@lang('gov-reg.FSC')</h4>
                                      <a href="{{ asset('web/img/int-accreditations/fsc.jpg') }}"
                                          target='_blank'>تحميل إعتماد كلية خدمات الحرائق البريطانية FSC</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Case Block End -->

                  <!-- Case Block Start -->
                  <div class="col-md-6 col-sm-12 col-12">
                      <div class="case-block">
                          <div class="row">
                              <div class="col-md-6 col-sm-6 col-12 pr-0">
                                  <img src="{{ asset('web/img/nasp.png') }}" alt="NASP">
                              </div>
                              <div class="col-md-6 col-sm-6 col-12">
                                  <div class="case-block-inner">
                                      <h4>@lang('gov-reg.NASP')</h4>
                                      <a href="{{ asset('web/img/int-accreditations/nasp.jpg') }}"
                                          target='_blank'>تحميل إعتماد الرابطة الوطنية لمحترفي السلامة NASP</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Case Block End -->

                  <!-- Case Block Start -->
                  <div class="col-md-6 col-sm-12 col-12">
                      <div class="case-block">
                          <div class="row">
                              <div class="col-md-6 col-sm-6 col-12 pr-0">
                                  <img src="{{ asset('web/img/itcilo.jpg') }}" alt="ITC-ILO">
                              </div>
                              <div class="col-md-6 col-sm-6 col-12">
                                  <div class="case-block-inner">
                                      <h4>@lang('gov-reg.ITCILO')</h4>
                                      <a href="{{ asset('web/img/int-accreditations/itcilo.jpg') }}"
                                          target='_blank'>تحميل إعتماد المركز الدولي للتدريب التابع لمنظمة العمل الدولية ITC-ILO</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Case Block End -->

                  <!-- Case Block Start -->
                  <div class="col-md-6 col-sm-12 col-12">
                      <div class="case-block">
                          <div class="row">
                              <div class="col-md-6 col-sm-6 col-12 pr-0">
                                  <img src="{{ asset('web/img/pha.jpg') }}" alt="PHA">
                              </div>
                              <div class="col-md-6 col-sm-6 col-12">
                                  <div class="case-block-inner">
                                      <h4>@lang('gov-reg.PHA')</h4>
                                      <a href="{{ asset('web/img/int-accreditations/pha.jpg') }}"
                                          target='_blank'>تحميل إعتماد أكاديمية الأمير حسين بن عبدالله الثاني للحماية المدنية</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Case Block End -->

                  <!-- Case Block Start -->
                  <div class="col-md-6 col-sm-12 col-12">
                      <div class="case-block">
                          <div class="row">
                              <div class="col-md-6 col-sm-6 col-12 pr-0">
                                  <img src="{{ asset('web/img/efpa.png') }}" alt="EFPA">
                              </div>
                              <div class="col-md-6 col-sm-6 col-12">
                                  <div class="case-block-inner">
                                      <h4>@lang('gov-reg.EFPA')</h4>
                                      <a href="{{ asset('web/img/int-accreditations/efpa.jpg') }}"
                                          target='_blank'>تحميل إعتماد الجمعية المصرية للوقاية من الحريق EFPA</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Case Block End -->

                  <!-- Case Block Start -->
                  <div class="col-md-6 col-sm-12 col-12">
                      <div class="case-block">
                          <div class="row">
                              <div class="col-md-6 col-sm-6 col-12 pr-0">
                                  <img src="{{ asset('web/img/icem.png') }}" alt="ICEM">
                              </div>
                              <div class="col-md-6 col-sm-6 col-12">
                                  <div class="case-block-inner">
                                      <h4>@lang('gov-reg.ICEM')</h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Case Block End -->

              </div>
          </div>
      </div>
      <!-- Cases END -->

  @endsection

  @section('footer')
      @parent
  @endsection
