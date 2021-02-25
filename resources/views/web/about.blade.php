@extends('web.app.layout')
@section('title', 'about-us')
@section('content')
<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>About us</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="index.html" title="Home">Home</a></li>
							<li>About us</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- //Page info -->
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="content three-fourth textongrey">
					<h2>Our story</h2>
					<p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> 
					<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p> 
					<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p> 
					<h3>Our mission</h3>
					<p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their projects again and again. And if she hasn’t been rewritten, then they are still using her.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> 
					<h3>Our vision</h3>
					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline </p>
				</div>
				<!--- //Content -->
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar right offset">
					<!-- Widget -->
					<div class="widget">
						<h4>Why book with us?</h4>
						<div class="textwidget">
							<h5>Reliable and Safe</h5>
							<p>Lorem ipsum dolor sit amet,  do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
							<h5>No hidden fees</h5>
							<p>Lorem ipsum dolor sit amet,  do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
							<h5>We’re Always Here</h5>
							<p>Lorem ipsum dolor sit amet,  do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
						</div>
					</div>
					<!-- //Widget -->
					
					<!-- Widget -->
					<div class="widget">
						<h4>Advertisment</h4>
						<a href="#"><img src="{{base_url('web/images/advertisment.jpg')}}" alt=""></a>
					</div>
					<!-- //Widget -->
				</aside>
				<!--- //Sidebar -->
			</div>
		</div>
	</main>



<div class="services iconic white">
		<div class="wrap">
			<div class="row">
				<!-- Item -->
				<div class="one-third wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
					<span class="circle"><span class="icon  icon-themeenergy_savings"></span></span>
					<h3>Fixed rates</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
				</div>
				<!-- //Item -->
				
				<!-- Item -->
				<div class="one-third wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
					<span class="circle"><span class="icon icon-themeenergy_lockpad"></span></span>
					<h3>Reliable transfers</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
				</div>
				<!-- //Item -->
				
				<!-- Item -->
				<div class="one-third wow fadeIn" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
					<span class="circle"><span class="icon icon-themeenergy_open-wallet"></span></span>
					<h3>No booking fees</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
				</div>
				<!-- //Item -->
				
				<!-- Item -->
				<div class="one-third wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
					<span class="circle"><span class="icon icon-themeenergy_heart"></span></span>
					<h3>Free cancellation</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
				</div>
				<!-- //Item -->
				
				<!-- Item -->
				<div class="one-third wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
					<span class="circle"><span class="icon icon-themeenergy_magic-trick"></span></span>
					<h3>Booking flexibility</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
				</div>
				<!-- //Item -->
				
				<!-- Item -->
				<div class="one-third wow fadeIn" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
					<span class="circle"><span class="icon icon-themeenergy_call"></span></span>
					<h3>24h customer service</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
				</div>
				<!-- //Item -->
				
				<!-- Item -->
				<div class="one-third wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
					<span class="circle"><span class="icon icon-themeenergy_cup"></span></span>
					<h3>Award winning service</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
				</div>
				<!-- //Item -->
				
				<!-- Item -->
				<div class="one-third wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
					<span class="circle"><span class="icon icon-themeenergy_attach"></span></span>
					<h3>Benefits for partners</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
				</div>
				<!-- //Item -->
				
				<!-- Item -->
				<div class="one-third wow fadeIn" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
					<span class="circle"><span class="icon icon-themeenergy_stars"></span></span>
					<h3>Quality vehicles</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
				</div>
				<!-- //Item -->
			</div>
		</div>
	</div>

   <div class="color cta">
		<div class="wrap">
			<p class="wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">Like what you see? Are you ready to stand out? You know what to do.</p>
			<a href="#" class="btn huge black right wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">Purchase theme</a>
		</div>
	</div>
@endsection