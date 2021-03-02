@extends('web.app.layout')
@section('title', 'Shipzzy')
@section('content')
	<main class="main" role="main">

		<!-- start:header -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Destinations</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="index.html" title="Home">Home</a></li>
							<li>Why Shipzzy</li>
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
					<h2 class="page-heading">Domestic shipping made simple</h2>					
					<h3>An easier and more transparent platform to move LTL Freight</h3>
					<img src="{{base_url('web/images/domestic-shipping.png')}}">
				</div>
				<!--- //Content -->
			</div>

			<div class="row ship-3-section">
				
				<div class="one-third">
					<h3 class="heading-line">DIGITAL PLATFORM</h3>
					<p>Quote, book, track, and manage all your shipments without picking up the phone or sending an email.</p>
				</div>

				<div class="one-third">
					<h3 class="heading-line">DIGITAL PLATFORM</h3>
					<p>Quote, book, track, and manage all your shipments without picking up the phone or sending an email.</p>
				</div>

				<div class="one-third">
					<h3 class="heading-line">DIGITAL PLATFORM</h3>
					<p>Quote, book, track, and manage all your shipments without picking up the phone or sending an email.</p>
				</div>

			</div>

		</div>



		<div class="container cont-whizz-3" style="background-color: #f1f1f1">

			<div class="row">

				<div class="heading-tag">The price you see is the price you pay</div>
				<div class="line-weight">As long as your weight, dimensions, and ship date remain the same, the price you pay is the price that you were quoted.</div>

				<div class="one-fifth">
					<div class="qut-head">QUOTE</div>
					<p>Koho’s system verifies that the correct freight class is entered for the weight and dimensions of your shipment, and that the addresses entered are correct for your quote.</p>
				</div>

				<div class="one-fifth">
					<div class="qut-head">BOOK</div>
					<p>Koho’s system verifies that the correct freight class is entered for the weight and dimensions of your shipment, and that the addresses entered are correct for your quote.</p>
				</div>

				<div class="one-fifth">
					<div class="qut-head">MANAGE</div>
					<p>Koho’s system verifies that the correct freight class is entered for the weight and dimensions of your shipment, and that the addresses entered are correct for your quote.</p>
				</div>

				<div class="one-fifth">
					<div class="qut-head">TRACK</div>
					<p>Koho’s system verifies that the correct freight class is entered for the weight and dimensions of your shipment, and that the addresses entered are correct for your quote.</p>
				</div>

				<div class="one-fifth">
					<div class="qut-head">INVOICE</div>
					<p>Koho’s system verifies that the correct freight class is entered for the weight and dimensions of your shipment, and that the addresses entered are correct for your quote.</p>
				</div>


			</div>

		</div>		


		<div class="container businesses-txt">

			<div class="row">					
					<div class="built-bg">Built for businesses of all sizes</div>
					<p>Koho was created to provide businesses of all sizes the opportunity to scale with a time-saving, cost-reducing digital freight management platform while not compromising on the dedication and level of service they enjoy in an old-school analog supply chain environment.</p>
					<a href="#">Meet our pros</a>
			</div>

		</div>

		
		<div class="container">
	
		<!-- Services -->
		<div class="services boxed white" id="services">
			<!-- Item -->
			<article class="one-third wow fadeIn">
				<figure class="featured-image">
					<img src="{{base_url('web/images/img.jpg')}}" alt="" />
					<div class="overlay">
						<a href="services.html" class="expand">+</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="services.html">Full truck load</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					<a class="more" title="Read more" href="services.html">Read more</a>
				</div>
			</article>
			<!-- //Item -->
			
			<!-- Item -->
			<article class="one-third wow fadeIn" data-wow-delay=".2s">
				<figure class="featured-image">
					<img src="{{base_url('web/images/img4.jpg')}}" alt="" />
					<div class="overlay">
						<a href="services.html" class="expand">+</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="services.html">less then truck load</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					<a class="more" title="Read more" href="#">Read more</a>
				</div>
			</article>
			<!-- //Item -->
			
			<!-- Item -->
			<article class="one-third wow fadeIn" data-wow-delay=".4s">
				<figure class="featured-image">
					<img src="{{base_url('web/images/img2.jpg')}}" alt="" />
					<div class="overlay">
						<a href="services.html" class="expand">+</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="services.html">auto transport</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					<a class="more" title="Read more" href="#">Read more</a>
				</div>
			</article>
			<!-- //Item -->
					
		</div></div>
		<!-- //Services -->
		
				
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
