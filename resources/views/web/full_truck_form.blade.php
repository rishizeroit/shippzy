@extends('web.app.layout')
@section('title', 'Shipzzy')
	<!--<link rel="stylesheet" href="{{base_url('web/css/styleform.css')}}" />-->
@section('content')


<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


	<!-- Main -->
	<div class="shipment-instant-quotes-widget" style="padding-top:130px ">

		<div class="wrap">

				<form>
					
					<div class="row">
						<div class="tell-quot-txt">Tell us about your shipment to see <span>instant quotes</span></div>
						<div class="one-half">
							<div class="form-group">
								<label class="dep-heading">Departure date and time</label>
								<input type="date" class="value-data">
								<div class="valid-test">Requested date is subject to carrier acceptance and availability.</div>
								<div class="caution-line"><i class="fas fa-exclamation-triangle"></i> Caution: Carriers may not be able to accommodate same-day pickup requests.</div>
							</div>
						</div>
						<!--end:one-half -->
					</div>
					<!--end:row -->


					<div class="row padding-20">

						<div class="one-half">

							<div class="form-group">

								<div class="input-t">
									<label for="dep-date" class="dep-heading">Pickup city or postal code</label>
									<input type="text" class="value-data">
									<div class="pickup-lt"><i class="fas fa-times-circle"></i> Pickup location is required.</div>
								</div>
								<!--end:input-t -->

								<div class="checkbox overlay-row">
									<label>
										<input name="locationType" type="checkbox" id="pickupservices-id" onclick="pickupservicesfun()">
										<div class="like-off">I'd like to drop off my items at a carrier terminal</div>
										<div class="text-muted">Save money and skip pickup services</div>
									</label>
								</div>
								<!--end:overlay-row -->

								<div class="accessorial-padding" id="pickupservices-pad" style="display:block">

										<div class="pickup-heading">Pickup services</div>

										<div class="pickup-select">
											<input name="residential" type="checkbox" value="false"> <span>Residential location pickup </span>
											<i class="fa fa-question-circle" aria-hidden="true"></i>
										</div>
										<!-- end:pickup-select -->

										<div class="pickup-select">
											<input name="residential" type="checkbox" value="false"> <span>Residential location pickup </span>
											<i class="fa fa-question-circle" aria-hidden="true"></i>
										</div>
										<!-- end:pickup-select -->
								</div>
								<!--end:overlay-row -->

							</div>
							<!--end:form-group -->

						</div>
						<!--end:one-half -->


						<div class="one-half">

							<div class="form-group">

								<div class="input-t">
									<label class="dep-heading">Delivery city or postal code</label>
									<input type="text" class="value-data">
									<div class="pickup-lt"><i class="fas fa-times-circle"></i> 	Delivery location is required.</div>
								</div>
								<!--end:input-t -->

								<div class="checkbox overlay-row">
									<label>
										<input name="locationType" type="checkbox" id="delivery-id" onclick="deliveryfun()">
										<div class="like-off">I'd like to pick up my items from a carrier terminal</div>
										<div class="text-muted">Save money and skip delivery services</div>
									</label>
								</div>
								<!--end:overlay-row -->

								<div class="accessorial-padding" id="delivery-pad" style="display:block">

										<div class="pickup-heading">Delivery services</div>

										<div class="pickup-select">
											<input name="residential" type="checkbox" value="false"> <span>Residential location delivery</span>
											<i class="fa fa-question-circle" aria-hidden="true"></i>
										</div>
										<!-- end:pickup-select -->

										<div class="pickup-select">
											<input name="residential" type="checkbox" value="false"> <span>Lift gate delivery</span>
											<i class="fa fa-question-circle" aria-hidden="true"></i>
										</div>
										<!-- end:pickup-select -->
								</div>
								<!--end:overlay-row -->

							</div>
							<!--end:form-group -->

						</div>
						<!--end:one-half -->

					</div>
					<!--end:row -->




				<div class="row clearfix">

					<div class="hr-line"></div>

					<div class="one-half">
						<div class="txt-heading-15-bold">Does this shipment contain hazardous items?</div>
						<div class="items-require-line txt-heading-15-normal" style="display: none"><i class="red-alert fas fa-times-circle"></i>	Hazardous items require special care. Please  <a herf="#">Contact us</a> for assistance.</div>
					</div>
					<!--end:one-half -->

					<div class="one-half">
						<div id="isRestrictedGroup" class="stv-radio-buttons-wrapper">
							<input id="is-restricted-button" type="radio" name="hazardousitems" class="stv-radio-button">
							<label for="not-restricted-button" class="lbl-stv-radio-button">No</label>
							<input id="not-restricted-button" type="radio" name="hazardousitems"  class="stv-radio-button" checked="checked">
							<label for="is-restricted-button" class="lbl-stv-radio-button" >Yes</label>
						</div>
						<!--end:isRestrictedGroup -->
					</div>
					<!--end:one-half -->

				</div>
				<!--end:row -->






				<div class="row clearfix">

					<div class="one-half bottom-no-mrg">
						<div class="txt-heading-15-bold">Is this shipment temperature sensitive?</div>
					</div>
					<!--end:one-half -->

					<div class="one-half bottom-no-mrg">
						<div id="temperatureGroup" class="stv-radio-buttons-wrapper">
							<input id="is-temperatureitems-button" type="radio" name="temperatureitems" class="stv-radio-button">
							<label for="not-temperatureitems-button" class="lbl-stv-radio-button">No</label>
							<input id="not-temperatureitems-button" type="radio" name="temperatureitems"  class="stv-radio-button" checked="checked">
							<label for="is-temperatureitems-button" class="lbl-stv-radio-button" >Yes</label>
						</div>
						<!--end:isRestrictedGroup -->
					</div>
					<!--end:one-half -->

					<div class="temperature-onoff" style="display: none">

						<div class="one-half bottom-no-mrg">
							<label class="dep-heading">Minimum temperature</label>
							<input type="text" class="value-data">
							<div class="pickup-lt"><i class="fas fa-times-circle"></i> Please enter a number.</div>
						</div>
						<!--end:one-half -->

						<div class="one-half  bottom-no-mrg">
							<label class="dep-heading">Maximum temperature</label>
							<input type="text" class="value-data">
							<div class="pickup-lt"><i class="fas fa-times-circle"></i> Please enter a number.</div>
						</div>
						<!--end:one-half -->
					</div>

					<div class="full-width">
						<div class="light-txt-12">View restricted items list</div>
						<div class="light-txt-12">Learn more about item packaging</div>
					</div>
					<!--end:one-half -->

				</div>
				<!--end:row -->


		<div class="set-add-remove-widget">

				<div class="row clearfix">

						<div class="hr-line"></div>

						<div class="one-half">

							<div class="form-group">
								<div class="input-t">
									<label class="dep-heading">Item description</label>
									<input type="text" class="value-data" value="554678">
									<div class="pickup-lt">e.g. "widgets" not "pallet of widgets"</div>
								</div>
								<!--end:input-t -->
							</div>

						</div>
						<!--end:one-half -->

						<div class="one-half">

							<div class="form-group">
								<div class="input-t">
									<label class="dep-heading">Condition</label>

									<div id="conditionGroup" class="stv-radio-buttons-wrapper">
										<input id="is-condition-button" type="radio" name="condition" class="stv-radio-button">
										<label for="not-condition-button" class="lbl-stv-radio-button">New</label>
										<input id="not-condition-button" type="radio" name="condition" class="stv-radio-button" checked="checked">
										<label for="is-condition-button" class="lbl-stv-radio-button" >Used</label>
									</div>
									<!--end:isRestrictedGroup -->
									
								</div>
								<!--end:input-t -->
							</div>
						</div>
						<!--end:one-half -->
				</div>
				<!--end:row -->


				<div class="row">

						<div class="one-fourth bottom-no-mrg">

							<div class="form-group">
								<div class="input-t">
									<label class="dep-heading">Packaging</label>
									<select class="form-select" name="items[0].packageType">
										<option value="Pallet (48&quot;x40&quot;)">Pallet (48"x40")</option>
										<option value="Pallet (48&quot;x48&quot;)">Pallet (48"x48")</option>
									</select>
								</div>
								<!--end:input-t -->								
							</div>

						</div>
						<!--end:one-fourth -->

						<div class="one-fourth bottom-no-mrg">

							<div class="input-t">
								<label class="dep-heading">Dimensions (LxWxH)</label>
								<div class="form-4value">
									<input type="text" class="Dimensions-input" value="L" >
									<input type="text" class="Dimensions-input" value="W">
									<input type="text" class="Dimensions-input" value="H">
									<input type="text" class="Dimensions-input disabled-input" value="in." readonly disabled="disabled" >
								</div>								
							</div>
							<!--end:input-t -->	

						</div>
						<!--end:one-fourth -->


						<div class="one-fourth bottom-no-mrg">
							<div class="input-t">
								<label class="dep-heading">Weight of 1 pallet</label>
								<div class="form-2section clearfix">
									<input type="text" id="dep-Weight" class="value-data" value="5">
									<input type="text" class="Weight-input disabled-input" value="ibs" readonly disabled="disabled" >
								</div>								
							</div>
							<!--end:input-t -->	
						</div>
						<!--end:one-fourth -->

						<div class="one-fourth bottom-no-mrg">
							<div class="input-t">
								<label class="dep-heading">Quantity of pallets</label>
								<input type="text" id="dep-Quantity" class="value-data" value="52">
								<div class="pickup-lt">Total item weight: 260 pounds</div>
							</div>
							<!--end:input-t -->	
						</div>
						<!--end:one-fourth -->

					</div>
					<!--end:row-->





					<div class="row">

						<div class="one-fourth">
							<div class="input-t">
								<label class="dep-heading">Freight Class</label>
								<select class="form-select" name="items[0].packageType">
									<option value="We'll calculate for you">We'll calculate for you</option>
									<option value="350">350</option>
								</select>
								<div class="pickup-lt"><i class="fas fa-times-circle"></i> Width is required.</div>
							</div>
						</div>

					</div>
					<!--end:row-->

		</div>
		<!--end:set-add-remove-widget-->


		<div class="add-item-widget">
			<div class="hr-line"></div>
			<div class="row">
				<div class="media-data">
					
					<div class="chooseing-item">
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
						<input type="file" name="">
					</div>
					<div class="add-an">Add another item</div>
					<a href="#" class="get-quotes-link">Get quotes</a>
				</div>
			</div>
			<!--end:row --->
		</div>
		<!--end:add-item-widget --->


				</form>
		</div>
	</div>	
	<!-- //Main -->





<!-- form javascript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

function pickupservicesfun() {
	  var checkBox = document.getElementById("pickupservices-id");
	  var text = document.getElementById("pickupservices-pad");
	  if (checkBox.checked == true){
	    text.style.display = "none";
	  } else {
	     text.style.display = "block";
	  }
}
function deliveryfun() {
	  var checkBox = document.getElementById("delivery-id");
	  var text = document.getElementById("delivery-pad");
	  if (checkBox.checked == true){
	    text.style.display = "none";
	  } else {
	     text.style.display = "block";
	  }
}


$(function() {
   $("#isRestrictedGroup input[name='hazardousitems']").click(function() {
     if ($("#is-restricted-button").is(":checked")) {
       $(".items-require-line").show();
     } else {
       $(".items-require-line").hide();
     }
   });
 });


$(function() {
   $("#temperatureGroup input[name='temperatureitems']").click(function() {
     if ($("#is-temperatureitems-button").is(":checked")) {
       $(".temperature-onoff").show();
     } else {
       $(".temperature-onoff").hide();
     }
   });
 });



</script>

<!-- end:form javascript -->








	@endsection

