@extends('web.app.layout')
@section('title', 'Shipzzy')
@section('content')

<!-- Main -->
<main class="main" role="main">

    <!-- Intro -->
    <div class="intro" style="background:url({{base_url('web/images/about-media.jpg')}}) no-repeat 0 0; height: 571px; min-height: 571px;">
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


    <div class="container">

        <!-- Services -->
        <div class="services boxed white" id="services">
            <!-- Item -->
            <article class="one-third wow fadeIn">
                <figure class="featured-image">
                    <img src="{{base_url('web/images/img.jpg')}}" alt="" />
                    <div class="overlay">
                        <a href="services.html" class="expand">+</a>
                    </div>
                </figure>
                <div class="details">
                    <h4><a href="services.html">Full truck load</a></h4>
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
                        <a href="services.html" class="expand">+</a>
                    </div>
                </figure>
                <div class="details">
                    <h4><a href="services.html">less then truck load</a></h4>
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
                        <a href="services.html" class="expand">+</a>
                    </div>
                </figure>
                <div class="details">
                    <h4><a href="services.html">auto transport</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <a class="more" title="Read more" href="#">Read more</a>
                </div>
            </article>
            <!-- //Item -->

        </div>
    </div>
    <!-- //Services -->


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
