@extends('web.app.layout')
@section('title', 'Shipzzy')
@section('content')
	<!-- Main -->
	<main class="main no-padding" role="main">

		<!-- start:header -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Contact us</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="index.html" title="Home">Home</a></li>
							<li>Contact us</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!--end:header -->


		<div class="wrap">

			<div class="row">
				<!--- Content -->
				<div class="content textongrey" style="text-align: center;">
					<h2 class="page-heading">Get in touch</h2>					
					<h3>Call us at +1-234-567-89 (1234) or drop us a message</h3><br><br>
				</div>
				<!--- //Content -->
			</div>	
			<div class="alert alert-danger print-error-msg" style="display:none">
				<ul></ul> 
			</div>
			<div class="alert alert-danger success" style="display:none">
				<p></p> 
			</div>
			<div class="row">
				<div class="one-half">

					<form method="post" id="contactForm" action="{{route('contact.us')}}" name="contactform">
						@csrf
						@method('post')
						<div id="message"></div>
						<div class="f-row">
							<div class="one-half">
								<label for="name">Name and surname</label>
								<input type="text" name="name" id="name">
							</div>
							<div class="one-half">
								<label for="phone">Phone</label>
								<input type="text" name="phone" id="phone">
							</div>
						</div>
						<div class="f-row">
							<div class="full-width">
							<label for="email">Email address</label>
								<input type="email" name="email" id="email">
							</div>
						</div>
						<div class="f-row">
							<div class="full-width">
								<label for="comments">Message</label>
								<textarea id="comments"></textarea>
							</div>
						</div>
						<div class="f-row">
							<button type="submit" name="submit" class="btn color medium right">Submit</button>
						</div>
					</form>

				</div>

				<div class="one-half">
					<div class="off-widget clearfix">						
						<h4>OFFICES</h4>
						<div class="lft-wid">
							Portland, OR (HQ)<br>
							225 SW Broadway<br>
							Suite 600<br>
							Portland, OR 97205
						</div>
						<div class="rig-wid">
							Detroit, MI<br>
							11101 Metro Airport Center Drive<br>
							Building M2, Suite 110<br>
							Romulus, MI 48174
						</div>
					</div>
				</div>
			</div>

		</div>






		
				
		<!-- Call to action -->
		<div class="color-blue cta">
			<div class="wrap">
				<p class="wow fadeInLeft">Get your Shipping quote</p>
					<form class="frm-pick-order wow fadeInRight">
						<input type="text" name="" value="Pick up your order">
						<button type="button">Start Quote</button>
					</form>
			</div>
		</div>
		<!-- //Call to action -->
	</main>
	<!-- //Main -->
@endsection
@push('scripts')
<script src="{{base_url('js/front/customer.js')}}"></script>
@endpush