<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
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
                                        <span style="font-weight: bold;">{{ 50 }}</span>
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
            <div class="card-body">

                <div class="p-2">
                    <div class="p-0 main-box">
                        <div class="px-0">
                            <div class="px-3 py-3">@lang('site.top_pages')</div>
                            <div style="min-height: 1px;background: var(--border-color);"></div>
                        </div>
                        <div class="p-3">
                            @foreach($data['top_pages'] as $page)
                            <div class="px-2 py-1 row">
                                <div class="col-4 p-0">
                                    <span style="width: 30px;height: 17px;font-weight: bold;background: #0194fe;color: #fff;" class="badge badge-light d-flex align-items-center justify-content-center">
                                        {{$page['count']}}
                                    </span>
                                </div>
                                <div class="col-8 text-truncate p-0" style="direction:ltr;font-size: 12px;">
                                    <a href="{{$page['url']}}" target="_blank" style="color:inherit">{{
                                        urldecode(str_replace(env('APP_URL'),'',$page['url'])) }}</a>
                                </div>
                            </div>
                            @endforeach
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
            @foreach ($data['traffics_labels'] as $item)
                "{{ $item }}",
            @endforeach
        ],
        datasets: [{
            label: '# معدل الزوار',
                data: [
                    @foreach(array_reverse($data['traffics_values']) as $key => $value)
                        "{{$value}}",
                    @endforeach
                ],
                    backgroundColor: "#2196f3cc",
                    borderColor: '#2196f3',
                    pointStyle: 'rect',
                    lineTension: '.15',
                    tension: 0.1,
                    fill: true,
                    pointStyle:"circle",
                    pointBorderColor:"#2196f3",
                    pointBackgroundColor:"#fff",
                    pointRadius:4,
                    borderWidth: 3.5,
            }]
        },
        options: {
            responsive:true,
            plugins: {
                legend: {
                    display:false,
                    labels: {
                        font: {
                            size: 14,
                            family:"kufi-arabic"
                        }
                    }
                }
            },
            scales: {
                x: {
                beginAtZero:false,
                grid: {
                  display: false
                }
              },
              y: { 
                grid: {
                  display: true,
                  color:"rgb(3,169,244,0.05)"
                }
              },

            },
            hover: {
                mode: 'index'
            },
            legend: {
                labels: {

                    fontFamily: 'kufi-arabic',
                    defaultFontFamily: 'kufi-arabic',
                }
            },
            elements: {
                line: {
                    tension: 1
                }
            }
        }
    });

</script>
@endpush