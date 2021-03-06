<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Bluesmart</title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */
        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%; }

        body {
            background-color: #f6f6f6;
            font-family: ArialMT, Arial;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%; }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%; }
        table td {
            font-family: ArialMT, Arial;
            font-size: 14px;
            vertical-align: top; }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%; }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            Margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px; }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            Margin: 0 auto;
            max-width: 580px;
            padding: 10px; }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #fff;
            border-radius: 3px;
            width: 100%; }

        .wrapper {
            box-sizing: border-box;
            padding: 40px 80px;
            background-color: black;
            text-align: center;}

        .status-email {

        }

        .footer {
            clear: both;
            padding-top: 10px;
            text-align: center;
            width: 100%;}
        .footer td,
        .footer p,
        .footer span,
        .footer a {
            font-size: 12px;
            text-align: center;
            color: black;
            margin-top: 10px;
            margin-bottom: 0;}

        img.isologo {
            width: 16px;
        }

        img.arrow {
            width: 40px;
            margin-bottom: -1px;
        }

        img.header {
            width: 100%;
            margin-top: 20px;
            margin-bottom: 40px;
        }

        img.mail-title {
            margin-bottom: 15px;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: white;
            font-family: ArialMT, Arial;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px;
            color: white;}

        h1 {
            font-size: 40px;
            font-weight: bold;
            text-align: center;}

        p,
        ul,
        ol {
            font-family: ArialMT, Arial;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            Margin-bottom: 15px;
            color: white;}
        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px; }

        p.grey-text {
            color: #d3d3d3;
        }

        a {
            text-decoration: underline;
            cursor: pointer;}

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
            margin-top: 40px;}
        .btn > tbody > tr > td {
            padding-bottom: 15px; }
        .btn table {
            width: auto; }
        .btn table td {
            background-color: transparent;
            text-align: center; }
        .btn a {
            background-color: transparent;
            border: solid 1px white;
            box-sizing: border-box;
            color: white;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 10px 12px 25px;
            text-decoration: none;
            width: 300px;
            text-align: right;}

        .btn-primary table td {
            background-color: transparent }

        .btn-primary a {
            background-color: transparent;
            border-color: white;
            color: #ffffff; }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0; }

        .first {
            margin-top: 0; }

        .align-center {
            text-align: center; }

        .align-right {
            text-align: right; }

        .align-left {
            text-align: left; }

        .clear {
            clear: both; }

        .mt0 {
            margin-top: 0; }

        .mb0 {
            margin-bottom: 0; }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0; }

        .powered-by a {
            text-decoration: none; }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            Margin: 20px 0; }

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
                background-color: #2349EC !important; }
            .btn-primary a:hover {
                background-color: #2349EC !important;
                border-color: #2349EC !important; } }

    </style>
</head>
<body class="">
<table border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper status-email">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <img class="" src="{{ asset('img/email/bluesmart-logo.png') }}" style="border:none;-ms-interpolation-mode:bicubic;max-width:100%;"/>
                                        <img class="header" src="{{ asset('img/email/hero-2.png') }}" />
                                        {{--<h1>You’ll be one  of the first to find out</h1>--}}
                                        <img class="mail-title" src="{{ asset('img/email/title-mail-2.png') }}" />
                                        <p>All done! You're now ready to start sharing your personalized link with your friends and family via email, Facebook and, Twitter.</p>
                                        <a href="{{ route('user.status', [ $secret ]) }}" target="_blank">{{ route('user.status', [ $secret ]) }}</a>
                                        <p>Remember, the more people that sign up using your link, the more special, limited edition gifts you’ll get. </p>
                                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                                            <tbody>
                                            <tr>
                                                <td align="center">
                                                    <table border="0" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('user.status', [ $secret ]) }}" target="_blank">
                                                                    Check on your referral status
                                                                    <img class="arrow" src="{{ asset('img/email/arrow-white.png') }}" />
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
                <div class="footer">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block">
                                <p>Copyright© {{ date('Y') }} Bluesmart. All rights reserved.</p><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
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
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>
