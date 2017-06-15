<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Bluesmart"/>
    <meta name="author" content="Bluesmart">

    <title>Bluesmart | Traveling makes you smarter</title>

	@yield('og')
	<meta property="og:image" content="{{ asset('share/facebook.jpg') }}" />
	<meta property="og:title" content="Changing the way you travel" />
	<meta property="og:description" content="Something New is Coming from @bluesmartlabs! Sign up at bluesmart.com to be one of the first to find out. #travelsmarter" />
	<meta property="og:site_name" content="bluesmartlabs"/>
	<meta property="og:type" content="website"/>

    <meta name="twitter:card" content="summary" >
    <meta name="twitter:domain" content="bluesmart.com" >
    <meta name="twitter:site" content="@bluesmart" >
    <meta name="twitter:site:id" content="2299103580">
    <meta name="twitter:creator" content="@bluesmart" >
    <meta name="twitter:image" content="{{ asset('share/twitter.jpg') }}" >
    <meta name="twitter:title" content="Changing the way you travel" >
    <meta name="twitter:description" content="Something New is Coming from @bluesmart! Sign up at bluesmart.com to be one of the first to find out. #travelsmarter" >

    <link href="{{ elixir_cachebust('css/app.css') }}" rel="stylesheet">

	<link rel="SHORTCUT ICON" HREF="{{ asset('img/favicon.png') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	@if (app()->env == 'production')
    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-M278PC');</script>
        <!-- End Google Tag Manager -->
	@endif

</head>

<body class="@yield('body-class')">
    @if (app()->env == 'production')
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M278PC"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->​
    @endif

	@include('layouts._facebook')

	@yield('content')

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.js"></script>

	<script type="text/javascript">
		$(function() {
			window.ZCPath = "{{ asset('ZeroClipboard.swf') }}";
		});
	</script>

    <script src="{{ elixir_cachebust('js/all.js') }}"></script>


</body>

</html>


