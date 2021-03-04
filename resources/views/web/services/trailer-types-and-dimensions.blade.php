@extends('web.app.layout')
@section('title', 'Shipzzy')
@section('content')
<!-- Main -->
<main class="main" role="main">

    <!-- Intro -->
    <div class="intro" style="background:url({{base_url('web/images/about-media.jpg')}}) no-repeat 0 0; height: 380px; min-height: 380px;">
        <div class="wrap">
            <div class="textwidget">
                <div class="txt-about">Trailer types and dimensions</div>
                <a href="#" class="get-free-quotes-btn">Get Free Quotes</a>
            </div>
        </div>
    </div>
    <!-- //Intro -->



    <div class="wrap">
        <div class="row">
            <!--- Content -->
            <div class="content three-fourth textongrey mrg-top-40">
                <h2>Trailer types and dimensions</h2>
                <p>We have a wide variety of trailer types and trailer widths to transport many different types of cargo. Each trailer type is suitable for a specific purpose, for example standard-sized or out-of-gauge cargo.</p>
                
                <h2>Do you have GPS tracking on trailers?</h2>
                <p>Whether we use reefer trailers, mega trailers or curtain trailers we can always keep track of your cargo. We have installed GPS (Global Positioning System) devices on trailers in our fleet. This enables us to keep an overview of your cargo everywhere it goes. It also helps protect your cargo against theft.</p>
                
                
                <h2>Trailer sizes and dimensions for our trailer types</h2>
                <p>Click on the links below to see illustrations of our different trailers and their sizes and dimensions. The dimensions, sizes, and capacity of the various trailers of our fleet vary depending on manufacturer and production year.</p>
                
	 <h2>What is Ultra-seal?</h2>
                <p>DSV injects Ultra-seal into all trailer tires to prevent punctures. This both improves road safety and increases the punctuality of our deliveries as a result.</p>
                <p>Because Ultra-seal also helps to maintain the correct tire pressure, tire wear is minimized and fuel consumption is reduced, so the environmental impact of the transportation is kept to a minimum.</p>

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
@endsection
