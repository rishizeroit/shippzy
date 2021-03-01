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


			<div class="row">


				<div class="one-half">

					<form method="post" action="contact_form_message.php" name="contactform" id="contactform">
						<div id="message"></div>
						<div class="f-row">
							<div class="one-half">
								<label for="name">Name and surname</label>
								<input type="text" id="name">
							</div>
							<div class="one-half">
								<label for="email">Email address</label>
								<input type="email" id="email">
							</div>
						</div>
						<div class="f-row">
							<div class="full-width">
								<label for="comments">Message</label>
								<textarea id="comments"></textarea>
							</div>
						</div>
						<div class="f-row">
							<input type="submit" value="Submit" id="submit" name="submit" class="btn color medium right">
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
