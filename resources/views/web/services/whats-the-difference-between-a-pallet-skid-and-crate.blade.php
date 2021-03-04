@extends('web.app.layout')
@section('title', 'Shipzzy')
@section('content')
<!-- Main -->
<main class="main" role="main">

    <!-- Intro -->
    <div class="intro" style="background:url({{base_url('web/images/about-media.jpg')}}) no-repeat 0 0; height: 380px; min-height: 380px;">
        <div class="wrap">
            <div class="textwidget">
                <div class="txt-about">What's the Difference Between a Pallet, Skid and Crate ?</div>
                <a href="#" class="get-free-quotes-btn">Get Free Quotes</a>
            </div>
        </div>
    </div>
    <!-- //Intro -->



    <div class="wrap">
        <div class="row">
            <!--- Content -->
            <div class="content three-fourth textongrey mrg-top-40">
                <h2>What's the Difference Between a Pallet, Skid and Crate ?</h2>
                <p>Preparing your packages for shipping is an essential part of ensuring the safe and timely delivery of your shipment. When it comes to packaging a shipment, one of the key aspects to keep in mind is that you use the right materials.</p>
                <p>What are you shipping? Do these products need to be extensively secured? How important is the mobility of your shipment? To answer all of these questions, today, we’ll be discussing the differences between skids, pallets and crates, and which one is right for you.</p>
                <h2>Which Option Is Right for You ?</h2>
                <p>Deciding between if you should use a pallet, skid or crate, depends on the type of product you are shipping and what you’re looking for while transporting freight. If you want the cheapest and most mobile option then the skid is for you.</p>
                
                <h2>What is a Pallet?</h2>
                <p>The pallet is the most common and most utilized way of shipping and storing freight. Typically the dimensions of a pallet are 48” X  40” and they can carry upto 1000 kg of any given product. The major difference between a pallet and a skid is that a pallet has a second flat bottom deck. This makes the pallet easier to move by forklift however, it makes the pallet harder to drag in comparison to skids.</p>
                
                 <h2>What is a Skid?</h2>
                <p>The skid is the original pallet.  The terms skid and pallet are often used interchangeably though they are not the same. A skid unlike a pallet has no bottom deck. The absence of the bottom deck makes the skid a cheaper version of the pallet and also makes it easier to drag (due to less friction).</p>
                
                 <h2>What is a Crate?</h2>
                <p>The shipping crate is very different from a pallet or skid. The crate is basically a box that has four walls. The crate is used especially for holding supplies, products, or anything else that needs to be more extensively secured and protected.  These crates hold a large volume and are very stable, however they are also bulky and harder to transport.</p>
                


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
