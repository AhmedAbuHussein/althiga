<div class="w3-container w3-teal">
    <img src="{{config('report.url')}}/pdf/report/Page-1.png" alt=""  style="width: 110%;margin: 0;padding: 0">

    <h2 style="margin-top: -370px;text-align: center;color:#4d4155;font-family: Cairo,serif !important;font-weight: bold">
     {{ $report_name }}
    </h2>

    <h6 style="margin-top: 50px;text-align: center;color:#fff;font-weight: bold">تاريخ الإصدار</h6>
    <h6 style="text-align: center;color:#fff;font-weight: bold"> {{strtoupper(date("Y/d/m",strtotime(now())))}}</h6>
</div>
