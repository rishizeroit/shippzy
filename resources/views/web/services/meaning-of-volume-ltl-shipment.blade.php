@extends('web.app.layout')
@section('title', 'Shipzzy')
@section('content')

<!-- Main -->
<main class="main" role="main">

    <!-- Intro -->
    <div class="intro" style="background:url({{base_url('web/images/about-media.jpg')}}) no-repeat 0 0; height: 380px; min-height: 380px;">
        <div class="wrap">
            <div class="textwidget">
                <div class="txt-about">Meaning of Volume LTL shipment</div>
                <a href="#" class="get-free-quotes-btn">Get Free Quotes</a>
            </div>
        </div>
    </div>
    <!-- //Intro -->



    <div class="wrap">
        <div class="row">
            <!--- Content -->
            <div class="content three-fourth textongrey mrg-top-40">
                <h2>Meaning of Volume LTL shipment</h2>
                <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text
                    by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                
                <h2>What are the benefits (and limitations) of Volume LTL for shippers?</h2>
                <ul>
                    <li><strong>It’s cheaper (obviously).</strong>  Moving larger LTL shipments via Volume LTL is usually less expensive than traditional LTL or full truckload. Why? Efficiency is the key to operating intricate LTL networks.&nbsp;</li>
                    <li><strong>It’s safer.</strong> Volume LTL shipments often stay on the same trailer from pick-up to delivery. Since freight is not usually handled as much as standard LTL during transit, it can reduce the likelihood of damaged product.</li>
                    <li><strong>It adds capacity.</strong> By leveraging LTL carriers’ empty backhauls, shippers are in effect tapping into a different capacity pool.</li>
                    <li><strong>It can be slower.</strong> As discussed above, precise planning for larger LTL shipments can be tricky.&nbsp;</li>
                </ul>
                
                <h2>What is Volume LTL?</h2>
                <ul>
                    <li>Volume LTL is method of shipping that leverages under-utilized trailer space in a less than truckload (LTL) carrier’s network. It’s ideal for shipments that have too many pallets for standard LTL shipping, but not quite enough to require a full truck.</li>
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
