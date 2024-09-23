<style>
    html,
    body {
        padding: 0;
        margin: 0;
        direction: ltr;
    }

</style>
<div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
        <tbody>
            <tr>
                <td align="center" valign="center" style="text-align:center; padding: 40px">
                    <a href="https://althiga.net" rel="noopener" target="_blank">
                        <img alt="Logo" src="{{ \App\Models\Setting::email_website_logo() }}" style="width: 250px" />
                    </a>
                </td>
            </tr>
            <tr>
                <td align="left" valign="center">
                    <div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                        <!--begin:Email content-->
                        <div style="padding-bottom: 30px; font-size: 17px; text-align: center" dir="ltr">
                            <strong> Dear {{ $name }}</strong>,
                        </div>
                        <div style="padding-bottom: 30px">
                            {!! \App\Models\Setting::where('key', 'aramco_client_email')->pluck('value')->first() !!}
                        </div>
                        

                        <div style="text-align:center;padding-bottom: 30px">
                            Here are your registration details:
                        </div>
                        <table align="center" border="1" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
                            <tbody>
                                <tr>
                                    <td align="center" valign="center" style="text-align:center; padding: 12px">Name</td>
                                    <td align="center" valign="center" style="text-align:center; padding: 12px">{{$name}}</td>
                                </tr>
                                <tr>
                                    <td align="center" valign="center" style="text-align:center; padding: 12px">Email</td>
                                    <td align="center" valign="center" style="text-align:center; padding: 12px">{{$email}}</td>
                                </tr>
                                <tr>
                                    <td align="center" valign="center" style="text-align:center; padding: 12px">Phone</td>
                                    <td align="center" valign="center" style="text-align:center; padding: 12px">{{$phone}}</td>
                                </tr>
                                @if ($nationalId)
                                <tr>
                                    <td align="center" valign="center" style="text-align:center; padding: 12px">National Id / Passport</td>
                                    <td align="center" valign="center" style="text-align:center; padding: 12px">{{$nationalId}}</td>
                                </tr>
                                @endif
                                @if ($groupNumber)
                                <tr>
                                    <td align="center" valign="center" style="text-align:center; padding: 12px">Persons</td>
                                    <td align="center" valign="center" style="text-align:center; padding: 12px">{{$groupNumber}} Person</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <!--end:Email content-->

                        <div style="text-align:center;padding-bottom: 30px; margin-top: 25px">
                            If you have any questions or need further information, please do not hesitate to reach out.
                            <br>
                            Wishing you a successful learning journey!
                        </div>

                        <div style="padding-bottom: 10px;text-align: left" dir="ltr">
                            Best regards,
                            <br>
                           Support Team

                                <tr>
                                    <td align="center" valign="center" style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                                         <p style="text-align: center;">Kingdom of Saudi Arabia</p>
                                         <p style="text-align: center;">Copyright ©
                                            <a href="https://althiga.net/" rel="noopener" target="_blank">althiga.net</a>.</p>
                                    </td>
                                </tr>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
