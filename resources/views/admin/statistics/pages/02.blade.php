<pagebreak></pagebreak>
<style>
ol li{
    height: 50px;
    font-weight: bold;
    color: #333;
    font-size: 25px;
}
.second{
    padding-top: 20px;
    padding-bottom: 20px;
}
.second li{
    height: 35px;
    font-weight: bold;
    color: #555;
    font-size: 20px;
}
</style>
<div class="w3-container" style="height: 91%">
    <img src="{{config('report.url')}}/pdf/report/Page.png" alt=""  style="width: 110%;margin: 0;padding: 0">
    <div id="header">
        <div style="margin-top: -1115px"></div>
        <h3 style="text-align: right;color:#2e8b9f;font-weight: bold;padding-top:10px;margin-right: 20px">

            الفهرس
            <img src="{{config('report.url')}}/pdf/report/icons/sessions.png" height="40" alt="">
        </h3>
        <hr style="width: 95%;margin-top: 0">
        <div id="content" style="padding: 30px">
            <ol class="main" style="direction: rtl">
                <li> المعلومات العامة</li>
                <li>احصائيات الموقع</li>
                <li>عرض البيانات</li>
            </ol>
        </div>
    </div>
</div>
<div style="height: 7%;padding-left: 5%;font-size: 35px;font-weight: bold;color: #2e8b9f">
    {PAGENO}
</div>

