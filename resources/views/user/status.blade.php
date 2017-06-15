@extends('layouts.master')

@section('body-class', 'user-status')

@section('content')

	@include('layouts._navigation-thanks')

	@include('flash::message')

	<header>
		<video id="home-video" preload="none" autoplay="autoplay" loop="loop">
			<source src="{{ asset('img/video.mp4') }}" width="1000" height="1000" type="video/mp4" />
		</video>
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
						<div class="col-xs-12 no-gutter-mobile">
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
		<div class="row">
			<div class="col-sm-12 col-xs-3 col-xs-offset-1  col-sm-offset-0">
				<div class="row referrals">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="row referrals-container">
							<div class="col-sm-2 text-center">
								<div class="reward-level {{ $referral_count >= $rewards[0]->num_referrals ? '' : 'dimmed' }}">
									<img class="" src="{{ asset('img/0friends.svg') }}" />
									<div class="blue-dot"></div>
								</div>
							</div>
							<div class="col-sm-2 text-center">
								<div class="reward-level {{ $referral_count >= $rewards[1]->num_referrals ? '' : 'dimmed' }}">
									<img class="" src="{{ asset('img/1friend.svg') }}" />
									<div class="blue-dot"></div>
								</div>
							</div>
							<div class="col-sm-2 text-center">
								<div class="reward-level {{ $referral_count >= $rewards[2]->num_referrals ? '' : 'dimmed' }}">
									<img class="" src="{{ asset('img/2friends.svg') }}" />
									<div class="blue-dot"></div>
								</div>
							</div>
							<div class="col-sm-2 text-center">
								<div class="reward-level {{ $referral_count >= $rewards[3]->num_referrals ? '' : 'dimmed' }}">
									<img class="" src="{{ asset('img/3friends.svg') }}" />
									<div class="blue-dot"></div>
								</div>
							</div>
							<div class="col-sm-2 text-center">
								<div class="reward-level {{ $referral_count >= $rewards[4]->num_referrals ? '' : 'dimmed' }}">
									<img class="" src="{{ asset('img/4friends.svg') }}" />
									<div class="blue-dot"></div>
								</div>
							</div>
							<div class="col-sm-2 text-center">
								<div class="reward-level {{ $referral_count >= $rewards[5]->num_referrals ? '' : 'dimmed' }}">
									<img class="" src="{{ asset('img/5friends.svg') }}" />
									<div class="blue-dot"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-xs-3">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="{{ $referral_count + 1 }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $progress_percent }}%">
								<span class="sr-only"></span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-xs-4">
				<div class="row rewards">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="row rewards-container">
							<div class="col-sm-2 text-center">
								<span>Bluesmart <br><strong>{{ $rewards[0]->title }}</strong></span>
								<p class="referral-bound"><strong>{{ $rewards[0]->num_referrals }}</strong></strong> friends</p>
							</div>
							<div class="col-sm-2 text-center">
								<span>Bluesmart <br><strong>{{ $rewards[1]->title }}</strong></span>
								<p class="referral-bound"><strong>{{ $rewards[1]->num_referrals }}</strong></strong> friends</p>
							</div>
							<div class="col-sm-2 text-center">
								<span>Bluesmart credit <br><strong>{{ $rewards[2]->title }}</strong></span>
								<p class="referral-bound"><strong>{{ $rewards[2]->num_referrals }}</strong></strong> friends</p>
							</div>
							<div class="col-sm-2 text-center">
								<span>Bluesmart credit <strong>{{ $rewards[3]->title }}</strong></span>
								<p class="referral-bound"><strong>{{ $rewards[3]->num_referrals }}</strong></strong> friends</p>
							</div>
							<div class="col-sm-2 text-center">
								<span>Bluesmart credit <strong>{{ $rewards[4]->title }}</strong></span>
								<p class="referral-bound"><strong>{{ $rewards[4]->num_referrals }}</strong></strong> friends</p>
							</div>
							<div class="col-sm-2 text-center">
								<span>Bluesmart credit <strong>{{ $rewards[5]->title }}</strong></span>
								<p class="referral-bound"><strong>{{ $rewards[5]->num_referrals }}</strong></strong> friends</p>
							</div>
						</div>
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
					<a class="terms" href="#terms" rel="modal:open">Terms & Conditions</a>
					<form id="terms" class="modal" style="display: none;">
						<br>
						<h3>Terms & Conditions:</h3><br><br>
						<strong>PRIVACY POLICY</strong><br>
						Bluesmart, Inc. considers the privacy and security of user information an important component of the services offered at its website, www.bluesmart.com (the Site). The following information explains how Bluesmart collects and uses information obtained from users in connection with services available at the Site (taken together, the Service).<br>
						<br><br><strong>Information Collected.</strong><br>
						At your election, you may request additional information about Bluesmart. When you do so, you may need to submit certain information or data to Bluesmart, for example, your contact information (collectively, User Data).<br>
						When you visit the Site, web servers collect "traffic data" (such as, for example, time and date, the address of the website from which you entered the Site) about your visit, which is stored as anonymous, aggregate data. Collecting such data may entail the use of IP addresses or other numeric codes used to identify a computer.<br>
						<br><br><strong>Use of Information.</strong><br>
						Bluesmart uses User Data to respond to your inquiries for additional information.<br>
						Bluesmart uses "traffic data" to help diagnose problems with its server, analyze trends and administer the Site. Your IP address is not linked to personally identifiable information, but is used to gather broad demographic data and to monitor statistics to improve the Site and Service.<br>

						<br><br><strong>Sharing of Information.</strong><br>
						Currently, Bluesmart will not share personally identifiable information with any third party for commercial purposes. Bluesmart may, however, disclose personally identifiable data if (1) reasonably necessary to perform the Service, (2) authorized by you, (3) otherwise permitted under this Privacy Policy or (4) Bluesmart is required to do so by law or regulation, or in the good faith belief that such action is necessary to (i) conform or comply with applicable laws, regulations or legal process, (ii) protect or defend the rights or property of Bluesmart or any other user or (iii) enforce the Terms of Use.<br>
						Bluesmart may transfer personally identifiable information to any successor to all or substantially all of its business or assets that concern the Service.<br>

						<br><br><strong>Security.</strong><br>
						Information collected by Bluesmart is stored in secure operating environments that are not made generally available to the public. Unfortunately, no data transmission over the Internet can be guaranteed to be 100% secure. As a result, Bluesmart cannot ensure the security of any information you provide, and you do so at your own risk. Once Bluesmart receives your transmission, it will make reasonable efforts to ensure its security on its systems.<br>

						<br><br><strong>Third Party Sites.</strong><br>
						The Site may permit you to link to other websites on the Internet, and other websites may contain links to the Site. These other websites are not under Bluesmart control. The privacy and security practices of websites linked to or from the Site are not covered by this Privacy Policy, and Bluesmart is not responsible for the privacy or security practices or the content of such websites.<br>

						<br><br><strong>IP Addresses and Cookies.</strong><br>
						Bluesmart  may use your IP address to help diagnose problems with its server, and to administer the Site. Your IP address is used to help identify you and to gather broad demographic information. IP addresses are also used to provide an audit trail in the case of any attempted illegal or unauthorized use of the Site.<br>
						"Cookies" are pieces of information that a website transfers to your computer's hard disk for record-keeping purposes. Cookies in and of themselves do not personally identify users, although they do identify a user's computer. You may be able to set your web browser to refuse cookies.<br>

						<br><br><strong>Claiming Referral Items</strong><br>
						You will only be eligible to claim the Bluesmart Tee and/or Bluesmart Hoodie based on the number of people you have referred, after purchasing any of our Bluesmart products.<br>

						<br><br><strong>Opt-Out.</strong><br>
						If you change your mind about Bluesmart use of User Data volunteered by you, you may Bluesmart send an email to support@bluesmart.com with your electronic mail address.<br>

						<br><br><strong>Changes.</strong><br>
						Bluesmart reserves the right to change or update this Privacy Policy at any time by posting a notice at the Site. Information collected by the Service is subject to the Privacy Policy in effect at the time of use.<br>

						<br><br><strong>Contact.</strong><br>
						If you have any questions regarding this Privacy Policy or your dealings at this Site, please contact Bluesmart at support@bluesmart.com.<br>

						<br><br><h5><strong>TERMS OF USE</strong></h5>

						<strong>Acceptance of Terms.</strong><br>
						The following terms and conditions govern all use of the www.bluesmart.com website (the Site). The Site is offered subject to acceptance without modification of any of the terms and conditions contained herein or all other operating rules, policies and procedures that may be published from time to time on this Site by Bluesmart, Inc. (collectively, the Terms of Use).<br>
						If you do not agree to all of these Terms OF USE, then do not access or use the SITE. BY VIEWING THE SITE, YOU AGREE TO BE BOUND BY ALL OF THESE TERMS OF USE.<br>

						<br><br><strong>Changes.</strong><br>
						Bluesmart reserves the right, at its sole discretion, to modify or replace any of these Terms of Use at any time. It is your responsibility to check the Terms of Use periodically for changes. Your continued use of the Site following the posting of any changes to the Terms of Use constitutes acceptance of those changes.<br>

						<br><br><strong>Information and Privacy.</strong><br>
						At your election, you may request (and Bluesmart may provide) additional information about Bluesmart (the Service). When you do so, you may need to submit certain information or data to Bluesmart, for example, your email address. Bluesmart current privacy policy is available at http://prelaunch.bluesmart.com/privacy-policy (the Privacy Policy), which is incorporated by this reference. Bluesmart will not edit, delete or disclose the contents of your data in connection with the Service unless (1) reasonably necessary to perform the Service, (2) authorized by you, (3) otherwise permitted under the Privacy Policy or (4) Bluesmart is required to do so by law or regulation, or in the good faith belief that such action is necessary to (i) conform or comply with applicable laws, regulations or legal process, (ii) protect or defend the rights or property of Bluesmart or any other user or (iii) enforce these Terms of Use. Bluesmart may terminate your access to all or any part of the Service at any time, with or without cause, with or without notice, effective immediately.<br>

						<br><br><strong>Rules and Conduct.</strong><br>
						As a condition of use, you promise not to use the Site for any purpose that is unlawful or prohibited by these Terms of Use, or any other purpose not reasonably intended by Bluesmart. You agree to abide by all applicable local, state, national and international laws and regulations.<br>

						<br><br><strong>Third Party Sites.</strong><br>
						The Site may permit you to link to other websites on the Internet, and other websites may contain links to the Site. These other websites are not under Bluesmart control, and you acknowledge that Bluesmart is not responsible for the accuracy, legality, appropriateness or any other aspect of the content or function of such websites. The inclusion of any such link does not imply endorsement by Bluesmart or any association with its operators.<br>

						<br><br><strong>Proprietary Rights.</strong><br>
						You agree that all content and materials delivered via the Site and the Service or otherwise made available by Bluesmart at the Site are protected by copyrights, trademarks, service marks, patents, trade secrets or other proprietary rights and laws. Except as expressly authorized by Bluesmart in writing, you agree not to sell, license, rent, modify, distribute, copy, reproduce, transmit, publicly display, publicly perform, publish, adapt, edit or create derivative works from such materials or content. However, you may print or download a reasonable number of copies of the materials or content at this Site for your internal business purposes; provided, that you retain all copyright and other proprietary notices contained therein.<br>

						<br><br><strong>No Warranties.</strong><br>
						THE SITE AND ALL MATERIALS, INFORMATION, SOFTWARE, PRODUCTS AND SERVICES INCLUDED IN OR AVAILABLE THROUGH THE SITE (THE CONTENT) ARE PROVIDED "AS IS" AND "AS AVAILABLE". THE SITE, SERVICE AND CONTENT ARE PROVIDED WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF TITLE, NON-INFRINGEMENT, MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE, AND ANY WARRANTIES IMPLIED BY ANY COURSE OF PERFORMANCE OR USAGE OF TRADE, ALL OF WHICH ARE EXPRESSLY DISCLAIMED. Bluesmart, AND ITS AFFILIATES, LICENSORS AND SUPPLIERS DO NOT WARRANT THAT: (1) THE CONTENT IS TIMELY, ACCURATE, COMPLETE, RELIABLE OR CORRECT; (2) THE SITE WILL BE SECURE OR AVAILABLE AT ANY PARTICULAR TIME OR LOCATION; (3) ANY DEFECTS OR ERRORS WILL BE CORRECTED; (4) THE CONTENT IS FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS; OR (5) THE RESULTS OF USING THE SITE OR SERVICE WILL MEET YOUR REQUIREMENTS. YOUR USE OF THE SITE AND/OR SERVICE IS SOLELY AT YOUR OWN RISK.<br>

						<br><br><strong>Limitation of Liability.</strong><br>
						IN NO EVENT SHALL Bluesmart (OR ITS AFFILIATES, LICENSORS AND SUPPLIERS) BE LIABLE CONCERNING THE SUBJECT MATTER OF thESE TERMS OF USE, regardless of the form of any claim or action (whether in CONTRACT, NEGLIGENCE, STRICT LIABILITY OR OTHERwise), for any (1) MATTER BEYOND ITS REASONABLE CONTROL, (2) LOSS OR INACCURACY of data, loss or interruption OF USE, OR COST OF PROCURING SUBSTITUTE TECHNOLOGY, GOODS or SERVICES, OR (3) DIRECT OR INDIRECT, PUNITIVE, INCIDENTAL, RELIANCE, SPECIAL, EXEMPLARY OR CONSEQUENTIAL DAMAGES INCLUDING, BUT NOT LIMITED TO, LOSS OF BUSINESS, REVENUES, PROFITS OR GOODWILL, EVEN IF Bluesmart HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. THESE LIMITATIONS ARE INDEPENDENT FROM ALL OTHER PROVISIONS OF THIS AGREEMENT AND SHALL APPLY NOTWITHSTANDING THE FAILURE OF ANY REMEDY PROVIDED HEREIN.<br>

						<br><br><strong>Miscellaneous.</strong><br>
						These Terms of Use shall be governed by and construed in accordance with the laws of the State of New York, excluding its conflicts of law rules, and the United States of America. If any provision of the Terms of Use is found to be unenforceable or invalid, that provision will be limited or eliminated to the minimum extent necessary so that the Terms of Use will otherwise remain in full force and effect and enforceable. Bluesmart may assign, transfer or delegate any of its rights and obligations hereunder without consent. All waivers and modifications must be in a writing signed by Bluesmart, except as otherwise provided herein. No agency, partnership, joint venture, or employment relationship is created as a result of these Terms of Use, and neither party has any authority of any kind to bind the other in any respect.<br>

						<br><br><strong>Copyright and Trademark Notices.</strong><br>
						Unless otherwise indicated, these Terms of Use and all Content provided by Bluesmart are copyright © 2013 Bluesmart, Inc. All rights reserved.
						Bluesmart and the Bluesmart logo are trademarks of Bluesmart, Inc.<br>

						<br><br><strong>Contact.</strong><br>
						You may contact Bluesmart at support@bluesmart.com.<br>
					</form>
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
