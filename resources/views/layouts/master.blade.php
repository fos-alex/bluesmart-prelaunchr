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
	<meta property="og:image" content="{{ asset('img/mwf-og-image2.jpg') }}" />
	<meta property="og:title" content="Changing the way you travel" />
	<meta property="og:description" content="Something New is Coming from @bluesmartlabs! Sign up at bluesmart.com to be one of the first to find out. #travelsmarter" />
	<meta property="og:site_name" content="Bluesmart"/>
	<meta property="og:type" content="website"/>

    <meta name="twitter:card" content="summary" >
    <meta name="twitter:domain" content="Bluesmart.com" >
    <meta name="twitter:site" content="@Bluesmart" >
    <meta name="twitter:site:id" content="166676493">
    <meta name="twitter:creator" content="@Bluesmart" >
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
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-55882147-6', 'auto');
		  ga('send', 'pageview');

		</script>
	@endif

</head>

<body class="@yield('body-class')">

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


