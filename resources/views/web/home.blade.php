@extends('web.app.layout')
@section('title', 'Shipzzy')
@section('content')

	<!-- Main -->
	<main class="main" role="main">
		<!-- Intro -->
		<div class="intro">
			<div class="wrap">
				<div class="textwidget">

				<div class="brd-widget">

						<form action="#" class="clearfix">
							<div class="one-third">
							<input type="radio" id="ftl-input" name="transport" value="Full" onclick="window.location='{{url('full-truck-form')}}'">
								<div class="bg-3-step">	  	 
								 	 <img src="{{base_url('web/images/full-truck-load-icon.png')}}">
								 	 <label for="male">Full truck load</label>	 	
								</div>
							</div>


							<div class="one-third">
								 <input type="radio" id="lttl-input" name="transport" value="Less" onclick="window.location='{{url('less-truck-form')}}'">
								<div class="bg-3-step">	  
								   <img src="{{base_url('web/images/less-than-truck-load-icon.png')}}">
								   <label for="female">Less than truck load</label>
								</div>
							</div>


							<div class="one-third">
								 <input type="radio" id="auto-tran-input" name="transport" value="Auto" onclick="window.location='{{url('auto-truck-form')}}'">
									<div class="bg-3-step" id="icon_home">	  
									   <img src="{{base_url('web/images/fright-loading-icons.png')}}">
									   <label for="other">Auto transport</label>
									</div>

							</div>

						 </form>
				</div>
				
		</div>
	</div>
</div>
<!-- //Intro -->
		


		
		<!-- Services iconic -->
		<div class="services iconic white">
			<div class="wrap">
				<div class="row">
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<a href="{{url('ltl-shipment')}}"><span class="circle"><span class="icon fa fa-truck"></span></span></a>
						<h3><a href="{{url('ltl-shipment')}}">Meaning of LTL shipment</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<a href="{{url('ftl-shipment')}}"><span class="circle"><span class="icon fas fa-truck-moving"></span></span></a>
						<h3><a href="{{url('ftl-shipment')}}">Meaning of FTL shipment</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<a href="{{url('volume-shipment')}}"><span class="circle"><span class="icon fas fa-truck-loading"></span></span></a>
						<h3><a href="{{url('volume-shipment')}}">Meaning of Volume LTL shipment</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<a href="{{url('partial-shipment')}}"><span class="circle"><span class="icon icon-themeenergy_heart"></span></span></a>
						<h3><a href="{{url('partial-shipment')}}">Meaning of partial shipment</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<a href="{{url('limited-access')}}"><span class="circle"><span class="icon fal fa-truck-moving"></span></span></a>
						<h3><a href="{{url('limited-access')}}">What is considered Limited Access</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<a href="{{url('freight-class')}}"><span class="circle"><span class="icon far fa-truck-container"></span></span></a>
						<h3><a href="{{url('freight-class')}}">Freight Class for LTL Shipping Explained</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn">
					<a href="{{url('trailer-types')}}"><span class="circle"><span class="icon fas fa-hand-peace"></span></span></a>
						<h3><a href="{{url('trailer-types')}}">Trailer types and dimensions</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<a href="{{url('liftgate')}}"><span class="circle"><span class="icon fad fa-truck-loading"></span></span></a>
						<h3><a href="{{url('liftgate')}}">Liftgate limitation</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<a href="{{url('pallet-skid')}}"><span class="circle"><span class="icon icon-themeenergy_stars"></span></span></a>
						<h3><a href="{{url('pallet-skid')}}">What's the Difference Between a Pallet, Skid and Crate?</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
					</div>
					<!-- //Item -->
				</div>
			</div>
		</div>
		<!-- //Services iconic -->
		
		<!-- Call to action -->
		<div class="black cta">
			<div class="wrap">
				<p class="wow fadeInLeft">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
				
			</div>
		</div>
		<!-- //Call to action -->
		
		<!-- Services -->
		<div class="services boxed white" id="services">
			<!-- Item -->
			<article class="one-third wow fadeIn">
				<figure class="featured-image">
					<img src="{{base_url('web/images/img.jpg')}}" alt="" />
					<div class="overlay">
						<a href="{{url('why-shipzzy')}}" class="expand">Why shipzzy</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="{{url('why-shipzzy')}}">Why shipzzy</a></h4>
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
						<a href="{{url('contact-us')}}" class="expand">Contact us</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="{{url('contact-us')}}">Contact us</a></h4>
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
						<a href="{{url('full-truck-form')}}" class="expand">You have loose items? we still can help</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="{{url('full-truck-form')}}">auto transport</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					<a class="more" title="Read more" href="#">Read more</a>
				</div>
			</article>
			<!-- //Item -->
					
		</div>
		<!-- //Services -->
		
		<!-- Testimonials -->
		<div class="testimonials center black">
			<div class="wrap">
				<h6 class="wow fadeInDown"><i class="fa fa-quote-left"></i> our team support</h6>
				<p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<p class="meta wow fadeInUp">-John Doe</p>
			</div>
		</div>
		<!-- //Testimonials -->
		
		<div class="partners white center">
			<div class="wrap">
				<h2 class="wow fadeIn">Our partners</h2>
				<div class="one-fifth wow fadeIn"><a href="#"><img src="{{base_url('web/images/logo1.jpg')}}" alt="" /></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".2s"><a href="#"><img src="{{base_url('web/images/logo2.jpg')}}" alt="" /></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".4s"><a href="#"><img src="{{base_url('web/images/logo3.jpg')}}" alt="" /></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".6s"><a href="#"><img src="{{base_url('web/images/logo4.jpg')}}" alt="" /></a></div>
				<div class="one-fifth" data-wow-delay=".8s"><a href="#"><img src="{{base_url('web/images/logo5.jpg')}}" alt="" /></a></div>
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
