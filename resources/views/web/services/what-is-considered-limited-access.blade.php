@extends('web.app.layout')
@section('title', 'Shipzzy')
@section('content')


<!-- Main -->
<main class="main" role="main">

    <!-- Intro -->
    <div class="intro" style="background:url({{base_url('web/images/about-media.jpg')}}) no-repeat 0 0; height: 380px; min-height: 380px;">
        <div class="wrap">
            <div class="textwidget">
                <div class="txt-about">What is considered Limited Access </div>
                <a href="#" class="get-free-quotes-btn">Get Free Quotes</a>
            </div>
        </div>
    </div>
    <!-- //Intro -->



    <div class="wrap">
        <div class="row">
            <!--- Content -->
            <div class="content three-fourth textongrey mrg-top-40">
                <h2>What is considered Limited Access </h2>
                <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text
                    by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                <h2>Limited Access Charges</h2>
                <p>Limited access charges were created to compensate LTL carriers for additional time spent at a shipment’s pick up or delivery locations and constraints that can result from these specific locations. Limited access is defined as meeting any of the following conditions:</p>
                <ul>
                    <li>Not open to the walk-in public during normal business hours&nbsp;</li>
                    <li>Not having personnel readily available to assist with the delivery or pickup function</li>
                    <li>Not having access to loading dock or platform</li>
                    <li>Sites where carriers are delayed with security related inspections and processes prior to freight tender&nbsp;</li>
                    <p>Did you know: Some of these high security locations will ask for a driver’s license and drivers have the right to refuse to do so? This causes the carrier to find a driver who is willing to do so, which in turn causes a domino effect or constraint on the daily operations of that particular terminal.</p>
                    
                    <p>Limited access fees can be assessed on both commercial and non-commercial delivery sites. Charges and what constitutes as a limited access will vary based on carrier, but here are some of the most common examples:</p>
                    <li>Camps, Carnivals, Fairs</li>
			<li>Churches, Mosques, Synagogues, Temples</li>
			<li>Schools (not including colleges and universities)</li>
			<li>Colleges and Universities without a dock</li>
			<li>Medical/Urgent care sites without a dock</li>
			<li>Prisons</li>
			<li>Individual / Mini Storage Units</li>
			<li>Mines, Quarries, Natural Gas or Oil Fields</li>
			<li>Golf Courses, Country Clubs</li>
			<li>Nuclear Power Plants</li>
			<li>Military Bases/Installations</li>
			<li>Parks, Farms and Rural locations</li>
			
		<p>Google Maps is a great tool that can be used to help explain whether or not a location has limited access. However, please keep in mind that even though the location is easy to get in and out of and they may have the necessary equipment to unload they may still be considered limited access. Some great examples of this are as follows:</p>
		<li><strong>Farms:</strong>While they are easy to get to and have equipment, they usually take the driver off his/her usual route which causes delays for the other shipments on the trailer</li>
		<li><strong>Mini Storage Units:</strong>The driver will have to use a smaller trailer with or without a liftgate and thus make fewer deliveries that day because of the space available on the trailer, so the charges are there to compensate for this</li>
		<li>Carriers normally have fewer trailers with liftgates which makes this even more difficult when the volume of limited access or liftgate shipments goes up
</li>
<li><strong>Keep in mind:</strong>Commercial buildings with docks are normally clustered in the same area, a carrier can easily make multiple pickups or deliveries in a business park in the same time it may take to make one limited access delivery.</li>
                </ul>
              
            </div>
            <!--- //Content -->

            <!--- Sidebar -->
            <aside class="one-fourth sidebar right offset">
                <!-- Widget -->
                <div class="widget">
                    <h4>Get Your Shipping Quote</h4>
                    <div class="textwidget">
                        <div class="txt-form">
                            <div class="pickup-frm">
                                <div class="txt-hd">Pickup location</div>
                                <input type="text" name="" placeholder="Zip Code">
                            </div>
                            <div class="pickup-frm-2">
                                <div class="pick-hd">Pickup location type</div>
                                <input type="radio" id="business" name="gender" value="Business"><label for="Business">Business</label><br>
                                <input type="radio" id="Residential" name="gender" value="Residential"><label for="Residential">Residential</label>
                                <button class="btnSQSubmit" data-url="#" id="SQ0">Start Quoting</button>
                            </div>
                        </div>
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

    @include('web.inc.common')
</main>
<!-- //Main -->

@endsection
