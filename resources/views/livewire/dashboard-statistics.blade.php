<div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body" style="min-height:100%">
                    <div class="px-0">
                        <div class="px-3 py-3">
                          @lang('site.Top traffic sources')
                        </div>
                        <div style="min-height: 1px;background: var(--border-color);"></div>
                    </div>
                    <div class="p-3">
    
                        @forelse($data['top_domains'] as $main_domain)
                 
                        <div class="px-2 py-1 row">
                            <div class="col-4 p-0">
                                <span style="width: 30px;height: 17px;font-weight: bold;background: #0194fe;color: #fff;" class="badge badge-light d-flex align-items-center justify-content-center">
                                    {{$main_domain->domain_count}}
                                </span>
                                
                            </div>
                            <div class="col-8 text-truncate p-0" style="direction:ltr;font-size: 12px;">
                                <a href="//{{$main_domain->main_domain}}" target="_blank" style="color:inherit">
                                    <img src="https://icons.duckduckgo.com/ip3/{{$main_domain->main_domain}}.ico" style="width:10px;height: 10px;" class="d-inline-block">
                                    {{$main_domain->main_domain}}
                                </a>
                            </div>
                        </div>
                        @empty
                            <div style="min-height: 200px;" class="px-2 py-1 d-flex justify-content-center align-items-center">
                                <p>@lang('site.no data available')</p>
                            </div>
                        @endforelse
     
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body" style="min-height: 300px;">
                    <div class="px-0">
                        <div class="px-3 py-3">@lang('site.Top Courses')</div>
                        <div style="min-height: 1px;background: var(--border-color);"></div>
                    </div>
                    <div class="p-3">
                        @forelse($data['top_courses'] as $course)
                        <div class="px-2 py-1 row">
                            <div class="col-4 p-0">
                                <span style="width: 30px;height: 17px;font-weight: bold;background: #0194fe;color: #fff;" class="badge badge-light d-flex align-items-center justify-content-center">
                                    {{$course->seens_count }}
                                </span>
                            </div>
                            <div class="col-8 text-truncate p-0" style="direction:ltr;font-size: 12px;">
                                <a href="{{ route('courses.show', ['slug'=> $course->slug]) }}" target="_blank" style="color:inherit">
                                    <span class="badge badge-warning">{{ $course->title }}</span>
                                </a>
                            </div>
                        </div>
                        @empty
                            <div style="min-height: 200px;" class="px-2 py-1 d-flex justify-content-center align-items-center">
                                <p>@lang('site.no data available')</p>
                            </div>
                        @endforelse

                    </div>
                </div>
            </div>

        </div>

        
    </div>
    <hr />
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body" style="min-height: 300px;">
                    <div class="main-box">
                        <div class="px-0">
                            <div class="px-3 py-3">
                                <div class="p-0">
                                    <div class="p-0 row">
                                        <div class="col-4">@lang('site.visitor_range')</div>
                                        <div class="col-8 d-flex justify-content-end align-items-center">
                                            <div class="spinner-grow text-info mx-2" role="status" style="width:15px;height: 15px">
                                                <span class="visually-hidden"></span>
                                            </div>
                                            <span style="font-weight: bold;">{{ array_sum($data['traffics_values']) }}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div style="min-height: 1px;background: var(--border-color);"></div>
                        </div>
                        <div class="p-3">
                            <canvas id="traffics-chart"></canvas>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body" style="min-height: 380px;">

                    <div class="p-2">
                        <div class="p-0 main-box">
                            <div class="px-0">
                                <div class="px-3 py-3">@lang('site.top_pages')</div>
                                <div style="min-height: 1px;background: var(--border-color);"></div>
                            </div>
                            <div class="p-3">
                                @forelse($data['top_pages'] as $page)
                                <div class="px-2 py-1 row">
                                    <div class="col-4 p-0">
                                        <span style="width: 30px;height: 17px;font-weight: bold;background: #0194fe;color: #fff;" class="badge badge-light d-flex align-items-center justify-content-center">
                                            {{$page['count']}}
                                        </span>
                                    </div>
                                    <div class="col-8 text-truncate p-0" style="direction:ltr;font-size: 12px;">
                                        <a href="{{ $page['url'] }}" target="_blank" style="color:inherit">
                                            <span class="badge badge-info">{{ urldecode(str_replace(env('APP_URL'),'',$page['url']) ?? '/' ) }}</span>
                                        </a>
                                    </div>
                                </div>
                                @empty
                                <div style="min-height: 200px" class="d-flex justify-content-center align-items-center">
                                    <p>@lang('site.no data available')</p>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <hr  />
    </div>
    <div class="row mt-3">
        <div class="col-md-4 p-2">
            <div class="card">
                <div class="card-body" style="min-height: 250px;">
                    <div class="p-0 main-box">
                        <div class="px-0">
                            <div class="px-3 py-3">
                                @lang('site.browsers')
                            </div>
                            <div class="" style="min-height: 1px;background: var(--border-color);"></div>
                        </div>
                        <div class="p-3">
                            @if (count($data['top_browsers']) == 0)
                                <div style="min-height: 250px;" class="d-flex justify-content-center align-items-center">
                                    <p>@lang('site.no data available')</p>
                                </div>
                            @else
                            <canvas id="ChartBrowsers" style="width:100%;max-height:250px"></canvas>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-4 p-2">
            <div class="card">
                <div class="card-body" style="min-height: 250px;">
                    <div class="p-0 main-box">
                        <div class="px-0">
                            <div class="px-3 py-3">
                                @lang('site.os')
                            </div>
                            <div class="" style="min-height: 1px;background: var(--border-color);"></div>
                        </div>
                        <div class="p-3">
                            @if (count($data['top_os']) == 0)
                                <div style="min-height: 250px;" class="d-flex justify-content-center align-items-center">
                                    <p>@lang('site.no data available')</p>
                                </div>
                            @else
                                <canvas id="ChartOperatingSystems" style="width:100%;max-height:250px"></canvas>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card">
                <div class="card-body" style="min-height: 250px;">
                    <div class="p-0 main-box">
                        <div class="px-0">
                            <div class="px-3 py-3">
                               @lang('site.top_devices')
                            </div>
                            <div class="" style="min-height: 1px;background: var(--border-color);"></div>
                        </div>
                        <div class="p-3">
                            @if (count($data['top_devices']) == 0)
                                <div style="min-height: 250px;" class="d-flex justify-content-center align-items-center">
                                    <p>@lang('site.no data available')</p>
                                </div>
                            @else
                                <canvas id="ChartDevices" style="width:100%;max-height:250px"></canvas>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@push('js')
<script src="{{ asset('js/chart.js') }}"></script>
<script src="{{ asset('js/apexcharts.js') }}"></script>
<script type="text/javascript">

    new Chart(document.getElementById('traffics-chart').getContext('2d'), {
        type: 'line', 
        data: {
            labels: [
                @foreach($data['traffics_labels'] as $item)
                "{{ $item }}", 
                @endforeach
            ], 
            datasets: [{
                // label: '# معدل الزوار', 
                data: [
                    @foreach($data['traffics_values'] as $key => $value)
                    "{{$value}}", 
                    @endforeach
                ], 
                backgroundColor: "#2196f3cc", 
                borderColor: '#2196f3', 
                pointStyle: 'rect', 
                lineTension: '.15', 
                tension: 0.1, 
                fill: true, 
                pointStyle: "circle", 
                pointBorderColor: "#2196f3", 
                pointBackgroundColor: "#fff", 
                pointRadius: 4, 
                borderWidth: 3.5    , 
        }]
        }, 
        options: {
            responsive: true, 
            plugins: {
                legend: {
                    display: false, 
                    labels: {
                        font: {
                            size: 14, 
                            family: "kufi-arabic"
                        }
                    }
                }
            }, 
            scales: {
                x: {
                    beginAtZero: false, 
                    grid: {
                        display: false
                    }
                }, 
                y: {
                    grid: {
                        display: true, 
                        color: "rgb(3,169,244,0.05)"
                    }
                },

            } , 
            hover: {
                mode: 'index'
            }, 
            legend: {
                labels: {
                    fontFamily: 'kufi-arabic', 
                    defaultFontFamily: 'kufi-arabic'    , 
            }
            }, 
            elements: {
                line: {
                    tension: 1
                }
            }
        }
    });

    new Chart(document.getElementById('ChartOperatingSystems'), {
        type: 'doughnut', 
        data: {
            labels: [
                @foreach($data['top_os'] as $os)
                "{{$os->os_type}}", 
                @endforeach
            ], 
            datasets: [{
                //label: 'أنظمة التشغيل',
                data: [
                    @foreach($data['top_os'] as $os)
                    "{{$os->count}}", 
                    @endforeach
                ],

                backgroundColor: {!!json_encode($flat_colors->shuffle()) !!}, 
                borderColor: [
                    'transparent', 
                ], 
                borderWidth: 0
            }]
        }
    });

    new Chart(document.getElementById('ChartBrowsers'), {
        type: 'doughnut',
        data: {
            labels: [
                @foreach($data['top_browsers'] as $browser)
                "{{$browser->browser}}",
                @endforeach
            ],
            datasets: [{
                label: '#',
                data: [
                    @foreach($data['top_browsers'] as $browser)
                    "{{$browser->count}}",
                    @endforeach
                ],

                backgroundColor: {!!json_encode($flat_colors->shuffle()) !!},
                borderColor: [
                    'transparent',
                ],
                borderWidth: 0
            }]
        }
    });

    new Chart(document.getElementById('ChartDevices'), {
        type: 'doughnut',
        data: {
            labels: [
                @foreach($data['top_devices'] as $device)
                "{{$device->device_name}}",
                @endforeach
            ],
            datasets: [{
                label: '#',
                data: [
                    @foreach($data['top_devices'] as $device)
                    "{{$device->count}}",
                    @endforeach
                ],

                backgroundColor: {!!json_encode($flat_colors->shuffle()) !!},
                borderColor: [
                    'transparent',
                ],
                borderWidth: 0
            }]
        }
    });
    
</script>
@endpush
