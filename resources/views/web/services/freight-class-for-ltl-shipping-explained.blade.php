@extends('web.app.layout')
@section('title', 'Shipzzy')
@section('content')

<!-- Main -->
<main class="main" role="main">

    <!-- Intro -->
    <div class="intro" style="background:url({{base_url('web/images/about-media.jpg')}}) no-repeat 0 0; height: 380px; min-height: 380px;">
        <div class="wrap">
            <div class="textwidget">
                <div class="txt-about">Freight Class for LTL Shipping Explained</div>
                <a href="#" class="get-free-quotes-btn">Get Free Quotes</a>
            </div>
        </div>
    </div>
    <!-- //Intro -->



    <div class="wrap">
        <div class="row">
            <!--- Content -->
            <div class="content three-fourth textongrey mrg-top-40">
                <h2>Freight Class for LTL Shipping Explained</h2>
                <p>Freight Class is an important part of the LTL shipping industry, but one that most new shippers are confused by. What is freight class? How do I find mine? How does the class affect my shipping price?  Read on, my friend!  You’re in the right place.</p>
                
                <h2>What is Freight Class?</h2>
                <p>Let’s begin with the definition. The National Motor Freight Traffic Association (NMFTA) defines a class as a way “to establish a commodity’s transportability.” The National Motor Freight Classification (NMFC) is the standard which enforces this system, grouping commodities into one of 18 classes – ranging from 50 to 500. The NMFC determines this class using four characteristics: <i>Density, Stowability, Handling and Liability.</i></p>
                <ul>
                    <li><strong>Density:</strong> An item’s density is determined by its weight and dimensions. Check out our density calculator to determine your item’s density in pounds per cubic foot. The higher the density, the lower the class and ultimately, the lower the cost. &nbsp;</li>
                    <li><strong>Stowability:</strong> Stowability means how the shipment can be arranged with other freight in the transport vehicle. A good rule of thumb is to think of it as an item’s ability to be “stowed” or transported in relation to other items.</li>
                    <li><strong>Handling:</strong> Handling concerns the item’s ability to be handled as the freight is loaded and unloaded from LTL terminal to LTL terminal. Dimensions, fragility and packaging play a role in how difficult an item is to handle.</li>
                    <li><strong>Liability:</strong> Liability takes into account the probability of the shipment being damaged or stolen, or damaging other adjacent freight – as well as the perishability or possibility of freight theft of the item.&nbsp;</li>
                </ul>
                
                
                <h2>How Freight Class Affects Quote Prices</h2>
                <p>This part is simple — the lower your class, the lower the price. An item that is a class 50 will be cheaper to ship than an item that is class 500.</p>
                
                <h2>Freight Class List and NMFC Code Lookup</h2>
                <p>Different commodities have a different combination of these four factors and this NMFC codes list divides them into 18 classes numbered from 50 to 500.</p>
                
                 <h2>What are NMFC Codes?</h2>
                <p>Each LTL shipping item has an NMFC code associated with it. NMFC codes are similar in concept to PLU codes at a grocery store — every item that could be shipped is assigned a code.  For example, hardwood flooring may be assigned NMFC #37860, whereas corrugated boxes may be assigned NMFC #29250.</p>
                
                <h2>How to Find your Correct Freight Class or NMFC Code</h2>
                <p>We’ve covered what a shipping class is, as well as how it affects the cost of your freight shipping, so let’s finish up with how to find the correct class for your freight. Many carriers and LTL freight brokers offer a freight class calculator that will determine the density and estimated class.</p>
                
                <h2>Freight Class Tips & Tricks</h2>
                <ul>
                    <li>ALWAYS include the NFMC code on the BOL so the carrier can see it.</li>
                    <li>ALWAYS include the freight description on the BOL to the best of your ability. Something labeled “shipping item” is much more likely to be re-classed, as the carrier has no idea what the freight is and therefore no idea what class is correct.</li>
                    <li>Class calculators can give the exact density of a shipment; however, their classes are always estimates.  Not all items have density-based classes!</li>
                    <li>Be aware of carrier habits. All carriers are not created equal and some are harder on re-classes and inspections than others. Know the limitations of the carriers you’ll be using.</li>
                    <li>BE HONEST. Resist the urge to cheat on your freight class to fool the freight shipping companies. In the long run (like Vegas) the house always wins and you’ll end up paying penalties for constant re-classes.</li>
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
