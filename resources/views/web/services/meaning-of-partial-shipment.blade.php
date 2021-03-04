@extends('web.app.layout')
@section('title', 'Shipzzy')
@section('content')


<!-- Main -->
<main class="main" role="main">

    <!-- Intro -->
    <div class="intro" style="background:url({{base_url('web/images/about-media.jpg')}}) no-repeat 0 0; height: 380px; min-height: 380px;">
        <div class="wrap">
            <div class="textwidget">
                <div class="txt-about">Meaning of partial shipment</div>
                <a href="#" class="get-free-quotes-btn">Get Free Quotes</a>
            </div>
        </div>
    </div>
    <!-- //Intro -->



    <div class="wrap">
        <div class="row">
            <!--- Content -->
            <div class="content three-fourth textongrey mrg-top-40">
                <h2>Meaning of partial shipment</h2>
                <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text
                    by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    
                    

                <h2>Why do you save money with partial truckloads?</h2>
                    <p>The main reason most shippers choose a partial shipment is because they want to save money. Typically the cost of a partial is slightly higher per foot or pound then a full truckload. For example, let’s say the cost of a full truckload is $1,000.00 and you are going to use 50% of the trailer. So you would likely pay about $600.00. That said, $600 is less cash out of pocket then $1000.&nbsp;</p>
                    
                    
                    <h2>How exactly do you figure out a partial rate?</h2>
                
                    <p>Partial rates like truckload rates and really any transportation rate depend on the supply and demand for equipment in a particular market or shipping lane. To figure out a partial rate, you must first establish the truckload rate. Then break it down to a per linear foot amount. Then add 10% to 20% or so and you are left with your partial rate.&nbsp;</p>
               
                    
                    <h2>Why is a partial rate 10% to 20% more per foot?</h2>
               
                    <p>The reason a partial rate is slightly more is because it increases the carriers cost. They have more stops and wait time to deal with. This can also be explained as you’re paying a little extra for the convenience to you or the inconvenience to them.&nbsp;</p>
               
                
                <h2>How is the service level different for a partial truckload?</h2>
                    <p>A partial truckload is definitely going to come with a different level of service then a full truckload. Partial truckloads generally take more time to deliver, meaning the driver might have spent more time on the pickup or delivery of other loads. Sometimes the driver needs to wait for another load to make the overall routing profitable. Before you book a partial truckload you will want to understand the transit expectation the driver can commit to. Also it is a good idea to understand the other areas the driver will be delivering to and where your freight fits in that order.&nbsp;</p>
               
                
               


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
