<nav class="navbar navbar-default navbar-fixed-top">
	@include('flash::message')
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<a class="navbar-brand" href="{{ route('user.create') }}"><img src="{{ asset('img/Bluesmartlogo.png') }}" alt="Bluesmart" /></a>
			</div>
			<div class="col-sm-6 text-right hashtag-container">
				<span class="hashtag">#Travelsmarter</span>
			</div>
		</div>
	</div>
</nav>