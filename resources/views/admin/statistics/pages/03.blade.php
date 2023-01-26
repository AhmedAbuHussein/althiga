<pagebreak></pagebreak>
<style>
    #customers *{
        direction: rtl;
        text-align: right;
    }
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        border: 2px solid #ddd;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        width: 100%;
    }

    #customers td, #customers th {
        border: 2px solid #eee;
        padding: 10px;
    }

    #customers .head {
        padding-top: 12px;
        padding-bottom: 12px;
        font-weight: bold;
        text-align: center;
        border: 2px solid #eee;
        background-color: #2e8b9f;
        color: white;
    }
</style>
<div class="w3-container" style="height: 91%">
    <img src="{{config('report.url')}}/pdf/report/Page.png" alt=""  style="width: 110%;margin: 0;padding: 0">
    <div id="header">
        <div style="margin-top: -1115px"></div>
        <h3 style="text-align: right;color:#2e8b9f;font-weight: bold;padding-top:10px;margin-right: 20px">المعلومات العامة
            <img src="{{config('report.url')}}/pdf/report/icons/id-card-2.png" height="40" alt="">
        </h3>
        <hr style="width: 95%;margin-top: 0">
        <div id="content" style="padding: 30px">
            <table id="customers" class=" w3-round-xlarge" style="direction: rtl">
                <tr>
                    <td class="head" width="50%">عدد البرامج</td>
                    <td>{{ $courses }}</td>
                </tr>
                <tr>
                    <td class="head">الاجهزه</td>
                    <td>5200</td>
                </tr>
                <tr>
                    <td class="head" width="50%">عدد البرامج</td>
                    <td>1500</td>
                </tr>
                <tr>
                    <td class="head">الاجهزه</td>
                    <td>5200</td>
                </tr>
                
                <tr>
                    <td class="head" width="50%">عدد البرامج</td>
                    <td>1500</td>
                </tr>
                <tr>
                    <td class="head">الاجهزه</td>
                    <td>5200</td>
                </tr>
                
                
            </table>
        </div>
    </div>
</div>
<div style="height: 7%;padding-left: 5%;font-size: 35px;font-weight: bold;color: #2e8b9f">
    {PAGENO}
</div>

