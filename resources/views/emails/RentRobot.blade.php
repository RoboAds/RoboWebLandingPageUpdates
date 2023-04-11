<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Rent Robot Inquiry</title>


</head>

<body>
<table width="600" height="535" border="0" align="center" cellpadding="0" cellspacing="0" class="maintable">
    <style type="text/css">
        <!--
        body,td,th {
            color: #101010;
            font-family: Tahoma,Verdana, sans-serif,Arial, Helvetica;
        }
        body {
            background-color: #ffffff;
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }
        .maintable{
            color:#ffffff;
            font-size:12px;
        }
        .toptd{
            background-color:#ed8f09;
            font-size:12px;
            color:#FFFFFF;
            padding-top: 10px;
            padding-right: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
        }
        .tit{
            font-size:18px;
            font-weight:bold;
        }
        .con{
            font-size:12px;
            color:#FFFFFF;
            padding:20px;
        }
        .great{
            font-size:18px;
            font-weight:bold;
        }
        .con A{
            color:#FFFFFF;
            font-size:12px;
            font-weight:bold;
        }
        .rightcon{
            color:#d07e0a;
            font-size:12px;
            padding:20px;
        }
        .rightcon A{
            color: #000000;
            font-size:12px;
        }
        /* ----------------------------------------------*/

        -->
    </style>

    <tr>
        <td height="600" valign="top"><table width="600" border="0" height="2" cellspacing="0" cellpadding="0">
                <tr>
                    <td height="2"></td>
                </tr>
            </table>
            <table width="600" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="600" valign="top" bgcolor="white" class="con"><div align="justify">Dear Team Roboads,<br>
                            <br>
                        </div>
                        <p align="justify">Greetings!  </p>
                        <p>{{$details['message']}}</p>
                        <br>
                        <br>
                        <p>Thank you!</p>
                        <br>
                        <p>sincerely,</p>
                        <p>Name : {{$details['name']}}<br>
                        </p>
                        <p>Email : {{$details['email']}}<br>
                        </p>
                        <p>Contact : {{$details['mobile']}}<br>

                           @if(array_key_exists("event_name",$details) == true)
                            <p>Event Name : {{$details['event_name']}}<br>
                            </p>
                           @endif
                        @if(array_key_exists("company",$details) == true)
                            <p>Event Name : {{$details['company']}}<br>
                            </p>
                        @endif
                        @if(array_key_exists("start_date",$details) == true)
                            <p>Event Start Date : {{$details['start_date']}}<br>
                            </p>
                        @endif
                        @if(array_key_exists("end_date",$details) == true)
                            <p>Event End Date : {{$details['end_date']}}<br>
                            </p>
                        @endif

                    </td>
                    <td width="1"></td>
                </tr>
            </table></td>
    </tr>
</table>
</body>
</html>
