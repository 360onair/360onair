<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>Contact</title>
    <style type="text/css">
        html {
            height: 100%;
            background: #ffffff
        }

        body {
            margin: 0;
            padding: 0;
            min-width: 100% !important;
            height: 100% !important;
            background: #ffffff
        }

        .content {
            width: 600px;
            max-width: 560px;
            font-family: Arial;
            font-size: 12px;
            line-height: 1.8em;
            color: #333333;
        }

        a {
            color: #e32522 !important;
            text-decoration: none !important;
        }

        a:hover {
            color: #e32522;
            text-decoration: underline !important;
        }

        @media only screen and (min-device-width: 601px) {
            .content {
                width: 560px !important;
            }
        }

        b {
            font-size: 14px;
            margin-top: 4px;
        }
    </style>
</head>
<body bgcolor="#ffffff" height="100%" padding="0" margin="0">
<table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" height="96%" style="height:96%">
    <tr valign="top">
        <td>
            <!--[if (gte mso 9)|(IE)]>
            <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
            <![endif]-->
            <table class="content" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td height="30">&nbsp;</td>
                            </tr>
                            <tr>
                                <td valign="top" align="left" style="padding:0 20px;">
                                    <table cellspacing="0" cellpadding="0" border="0">
                                        <tr>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:100%; text-align:left; min-height: 20px; padding: 30px; margin-bottom: 20px; background-color: #fff6e6; border: 1px solid #fab338; border-radius: 4px; -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05); box-shadow: inset 0 1px 1px rgba(0,0,0,.05); color:#414141; font-size:14px;">
                                                <p>Beste {{ $request->naam }}, <br/><br/>
                                                    Bedankt voor je bericht.
                                                    Wij zullen zo snel mogelijk contact opnemen.
                                                    <br/><br/>

                                                    Hieronder zie je de gegevens die je hebt ingevuld.
                                        
                                                    <b>E-mail:</b> {{ $request->email }}<br/>
                                                    @if ($request->telefoon)
                                                        <b>Telefoon:</b> {{ $request->telefoon }}<br/>
                                                    @endif

                                                    <br/><b>Bericht:</b> {{ $request->bericht }}

                                                    <br/><br/>
                                                    Met vriendelijke groet, <br/>
                                                    360onair</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
</table>
</body>
</html>