@extends('layouts.master')

@section('body-class', 'user-create')

@section('og')
	<meta property="og:url" content="{{ homepage_url() }}" />
@stop

@section('content')

	@include('layouts._navigation')

	@include('flash::message')


	<header>
		<div class="container-fluid main-container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
					<h1>Something new is coming</h1>
					<p class="center subtitle">Sign up to be the first to find out and get exclusive perks</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
					@include('user._form')
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="col-xs-10 col-xs-offset-1">
						<p class="center share-text">
							In 2014, we created the world’s first smart carry-on and changed luggage forever.<br>
							You traveled with it, we listened, and now...well, we can’t tell you that just yet.<br>
							Sign up to unlock special prices,be one of the first to find out, and access limited edition gifts for free.
						</p>
					</div>
				</div>
				<div class="col-xs-12 text-center terms-container">
					<a class="terms" href="#">Terms & Conditions</a>
				</div>
			</div>
		</div>
	</header>

@stop
