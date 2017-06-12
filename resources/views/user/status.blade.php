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
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ $user->referral_url }}" data-text="Can't wait for @Bluesmart to launch." data-via="Bluesmart" data-size="medium" data-count="none">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<div class="scroll-container">
								<img class="scroll-icon" src="{{ asset('img/flecha.svg') }}"/>
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

			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<p class="center referral-count">
							<span class="number">{{ $referral_count == 0 ? 'No' : 'Friends referred:' . $referral_count }}</span>
							{{ $referral_count == 1 ? ' friend has' : 'friends have' }} joined{{ $referral_count == 0 ? '...Yet!' : '!' }}
						</p>
						{{--					@foreach($referrals as $referral)
                                            <p class="center text-muted">
                                                {{ $referral->email }}
                                            </p>
                                            @endforeach--}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container">
		<div class="row referrals">
			<div class="col-xs-8 col-xs-offset-2">
				<div class="row referrals-container">
					<div class="col-xs-2 text-center">
						<div class="reward-level {{ $referral_count >= $rewards[0]->num_referrals ? '' : 'dimmed' }}">
							<img class="" src="{{ asset('img/0friends.svg') }}" />
							<div class="blue-dot"></div>
						</div>
					</div>
					<div class="col-xs-2 text-center">
						<div class="reward-level {{ $referral_count >= $rewards[1]->num_referrals ? '' : 'dimmed' }}">
							<img class="" src="{{ asset('img/1friend.svg') }}" />
							<div class="blue-dot"></div>
						</div>
					</div>
					<div class="col-xs-2 text-center">
						<div class="reward-level {{ $referral_count >= $rewards[2]->num_referrals ? '' : 'dimmed' }}">
							<img class="" src="{{ asset('img/2friends.svg') }}" />
							<div class="blue-dot"></div>
						</div>
					</div>
					<div class="col-xs-2 text-center">
						<div class="reward-level {{ $referral_count >= $rewards[3]->num_referrals ? '' : 'dimmed' }}">
							<img class="" src="{{ asset('img/3friends.svg') }}" />
							<div class="blue-dot"></div>
						</div>
					</div>
					<div class="col-xs-2 text-center">
						<div class="reward-level {{ $referral_count >= $rewards[4]->num_referrals ? '' : 'dimmed' }}">
							<img class="" src="{{ asset('img/4friends.svg') }}" />
							<div class="blue-dot"></div>
						</div>
					</div>
					<div class="col-xs-2 text-center">
						<div class="reward-level {{ $referral_count >= $rewards[5]->num_referrals ? '' : 'dimmed' }}">
							<img class="" src="{{ asset('img/5friends.svg') }}" />
							<div class="blue-dot"></div>
						</div>
					</div>
				</div>
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

		<div class="row rewards">
			<div class="col-xs-8 col-xs-offset-2">
				<div class="row rewards-container">
					<div class="col-xs-2 text-center">
							<span>Bluesmart <br><strong>{{ $rewards[0]->title }}</strong></span>
							<p class="referral-bound"><strong>{{ $rewards[0]->num_referrals }}</strong></strong> friends</p>
					</div>
					<div class="col-xs-2 text-center">
						<span>Bluesmart <br><strong>{{ $rewards[1]->title }}</strong></span>
						<p class="referral-bound"><strong>{{ $rewards[1]->num_referrals }}</strong></strong> friends</p>
					</div>
					<div class="col-xs-2 text-center">
						<span>Bluesmart <br><strong>{{ $rewards[2]->title }}</strong></span>
						<p class="referral-bound"><strong>{{ $rewards[2]->num_referrals }}</strong></strong> friends</p>
					</div>
					<div class="col-xs-2 text-center">
						<span>Bluesmart credit <strong>{{ $rewards[3]->title }}</strong></span>
						<p class="referral-bound"><strong>{{ $rewards[3]->num_referrals }}</strong></strong> friends</p>
					</div>
					<div class="col-xs-2 text-center">
						<span>Bluesmart credit <strong>{{ $rewards[4]->title }}</strong></span>
						<p class="referral-bound"><strong>{{ $rewards[4]->num_referrals }}</strong></strong> friends</p>
					</div>
					<div class="col-xs-2 text-center">
						<span>Bluesmart credit <strong>{{ $rewards[5]->title }}</strong></span>
						<p class="referral-bound"><strong>{{ $rewards[5]->num_referrals }}</strong></strong> friends</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p class="center text-muted">
						@if (!$user->valid_email)
							You must verify your email to receive rewards.  <a class="resend" href="{{ route('auth.confirm.resend', $user->confirmation_code) }}">Resend confirmation request</a>
						@endif
					</p>
					<p class="center text-muted">
						You can come back to this page anytime to track progress.
					</p>
					<p class="center text-muted no-margin">
						We will announce the winners once we launch. The countdown begins!
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center terms-container">
					<a class="terms" href="#">Terms & Conditions</a>
				</div>
			</div>
		</div>
		<div class="text-center gray-row">
			<div class="container">
				<div class="row">
					<div class="col-12 isologo-container">
						<img class="isologo-icon" src="{{ asset('img/isologo.svg') }}"/>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop
