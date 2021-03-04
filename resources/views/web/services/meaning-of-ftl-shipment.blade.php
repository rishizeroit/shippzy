@extends('web.app.layout')
@section('title', 'Shipzzy')
@section('content')

<!-- Main -->
<main class="main" role="main">

    <!-- Intro -->
    <div class="intro" style="background:url({{base_url('web/images/about-media.jpg')}}) no-repeat 0 0; height: 380px; min-height: 380px;">
        <div class="wrap">
            <div class="textwidget">
                <div class="txt-about">Meaning of FTL shipment</div>
                <a href="#" class="get-free-quotes-btn">Get Free Quotes</a>
            </div>
        </div>
    </div>
    <!-- //Intro -->



    <div class="wrap">
        <div class="row">
            <!--- Content -->
            <div class="content three-fourth textongrey mrg-top-40">
                <h2>Meaning of FTL shipment</h2>
                <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text
                    by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                
                 <h2>Benefits of truckload shipping.</h2>
                <ul>
                    <li><strong>Faster transit times:</strong> Goods that are shipped via full truckload generally arrive at their destination quicker than goods that are shipped via LTL’s hub-and-spoke model.&nbsp;</li>
                    <li><strong>Less chance of damage:</strong> Full truckload shipments are generally less susceptible to damages as they are handled less times than LTL shipments.</li>
                    <li><strong>Rates:</strong> If shipments are large enough to require the entire use of a trailer’s space, it could be more cost effective than booking multiple LTL shipments.</li>
                </ul>
                
                 <h2>Truckload shipping best practices.</h2>
                <ul>
                    <li><strong>Be informed:</strong> Shippers should conduct research to understand the supply and demand of truckload equipment and how it impacts rates.&nbsp;</li>
                    <li><strong>Be consistent:</strong> Shipping the same amount of freight, on a regular schedule, to the same locations, could help you to secure consistent capacity.</li>
                    <li><strong>Be flexible:</strong> Shippers that plan ahead and leave time for their shipments to fit a carrier’s schedule could realize cost savings.</li>
                     <li><strong>Be efficient:</strong> Packaging shipments so they are loaded and unloaded easily will improve efficiency and productivity.</li>
                </ul>
                
                <h2>Types of truckload equipment.</h2>
                <ul>
                    <li><strong>Dry van:</strong> Typically used to move dry goods that are not temperature-sensitive.&nbsp;</li>
                    <li><strong>Flatbed:</strong> This trailer does not have walls and is typically used for shipments that can’t be loaded through trailer doors.</li>
                    <li><strong>Refrigerated:</strong> The equipment used for these shipments keeps freight at your desired temperature.</li>
                </ul>
                
                 <h2>Common truckload shipping questions.</h2>
                <ul>
                    <li><strong>How does full truckload work?</strong> Full truckload is chosen for large shipments that fill an entire trailer, time sensitive freight and when the weight of the goods make it more cost effective than LTL.&nbsp;</li>
                    <li><strong>Why is full truckload faster?</strong> Full truckload freight is sent directly to its destination (vs. routing through a hub system), which results in shorter transit time.</li>
                    <li><strong>What’s the difference between LTL and full truckload?</strong> Freight that does not require the entire space of a truck is known as LTL shipping, whereas full truckload (FTL) shipments take up the space or weight limit of an entire trailer.</li>
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
