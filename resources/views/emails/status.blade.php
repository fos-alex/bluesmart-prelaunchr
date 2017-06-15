<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bluesmart</title>
    <style type="text/css">
        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important; }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size: 16px !important; }
            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important; }
            table[class=body] .content {
                padding: 0 !important; }
            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important; }
            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important; }
            table[class=body] .btn table {
                width: 100% !important; }
            table[class=body] .btn a {
                width: 100% !important; }
            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important; }}
        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%; }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%; }
            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important; }
            .btn-primary table td:hover {
                background-color: #34495e !important; }
            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important; } }
    </style>
</head>
<body class="" style="background-color:#f6f6f6;font-family:ArialMT, Arial;-webkit-font-smoothing:antialiased;font-size:14px;line-height:1.4;margin:0;padding:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
<table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;background-color:#f6f6f6;width:100%;">
    <tr>
        <td style="font-family:ArialMT, Arial;font-size:14px;vertical-align:top;">&nbsp;</td>
        <td class="container" style="font-family:ArialMT, Arial;font-size:14px;vertical-align:top;display:block;max-width:580px;padding:10px;width:580px;Margin:0 auto !important;">
            <div class="content" style="box-sizing:border-box;display:block;Margin:0 auto;max-width:580px;padding:10px;">
                <!-- START CENTERED WHITE CONTAINER -->
                <table class="main" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;background:#fff;border-radius:3px;width:100%;">
                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper status-email" style="font-family:ArialMT, Arial;font-size:14px;vertical-align:top;box-sizing:border-box;padding:40px 80px;background-color:black;text-align:center;">
                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;width:100%;">
                                <tr>
                                    <td style="font-family:ArialMT, Arial;font-size:14px;vertical-align:top;">
                                        <img class="" src="{{ asset('img/email/bluesmart-logo.png') }}" style="border:none;-ms-interpolation-mode:bicubic;max-width:100%;"/>
                                        <img class="header" src="{{ asset('img/email/hero-2.png') }}" style="border:none;-ms-interpolation-mode:bicubic;max-width:100%;width:100%;margin-top:20px;margin-bottom:40px;"/>
                                        <img class="mail-title" src="{{ asset('img/email/title-mail-2.png') }}" style="border:none;-ms-interpolation-mode:bicubic;max-width:100%;margin-bottom:15px;"/>

                                        <p style="font-family:ArialMT, Arial;font-size:14px;font-weight:normal;margin:0;Margin-bottom:15px;color:white;">All done! You’re now ready to start sharing your personalized link  with your friends and family via email, Facebook and, Twitter.</p>
                                        <a href="{{ route('user.status', [ $secret ]) }}" target="_blank" style="text-decoration:underline;cursor:pointer;">{{ route('user.status', [ $secret ]) }}</a>
                                        <p style="font-family:ArialMT, Arial;font-size:14px;font-weight:normal;margin:0;Margin-bottom:15px;color:white;">Remember, the more people that sign up using your link, the more special, limited edition gifts you’ll get. </p>
                                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;box-sizing:border-box;width:100%;margin-top:40px;">
                                            <tbody>
                                            <tr>
                                                <td align="center" style="font-family:ArialMT, Arial;font-size:14px;vertical-align:top;padding-bottom:15px;">
                                                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;width:100%;width:auto;">
                                                        <tbody>
                                                        <tr>
                                                            <td style="font-family:ArialMT, Arial;font-size:14px;vertical-align:top;text-align:center;background-color:transparent;">
                                                                <a href="{{ route('user.status', [ $secret ]) }}" target="_blank" style="text-decoration:underline;border:solid 1px white;box-sizing:border-box;color:white;cursor:pointer;display:inline-block;font-size:14px;font-weight:bold;margin:0;padding:12px 10px 12px 25px;text-decoration:none;width:300px;text-align:right;background-color:transparent;border-color:white;color:#ffffff;">
                                                                    Check on your referral status
                                                                    <img class="arrow" src="{{ asset('img/email/arrow-white.png') }}" style="border:none;-ms-interpolation-mode:bicubic;max-width:100%;width:40px;margin-bottom:-1px;"/>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- END MAIN CONTENT AREA -->
                </table>
                <!-- START FOOTER -->
                <div class="footer" style="clear:both;padding-top:10px;text-align:center;width:100%;">
                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;width:100%;">
                        <tr>
                            <td class="content-block" style="font-family:ArialMT, Arial;font-size:14px;vertical-align:top;font-size:12px;text-align:center;color:black;margin-top:10px;margin-bottom:0;">
                                <p style="font-family:ArialMT, Arial;font-size:14px;font-weight:normal;margin:0;Margin-bottom:15px;color:white;font-size:12px;text-align:center;color:black;margin-top:10px;margin-bottom:0;">Copyright© {{ date('Y') }} Bluesmart. All rights reserved.</p>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family:ArialMT, Arial;font-size:14px;vertical-align:top;font-size:12px;text-align:center;color:black;margin-top:10px;margin-bottom:0;">
                                <a href="https://www.facebook.com/bluesmartlabs/" target="_blank"><img class="social" src="{{ asset('img/email/icon_fb_1x.png') }}" /></a>
                                <a href="https://www.instagram.com/bluesmart/" target="_blank"><img class="social" src="{{ asset('img/email/icon_ig_1x.png') }}" /></a>
                                <a href="https://twitter.com/bluesmart" target="_blank"><img class="social" src="{{ asset('img/email/icon_tw_1x.png') }}" /></a>
                                <a href="https://www.youtube.com/user/bluesmartlabs" target="_blank"><img class="social" src="{{ asset('img/email/icon_yt_1x.png') }}" /></a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->
                <!-- END CENTERED WHITE CONTAINER -->
            </div>
        </td>
        <td style="font-family:ArialMT, Arial;font-size:14px;vertical-align:top;">&nbsp;</td>
    </tr>
</table>
</body>
</html>