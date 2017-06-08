@extends('layouts.master')

@section('body-class', 'user-status')

@section('content')

	@include('layouts._navigation-thanks')

	@include('flash::message')

	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-2 col-sm-8 col-xs-12 main-container">
					<h2>You’re now on our exclusive guest list.</h2>
					<h1>Invite your friends<br>
						& earn special rewards</h1>
					<div class="row">
						<div class="col-xs-12">
							<p class="center description">Share your personalized link below via email, Facebook or, Twitter with your friends to unlock
								some special, limited edition gifts. The more you share, the more perks you get...it’s that simple!</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p class="center">
								<span class="linktext">{{ $user->referral_url }}</span>
							</p>
							<p class="center copy">
								<span>Or share via a public link</span>
								<button id="copy-button" data-clipboard-text="{{ $user->referral_url }}" title="Click to copy" class="btn btn-link">Copy to clipboard</button>
								<span style="display:none;" id="copy-confirmation"><br/>Copied!</span>
							</p>
						</div>	
					</div>

					<div class="row">
						<div class="col-xs-12">
							<div class="social">
								<div class="fb-share-button" data-href="{{ $user->referral_url }}" data-layout="button"></div>

								<span class="separator">&nbsp;|&nbsp;</span>

								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ $user->referral_url }}" data-text="Can't wait for @Bluesmart to launch. My workouts are about to go to the next level!" data-via="Bluesmart" data-size="medium" data-count="none">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>	
							</div>	
						</div>	
							
					</div>
				</div>
			</div>
		</div>
	</header>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="center">Unlock your exclusive gifts by referring friends</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="{{ $referral_count + 1 }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $progress_percent }}%">
							<span class="sr-only"></span>
						</div>
					</div>
				</div>
			</div>

			<div class="row referrals">
				<div class="col-xs-2 col-xs-offset-3">
					<div class="reward-level">
						<img src="{{ asset('img/0friends.png') }}" /><span>You</span>
					</div>
				</div>
				<div class="col-xs-2">
					<div class="reward-level {{ $referral_count >= 1 ? '' : 'dimmed' }}">
						<img class="" src="{{ asset('img/1friend.png') }}" /><span>1</span>
					</div>
				</div>
				<div class="col-xs-2">
					<div class="reward-level {{ $referral_count >= 2 ? '' : 'dimmed' }}">
						<img class="" src="{{ asset('img/2friends.png') }}" /><span>2</span>
					</div>
				</div>	
				<div class="col-xs-2">
					<div class="reward-level {{ $referral_count >= 3 ? '' : 'dimmed' }}">
						<img class="" src="{{ asset('img/3friends.png') }}" /><span>3+</span>
					</div>
				</div>	
			</div>

			<div class="row rewards">
				<div class="col-xs-2 col-xs-offset-1"><span class="axis">Reward</span></div>
				<div class="col-xs-2 offset-left"><span>{{ $rewards[0]->title }}<span></div>
				<div class="col-xs-2 offset-left"><span>{{ $rewards[1]->title }}</span></div>
				<div class="col-xs-2">&nbsp;</div>
				<div class="col-xs-2 offset-left"><span>{{ $rewards[2]->title }}</span></div>	
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p class="center referral-count">
						<span class="number">{{ $referral_count == 0 ? 'No' : $referral_count }}</span>
						{{ $referral_count == 1 ? ' friend has' : 'friends have' }} joined{{ $referral_count == 0 ? '...Yet!' : '!' }}
					</p>
					<p class="center text-muted">
						@if ($user->valid_email)
							Keep checking
						@else
						You must verify your email to receive rewards.  <a class="resend" href="{{ route('auth.confirm.resend', $user->confirmation_code) }}">Resend confirmation request</a>
						@endif
					</p>
				</div>	
			</div>	
		</div>	
	</section>

	@if ($referral_count > 0)
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p class="center referral-count">
						Claimed referrals:
					</p>	
					@foreach($referrals as $referral)
					<p class="center text-muted">
						{{ $referral->email }}	
					</p>
					@endforeach
				</div>
			</div>	
		</div>	
	</section>
	@endif
@stop
