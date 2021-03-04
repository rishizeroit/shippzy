@extends('web.app.layout')
@section('title', 'Shipzzy')
@section('content')

<!-- Main -->
<main class="main" role="main">

    <!-- Intro -->
    <div class="intro" style="background:url({{base_url('web/images/about-media.jpg')}}) no-repeat 0 0; height: 380px; min-height: 380px;">
        <div class="wrap">
            <div class="textwidget">
                <div class="txt-about">Liftgate Limitation</div>
                <a href="#" class="get-free-quotes-btn">Get Free Quotes</a>
            </div>
        </div>
    </div>
    <!-- //Intro -->



    <div class="wrap">
        <div class="row">
            <!--- Content -->
            <div class="content three-fourth textongrey mrg-top-40">
                <h2>Liftgate Limitation</h2>
                <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text
                    by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                <h2>What is a Liftgate?</h2>
                <p>Simply put, a liftgate is a lift device installed on the back of a truck, designed to assist the raising and lowering of freight from the back of the truck to the ground, and vice versa. Liftgates are not present on all trucks, so if one is needed, special arrangements must be made before the freight is scheduled to pickup or deliver.</p>
                
                 <h2>Are Liftgates complimentary?</h2>
                <p>Most of the time, liftgates are not complimentary. There are occasional freight carriers that offer the service as part of a FAK, or some other agreement between broker and carrier, but this is not the norm. There are two separate charges for using a liftgate at both pickup and delivery.</p>
                
                 <h2>When are Liftgates needed?</h2>
                <p>Liftgates are most often used in the absence of a shipping dock, or forklift. Because of this, the majority of residential deliveries require a liftgate. There are other instances of liftgate use as well, but generally speaking, residential pickups and deliveries will always require a liftgate. If a liftgate is not employed during residential shipping, the shipper or consignee will most likely be charged additional hand-unloading fees by the freight carrier</p>
                
                   <h2>What are the limitations of a Liftgate?</h2>
                <p>If you do need a liftgate, there are a few parameters you must be aware of. Most liftgates can handle freight that is equal to or less than 96 inches wide, and 48 inches deep. This means that standard-sized pallets can easily be used with a liftgate. The weight limit on a standard liftgate is 2500 lbs. </p>
                
                   <h2>Pallet jacks, forklifts, and other miscellaneous items</h2>
                <p>A pallet jack is used to move the freight from the back of the truck to the liftgate. In rare instances, a pallet jack can also be used to move the freight once it’s been removed from the truck, though there is often an additional charge associated with this action. Forklifts often act as a way to avoid a liftgate if a loading dock is not available. Forklifts are most often used at construction sites and other outside locations where a dock is not feasible. </p>
                
               

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
