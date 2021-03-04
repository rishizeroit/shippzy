@extends('web.app.layout')
@section('title', 'Shipzzy')
@section('content')

<
<!-- Main -->
<main class="main" role="main">

    <!-- Intro -->
    <div class="intro" style="background:url({{base_url('web/images/about-media.jpg')}}) no-repeat 0 0; height: 380px; min-height: 380px;">
        <div class="wrap">
            <div class="textwidget">
                <div class="txt-about">Meaning of LTL shipment</div>
                <a href="#" class="get-free-quotes-btn">Get Free Quotes</a>
            </div>
        </div>
    </div>
    <!-- //Intro -->



    <div class="wrap">
        <div class="row">
            <!--- Content -->
            <div class="content three-fourth textongrey mrg-top-40">
                <h2>Meaning of LTL shipment</h2>
                <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text
                    by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                <h2>Benefits of LTL shipping.</h2>
                <ul>
                    <li><strong>Reduces costs:</strong> When booking an LTL shipment, you only pay for the portion of the trailer used. The rest of the cost is covered by the other occupants of the trailer’s space.&nbsp;</li>
                    <li><strong>Increases security:</strong> Most LTL shipments are packaged onto <a href="/how-to-ship-freight/pallet-shipping/">pallets</a> before being loaded onto a truck. One well-packaged pallet has a better chance of remaining secure
                        than shipments with multiple smaller handling units.</li>
                    <li><strong>Additional service options:</strong> When shipping via LTL, you gain access to special services like liftgates and inside pickup and delivery.</li>
                    <li><strong>Tracking:</strong> LTL carriers offer tracking capabilities through the <a href="/how-to-ship-freight/bill-of-lading/">bill of lading</a> number, PRO number, PO number, shipment reference number and pick up date range, to name
                        a few.&nbsp;</li>
                </ul>
                <h2>When to choose LTL shipping.</h2>
                <ul>
                    <li>LTL shipping is ideal for businesses who have freight under 15,000 pounds and do not require a full trailer.</li>
                    <li>Consider LTL when looking to maximize cost savings.</li>
                </ul>


		<h2>Factors that determine LTL shipping rates.</h2>
                <ul>
                    <li><strong>Location:</strong> Generally, the further the distance, the higher the price. &nbsp;</li>
                    <li><strong>Dimensions:</strong> The dimensions and weight of the shipment help determine the freight class, which directly impacts rates. </li>
                    <li><strong>Mode:</strong> LTL shipments can be expedited, typically for an additional fee.</li>
                    <li><strong>Type:</strong> A shipment that requires special handling or equipment (perishables, fragile, hazardous items) will likely lead to higher costs. &nbsp;</li>
                </ul>
                
                <h2>Preparing LTL shipments.</h2>
                <ul>
                    <li><strong>Dimensions:</strong> Round up to the next inch when measuring the length, width and height of a shipment. Accurate dimensions are critical for carriers to maximize their capacity and for you to avoid adjustment fees.&nbsp;</li>
                    <li><strong>Documentation:</strong> The bill of lading should be completed as accurately as possible to give to the carriers when they arrive. This document acts as a receipt for the goods that are being shipped.</li>
                    <li><strong>Packaging and labeling:</strong> Load goods onto pallets to condense and protect your shipments. Heavy items should be placed on the bottom of pallets or crates and a label should be placed on the side.</li>
                </ul>
                
                 <h2>Additional LTL shipping services.</h2>
                <ul>
                    <li><strong>Expedited:</strong> When you need goods to arrive at their destination more quickly than the standard transit time, request an expedited freight quote.&nbsp;</li>
                    <li><strong>Liftgate:</strong> Used when freight exceeds 100 pounds and the receiving location does not have a dock for the shipment to be moved directly off the truck.</li>
                    <li><strong>Limited access:</strong> This service is required for deliveries heading to locations that have limited access for carriers, such as construction sites, camps, rural locations, strip malls, etc.</li>
                     <li><strong>Inside pickup and delivery:</strong> If the carrier needs to enter the building to obtain the freight to load or complete a delivery by bringing it indoors, you will need to ask for this service.</li>
                </ul>
                
                <h2>Common LTL shipping questions.</h2>
                <ul>
                    <li><strong>How does LTL work?</strong> LTL shipping essentially operates on a hub and spoke model where local terminals are the spokes and larger central terminals are the hubs or distribution centers.&nbsp;</li>
                    <li><strong>What’s the difference between LTL and FTL?</strong> Freight that does not require the entire space of a truck is known as LTL shipping, whereas full truckload shipments take up the space or weight limit of an entire trailer.</li>
                    <li><strong>Should I ship parcel or LTL?</strong> If you are shipping over 150 pounds, consider LTL. Shipping LTL with a freight service provider means competitive rates and expert advice.</li>
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
@endsection
